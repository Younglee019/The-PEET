<div class="modal-backdrop"></div>
<header class="sideMenuPc ">
    <div class="top-bar">
        <div class="top-bar-left">
            <div class="expand-btn-container" id="expandBtnContainer">
                <button class="expand-btn" id="expandBtn">
                    <i class="fas fa-bars"></i>
                </button>
                <a href="/" class="logo-link" id="logoLink">
                    <h1>{{ __('dashboardheader.the_peet') }}</h1>
                </a>
            </div>
        </div>

        <button class="login-btn">
            <img src="{{ asset('avatars/' . Auth::user()->user_avatar) }}" alt="{{ __('dashboardheader.user_avatar_alt') }}" class="img-fluid">
        </button>
    </div>

    <nav class="sidebar" id="sidebar">
        <div class="sidebar-box">
            <a href="{{ url('/user-dashboard') }}" class="live-box placeholder-box active">
                <i class="fa-solid fa-house"></i>
                <span>{{ __('dashboardheader.dashboard') }}</span>
                <div class="tooltip">{{ __('dashboardheader.dashboard') }}</div>
            </a>
        </div>
        <div class="sidebar-box">
            <a href="{{ url('/student-course-taken') }}" class="placeholder-box">
                <i class="fa-solid fa-graduation-cap"></i>
                <span>{{ __('dashboardheader.courses_taken') }}</span>
                <div class="tooltip">{{ __('dashboardheader.courses_taken') }}</div>
            </a>
        </div>
        <div class="sidebar-box">
            <a href="{{ url('/student-notice') }}" class="sidebar-item">
                <i class="fa-solid fa-star"></i>
                <span>{{ __('dashboardheader.notice') }}</span>
                <div class="tooltip">{{ __('dashboardheader.notice') }}</div>
            </a>
            <a href="{{ url('/student-quiz') }}" class="sidebar-item">
                <i class="fa-solid fa-boxes-stacked"></i>
                <span>{{ __('dashboardheader.my_quiz_attempts') }}</span>
                <div class="tooltip">{{ __('dashboardheader.my_quiz_attempts') }}</div>
            </a>
            <a href="{{ url('/student-orders') }}" class="sidebar-item">
                <i class="fa-solid fa-cart-shopping"></i>
                <span>{{ __('dashboardheader.order_history') }}</span>
                <div class="tooltip">{{ __('dashboardheader.order_history') }}</div>
            </a>
            <a href="{{ url('/student-faqs') }}" class="sidebar-item">
                <i class="fa-solid fa-question"></i>
                <span>{{ __('dashboardheader.questions_answers') }}</span>
                <div class="tooltip">{{ __('dashboardheader.questions_answers') }}</div>
            </a>
            <a href="{{ url('/student-calender') }}" class="sidebar-item">
                <i class="fa-solid fa-calendar-days"></i>
                <span>{{ __('dashboardheader.calendar') }}</span>
                <div class="tooltip">{{ __('dashboardheader.calendar') }}</div>
            </a>
            <a href="{{ url('/user-logout') }}" class="sidebar-item">
                <i class="fa-solid fa-right-from-bracket"></i>
                <span>{{ __('dashboardheader.logout') }}</span>
                <div class="tooltip">{{ __('dashboardheader.logout') }}</div>
            </a>
        </div>
    </nav>
</header>
