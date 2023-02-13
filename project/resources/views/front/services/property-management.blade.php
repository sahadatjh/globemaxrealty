@extends('layouts.front')

@section('content')
	<!-- Common content Section Start -->
	<section class="our-team-section margin-top-80">
        <div class="container">
        	<div class="common-heading mb-5">
				<h2 class="title">Property Management</h2>
			</div>
			<div class="common-description">
				<div class="about common-width-box our-service-content-wrapper">
					<div class="common-content-section">
						<div class="main-common-contents-wrapper">
							{!! str_replace('http://localhost/Home-And-Habitat-Realty/', asset(''), $serviceData['property_management']) !!}
						</div>
					</div>
				</div>
			</div>
			<div class="join-the-team-form col-lg-8 col-md-12 m-auto">
				<form action="{{route('common-mail')}}" method="post">
					@csrf
					<input type="hidden" name="mail_label" value="property_management">
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
							<label>I Own A</label>
							<select name="own_a" class="form-control" aria-required="true" aria-invalid="false" required>
							    <option value="">--Select--</option>
							    <option value="Coop">Coop</option>
							    <option value="Condo">Condo</option>
							    <option value="One Family">One Family</option>
							    <option value="Two Family">Two Family</option>
							    <option value="Three Family">Three Family</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12 form-group">
							<label>In</label>
							<input class="form-control" type="text" name="in" required>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 form-group">
							<label>About</label>
							<textarea rows="1" class="form-control" name="about" placeholder="Anything else we should know" required></textarea>
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