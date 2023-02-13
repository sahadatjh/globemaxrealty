@extends('layouts.front')
@section('content')
<!-- Page Banner Start -->
    <section class="contact-us-main-banner">
        <div class="contact-us-main-banner-inner">
            <div class="image">
                <img src="{{asset('assets/front')}}/image/contact-us-banner.jpg">
            </div>
            <div class="content container">
                <h2 class="title">Contact Us</h2>
                <ul class="c-breadcrumb">
                    <li class="item">
                        <a class="link" href="/">Home</a>
                    </li>
                    <li class="item">
                        <a class="link" href="javascript:void(0">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Page Banner End -->

    <!-- About-us-section -->
    <section class="contact-us-section margin-top-80">
        <div class="container">
            <div class="row common-sidebar-and-content-wrapper">
                <div class="col-md-4 home-about-us-left-box-wrapper">
                    <!-- Sidebar Start -->
                    @include('front._partials.sidebar')
                    <!-- Sidebar End -->
                </div>

                <div class="col-md-8">
                    <div class="contact-us-form-wrapper">
                        <div class="top-box">
                            <h2 class="title">have any questions?</h2>
                            <div class="detail">
                                <p>We at <b>{{str_replace('_', ' ', env('APP_NAME'))}}.</b> value you and appreciate your interest in our firm. We care about our clients, and know that your time is valuable. Please leave us a message below and we will respond promptly.</p>
                            </div>
                        </div>
                        <div class="contact-us-form-inner">
                            <form class="row m-0" action="{{route('contact-us.message')}}" method="post">
                                @csrf
                                <div class="col-md-12 input-group">
                                    <input type="text" name="name" placeholder="Full Name" required>
                                </div>
                                <div class="col-md-12 input-group">
                                    <input type="number" name="phone" placeholder="Phone" required>
                                </div>
                                <div class="col-md-12 input-group email">
                                    <input type="email" name="email" placeholder="Email" required>
                                </div>
                                {{-- <div class="col-md-12 input-group email">
                                    <input type="text" name="subject" placeholder="Subject" required>
                                </div> --}}
                                <div class="col-md-12 input-group email">
                                    <textarea name="message" placeholder="Message" rows="5" required></textarea>
                                </div>
                                <br>
                                <div class="button-wrapper">
                                    <button type="submit" name="submit">Send</button>
                                </div>
                            </form>
                            @php
                                if(!empty($_SESSION['success'])){
                                    $success = $_SESSION['success'];
                                    echo '<script type="text/javascript">swal("Thank You!","'.$success.'", "success");</script>';
                                }

                                if(!empty($_SESSION['error'])){
                                    $error = $_SESSION['error'];
                                    echo '<script type="text/javascript">swal("'.$error.'")</script>';
                                }

                                if(!empty($_SESSION['validation_error'])){
                                    $validationError = $_SESSION['validation_error'];
                                    echo '<script type="text/javascript">swal("'.$validationError.'")</script>';
                                }
                                unset($_SESSION['validation_error']); 
                                unset($_SESSION['error']); 
                                unset($_SESSION['success']); 
                            @endphp
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //About-us-section -->
    <!-- Map Section Start -->
    <section class="company-location-map-section">
        <div class="company-location-map-wrapper">
            {!! $g_company_data->map_embed_link !!}
        </div>
    </section>
    <!-- Map Section End -->
    <!-- Recognized-by-section -->
    @include('front._partials.recognized-by')
    <!-- //Recognized-by-section -->
@endsection