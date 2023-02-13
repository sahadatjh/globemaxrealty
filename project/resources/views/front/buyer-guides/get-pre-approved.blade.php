@extends('layouts.front')

@section('content')
	<!-- Page Content Start -->
	<section class="our-service-common-section margin-top-80">
		<div class="container">
			<div class="row common-sidebar-and-content-wrapper justify-content-center">
				<div class="col-md-8 common-width-box our-service-content-wrapper">
					<div class="common-heading mb-5">
						<h2 class="title">Get Pre-Approved</h2>
						<h2 class="sub-title">{{str_replace('_', ' ', env('APP_NAME'))}} run by professionals</h2>
					</div>
					<div class="common-content-section">
						<div class="main-common-contents-wrapper mb-5">
							{!! str_replace('http://localhost/Home-And-Habitat-Realty/', asset(''), $buyerGuide->get_pre_approved) !!}
						</div>
					</div>
					<div class="join-the-team-form m-auto">
						<form action="{{route('common-mail')}}" method="post">
							@csrf
							<input type="hidden" name="mail_label" value="get_pre_approved">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-12 form-group">
									<label>Name</label>
									<input class="form-control" type="text" name="name" required>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 form-group">
									<label>Phone</label>
									<input class="form-control" type="text" name="phone" required>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-12 form-group">
									<label>Email</label>
									<input class="form-control" type="email" name="email" required>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 form-group">
									<label>Desired Property Type</label>
									<select name="desired_property_type" class="form-control" aria-required="true" aria-invalid="false" required>
									  	<option value="Single Family">Single Family</option>
									    <option value="Multi Family">Multi Family</option>
									    <option value="Coop">Coop</option>
									    <option value="Condo">Condo</option>
									    <option value="Commercial Property">Commercial Property</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-12 form-group">
									<label>Annual Income</label>
									<select name="annual_income" class=" form-control" aria-required="true" aria-invalid="false" required>
									  	<option value="$0K - $50K">$0K - $50K</option>
									    <option value="$50K - $100K">$50K - $100K</option>
									    <option value="$100K - $150K">$100K - $150K</option>
									    <option value="$150K - $200K">$150K - $200K</option>
									    <option value="$200K - $250K">$200K - $250K</option>
									    <option value="$250K - $300K">$250K - $300K</option>
									    <option value="$300K+">$300K+</option>
									</select>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 form-group">
									<label>Credit Score(s)</label>
									<select name="credit_scores" class="form-control" aria-required="true" aria-invalid="false" required>
									  	<option value="500 - 600">500 - 600</option>
									    <option value="600 - 700">600 - 700</option>
									    <option value="700 - 800">700 - 800</option>
									    <option value="800+">800+</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 form-group">
									<label>Preferred Means Of Communication</label>
									<select name="communication[]" class="multi-select-ele form-control" aria-required="true" aria-invalid="false" multiple="multiple" required>
									  	<option value="Call">Call</option>
									  	<option value="Text">Text</option>
									  	<option value="Email">Email</option>
									</select>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 form-group">
									<label>About</label>
									<textarea rows="4" class="form-control" name="about" placeholder="Anything else we should know" required></textarea>
								</div>
							</div>
							<div class="row justify-content-center pt-4">
								<button class="btn btn-info">Submit</button>
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
	</section>
	<!-- Page Content End -->
@stop