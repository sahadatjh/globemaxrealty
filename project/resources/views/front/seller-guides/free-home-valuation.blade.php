@extends('layouts.front')

@section('content')
	<!-- Page Content Start -->
	<section class="our-service-common-section margin-top-80">
		<div class="container">
			<div class="row common-sidebar-and-content-wrapper justify-content-center">
				<div class="col-md-8 common-width-box our-service-content-wrapper">
					<div class="common-heading mb-5">
						<h2 class="title">Free Queens Home Valuation</h2>
						<h2 class="sub-title">{{str_replace('_', ' ', env('APP_NAME'))}} run by professionals</h2>
					</div>
					<div class="common-content-section">
						<div class="main-common-contents-wrapper mb-5">
							{!! str_replace('http://localhost/Home-And-Habitat-Realty/', asset(''), $sellerGuide->free_home_valuation) !!}
						</div>
					</div>
					<div class="join-the-team-form m-auto">
						<form action="{{route('common-mail')}}" method="post">
							@csrf
							<input type="hidden" name="mail_label" value="free_home_valuation">
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
									<label>Property Condition</label>
									<select name="property_condition[]" class="multi-select-ele form-control" aria-required="true" aria-invalid="false" multiple="multiple" required>
									  	<option value="Poor">Poor</option>
									  	<option value="Average">Average</option>
									  	<option value="Good">Good</option>
									  	<option value="Excellent">Excellent</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 form-group">
									<label>Address</label>
									<textarea rows="4" class="form-control" name="address" placeholder="" required></textarea>
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