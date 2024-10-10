    <!-- CODE FOR HEADER STARTS HERE -->
    <div class="first-container container-fluid">
        <div class="row d-flex align-center justify-between">
            <div class="box d-flex align-center mobile">
                <div class="sub-box">
                    <a href="tel:+1(561)884-6069"><i class="fa-solid fa-phone"></i> +1(561)884-6069</a>
                </div>
                <div class="sub-box">
                    <a href="mailto:contact@thepeet.net"><i class="fa-regular fa-envelope"></i> contact@thepeet.net</a>
                </div>
            </div>
            <div class="box d-flex align-center">
                @if (Auth::check())
                    <div class="sub-box">

                        <a href="{{ url('user-dashboard') }}"><img src="{{ asset('avatars/' . Auth::user()->user_avatar) }}"
                                style="border-radius: 50%;" height="40px" width="40px"
                                alt="{{ Auth::user()->u_name }}"></a>
                    </div>
                @else
                    <div class="sub-box">
                        <a href="{{ url('/login-here') }}"><i class="fa-solid fa-right-to-bracket"></i> {{ __('header.login') }}</a>
                    </div>
                    <div class="sub-box">
                        <a href="{{ url('/signup') }}"><i class="fa-solid fa-user-plus"></i> {{ __('header.signup') }}</a>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <header>

        <div class="container-fluid">
            <div class="row d-flex align-center justify-between">
                <div class="coloum">
                    <div class="logo">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('assets/images/logo.webp') }}" alt="LOGO" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="coloum tab">
                    <ul class="d-flex align-center">
                        <li><a class="main-tag" href="{{ url('/') }}">{{ __('header.home') }}</a></li>
                        <li><a class="main-tag" href="{{ url('/our-course') }}">{{ __('header.ourcourse') }}</a></li>
                        <li><a class="main-tag" href="{{ url('/our-blog') }}">{{ __('header.blog') }}</a></li>
                        <div class="dropdown">
                            <button onclick="myFunction()" class="dropbtn">{{ __('header.whoarewe') }} <i
                                    class="fa-solid fa-angle-down"></i></button>
                            <div id="myDropdown" class="dropdown-content">
                                <a href="{{ url('/about-us') }}">{{ __('header.aboutus') }}</a>
                                <a href="{{ url('/our-team') }}">{{ __('header.team') }}</a>
                                <a href="{{ url('/contact-us') }}">{{ __('header.contact') }}</a>
                            </div>
                        </div>
                        @if (Auth::check())
                            <li><a class="main-tag" href="{{ url('user-dashboard') }}">{{ __('header.account') }}</a></li>
                        @else
                            <li><a class="main-tag" href="{{ url('login-here') }}">{{ __('header.login') }}</a></li>
                        @endif
                    </ul>
                </div>
                <div class="coloum pc">
                    <div id="mySidenav" class="sidenav">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <a href="{{ url('/') }}">{{ __('header.home') }}</a>
                        <a href="{{ url('/our-course') }}">{{ __('header.ourcourse') }}</a>
                        <a href="{{ url('/our-blog') }}">BLOG</a>
                        <a href="{{ url('/about-us') }}">ABOUT US</a>
                        <a href="{{ url('/our-team') }}">TEAM</a>
                        <a href="{{ url('/contact-us') }}">CONTACT</a>
                        @if (Auth::check())
                            <a href="account.html">ACCOUNT</a>
                        @else
                            <a href="account.html">Login</a>
                        @endif

                    </div>

                    <!-- Use any element to open the sidenav -->
                    <span onclick="openNav()"><i style="font-size: 20px; color: #2C2F7E;"
                            class="fa-solid fa-bars"></i></span>
                </div>
            </div>
        </div>
    </header>
