<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN DASHBOARD - THE PEET</title>
    <link rel="stylesheet" href="{{ asset('dashboard/assets/css/style.css') }}">
    <!-- <link rel="stylesheet" href="css/sidebar.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="shortcut icon"
        href="{{ asset('dashboard/assets/images/230088316_6008296675908043_3114557593675319042_n.jpg') }}"
        type="image/x-icon">
</head>

<body class="leadership-page">
    <div class="modal-backdrop"></div>
    @include('admin.layouts.admin-header')
    <div class="container-sidebar">
        @yield('admin-main-content')
    </div>










    <div class="language-selector">
        @php
            $currentLocale = app()->getLocale();

            $flagImage =
                $currentLocale == 'en'
                    ? 'usa-flag.png'
                    : ($currentLocale == 'fr'
                        ? 'frace-flag.png'
                        : ($currentLocale == 'hc'
                            ? 'haiti-flag.png'
                            : 'usa-flag.png'));
        @endphp

        <div class="selected-language" id="selectedLanguage">
            <img src="{{ asset('assets/images/' . $flagImage) }}" alt="Selected Language" id="selectedLanguageImg">
        </div>

        <div class="dropdown" id="dropdown-language">
            <a href="{{ url('change-language/en') }}">
                <div class="dropdown-item" data-lang="EN">
                    <img src="{{ asset('assets/images/usa-flag.png') }}" alt="USA FLAG"> English
                </div>
            </a>
            <a href="{{ url('change-language/fr') }}">
                <div class="dropdown-item" data-lang="FR">
                    <img src="{{ asset('assets/images/frace-flag.png') }}" alt="FRANCE FLAG"> French
                </div>
            </a>
            <a href="{{ url('change-language/hc') }}">
                <div class="dropdown-item" data-lang="HT">
                    <img src="{{ asset('assets/images/haiti-flag.png') }}" alt="HAITI FLAG"> Haitian Creole
                </div>
            </a>
        </div>
    </div>





    <script>
        /* When the user clicks on the button,
            toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown menu if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
    </script>


    <script src="{{ asset('dashboard/assets/js/function.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
</body>

</html>
