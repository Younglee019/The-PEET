@extends('admin.layouts.master')
@section('admin-main-content')
<div class="allContent">
    <div class="main-content">
        <div class="golive">
            <div class="heading">
                <h1>{{ __('admin_main_content.course_progression') }}</h1>
            </div>
            <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn"><i class="fa-solid fa-plus"></i></button>
                <div id="myDropdown" class="dropdown-content">
                    <a href="#">{{ __('admin_main_content.go_live') }} <i class="fa-solid fa-headset"></i></a>
                    <a href="#">{{ __('admin_main_content.upload_lecture') }} <i class="fa-solid fa-book"></i></a>
                    <a href="#">{{ __('admin_main_content.upload_test') }} <i class="fa-solid fa-network-wired"></i></a>
                </div>
            </div>
        </div>

        <div class="result">
            <div class="row d-flex">
                <div class="col-1 center box">
                    <i class="fa-solid fa-computer-mouse"></i>
                    <h2><h2>{{ format_visitor_count(\App\Models\VisitorCounter::first()->visitor) }}</h2>
                </h2>
                    <p>{{ __('admin_main_content.website_clicks') }}</p>
                </div>
                <div class="col-1 center box">
                    <i class="fa-solid fa-eye"></i>
                    <h2>0</h2>
                    <p>{{ __('admin_main_content.tutorial_views') }}</p>
                </div>
                <div class="col-1 center box">
                    <i class="fa-solid fa-users"></i>
                    <h2>{{ \App\Models\User::count() }}</h2>
                    <p>{{ __('admin_main_content.total_users') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
