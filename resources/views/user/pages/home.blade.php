@extends('user.layouts.app')

@section('title', 'Trang chủ')

@section('content')
    @include('user.partials.home.hero')
    @include('user.partials.home.why-choose')
    @include('user.partials.home.categories')
    @include('user.partials.home.best-sellers')
    @include('user.partials.home.cta-promo')
    @include('user.partials.home.popular-uses')
    @include('user.partials.home.featured-products')
    @include('user.partials.home.testimonials')
    @include('user.partials.home.cta-consult')
    @include('user.partials.home.blog')
@endsection
