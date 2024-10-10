@extends('layout.master')
@section('main-content')
<!-- Code for create new password section -->
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
                    title: "{{ __('create_password.error_title') }}",
                    html: errorMessages, // use `html` to support HTML content
                    icon: "error", // "error" icon for validation errors
                    confirmButtonText: "{{ __('create_password.error_confirm_button') }}",
                    confirmButtonColor: "#e74c3c", // Set the button color to match the error theme
                });
            </script>
        @endif
        <div class="row d-flex align-center">
            <div class="col-1">
                <form action="{{ url('create-password') }}" method="post">
                    @csrf
                    <h1>{{ __('create_password.title') }}</h1>
                    <div class="box">
                        <label>{{ __('create_password.password_label') }}:</label>
                        <input type="password" placeholder="{{ __('create_password.password_placeholder') }}" name="password">
                        <input type="hidden" value="{{ $id }}" name="id">
                    </div>
                    <div class="box">
                        <label>{{ __('create_password.confirm_password_label') }}:</label>
                        <input type="password" placeholder="{{ __('create_password.confirm_password_placeholder') }}" name="c_password">
                    </div>
                    <div class="btn">
                        <input type="submit" value="{{ __('create_password.submit_button') }}">
                    </div>
                </form>
            </div>
            <div class="col-1 mobile">
                <img src="{{ asset('assets/images/login.jpg') }}" alt="{{ __('create_password.image_alt_text') }}" class="img-fluid">
            </div>
        </div>
    </div>
</section>

@endsection
