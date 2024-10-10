<?php

namespace App\Http\Controllers\auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Validator;
use Exception;
use App\Jobs\sendemail;

class UserAuth extends Controller
{
    public function index()
    {
        return view('auth.sign-up');
    }


    public function login_index()
    {
        return view('auth.login-pg');
    }


    public function forget_index()
    {
        return view('auth.forget-pg');
    }


    public function forget_password(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $user = User::where('email', $request->email)->first(['id', 'f_name', 'email']);
        //dd($user['id'], $user['f_name'], $user['email']);

        $this->sendVerificationEmailForget($user);

        return back()->with('checkemail', 'Plase Check Your email.');
    }

    protected function sendVerificationEmailForget($user)
    {
        $mailData = [
            'name' => $user['f_name'],
            'email_verified_at' => route('forget.verify', ['id' => $user['id']])
        ];

        Mail::send('forgetpassword', ['mailData' => $mailData], function ($message) use ($user) {
            $message->to($user['email'])
                ->subject('Recover your password');
        });
    }

    public function forgetpassword($id)
    {
        return view('auth.forget-password', ['id' => $id]);
    }


    public function create_password(Request $request)
    {
        $validator = validator::make($request->all(), [
            'password' => 'required|same:c_password',
            'c_password' => 'required',
            'id' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $user = User::find($request->id);

        if ($user) {
            $user->password = Hash::make($request->password);
            $user->update();
        }
        return redirect('login-here')->with('Passwordrecover', 'updated');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
            'password' => 'required',
            'remember' => 'nullable'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember');

        if (Auth::attempt($credentials, $remember)) {
            return redirect('/user-dashboard')->with('loginSuccess', 'Login successful!');
        } else {
            return redirect()->back()
                ->withErrors(['email' => 'These credentials do not match our records.'])
                ->withInput();
        }
    }
    public function facebook_login()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function callbackfacebook()
    {
        try {

            $user = Socialite::driver('facebook')->user();
            dd($user);
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

    public function linkedin_login()
    {
        return Socialite::driver('linkedin-openid')->redirect();
    }

    public function callbacklinkedin()
    {
        try {

            $user = Socialite::driver('linkedin-openid')->user();
            $linkedinUser = User::where('email', $user->email)->first();
            if ($linkedinUser !== null) {

                Auth::login($linkedinUser);

                return redirect('/user-dashboard')->with('loginSuccess', 'Login successful!');
            } else {

                $newuser = new User();
                $newuser->u_name = $user['name'];
                $newuser->email = $user['email'];
                $newuser->social_avatar = $user->avatar ? $user->avatar : "default-avatar.jpg";
                $newuser->linkedin_id = $user['sub'];
                $newuser->f_name = $user['given_name'] ? $user['given_name'] : "Dummy";
                $newuser->password = Hash::make($user->name . "." . $user->id);
                $newuser->save();

                Auth::login($newuser);
                // Send a welcome email after successful registration
                $varifychech = $newuser->email_verified_at;
                if (is_null($varifychech)) {
                    $this->sendVerificationEmail($newuser);
                }

                return redirect('/user-dashboard')->with('loginSuccess', 'Login successful!');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }


    public function google_login()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callbackgoogle()
    {
        // Get the user from Google
        $googleUser = Socialite::driver('google')->user();

        // Extract user details
        $googleId = $googleUser->getId();
        $nickname = $googleUser->getNickname();
        $name = $googleUser->getName();
        $email = $googleUser->getEmail();
        $avatar = $googleUser->getAvatar();



        // Check if the user already exists in your database
        $existingUser = User::where('email', $email)->first();

        if ($existingUser == null) {
            // User doesn't exist, create a new user
            $newUser = new User();
            $newUser->f_name = $nickname ? $nickname : "Dummy";
            $newUser->social_avatar = $avatar ? $avatar : "default-avatar.jpg";
            $newUser->u_name = $name;
            $newUser->email = $email;
            $newUser->google_id = $googleId;
            $newUser->password = Hash::make($name);
            $newUser->save();



            if (is_null($newUser->email_verified_at)) {
                $this->sendVerificationEmail($newUser);
            }

            // Log in the newly created user
            Auth::login($newUser);
            return redirect('/user-dashboard')->with('loginSuccess', 'Login successful!');
        } else {

            if (!$existingUser->google_id) {
                $existingUser->google_id = $googleId;
                $existingUser->save();
            }

            // Log in the existing user
            Auth::login($existingUser);
            return redirect('/user-dashboard')->with('loginSuccess', 'Login successful!');
        }
    }

    public function sign_up(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'f_name' => 'required',
            's_name' => 'required',
            'u_name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:c_password',
            'c_password' => 'required',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'f_name.required' => 'The First name field is required.',
            's_name.required' => 'The Surname field is required.',
            'u_name.required' => 'The Username field is required.',
            'password.same' => 'The password and confirmation password must match.',
            'password.same' => 'The password and confirmation password must match.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Handling the avatar upload
        $avatarName = null;
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $avatarName = time() . '_' . $avatar->getClientOriginalName();
            $avatar->move(public_path('avatars'), $avatarName);
        }

        $user = new User();
        $user->f_name = $request->f_name;
        $user->s_name = $request->s_name;
        $user->u_name = $request->u_name;
        $user->user_avatar = $avatarName ? $avatarName : 'default-avatar.jpg';
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        if (is_null($user->email_verified_at)) {
            $this->sendVerificationEmail($user);
        }


        // Return a success response or redirect

        return redirect('login-here')->with('registersuccess', 'Signup successful!');
    }

    protected function sendVerificationEmail($user)
    {
        $mailData = [
            'name' => $user->f_name,
            'email_verified_at' => route('verification.verify', ['id' => $user->id])
        ];

        Mail::send('varifymail', ['mailData' => $mailData], function ($message) use ($user) {
            $message->to($user->email)
                ->subject('Verify Your Email Address');
        });
    }

    public function verify($id)
    {
        $user = User::find($id);

        if ($user && is_null($user->email_verified_at)) {
            $user->email_verified_at = now();
            $user->save();

            return redirect('/user-dashboard')->with('emailSuccess', 'Email varified successful!');
        }

        return redirect('login-here')->with('error', 'Invalid verification link or email already verified.');
    }

    public function logout()
    {
        if (Auth::check()) {
            Auth::logout();
            return redirect('/')->with('logoutSuccess', 'Logout Successfully....');
        } else {
            return redirect('/');
        }
    }
}
