@extends('layout.master')
@section('main-content')
    <section class="about-peet">
        <div class="container">
            <div class="row">
                <h3>{{ __('about_peet.history_title') }}</h3>
                <p>{{ __('about_peet.history_content') }}</p>
            </div>
            <div class="row">
                <h3>{{ __('about_peet.vision_title') }}</h3>
                <p>{{ __('about_peet.vision_content') }}</p>
            </div>
            <div class="row">
                <h3>{{ __('about_peet.mission_title') }}</h3>
                <p>{{ __('about_peet.mission_content') }}</p>
            </div>
        </div>
        <div class="container">
            <div class="main-heading center">
                <h1>{{ __('about_peet.impact_title') }}</h1>
                <div class="underline"></div>
                <p><em>{{ __('about_peet.impact_subtitle') }}</em></p>
            </div>
            <div class="row">
                <div class="sub-row d-flex center">
                    <div class="col-1">
                        <i class="fa-solid fa-martini-glass-citrus"></i>
                        <h1>{{ __('about_peet.pillar1_title') }}</h1>
                        <p>{{ __('about_peet.pillar1_content') }}</p>
                    </div>
                    <div class="col-1">
                        <i class="fa-solid fa-network-wired"></i>
                        <h1>{{ __('about_peet.pillar2_title') }}</h1>
                        <p>{{ __('about_peet.pillar2_content') }}</p>
                    </div>
                    <div class="col-1">
                        <i class="fa-solid fa-laptop-code"></i>
                        <h1>{{ __('about_peet.pillar3_title') }}</h1>
                        <p>{{ __('about_peet.pillar3_content') }}</p>
                    </div>
                    <div class="col-1">
                        <i class="fa-solid fa-people-carry-box"></i>
                        <h1>{{ __('about_peet.pillar4_title') }}</h1>
                        <p>{{ __('about_peet.pillar4_content') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
