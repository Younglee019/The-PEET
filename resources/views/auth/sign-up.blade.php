@extends('layout.master')
@section('main-content')
    <!-- Code for login and sign up section -->
    <section class="login-signup signup">
        <div class="container" style="margin-bottom: 2%;">
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
                        title: "{{ __('signup.error_title') }}",
                        html: errorMessages, // use `html` to support HTML content
                        icon: "error", // "error" icon for validation errors
                        confirmButtonText: "{{ __('signup.error_confirm_button') }}",
                        confirmButtonColor: "#e74c3c", // Set the button color to match the error theme
                    });
                </script>
            @endif

            <div class="row d-flex">
                <div class="col-1">
                    <form action="{{ url('/user-register') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <h1>{{ __('signup.register_title') }}</h1>
                        <div class="main-box d-flex">
                            <div class="box">
                                <input type="text" placeholder="{{ __('signup.first_name_placeholder') }}" name="f_name"
                                    required>
                            </div>
                            <div class="box">
                                <input type="text" placeholder="{{ __('signup.surname_placeholder') }}" name="s_name"
                                    required>
                            </div>
                        </div>
                        <div class="main-box d-flex">
                            <div class="box">
                                <input type="text" placeholder="{{ __('signup.username_placeholder') }}" name="u_name"
                                    required>
                            </div>
                            <div class="box">
                                <input type="email" placeholder="{{ __('signup.email_placeholder') }}" name="email"
                                    required>
                            </div>
                        </div>
                        <div class="main-box d-flex">
                            <div class="box">
                                <input type="password" placeholder="{{ __('signup.password_placeholder') }}" name="password"
                                    required>
                            </div>
                            <div class="box">
                                <input type="password" placeholder="{{ __('signup.confirm_password_placeholder') }}"
                                    name="c_password" required>
                            </div>
                        </div>

                        <div class="main-box d-flex">
                            <div class="box">
                                <input type="file" placeholder="Select Avatar" name="avatar">
                            </div>
                        </div>
                        <div class="btn">
                            <input type="submit" value="{{ __('signup.register_button') }}">
                        </div>
                        <div class="other-links d-flex align-center justify-center">
                            <div class="underline"></div>
                            <h4>{{ __('signup.register_profile_title') }}</h4>
                            <div class="underline"></div>
                        </div>
                        <div class="pri-row d-flex align-center justify-center">
                            <div class="facebook sub-box">
                                <a href="#" class="d-flex align-center justify-center">
                                    <i class="fa-brands fa-facebook-f"></i>
                                    <p>{{ __('signup.facebook') }}</p>
                                </a>
                            </div>
                            <div class="linkedin sub-box">
                                <!--{{ url('auth/linkedin') }}-->
                                <a href="#" class="d-flex align-center justify-center">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                    <p>{{ __('signup.linkedin') }}</p>
                                </a>
                            </div>
                            <div class="g-mail sub-box">
                                <!--{{ url('auth/google') }}-->
                                <a href="#" class="d-flex align-center justify-center">
                                    <i class="fa-brands fa-google"></i>
                                    <p>{{ __('signup.gmail') }}</p>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-1 mobile">
                    <img src="{{ asset('assets/images/register.jpg') }}" alt="{{ __('signup.image_alt_text') }}"
                        class="img-fluid">
                </div>
            </div>
        </div>
    </section>
@endsection
