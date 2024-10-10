<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class UserDashboard extends Controller
{

    public function index()
    {
        return view('dashboard.dashboard');
    }
    public function course_index()
    {
        return view('dashboard.course_taken');
    }

    public function notice_index()
    {
        return view('dashboard.noticestudent');
    }

    public function quize_index()
    {
        return view('dashboard.quizStudentdashboard');
    }


    public function faqs_index()
    {
        return view('dashboard.faqsStudentdashboard');
    }

    public function order_index()
    {
        return view('dashboard.orderhistory');
    }

    public function calender_index()
    {
        return view('dashboard.studentcalender');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function updateAvatar(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $user = Auth::user();

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoName = time() . '_' . $photo->getClientOriginalName();

            // Check if the user already has an avatar and delete it
            if ($user->user_avatar && file_exists(public_path('avatars/' . $user->user_avatar))) {
                unlink(public_path('avatars/' . $user->user_avatar)); // Delete the old avatar
            }

            // Move the new file to the 'public/avatars' directory
            $photo->move(public_path('avatars'), $photoName);

            // Update user's avatar in the database
            $user->user_avatar = $photoName;
            $user->save();

            return redirect()->back()->with('success', 'Picture updated successfully!');
        }

        return redirect()->back()->with('error', 'Failed to upload avatar.');
    }



    public function updateFirstName(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'f_name' => 'required|string|max:255',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $user = Auth::user();
        $user->f_name = $request->input('f_name');
        $user->save();

        return redirect()->back()->with('success', 'First name updated successfully!');
    }

    public function updateSurname(Request $request)
    {
        $validator = Validator::make($request->all(), [
            's_name' => 'required|string|max:255',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $user = Auth::user();
        $user->s_name = $request->input('s_name');
        $user->save();

        return redirect()->back()->with('success', 'Surname updated successfully!');
    }

    public function updateUsername(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'u_name' => 'required|string|max:255',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $user = Auth::user();
        $user->u_name = $request->input('u_name');
        $user->save();

        return redirect()->back()->with('success', 'Username updated successfully!');
    }

    public function updateEmail(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email,' . Auth::id(),
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $user = Auth::user();
        $user->email = $request->input('email');
        $user->save();

        return redirect()->back()->with('success', 'Email updated successfully!');
    }

    public function updatePhone(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'phone' => 'nullable|numeric',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $user = Auth::user();
        $user->phone = $request->input('phone');
        $user->save();

        return redirect()->back()->with('success', 'Phone number updated successfully!');
    }

    public function updateSkill(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'skill' => 'nullable|string|max:255',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $user = Auth::user();
        $user->skill = $request->input('skill');
        $user->save();

        return redirect()->back()->with('success', 'Skill updated successfully!');
    }

    public function updateBio(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'bio' => 'nullable|string|max:1000',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $user = Auth::user();
        $user->bio = $request->input('bio');
        $user->save();

        return redirect()->back()->with('success', 'Biography updated successfully!');
    }
}
