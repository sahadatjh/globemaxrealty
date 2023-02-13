@extends('layouts.front')
@section('content')
    <!-- Page Banner Start -->

    <section class="contact-us-main-banner">
        <div class="contact-us-main-banner-inner">
            <div class="image">
                <img src="{{asset('assets/front')}}/image/contact-us-banner.jpg">
            </div>
            <div class="content container">
                <h2 class="title">Buyer Requirements</h2>
                <ul class="c-breadcrumb">
                    <li class="item">
                        <a class="link" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="item">
                        <a class="link" href="javascript:void(0)">Buyer Requirements</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Page Banner End -->

    <!-- Tax Form section -->
    <section class="profile-main-section">
        <div class="container">
            <div class="row common-sidebar-and-content-wrapper justify-content-center">
                <div class="col-md-7 col-sm-12 common-width-box profile-content-wrapper">
                    <div class="buyer-desc pb-0">
                        <div class="common-heading">
                            <h2 class="title">{{$g_company_data->buyer_require_title}}</h2>
                        </div>
                        <div class="common-description">
                            <div class="about px-4 text-justify">
                                {!! str_replace('http://localhost/Home-And-Habitat-Realty/', asset(''), $g_company_data->buyer_require_desc) !!}
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //Tax Form -section -->
@endsection