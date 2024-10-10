@extends('dashboard.layouts.master')
@section('dashboard-main-content')
<div class="allContent">
    <div class="main-content">
        <h2 class="mainheading">{{ __('dashboardquiz.my_quiz_attempts') }}</h2>
        <div id="mainBox" class="box d-flex align-center justify-center">
            <i class="fa-solid fa-envelope-open"></i>
            <h1>{{ __('dashboardquiz.no_data_available') }}</h1>
        </div>
    </div>
</div>

@endsection
