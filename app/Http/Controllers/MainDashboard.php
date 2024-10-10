<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class MainDashboard extends Controller
{
    public function course_index()
    {


        return view('course');
    }


    public function blog_index()
    {
        return view('blog');
    }

    public function about_index()
    {
        return view('about_us');
    }

    public function contact_index()
    {
        return view('contact_us');
    }

    public function team_index()
    {
        return view('our-team');
    }
}
