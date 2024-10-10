@extends('layout.master')
@section('main-content')
    <!-- code for hero section -->
    <div class="main-bg-image">
        <section class="about-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1>{{ __('team.hero_title') }}</h1>
                        <h3><i class="fa-solid fa-house"></i> <a
                                href="{{ url('/') }}">{{ __('team.hero_home_link') }}</a> / <a
                                href="{{ url('/our-team') }}">{{ __('team.hero_title') }}</a>
                        </h3>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section class="team-page">
        <div class="container">
            <div class="row d-flex">
                <div class="col-1">
                    <div class="box"></div>
                    <div class="box-content">
                        <img src="{{ asset('assets/images/team-1.jpg') }}" alt="" class="img-fluid">
                        <h1>Alex Lorem</h1>
                        <h3>{{ __('team.role_senior_teacher') }}</h3>
                        <p>{{ __('team.member_description') }}</p>
                        <div class="icons">
                            <a href="#">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-1">
                    <div class="box"></div>
                    <div class="box-content">
                        <img src="{{ asset('assets/images/team-2.jpg') }}" alt="" class="img-fluid">
                        <h1>Alex Lorem</h1>
                        <h3>{{ __('team.role_senior_teacher') }}</h3>
                        <p>{{ __('team.member_description') }}</p>
                        <div class="icons">
                            <a href="#">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-1">
                    <div class="box"></div>
                    <div class="box-content">
                        <img src="{{ asset('assets/images/team-3.jpg') }}" alt="" class="img-fluid">
                        <h1>Alex Lorem</h1>
                        <h3>{{ __('team.role_senior_teacher') }}</h3>
                        <p>{{ __('team.member_description') }}</p>
                        <div class="icons">
                            <a href="#">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-1">
                    <div class="box"></div>
                    <div class="box-content">
                        <img src="{{ asset('assets/images/team-member.png') }}" alt="" class="img-fluid">
                        <h1>Alex Lorem</h1>
                        <h3>{{ __('team.role_senior_teacher') }}</h3>
                        <p>{{ __('team.member_description') }}</p>
                        <div class="icons">
                            <a href="#">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-1">
                    <div class="box"></div>
                    <div class="box-content">
                        <img src="{{ asset('assets/images/team-1.jpg') }}" alt="" class="img-fluid">
                        <h1>Alex Lorem</h1>
                        <h3>{{ __('team.role_senior_teacher') }}</h3>
                        <p>{{ __('team.member_description') }}</p>
                        <div class="icons">
                            <a href="#">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-1">
                    <div class="box"></div>
                    <div class="box-content">
                        <img src="{{ asset('assets/images/team-2.jpg') }}" alt="" class="img-fluid">
                        <h1>Alex Lorem</h1>
                        <h3>{{ __('team.role_senior_teacher') }}</h3>
                        <p>{{ __('team.member_description') }}</p>
                        <div class="icons">
                            <a href="#">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-1">
                    <div class="box"></div>
                    <div class="box-content">
                        <img src="{{ asset('assets/images/team-3.jpg') }}" alt="" class="img-fluid">
                        <h1>Alex Lorem</h1>
                        <h3>{{ __('team.role_senior_teacher') }}</h3>
                        <p>{{ __('team.member_description') }}</p>
                        <div class="icons">
                            <a href="#">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-1">
                    <div class="box"></div>
                    <div class="box-content">
                        <img src="{{ asset('assets/images/team-member.png') }}" alt="" class="img-fluid">
                        <h1>Alex Lorem</h1>
                        <h3>{{ __('team.role_senior_teacher') }}</h3>
                        <p>{{ __('team.member_description') }}</p>
                        <div class="icons">
                            <a href="#">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-1">
                    <div class="box"></div>
                    <div class="box-content">
                        <img src="{{ asset('assets/images/team-1.jpg') }}" alt="" class="img-fluid">
                        <h1>Alex Lorem</h1>
                        <h3>{{ __('team.role_senior_teacher') }}</h3>
                        <p>{{ __('team.member_description') }}</p>
                        <div class="icons">
                            <a href="#">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-1">
                    <div class="box"></div>
                    <div class="box-content">
                        <img src="{{ asset('assets/images/team-2.jpg') }}" alt="" class="img-fluid">
                        <h1>Alex Lorem</h1>
                        <h3>{{ __('team.role_senior_teacher') }}</h3>
                        <p>{{ __('team.member_description') }}</p>
                        <div class="icons">
                            <a href="#">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-1">
                    <div class="box"></div>
                    <div class="box-content">
                        <img src="{{ asset('assets/images/team-3.jpg') }}" alt="" class="img-fluid">
                        <h1>Alex Lorem</h1>
                        <h3>{{ __('team.role_senior_teacher') }}</h3>
                        <p>{{ __('team.member_description') }}</p>
                        <div class="icons">
                            <a href="#">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-1">
                    <div class="box"></div>
                    <div class="box-content">
                        <img src="{{ asset('assets/images/team-member.png') }}" alt="" class="img-fluid">
                        <h1>Alex Lorem</h1>
                        <h3>{{ __('team.role_senior_teacher') }}</h3>
                        <p>{{ __('team.member_description') }}</p>
                        <div class="icons">
                            <a href="#">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
