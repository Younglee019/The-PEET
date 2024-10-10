@extends('layout.master')
@section('main-content')
    <!-- CODE FOR HERO SECTION -->
    <section class="hero-section">
        <div class="container-hero">
            <div class="row">
                <div class="col-12">
                    <!-- Swiper -->
                    <div class="swiper mySwiperHero">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <h1>{{ __('home.swiper1') }} <br> {{ __('home.swiper1.1') }}</h1>
                                <div class="btn">
                                    <a href="course.html">{{ __('home.swiper2') }}</a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <h1>{{ __('home.swiper1') }} <br> {{ __('home.swiper1.1') }}</h1>
                                <div class="btn">
                                    <a href="course.html">{{ __('home.swiper2') }}</a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <h1>{{ __('home.swiper1') }} <br> {{ __('home.swiper1.1') }}</h1>
                                <div class="btn">
                                    <a href="course.html">{{ __('home.swiper2') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CODE FOR ABOUT US -->
    <section class="about-us">
        <div class="container">
            <div class="row d-flex">
                <div class="col-1">
                    <img loading="lazy" src="{{ asset('assets/images/about-bg.jpg') }}" alt="THE PEET" class="img-fluid">
                </div>
                <div class="col-1">
                    <h1>{{ __('home.experts') }} <br>
                        {{ __('home.institution') }}
                    </h1>
                    <h5>{{ __('home.h8+Years') }}</h5>
                    <p>{{ __('home.pourmission') }}
                    </p>
                    <p>
                        {{ __('home.pThrough') }}
                    </p>
                    <div class="btn">
                        <a href="about.html">{{ __('home.checkmore') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="course">
        <div class="main-heading container center">
            <h1>{{ __('home.main_heading') }}</h1>
            <div class="underline"></div>
            <p>{{ __('home.learn_from') }}</p>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="swiper mySwiperCourse">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="#" class="main-shadow">
                                <img src="{{ asset('assets/images/lecture-1.png') }}" alt="Course" class="img-fluid">
                                <h2>{{ __('home.course1_title') }}</h2>
                                <p>{{ __('home.course1_author') }}</p>
                                <a href="{{ asset('assets/lectures/lecture-1.html') }}"></a>
                                <div class="icons-stars d-flex align-center">
                                    <i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i
                                        class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i
                                        class="fa-regular fa-star"></i>
                                </div>
                            </a>
                            <a href="{{ asset('assets/lectures/lecture-1.html') }}"
                                class="register-btn">{{ __('home.start_learning') }} <i
                                    class="fa-solid fa-angles-right"></i></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="main-shadow">
                                <img src="{{ asset('assets/images/lecture-2.png') }}" alt="Course" class="img-fluid">
                                <h2>{{ __('home.course2_title') }}</h2>
                                <p>{{ __('home.course2_author') }}</p>
                                <a href="{{ asset('assets/lectures/lecture-2.html') }}"></a>
                                <div class="icons-stars d-flex align-center">
                                    <i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i
                                        class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i
                                        class="fa-regular fa-star"></i>
                                </div>
                            </a>
                            <a href="{{ asset('assets/lectures/lecture-2.html') }}"
                                class="register-btn">{{ __('home.start_learning') }} <i
                                    class="fa-solid fa-angles-right"></i></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="main-shadow">
                                <img src="{{ asset('assets/images/lecture-3.jpg') }}" alt="Course" class="img-fluid">
                                <h2>{{ __('home.course3_title') }}</h2>
                                <p>{{ __('home.course3_author') }}</p>
                                <a href="signup.html"></a>
                                <div class="icons-stars d-flex align-center">
                                    <i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i
                                        class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i
                                        class="fa-regular fa-star"></i>
                                </div>
                            </a>
                            <a href="signup.html" class="register-btn">{{ __('home.course_registration') }} <i
                                    class="fa-solid fa-angles-right"></i></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="main-shadow">
                                <img src="{{ asset('assets/images/230088316_6008296675908043_3114557593675319042_n.jpg') }}"
                                    alt="Course" class="img-fluid">
                                <h2>{{ __('home.course4_title') }}</h2>
                                <p>{{ __('home.course4_author') }}</p>
                                <a href="signup.html"></a>
                                <div class="icons-stars d-flex align-center">
                                    <i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i
                                        class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i
                                        class="fa-regular fa-star"></i>
                                </div>
                            </a>
                            <a href="signup.html" class="register-btn">{{ __('home.course_registration') }} <i
                                    class="fa-solid fa-angles-right"></i></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="main-shadow">
                                <img src="{{ asset('assets/images/comingsoon.jpg') }}" alt="Course" class="img-fluid">
                                <h2>{{ __('home.course5_title') }}</h2>
                                <p>{{ __('home.course5_author') }}</p>
                                <a href="signup.html"></a>
                                <div class="icons-stars d-flex align-center">
                                    <i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i
                                        class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i
                                        class="fa-regular fa-star"></i>
                                </div>
                            </a>
                            <a href="signup.html" class="register-btn">{{ __('home.course_registration') }} <i
                                    class="fa-solid fa-angles-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>



    <!-- OUR TEAM -->
    <section class="teacher">
        <div class="main-heading container center">
            <h1>{{ __('home.team_heading') }}</h1>
            <div class="underline"></div>
            <p>{{ __('home.team_intro') }}</p>
        </div>

        <div class="container-fluid">
            <div class="row d-flex align-center">
                <div class="col-1">
                    <img src="{{ asset('assets/images/team-member.png') }}" alt="Teachers" class="img-fluid">
                    <h3>{{ __('home.team_member1_name') }}</h3>
                    <p>{{ __('home.team_member1_title') }}</p>
                    <div class="icons">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-1">
                    <img src="{{ asset('assets/images/team-member.png') }}" alt="Teachers" class="img-fluid">
                    <h3>{{ __('home.team_member2_name') }}</h3>
                    <p>{{ __('home.team_member2_title') }}</p>
                    <div class="icons">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-1">
                    <img src="{{ asset('assets/images/team-member.png') }}" alt="Teachers" class="img-fluid">
                    <h3>{{ __('home.team_member3_name') }}</h3>
                    <p>{{ __('home.team_member3_title') }}</p>
                    <div class="icons">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-1">
                    <img src="{{ asset('assets/images/team-member.png') }}" alt="Teachers" class="img-fluid">
                    <h3>{{ __('home.team_member4_name') }}</h3>
                    <p>{{ __('home.team_member4_title') }}</p>
                    <div class="icons">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-12" style="margin-bottom: 50px;">
                    <div class="btn center">
                        <a href="team.html">{{ __('home.more_members') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Blog Post -->
    <section class="blog">
        <div class="main-heading container center">
            <h1>{{ __('home.blog_heading') }}</h1>
            <div class="underline"></div>
            <p>{{ __('home.blog_intro') }}</p>
        </div>
        <div class="container-fluid">
            <div class="row d-flex">
                <div class="col-1">
                    <img src="{{ asset('assets/images/single-blog-1.png') }}" alt="THE PEET" class="img-fluid">
                    <div class="content">
                        <h3>{{ __('home.article1_title') }}</h3>
                        <p>{{ __('home.article1_content') }}</p>
                        <div class="time-date d-flex align-center"><i class="fa-solid fa-calendar-days"></i>
                            <p>{{ __('home.article1_date') }}</p>
                        </div>
                        <div class="btn">
                            <a href="{{ asset('assets/single-blog/blog-1.html') }}">{{ __('home.keep_on_going') }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-1">
                    <img src="{{ asset('assets/images/single-blog-2.png') }}" alt="THE PEET" class="img-fluid">
                    <div class="content">
                        <h3>{{ __('home.article2_title') }}</h3>
                        <p>{{ __('home.article2_content') }}</p>
                        <div class="time-date d-flex align-center"><i class="fa-solid fa-calendar-days"></i>
                            <p>{{ __('home.article2_date') }}</p>
                        </div>
                        <div class="btn">
                            <a href="assets/single-blog/blog-2.html">{{ __('home.keep_on_going') }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-1">
                    <img src="{{ asset('assets/images/single-blog-3.jpg') }}" alt="THE PEET" class="img-fluid">
                    <div class="content">
                        <h3>{{ __('home.article3_title') }}</h3>
                        <p>{{ __('home.article3_content') }}</p>
                        <div class="time-date d-flex align-center"><i class="fa-solid fa-calendar-days"></i>
                            <p>{{ __('home.article3_date') }}</p>
                        </div>
                        <div class="btn">
                            <a href="{{ asset('assets/single-blog/blog-3.html') }}">{{ __('home.keep_on_going') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CODE FOR REVIEW SECTION -->
    <section class="reviews">
        <div class="main-heading container center">
            <h1>{{ __('home.reviews_heading') }}</h1>
            <div class="underline"></div>
            <p>{{ __('home.reviews_intro') }}</p>
        </div>
        <div class="container-fluid">
            <div class="row d-flex">
                <div class="col-1">
                    <p class="color-bg">{{ __('home.review1_text') }} <i class="fa-solid fa-quote-right"></i></p>
                    <div class="box d-flex align-center justify-center">
                        <div class="profile">
                            <img src="{{ asset('assets/images/team-1.jpg') }}" alt="THE PEET" class="img-fluid">
                        </div>
                        <div class="profile-detail">
                            <h4>{{ __('home.review1_name') }}</h4>
                            <p>{{ __('home.review1_role') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-1">
                    <p class="color-bg">{{ __('home.review2_text') }} <i class="fa-solid fa-quote-right"></i></p>
                    <div class="box d-flex align-center justify-center">
                        <div class="profile">
                            <img src="{{ asset('assets/images/team-2.jpg') }}" alt="THE PEET" class="img-fluid">
                        </div>
                        <div class="profile-detail">
                            <h4>{{ __('home.review2_name') }}</h4>
                            <p>{{ __('home.review2_role') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-1">
                    <p class="color-bg">{{ __('home.review3_text') }} <i class="fa-solid fa-quote-right"></i></p>
                    <div class="box d-flex align-center justify-center">
                        <div class="profile">
                            <img src="{{ asset('assets/images/team-3.jpg') }}" alt="THE PEET" class="img-fluid">
                        </div>
                        <div class="profile-detail">
                            <h4>{{ __('home.review3_name') }}</h4>
                            <p>{{ __('home.review3_role') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <script>
        @if (Session::has('logoutSuccess'))
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "Logout Successfull...",
                showConfirmButton: false,
                timer: 3000
            });
        @endif
    </script>
@endsection
