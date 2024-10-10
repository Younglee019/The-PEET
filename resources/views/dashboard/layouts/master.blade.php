<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENT DASHBOARD - THE PEET</title>
    <link rel="stylesheet" href="{{ asset('dashboard/assets/css/style.css') }}">
    <!-- <link rel="stylesheet" href="css/sidebar.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="shortcut icon"
        href="{{ asset('dashboard/assets/images/230088316_6008296675908043_3114557593675319042_n.jpg') }}"
        type="image/x-icon">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="leadership-page calenderPage">

    @include('dashboard.layouts.header')
    <div class="container-sidebar">
        @yield('dashboard-main-content')

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
    </div>

    <script>
        let display = document.querySelector("#display");
        let days = document.querySelector("#days");
        let previous = document.querySelector(".left");
        let next = document.querySelector(".right");


        let date = new Date();
        let year = date.getFullYear();
        let month = date.getMonth();

        function calendar() {
            // Clear the days container
            days.innerHTML = "";

            const firstDay = new Date(year, month, 1);
            const lastDay = new Date(year, month + 1, 0);
            let firstDayIndex = firstDay.getDay();
            let numberOfDays = lastDay.getDate();
            let lastDayIndex = lastDay.getDay();

            // Update display with the current month and year
            display.textContent = date.toLocaleString("en-US", {
                month: "long",
                year: "numeric"
            });

            // Add days from the previous month to fill the first week
            for (let i = 0; i < firstDayIndex; i++) {
                const div = document.createElement("div");
                div.className = "inactive";
                days.appendChild(div);
            }

            // Add days for the current month
            for (let j = 1; j <= numberOfDays; j++) {
                const div = document.createElement("div");
                let currDate = new Date(year, month, j);
                div.dataset.date = currDate.toDateString();
                div.textContent = j;
                days.appendChild(div);

                // Highlight the current date
                if (
                    currDate.getFullYear() === new Date().getFullYear() &&
                    currDate.getMonth() === new Date().getMonth() &&
                    currDate.getDate() === new Date().getDate()
                ) {
                    div.classList.add("current-date");
                }
            }

            // Add days for the next month to fill the last week
            for (let i = lastDayIndex + 1; i < 7; i++) {
                const div = document.createElement("div");
                div.className = "inactive";
                days.appendChild(div);
            }
        }

        calendar(); // Initial call to display the current month

        // Event listeners for previous and next buttons
        previous.addEventListener("click", () => {
            if (month === 0) {
                month = 11;
                year--;
            } else {
                month--;
            }
            date = new Date(year, month); // Update date object to reflect new month/year
            calendar();
        });

        next.addEventListener("click", () => {
            if (month === 11) {
                month = 0;
                year++;
            } else {
                month++;
            }
            date = new Date(year, month); // Update date object to reflect new month/year
            calendar();
        });
    </script>

    <script>
        // Get all edit buttons
        const editButtons = document.querySelectorAll('.edit');

        // Loop through each button to add a click event
        editButtons.forEach(button => {
            button.addEventListener('click', function () {
                const targetId = this.getAttribute('data-target');
                const overlay = document.getElementById(targetId);
                overlay.style.display = 'flex';
            });
        });

        // Close overlay when clicking outside the content box
        document.querySelectorAll('.overlaySide').forEach(overlay => {
            overlay.addEventListener('click', function (e) {
                if (e.target === overlay) {
                    overlay.style.display = 'none';
                }
            });
        });
    </script>


    <script>
        // Display the selected file name (optional)
        const input = document.getElementById('photo');
        const fileNameDisplay = document.getElementById('file-name');

        input.addEventListener('change', function() {
            if (input.files.length > 0) {
                fileNameDisplay.textContent = input.files[0].name;
            } else {
                fileNameDisplay.textContent = '';
            }
        });
    </script>


    <script src="{{ asset('dashboard/assets/js/function.js') }}"></script>


</body>

</html>
