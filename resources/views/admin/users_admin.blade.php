@extends('admin.layouts.master')
@section('admin-main-content')
    <div class="allContent">
        <div class="main-content">
            <h1>{{ __('admin_users.users') }}</h1>

            <aside id="statistics" class="sectioncontent mt-3">
                <div class="tab">
                    <button class="tablinks" onclick="openCity(event, 'users')">{{ __('admin_users.edit_user') }}</button>
                    <button class="tablinks" onclick="openCity(event, 'jobs')">{{ __('admin_users.delete_users') }}</button>
                    <button class="tablinks"
                        onclick="openCity(event, 'progress')">{{ __('admin_users.create_user') }}</button>
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
