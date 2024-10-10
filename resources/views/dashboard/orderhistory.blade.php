@extends('dashboard.layouts.master')
@section('dashboard-main-content')
    <div class="allContent">
        <div class="main-content">
            <h2 class="mainheading">{{ __('dashboardorder.order_history') }}</h2>
            <aside id="statistics" class="sectioncontent">
                <div class="d-flex align-center justify-between dateTabs">
                    <div class="tab">
                        <button class="tablinks" onclick="openCity(event, 'users')">{{ __('dashboardorder.today') }}</button>
                        <button class="tablinks"
                            onclick="openCity(event, 'jobs')">{{ __('dashboardorder.monthly') }}</button>
                        <button class="tablinks"
                            onclick="openCity(event, 'progress')">{{ __('dashboardorder.annual') }}</button>
                    </div>
                    <div class="inputDate">
                        <input type="datetime-local" name="" id="">
                    </div>
                </div>

                <div id="users" class="tabcontent mainBox">
                    <div class="box d-flex align-center justify-center">
                        <i class="fa-solid fa-envelope-open"></i>
                        <h1>{{ __('dashboardorder.no_data_available') }}</h1>
                    </div>
                </div>

                <div id="jobs" class="tabcontent mainBox">
                    <div class="box d-flex align-center justify-center">
                        <i class="fa-solid fa-envelope-open"></i>
                        <h1>{{ __('dashboardorder.no_data_available') }}</h1>
                    </div>
                </div>

                <div id="progress" class="tabcontent mainBox">
                    <div class="box d-flex align-center justify-center">
                        <i class="fa-solid fa-envelope-open"></i>
                        <h1>{{ __('dashboardorder.no_data_available') }}</h1>
                    </div>
                </div>
            </aside>
        </div>
    </div>
@endsection
