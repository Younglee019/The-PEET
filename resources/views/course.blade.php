@extends('layout.master')
@section('main-content')
    <!-- code for hero section -->
    <div class="main-bg-image">
        <section class="about-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1>{{ __('course.head_tilte') }}</h1>
                        <h3><i class="fa-solid fa-house"></i> <a href="{{ url('/') }}">{{ __('course.course_home') }}</a>
                            / <a href="{{ url('/our-course') }}">{{ __('course.course_our') }}</a></h3>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section class="course-section">
        <div class="container container-free-courses">
            <div class="top-row center">
                <h1>{{ __('course.free_courses_heading') }}</h1>
                <p>{{ __('course.free_courses_intro') }}</p>
            </div>
            <div class="row d-flex">
                <div class="col-1">
                    <img src="{{ asset('assets/images/lecture-1.png') }}" alt="" class="img-fluid main-img">
                    <div class="icons-stars d-flex align-center">
                        <i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i
                            class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i
                            class="fa-regular fa-star"></i>
                    </div>
                    <h2>{{ __('course.course1_title') }}</h2>
                    <div class="powered-by d-flex align-center">
                        <img src="{{ asset('assets/images/logo.webp') }}" alt="" class="img-fluid">
                        <p>{{ __('course.course1_author') }}</p>
                    </div>
                    <div class="user-view d-flex align-center">
                        <i class="fa-regular fa-user"></i>
                        <p>{{ __('course.course1_users') }}</p>
                    </div>
                    <a href="{{ asset('assets/lectures/lecture-1.html') }}"
                        class="btn">{{ __('course.start_learning') }} <i class="fa-solid fa-chevron-right"></i></a>
                </div>
                <div class="col-1">
                    <img src="{{ asset('assets/images/lecture-2.png') }}" alt="" class="img-fluid main-img">
                    <div class="icons-stars d-flex align-center">
                        <i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i
                            class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i
                            class="fa-regular fa-star"></i>
                    </div>
                    <h2>{{ __('course.course2_title') }}</h2>
                    <div class="powered-by d-flex align-center">
                        <img src="{{ asset('assets/images/logo.webp') }}" alt="" class="img-fluid">
                        <p>{{ __('course.course2_author') }}</p>
                    </div>
                    <div class="user-view d-flex align-center">
                        <i class="fa-regular fa-user"></i>
                        <p>{{ __('course.course2_users') }}</p>
                    </div>
                    <a href="assets/lectures/lecture-2.html" class="btn">{{ __('course.start_learning') }} <i
                            class="fa-solid fa-chevron-right"></i></a>
                </div>
                <div class="col-1">
                    <img src="{{ asset('assets/images/lecture-3.jpg') }}" alt="" class="img-fluid main-img">
                    <div class="icons-stars d-flex align-center">
                        <i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i
                            class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i
                            class="fa-regular fa-star"></i>
                    </div>
                    <h2>{{ __('course.course3_title') }}</h2>
                    <div class="powered-by d-flex align-center">
                        <img src="{{ asset('assets/images/logo.webp') }}" alt="" class="img-fluid">
                        <p>{{ __('course.course3_author') }}</p>
                    </div>
                    <div class="user-view d-flex align-center">
                        <i class="fa-regular fa-user"></i>
                        <p>{{ __('course.course3_users') }}</p>
                    </div>
                    <a href="signup.html" class="btn">{{ __('course.course_registration') }} <i
                            class="fa-solid fa-chevron-right"></i></a>
                </div>
                <div class="col-1">
                    <img src="{{ asset('assets/images/230088316_6008296675908043_3114557593675319042_n.jpg') }}"
                        alt="" class="img-fluid main-img">
                    <div class="icons-stars d-flex align-center">
                        <i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i
                            class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i
                            class="fa-regular fa-star"></i>
                    </div>
                    <h2>{{ __('course.course4_title') }}</h2>
                    <div class="powered-by d-flex align-center">
                        <img src="{{ asset('assets/images/logo.webp') }}" alt="" class="img-fluid">
                        <p>{{ __('course.course4_author') }}</p>
                    </div>
                    <div class="user-view d-flex align-center">
                        <i class="fa-regular fa-user"></i>
                        <p>{{ __('course.course4_users') }}</p>
                    </div>
                    <a href="signup.html" class="btn">{{ __('course.course_registration') }} <i
                            class="fa-solid fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
        <div class="container container-paid-courses">
            <div class="top-row center">
                <h1>{{ __('course.paid_courses_heading') }}</h1>
                <p>{{ __('course.paid_courses_intro') }}</p>
            </div>
            <div class="row d-flex">
                <div class="col-1">
                    <img src="{{ asset('assets/images/comingsoon.jpg') }}" alt="" class="img-fluid main-img">
                    <div class="icons-stars d-flex align-center">
                        <i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i
                            class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i
                            class="fa-regular fa-star"></i>
                    </div>
                    <h2>{{ __('course.coming_soon_course_title') }}</h2>
                    <div class="powered-by d-flex align-center">
                        <img src="{{ asset('assets/images/logo.webp') }}" alt="" class="img-fluid">
                        <p>{{ __('course.coming_soon_course_author') }}</p>
                    </div>
                    <div class="user-view d-flex align-center">
                        <i class="fa-regular fa-user"></i>
                        <p>{{ __('course.coming_soon_course_users') }}</p>
                    </div>
                    <a href="comingsoon.html" class="btn">{{ __('course.coming_soon') }} <i
                            class="fa-solid fa-chevron-right"></i></a>
                </div>
                <div class="col-1"></div>
                <div class="col-1"></div>
                <div class="col-1"></div>
            </div>
        </div>
    </section>
@endsection
