@extends('layouts.front')

@section('content')
	<!-- Common content Section Start -->
	<section class="our-team-section margin-top-80">
        <div class="container">
        	<div class="common-heading mb-5">
				<h3 class="sub-title">Award & Recognition</h3>
				<h2 class="title">Award & Recognition</h2>
			</div>
	        <div class="common-content-section award">
				<div class="col-md-8 m-auto main-common-contents-wrapper pt-3">
					{!! str_replace('http://localhost/Home-And-Habitat-Realty/', asset(''), $g_company_data['award_recognition']) !!}
				</div>
	        </div>
        </div>
    </section>
    <script type="text/javascript">
    	$('.common-content-section img').parent().css('text-align', 'center');
    </script>
	<!-- Common content Section End -->
@stop