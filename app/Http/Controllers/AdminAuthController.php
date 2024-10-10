<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function index()
    {
        return view('admin.admin_dashboard');
    }

    public function user_admin_index()
    {
        return view('admin.users_admin');
    }


    public function course_admin_index()
    {
        return view('admin.admin_course');
    }

    public function tutor_admin_index()
    {
        return view('admin.admin_tutor');
    }


    public function login_index()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
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

        if (Auth::guard('admin')->attempt($credentials)) {

            return redirect('/admin-dashboard')->with('success', 'Login successful!');
        } else {

            echo "not";
            return back()->witherror('Login details are not valid');
        }
    }

    public function adminlogout()
    {

        Auth::guard('admin')->logout();
        return redirect('/admin-login')->with('success', 'Logout successful!');
    }
}
