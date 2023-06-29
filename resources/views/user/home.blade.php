@extends('user.layouts.layout')

@section('content')
    <div class="slider-area">
        @include('user.includes.landing-page.slider')
    </div>

    <div class="featured-area featured-area2">
        @include('user.includes.landing-page.features')
    </div>

    <div class="product-area product-area-2">
        @include('user.includes.landing-page.products')
    </div>

    <div class="banner-area bg-img-8">
        @include('user.includes.landing-page.banner')
    </div>

    <div class="product-area">
        @include('user.includes.landing-page.published-products')
    </div>
    <div class="testmonial-area testmonial-area2 bg-img-2 black-opacity">
        @include('user.includes.landing-page.testimonial')
    </div>


@endsection
