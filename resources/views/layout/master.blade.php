<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME - THE PEET</title>
    <!-- link for css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- link for font awosemo -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- link for favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/230088316_6008296675908043_3114557593675319042_n.jpg') }}"
        type="image/x-icon">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



</head>

<body>


    @include('layout.header')

    @yield('main-content')
    @include('layout.footer')




    <!-- js src link for swiper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets/js/homeSwiper.js') }}"></script>
    <!-- main functionlaity of body -->
    <script src="{{ asset('assets/js/function.js') }}"></script>
</body>

</html>
