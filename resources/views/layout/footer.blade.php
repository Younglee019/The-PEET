<section class="google-maps">
    <div class="container-zero">
        <div class="row">
            <div class="col-12">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.2787088484383!2d-74.0013559254686!3d40.711880637625306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a243e2d7081%3A0x2a5d8c68c79edc47!2s34%20Madison%20St%2C%20New%20York%2C%20NY%2010038%2C%20USA!5e0!3m2!1sen!2s!4v1722513954393!5m2!1sen!2s"
                    style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container">
        <div class="row d-flex">
            <div class="col-1">
                <div class="logo">
                    <a href="index.html">
                        <img src="{{ asset('assets/images/logo.webp') }}" alt="THE PEET" class="img-fluid">
                    </a>
                </div>
                <p>{{ __('footer.explore') }}</p>
                <div class="icons d-flex align-center">
                    <a href="#">
                        <i class="fa-brands fa-square-facebook"></i>
                    </a>
                    <a href="#">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="#">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                    <a href="#">
                        <i class="fa-brands fa-threads"></i>
                    </a>
                </div>
            </div>
            <div class="col-1">
                <h1>QUICK LINKS</h1>
                <ul>
                    <li><a href="{{ url('/about-us') }}">{{ __('footer.aboutus') }}</a></li>
                    <li><a href="{{ url('/our-blog') }}">{{ __('footer.blog') }}</a></li>
                    <li><a href="{{ url('/contact-us') }}">{{ __('footer.contact') }}</a></li>
                    <li><a href="{{ url('/') }}">{{ __('footer.dashboard') }}</a></li>
                </ul>
            </div>
            <div class="col-1">
                <h1>SUPPORT</h1>
                <ul>
                    @if (Auth::check())
                        <li><a href="{{ url('user-dashboard') }}">{{ __('footer.account') }}</a></li>
                    @else
                        <li><a href="{{ url('login-here') }}">{{ __('footer.login') }}</a></li>
                    @endif

                    <li><a href="{{ url('/our-course') }}">{{ __('footer.ourcourse') }}</a></li>
                    <li><a href="{{ url('/our-team') }}">{{ __('footer.team') }}</a></li>
                    <li><a href="{{ url('/') }}">{{ __('footer.dashboard') }}</a></li>
                </ul>
            </div>
            <div class="col-1">
                <h1>CONTACT DETAIL</h1>
                <ul>
                    <li><a href="#"><i class="fa-solid fa-location-dot"></i> Lorem ipsum dolor sit amet
                            consectetur
                            adipisicing elit.</a></li>
                    <li><a href="mailto:contact@thepeet.net"><i class="fa-solid fa-envelope"></i>
                            contact@thepeet.net</a></li>
                    <li><a href="tel:+(509)3750-7244"><i class="fa-solid fa-mobile-screen-button"></i>
                            +(509)3750-7244</a></li>
                    <li><a href="tel:+1(561)884-6069"><i class="fa-solid fa-phone"></i> +1(561)884-6069</a> </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<section class="down-footer">
    <div class="container-fluid">
        <div class="row d-flex align-center justify-between">
            <div class="box">
                <p><a href="{{ url('/') }}">{{ __('footer.pet') }}</a> &#169; {{ __('footer.allright') }}</p>
            </div>
            <div class="box d-flex align-center">
                <a href="{{ url('/') }}">{{ __('footer.privacy') }}</a>
                <a>||</a>
                <a href="{{ url('/') }}">{{ __('footer.termcondition') }}</a>
            </div>
        </div>
    </div>
</section>
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
