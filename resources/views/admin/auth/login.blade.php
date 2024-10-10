<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - THE PEET</title>
    <!-- link for css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- link for font awosemo -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- link for favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/230088316_6008296675908043_3114557593675319042_n.jpg') }}"
        type="image/x-icon">

</head>

<body>
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
                        <li><a class="main-tag" href="{{ url('/') }}">HOME</a></li>
                        <li><a class="main-tag" href="{{ url('/our-course') }}">OUR COURSES</a></li>
                        <li><a class="main-tag" href="{{ url('/our-blog') }}">BLOG</a></li>
                        <div class="dropdown">
                            <button onclick="myFunction()" class="dropbtn">WHO ARE WE? <i
                                    class="fa-solid fa-angle-down"></i></button>
                            <div id="myDropdown" class="dropdown-content">
                                <a href="{{ url('/about-us') }}">ABOUT US</a>
                                <a href="{{ url('/our-team') }}">TEAM</a>
                                <a href="{{ url('/contact-us') }}">CONTACT</a>
                            </div>
                        </div>
                        @if (Auth::check())
                            <li><a class="main-tag" href="{{ url('user-dashboard') }}">ACCOUNT</a></li>
                        @else
                            <li><a class="main-tag" href="{{ url('login-here') }}">Login</a></li>
                        @endif
                    </ul>
                </div>
                <div class="coloum pc">
                    <div id="mySidenav" class="sidenav">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <a href="{{ url('/') }}">HOME</a>
                        <a href="{{ url('/our-course') }}">OUR COURSES</a>
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

    <!-- Code for login and sign up section -->
     <section class="login-signup">
        <div class="container">
            <div class="row d-flex align-center">
                <div class="col-1">
                    <form action="{{ url('adminlogin') }}" method="post">
                        @csrf
                        <h1>Login Your Account</h1>
                        <div class="box">
                            <label>Email:</label>
                            <input type="text" placeholder="Enter Your Email" name="email">
                        </div>
                        <div class="box">
                            <label>Password:</label>
                            <input type="text" placeholder="Enter Your Password" name="password">
                        </div>
                        <div class="reminder-me d-flex">
                            <input type="checkbox" name="remember">
                            <h5>Remember Me</h5>
                        </div>
                        <div class="btn">
                            <input type="submit" value="Login">
                        </div>
                    </form>
                </div>
                <div class="col-1 mobile">
                    <img src="{{ asset('assets/images/login.jpg') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
     </section>

     <section class="google-maps">
        <div class="container-zero">
            <div class="row">
                <div class="col-12">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.2787088484383!2d-74.0013559254686!3d40.711880637625306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a243e2d7081%3A0x2a5d8c68c79edc47!2s34%20Madison%20St%2C%20New%20York%2C%20NY%2010038%2C%20USA!5e0!3m2!1sen!2s!4v1722513954393!5m2!1sen!2s"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row d-flex">
                <div class="col-1">
                    <div class="logo">
                        <a href="index.html">
                            <img src="{{ asset('assets/images/logo.webp') }}" alt="THE PEET" class="img-fluid">
                        </a>
                    </div>
                    <p>Explore new horizons
                        with our interactive courses while
                        aiming for excellence.</p>
                    <div class="icons d-flex align-center">
                        <a href="#">
                            <i class="fa-brands fa-square-facebook"></i>
                        </a>
                        <a href="#">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="#">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                        <a href="#">
                            <i class="fa-brands fa-threads"></i>
                        </a>
                    </div>
                </div>
                <div class="col-1">
                    <h1>QUICK LINKS</h1>
                    <ul>
                        <li><a href="{{ url('/about-us') }}">ABOUT US</a></li>
                        <li><a href="{{ url('/our-blog') }}">BLOG</a></li>
                        <li><a href="{{ url('/contact-us') }}">CONTACT</a></li>
                        <li><a href="{{ url('/') }}">DASHBOARD</a></li>
                    </ul>
                </div>
                <div class="col-1">
                    <h1>SUPPORT</h1>
                    <ul>
                        @if (Auth::check())
                        <li><a href="{{ url('user-dashboard') }}">MY ACCOUNT</a></li>
                        @else
                        <li><a href="{{ url('login-here') }}">Login</a></li>
                        @endif

                        <li><a href="{{ url('/our-course') }}">COURSE LIST</a></li>
                        <li><a href="{{ url('/our-team') }}">INSTRUCTORS</a></li>
                        <li><a href="{{ url('/') }}">COMING SOON</a></li>
                    </ul>
                </div>
                <div class="col-1">
                    <h1>CONTACT DETAIL</h1>
                    <ul>
                        <li><a href="#"><i class="fa-solid fa-location-dot"></i> Lorem ipsum dolor sit amet
                                consectetur
                                adipisicing elit.</a></li>
                        <li><a href="mailto:contact@thepeet.net"><i class="fa-solid fa-envelope"></i>
                                contact@thepeet.net</a></li>
                        <li><a href="tel:+(509)3750-7244"><i class="fa-solid fa-mobile-screen-button"></i>
                                +(509)3750-7244</a></li>
                        <li><a href="tel:+1(561)884-6069"><i class="fa-solid fa-phone"></i> +1(561)884-6069</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <section class="down-footer">
        <div class="container-fluid">
            <div class="row d-flex align-center justify-between">
                <div class="box">
                    <p><a href="{{ url('/') }}">THE PEET</a> &#169; ALL RIGHT RESERVED</p>
                </div>
                <div class="box d-flex align-center">
                    <a href="{{ url('/') }}">PRIVACY POLICY</a>
                    <a>||</a>
                    <a href="{{ url('/') }}">TERM & CONDITIONS</a>
                </div>
            </div>
        </div>
    </section>

    <!-- main functionlaity of body -->
    <script src="{{ asset('assets/js/function.js') }}"></script>
</body>

</html>
