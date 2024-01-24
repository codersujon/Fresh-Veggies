@extends('frontend.master')

@section('main-content')

    {{-- SECTION START --}}
    @include('frontend.layouts.header')
    @include('frontend.layouts.banner')
    @include('frontend.layouts.about')
    @include('frontend.layouts.choose')
    @include('frontend.layouts.testimonial')
    @include('frontend.layouts.contact')
    @include('frontend.layouts.footer')
    {{-- END SECTION --}}

@endsection

