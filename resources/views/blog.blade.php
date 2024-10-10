@extends('layout.master')
@section('main-content')
    <!-- code for hero section -->
    <div class="main-bg-image">
        <section class="about-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1>{{ __('blog.hero_title') }}</h1>
                        <h3>
                            <i class="fa-solid fa-house"></i>
                            <a href="index.html">{{ __('blog.hero_home') }}</a> /
                            <a href="blog.html">{{ __('blog.hero_blog') }}</a>
                        </h3>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section class="blog-page">
        <div class="container">
            <div href="#" class="row d-flex">
                <div class="col-1">
                    <img src="{{ asset('assets/images/single-blog-1.png') }}" alt="" class="img-fluid">
                </div>
                <div class="col-2">
                    <h4>{{ __('blog.blog1_date') }}</h4>
                    <h1>{{ __('blog.blog1_title') }}</h1>
                    <p>{{ __('blog.blog1_content') }}</p>
                    <div class="btn-blog">
                        <a href="blog-1.html">{{ __('blog.read_more') }}</a>
                    </div>
                </div>
            </div>
            <div href="#" class="row d-flex">
                <div class="col-1">
                    <img src="{{ asset('assets/images/single-blog-2.png') }}" alt="" class="img-fluid">
                </div>
                <div class="col-2">
                    <h4>{{ __('blog.blog2_date') }}</h4>
                    <h1>{{ __('blog.blog2_title') }}</h1>
                    <p>{{ __('blog.blog2_content') }}</p>
                    <div class="btn-blog">
                        <a href="blog-2.html">{{ __('blog.read_more') }}</a>
                    </div>
                </div>
            </div>
            <div href="#" class="row d-flex">
                <div class="col-1">
                    <img src="{{ asset('assets/images/single-blog-3.jpg') }}" alt="" class="img-fluid">
                </div>
                <div class="col-2">
                    <h4>{{ __('blog.blog3_date') }}</h4>
                    <h1>{{ __('blog.blog3_title') }}</h1>
                    <p>{{ __('blog.blog3_content') }}</p>
                    <div class="btn-blog">
                        <a href="blog-3.html">{{ __('blog.read_more') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
