@extends('user.layouts.app')

@section('title', 'Trang chủ')
@section('meta_description', 'Thùng gỗ sồi Phú Khang – thùng ngâm rượu gỗ sồi 10L đến 300L, gỗ tự nhiên, bền đẹp. Tư vấn miễn phí qua hotline 0866 333 766. Giao hàng toàn quốc.')
@section('meta_keywords', 'thùng gỗ sồi, thùng ngâm rượu, thùng rượu gỗ sồi Phú Khang, thùng gỗ sồi 10L, thùng gỗ sồi 20L, thùng gỗ sồi 50L, thùng gỗ sồi 100L, hotline 0866333766')
@section('og_type', 'website')

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
