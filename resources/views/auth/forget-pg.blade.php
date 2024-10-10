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
                    title: "{{ __('forget_password.error_title') }}",
                    html: errorMessages, // use `html` to support HTML content
                    icon: "error", // "error" icon for validation errors
                    confirmButtonText: "{{ __('forget_password.error_confirm_button') }}",
                    confirmButtonColor: "#e74c3c", // Set the button color to match the error theme
                });
            </script>
        @endif
        <div class="row d-flex align-center">
            <div class="col-1">
                <form action="{{ url('user-forget') }}" method="post">
                    @csrf
                    <h1>{{ __('forget_password.email_prompt') }}</h1>
                    <div class="box">
                        <label>{{ __('forget_password.email_label') }}:</label>
                        <input type="text" placeholder="{{ __('forget_password.email_placeholder') }}" name="email">
                    </div>
                    <div class="btn">
                        <input type="submit" value="{{ __('forget_password.submit_button') }}">
                    </div>
                </form>
            </div>
            <div class="col-1 mobile">
                <img src="{{ asset('assets/images/login.jpg') }}" alt="{{ __('forget_password.image_alt_text') }}" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<script>
    @if (Session::has('checkemail'))
        Swal.fire({
            position: "center",
            icon: "success",
            title: "{{ __('forget_password.success_title') }}",
            showConfirmButton: true
        });
    @endif
</script>

@endsection
