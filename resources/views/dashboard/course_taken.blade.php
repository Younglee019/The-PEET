@extends('dashboard.layouts.master')
@section('dashboard-main-content')
<div class="allContent">
    <div class="main-content">
        <h2 class="mainheading">{{ __('dashboardcourses.courses_taken') }}</h2>
        <aside id="statistics" class="sectioncontent">
            <div class="tab">
                <button class="tablinks" onclick="openCity(event, 'users')">{{ __('dashboardcourses.courses_taken') }}</button>
                <button class="tablinks" onclick="openCity(event, 'jobs')">{{ __('dashboardcourses.active_courses') }}</button>
                <button class="tablinks" onclick="openCity(event, 'progress')">{{ __('dashboardcourses.courses_completed') }}</button>
            </div>

            <div id="users" class="tabcontent mainBox">
                <div class="box d-flex align-center justify-center">
                    <i class="fa-solid fa-envelope-open"></i>
                    <h1>{{ __('dashboardcourses.no_data_available') }}</h1>
                </div>
            </div>

            <div id="jobs" class="tabcontent mainBox">
                <div class="box d-flex align-center justify-center">
                    <i class="fa-solid fa-ring"></i>
                    <h1>{{ __('dashboardcourses.no_data_available') }}</h1>
                </div>
            </div>

            <div id="progress" class="tabcontent mainBox">
                <div class="box d-flex align-center justify-center">
                    <i class="fa-solid fa-ban"></i>
                    <h1>{{ __('dashboardcourses.no_data_available') }}</h1>
                </div>
            </div>
        </aside>
    </div>
</div>

@endsection
