@extends('admin.layouts.master')
@section('admin-main-content')
<div class="allContent">
    <div class="main-content">
        <h1>{{ __('admin_tutor.tutor') }}</h1>

        <aside id="statistics" class="sectioncontent mt-3">
            <div class="tab">
                <button class="tablinks" onclick="openCity(event, 'users')">{{ __('admin_tutor.edit_tutor') }}</button>
                <button class="tablinks" onclick="openCity(event, 'jobs')">{{ __('admin_tutor.delete_tutor') }}</button>
                <button class="tablinks" onclick="openCity(event, 'progress')">{{ __('admin_tutor.create_tutor') }}</button>
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
