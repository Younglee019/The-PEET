@extends('dashboard.layouts.master')
@section('dashboard-main-content')
<div class="allContent">
    <div class="main-content">
        <h2 class="mainheading">{{ __('dashboardcalendar.calendar') }}</h2>
        <section id="frame" class="calender">
            <div id="calendar">
                <header>
                    <pre class="arrow left">◀</pre>
                    <div class="header-display">
                        <p id="display"></p>
                    </div>
                    <pre class="arrow right">▶</pre>
                </header>

                <div class="week">
                    <div>Su</div>
                    <div>Mo</div>
                    <div>Tu</div>
                    <div>We</div>
                    <div>Th</div>
                    <div>Fr</div>
                    <div>Sa</div>
                </div>
                <div id="days"></div>
            </div>
        </section>

        <div id="mainBox" class="box d-flex align-center justify-center">
            <i class="fa-solid fa-envelope-open"></i>
            <h1>{{ __('dashboardcalendar.no_data_found') }}</h1>
        </div>
    </div>
</div>

@endsection
