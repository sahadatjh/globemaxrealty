@extends('layouts.front')
@section('content')
    <!-- Page Banner Start -->
    <section class="contact-us-main-banner">
        <div class="contact-us-main-banner-inner">
            <div class="image">
                <img src="{{asset('assets/front')}}/image/contact-us-banner.jpg">
            </div>
            <div class="content container">
                <h2 class="title">About Us</h2>
                <ul class="c-breadcrumb">
                    <li class="item">
                        <a class="link" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="item">
                        <a class="link" href="javascript:void(0)">About Us</a>
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
                <div class="col-md-8 col-sm-12 common-width-box profile-content-wrapper">
                    <div class="common-heading">
                        <h2 class="title">{{$g_company_data->heading}}</h2>
                    </div>
                    <div class="common-description">
                        <div class="about px-4 text-justify">
                            {!! str_replace('http://localhost/Home-And-Habitat-Realty/', asset(''), $g_company_data->description) !!}
                            <img src="{{$g_company_data->about_us_image}}">
                        </div>
                    {{-- <div class="profile-content-inner">
                        <div class="row content-item">
                            <div class="col-md-4 left-box">
                                <div class="image">
                                    <img src="assets/image/profile/Profile.jpg">
                                </div>
                                <div class="info">
                                    <h2 class="title">Maksudur Rahman</h2>
                                    <h3 class="subtitle">Founder and CEO</h3>
                                    <h3 class="text">Cell: <a href="tel:7185816081"> (718) 581-6081</a></h3>
                                    <h3 class="text">Email: <a href="mailto:rahmangfs@yahoo.com">rahmangfs@yahoo.com</a></h3>
                                </div>
                            </div>
                            <div class="col-md-8 right-box">
                                <div class="description">
                                    <p>Maksudur Rahman is the Founder and CEO of Global Tax & Financial Services, and Trans Global Real Estate Inc; and the Principle IRS Authorized Registered Tax Preparer at the firm. We holds 28 years of Tax, accounting and business experience. We do Tax and  Accounting service since 1992. We are the IRS Registered Tax Preparer since 1992 too. Originally from Bangladesh, Maksudur Rahman immigrated to New York city in order to further his knowledge of accounting and business at NYIBI. Prior to studying at NYIBI, he earned Bachelor’s and Master’s degrees in Business Administration and Finance from the University of Bangladesh. He is fluent in Bengali, Hindi, Urdu, and English.</p>
                                    <p>We maintain our reputation as one of the trusted and respected accountants in Queens, NY. We are in expert on personal and business taxation, sales tax, corporation taxes, tax planning, Federal and State Audits, immigration, consulting, accounting, payroll, open new business/ corporation, LLC, partnership, apply for ITIN, and bookkeeping. We serves clients who need unique services tailored for their specific taxation, immigration, and accounting situation. We provides expert service to clients needing consultation. Also provides taxation and other miscellaneous services for the clients. We carries a passion for providing thorough, nuanced services to our clients. Our service charge is minimum and very affordable, but provide the highest service. We can do tax file for all 50 states. We are the Authorized  IRS e-file provider.</p>
                                    <p>I'am is motivated, driven, professional, and cooperative. I got Bachelor’s degree in commerce and graduated from NYIBI; and a licensed real estate broker in the New York State marketplace. I hold a membership with LIBOR, MLS and the National Association of Realtors. I am the NY State Licensed Real Estate Broker since 2005, and I consistently bring energy and passion to my role. I was the real estate agent from 2003 to 2005 also. I understand the market, the economics of supply and demand, and how to leverage all the tools available to make sure my client’s wishes are fulfilled.</p>
                                    <p>Having 28 years of experience, I have given myself to cater needs to customers. We specialize in the residential real estate marketplace, new constructions, and the commercial real estate areas and rental. We are the HUD (United States Department of Housing and Urban Development) Approved Real Estate Broker and NY State Licensed Real Estate Broker and Notary Public. We are specialized in Buying and Selling properties, and Rental. We can give Guarantee to sell/rent your properties very fast. We have a lot of qualified Buyer. We have the proven record of Selling homes for the last 17 years. If you are thinking about to Buy or Sell home, please contact to us.</p>
                                    <p>My goal is to bring all of my own experiences and understanding to customers and help them with plans for buying or selling their home and investment property. We wants to take a supposedly complicated process and make it more understandable and profitable.</p>
                                    <p>I am the Senior Vice President of JBBA (Jackson Heights Bangladeshi Business Association), former Director of MLS (zone-14), former Director of LIBOR (South Queens Chapter), Founder President of Lakshmipur District Welfare Association USA, former Employee of Biman Bangladesh Airlines and Janata Bank Bangladesh.</p>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>

        </div>
    </section>
    <!-- //Tax Form -section -->
@endsection