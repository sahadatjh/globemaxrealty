@extends('layouts.front')

@section('content')
	<!-- Common content Section Start -->
	<section class="our-team-section margin-top-80">
        <div class="container">
        	<div class="common-heading mb-5">
				<h3 class="sub-title">Join The Team</h3>
				<h2 class="title">JOIN THE TEAM</h2>
			</div>
			
			<div class="common-description">
				<div class="about">
					<div class="common-content-section">
						<div class="main-common-contents-wrapper">
							{!! str_replace('http://localhost/Home-And-Habitat-Realty/', asset(''), $g_company_data['join_the_team']) !!}
						</div>
					</div>
				</div>
			</div>
			<div class="join-the-team-form col-lg-8 col-md-12 m-auto">
				<form action="{{route('common-mail')}}" method="post">
					@csrf
					<input type="hidden" name="mail_label" value="join_team">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12 form-group">
							<label>Name</label>
							<input class="form-control" type="text" name="name">
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 form-group">
							<label>Phone</label>
							<input class="form-control" type="text" name="phone">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12 form-group">
							<label>Email</label>
							<input class="form-control" type="email" name="email">
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 form-group">
							<label>Current Company</label>
							<input class="form-control" type="text" name="current_company">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12 form-group">
							<label>Years in Business</label>
							<select name="years_in_business" id="" class="form-control" aria-invalid="false">
							  	<option value="">--Select--</option>
							    <option value="Less than 1 year">Less than 1 year</option>
							    <option value="1-5 years">1-5 years</option>
							    <option value="5-10 years">5-10 years</option>
							    <option value="10-15 years">10-15 years</option>
							    <option value="15-20 years">15-20 years</option>
							    <option value="20+ years">20+ years</option>
							</select>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 form-group">
							<label>About</label>
							<textarea rows="1" class="form-control" name="about" placeholder="Anything else we should know"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12 form-group">
							<label>Exprience</label>
							<textarea rows="1" class="form-control" name="exprience" placeholder="Anything else we should know"></textarea>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 form-group">
							<label>Location</label>
							<input class="form-control" type="text" name="location">
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
    </section>
	<!-- Common content Section End -->
@stop