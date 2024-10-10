@extends('dashboard.layouts.master')
@section('dashboard-main-content')
<div class="allContent">
    <div class="main-content">
        <h2 class="mainheading">{{ __('dashboardquestions.questions_and_answers') }}</h2>
        <div id="mainBox" class="box d-flex align-center justify-center">
            <i class="fa-solid fa-envelope-open"></i>
            <h1>{{ __('dashboardquestions.no_data_available') }}</h1>
        </div>
    </div>
</div>

@endsection
