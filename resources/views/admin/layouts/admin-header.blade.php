<header class="sideMenuPc">
    <div class="top-bar">
        <div class="top-bar-left">
            <div class="expand-btn-container" id="expandBtnContainer">
                <button class="expand-btn" id="expandBtn">
                    <i class="fas fa-bars"></i>
                </button>
                <a href="/" class="logo-link" id="logoLink">
                    <h1>{{ __('admin_dashboard_header.logo') }}</h1>
                </a>
            </div>
        </div>
        <button class="login-btn">
            <img src="{{ asset('dashboard/assets/images/team-2.jpg') }}" alt="" class="img-fluid">
        </button>
    </div>

    <nav class="sidebar" id="sidebar">
        <div class="sidebar-box">
            <a href="{{ url('admin-dashboard') }}" class="live-box placeholder-box active">
                <i class="fa-solid fa-house"></i>
                <span>{{ __('admin_dashboard_header.dashboard') }}</span>
                <div class="tooltip">{{ __('admin_dashboard_header.dashboard') }}</div>
            </a>
        </div>
        <div class="sidebar-box">
            <a href="{{ url('user-admin-dashboard') }}" class="placeholder-box">
                <i class="fa-solid fa-user"></i>
                <span>{{ __('admin_dashboard_header.users') }}</span>
                <div class="tooltip">{{ __('admin_dashboard_header.users') }}</div>
            </a>
        </div>
        <div class="sidebar-box">
            <a href="{{ url('course-admin-dashboard') }}" class="placeholder-box">
                <i class="fa-solid fa-book-open"></i>
                <span>{{ __('admin_dashboard_header.courses') }}</span>
                <div class="tooltip">{{ __('admin_dashboard_header.courses') }}</div>
            </a>
        </div>
        <div class="sidebar-box">
            <a href="{{ url('tutor-admin-dashboard') }}" class="placeholder-box">
                <i class="fa-solid fa-graduation-cap"></i>
                <span>{{ __('admin_dashboard_header.tutors') }}</span>
                <div class="tooltip">{{ __('admin_dashboard_header.tutors') }}</div>
            </a>
        </div>
        <div class="sidebar-box">
            <a href="{{ url('/admin-logout') }}" class="placeholder-box">
                <i class="fa-solid fa-right-from-bracket"></i>
                <span>{{ __('admin_dashboard_header.log_out') }}</span>
                <div class="tooltip">{{ __('admin_dashboard_header.log_out') }}</div>
            </a>
        </div>
    </nav>
</header>
