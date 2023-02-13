@extends('layouts.front')
@section('content')
    <!-- Page Banner Start -->
    <section class="contact-us-main-banner">
        <div class="contact-us-main-banner-inner">
            <div class="image">
                <img src="{{asset('assets/front')}}/image/contact-us-banner.jpg">
            </div>
            <div class="content container">
                <h2 class="title">Useful Link</h2>
                <ul class="c-breadcrumb">
                    <li class="item">
                        <a class="link" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="item">
                        <a class="link" href="javascript:void(0)">Useful Link</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Page Banner End -->

    <!-- Tax Form section -->
    {{-- <section class="profile-main-section">
        <div class="container">
            <div class="row common-sidebar-and-content-wrapper justify-content-center">
                <div class="col-md-8 col-sm-12 common-width-box profile-content-wrapper">
                    <div class="common-heading">
                        <h2 class="title">{{ ( isset( $usefull->title ) ) ? $usefull->title : "Useful Link"}}</h2>
                    </div>
                    <div class="common-description">
                        <div class="about px-4 text-justify">
                            @if( isset( $usefull->description ))
                                {!! str_replace('http://localhost/Home-And-Habitat-Realty/', asset(''), $usefull->description) !!}
                            @else
                                <p class="text-center">No data found</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section> --}}
    <!-- //Tax Form -section -->
@endsection