@extends('admin.layouts.master')
@section('admin-main-content')
<div class="allContent">
    <div class="main-content">
        <h1>{{ __('admin_course.courses') }}</h1>

        <aside id="statistics" class="sectioncontent mt-3">
            <div class="tab">
                <button class="tablinks" onclick="openCity(event, 'users')">{{ __('admin_course.edit_courses') }}</button>
                <button class="tablinks" onclick="openCity(event, 'jobs')">{{ __('admin_course.delete_courses') }}</button>
                <button class="tablinks" onclick="openCity(event, 'progress')">{{ __('admin_course.create_course') }}</button>
            </div>

            <div id="users" class="tabcontent">

            </div>

            <div id="jobs" class="tabcontent">

            </div>

            <div id="progress" class="tabcontent">

            </div>
        </aside>

    </div>
</div>

@endsection
