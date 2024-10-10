@extends('layout.master')
@section('main-content')
<!-- Code for login and sign up section -->
<section class="login-signup">
    <div class="container">
        @if ($errors->any())
            <script>
                let errorMessages = `
                <div style="text-align: left;">
                    <ul style="list-style-type: none; padding: 0;">
                        @foreach ($errors->all() as $error)
                            <li style="margin-bottom: 10px;">
                                <i class="fa fa-exclamation-circle" style="color: #e74c3c; margin-right: 8px;"></i>
                                {{ $error }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            `;

                Swal.fire({
                    title: "{{ __('login_signup.error_title') }}",
                    html: errorMessages, // use `html` to support HTML content
                    icon: "error", // "error" icon for validation errors
                    confirmButtonText: "{{ __('login_signup.error_confirm_button') }}",
                    confirmButtonColor: "#e74c3c", // Set the button color to match the error theme
                });
            </script>
        @endif
        <script>
            @if (Session::has('registersuccess'))
                Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "{{ __('login_signup.register_success_message') }}",
                    showConfirmButton: false,
                    timer: 1500
                });
            @endif

            @if (Session::has('Passwordrecover'))
                Swal.fire({
                    position: "center",
                    icon: "success",
                    title: "{{ __('login_signup.password_recover_success_message') }}",
                    showConfirmButton: false,
                    timer: 1500
                });
            @endif
        </script>
        <div class="row d-flex align-center">
            <div class="col-1">
                <form action="{{ url('user-login') }}" method="post">
                    @csrf
                    <h1>{{ __('login_signup.login_title') }}</h1>
                    <div class="box">
                        <label>{{ __('login_signup.email_label') }}</label>
                        <input type="text" placeholder="{{ __('login_signup.email_placeholder') }}" name="email">
                    </div>
                    <div class="box">
                        <label>{{ __('login_signup.password_label') }}</label>
                        <input type="password" placeholder="{{ __('login_signup.password_placeholder') }}" name="password">
                    </div>
                    <div class="reminder-me d-flex">
                        <input type="checkbox" name="remember">
                        <h5>{{ __('login_signup.remember_me') }}</h5>
                    </div>
                    <div class="btn">
                        <input type="submit" value="{{ __('login_signup.login_button') }}">
                    </div>
                    <div class="other-links d-flex align-center justify-center">
                        <div class="underline"></div>
                        <h4>{{ __('login_signup.other_login_title') }}</h4>
                        <div class="underline"></div>
                    </div>
                    <div class="pri-row d-flex align-center justify-center">
                        <div class="facebook sub-box">
                            <a href="#" class="d-flex align-center justify-center">
                                <i class="fa-brands fa-facebook-f"></i>
                                <p>{{ __('login_signup.facebook') }}</p>
                            </a>
                        </div>
                        <div class="linkedin sub-box">
                            <!--{{ url('auth/linkedin') }}-->
                            <a href="#" class="d-flex align-center justify-center">
                                <i class="fa-brands fa-linkedin-in"></i>
                                <p>{{ __('login_signup.linkedin') }}</p>
                            </a>
                        </div>
                        <div class="g-mail sub-box">
                            <!--{{ url('auth/google') }}-->
                            <a href="#" class="d-flex align-center justify-center">
                                <i class="fa-brands fa-google"></i>
                                <p>{{ __('login_signup.gmail') }}</p>
                            </a>
                        </div>
                    </div>

                    <div class="pri-row d-flex align-center justify-center">
                        <a style="color:antiquewhite; margin-top: 5%;" href="{{ url('forget-password') }}">{{ __('login_signup.forget_password') }}</a>
                    </div>
                </form>
            </div>
            <div class="col-1 mobile">
                <img src="{{ asset('assets/images/login.jpg') }}" alt="{{ __('login_signup.image_alt_text') }}" class="img-fluid">
            </div>
        </div>
    </div>
</section>

@endsection
