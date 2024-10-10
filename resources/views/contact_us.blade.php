@extends('layout.master')
@section('main-content')
    <!-- code for hero section -->
    <div class="main-bg-image">
        <section class="about-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1>{{ __('contact.hero_title') }}</h1>
                        <h3>
                            <i class="fa-solid fa-house"></i>
                            <a href="index.html">{{ __('contact.hero_home_link') }}</a> /
                            <a href="contact.html">{{ __('contact.hero_contact_link') }}</a>
                        </h3>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- CODE FOR FORM  -->
    <section class="contact-form-page">
        <div class="container">
            <div class="row d-flex">
                <div class="col-1">
                    <div class="box d-flex">
                        <div class="sub-box col-1">
                            <h1>{{ __('contact.phone_title') }}</h1>
                            <a href="tel:+1-561-884-6069">{{ __('contact.phone_1') }}</a>
                            <a href="tel:+509-3750-7244">{{ __('contact.phone_2') }}</a>
                        </div>
                        <div class="sub-box col-1">
                            <h1>{{ __('contact.email_title') }}</h1>
                            <a href="mailto:contact@thepeet.net">contact@thepeet.net</a>
                        </div>
                    </div>
                    <div class="box d-flex">
                        <div class="sub-box col-1">
                            <h1>{{ __('contact.visit_us') }}</h1>
                            <p>34 Madison Street, <br>
                                NY, USA 10005</p>
                        </div>
                        <div class="sub-box col-1">
                            <p>{{ __('contact.explore_horizons') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-1">
                    <form action="backend.php" method="post">
                        <div class="form-box d-flex">
                            <div class="boxes col-1">
                                <label>{{ __('contact.form_full_name') }}</label>
                                <input type="text" required
                                    placeholder="{{ __('contact.form_full_name_placeholder') }}">
                            </div>
                            <div class="boxes col-1">
                                <label>{{ __('contact.form_email') }}</label>
                                <input type="email" required placeholder="{{ __('contact.form_email_placeholder') }}">
                            </div>
                        </div>
                        <div class="form-box">
                            <label>{{ __('contact.form_subject') }}</label>
                            <input type="text" placeholder="{{ __('contact.form_subject_placeholder') }}">
                        </div>
                        <div class="form-box">
                            <label>{{ __('contact.form_description') }}</label>
                            <textarea placeholder="{{ __('contact.form_description_placeholder') }}"></textarea>
                        </div>
                        <div class="btn center">
                            <input type="submit" value="{{ __('contact.form_submit_button') }}">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
