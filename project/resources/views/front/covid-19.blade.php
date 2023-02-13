@extends('layouts.front')

@section('content')
	<!-- Page Content Start -->
	<section class="our-service-common-section margin-top-80">
		<div class="container">
			<div class="row common-sidebar-and-content-wrapper justify-content-center">
				<div class="col-md-8 common-width-box our-service-content-wrapper">
					<div class="common-heading mb-5">
						<h2 class="title">MOVE SAFE™ CERTIFIED</h2>
					</div>
					<div class="common-content-section">
						<div class="main-common-contents-wrapper">
							{!! str_replace('http://localhost/Home-And-Habitat-Realty/', asset(''), $buyerGuide->covid_19) !!}
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Page Content End -->
@stop