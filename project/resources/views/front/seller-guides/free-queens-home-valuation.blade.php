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
					<div class="common-description">
						<div class="about">
							<p>If you live in Queens NY and would like a free home valuation, simply fill out the form below and we will get back to you ASAP. There is no charge or obligation for the valuation, we offer this as a complimentary service to Queens’ homeowners because we know that good decisions are based on good information 🙂</p>
						</div>
					</div>
					<div class="join-the-team-form col-lg-8 col-md-12 m-auto">
						<form action="{{route('join-team-post')}}" method="post">
							@csrf
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
									<select name="communication[]" class="multi-select-ele form-control" aria-required="true" aria-invalid="false" multiple="multiple" required>
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
									<textarea rows="4" class="form-control" name="about" placeholder="" required></textarea>
								</div>
							</div>
							<div class="row justify-content-center pt-4">
								<button class="btn btn-info">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Page Content End -->
@stop