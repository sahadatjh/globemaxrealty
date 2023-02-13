<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Home & Habitat Realty">
	<meta name="author" content="Home & Habitat Realty">
	<title>{{str_replace('_', ' ', env('APP_NAME'))}}</title>

	<!-- Favicons-->
	<link rel="icon" href="{{asset((isset($g_company_data->favicon_icon))?$g_company_data->favicon_icon:'')}}" type="image/png" sizes="32x32">
    @include('front._partials.stylesheets')
</head>

<body class="{{(request()->is('/'))?'homepage':''}}">
	<style type="text/css">
		.preloader-wrapper {
		    background: #eef8f8;
		    font-family: Roboto, Arial, sans-serif;
		    display: flex;
		    align-items: center;
		    justify-content: center;
		    position: fixed;
		    top: 0;
		    left: 0;
		    z-index: 99999999999;
		    width: 100%;
		    height: 100%;
		}
		.preloader-wrapper .preloader {
			width: 80px;
			height: 80px;
			position: relative;
			transform: rotate(45deg);
			animation: walk 1s linear infinite;
		}
		.preloader-wrapper .preloader span {
			width: 40px;
			height: 40px;
			background: #0071b8;
			position: absolute;
			animation: spin 1s linear infinite;
		}
		.preloader-wrapper .preloader .light {
			background: #721d52;
		}
		.preloader-wrapper .preloader span:nth-child(1) {
			top: 0;
			left: 0;
		}

		.preloader-wrapper .preloader span:nth-child(2) {
			top: 0;
			right: 0;
		}
		.preloader-wrapper .preloader span:nth-child(3) {
			bottom: 0;
			left: 0;
		}
		.preloader-wrapper .preloader span:nth-child(4) {
			bottom: 0;
			right: 0;
		}
		@keyframes walk {
			50% {
				width: 130px;
				height: 130px;
			}
		}
		@keyframes spin {
			0% {
				transform: rotate(0);
			}
			50%, 90%, 100% {
				transform: rotate(90deg);
			}
		}
		.preloader-wrapper #by {
			font-family: 'Arima Madurai', cursive;
			color: #000000;
			font-size: 15px;
			font-weight: 900;
			widht: auto;
			position: fixed;
			top: 50%;
		}
	</style>
	<div class="preloader-wrapper">
		<span id="by"></span>
		<div>
		  <div class="preloader">
		    <span class="light"></span>
		    <span></span>
		    <span></span>
		    <span class="light"></span>
		  </div>
		</div>
	</div>

	<div class="layer"></div>
	<!-- Mobile menu overlay mask -->

	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
	<!-- End Preload -->

	<!-- Header ================================================== -->
	@include('front._partials.header')
	<!-- End Header =============================================== -->

	{{-- <main class="main-all-wrapper {{(request()->is('/') || request()->is('contact-us'))?'no-mp':''}}"> --}}
	<main class="">
		<!-- Content ================================================== -->
		@yield('content')
		<!-- End Content =============================================== -->
	</main>

	<!-- Footer ================================================== -->
	@include('front._partials.footer')
	<!-- End Footer =============================================== -->

	<!-- Back to top button -->
	<div id="toTop"></div>

	<!-- COMMON SCRIPTS -->
	@include('front._partials.scripts')

</body>
</html>