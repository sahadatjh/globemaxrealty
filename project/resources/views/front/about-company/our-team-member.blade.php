@extends('layouts.front')

@section('content')
	<!-- Common content Section Start -->
	<section class="our-team-section bg-white margin-top-80">
        <div class="container">
			<div class="col-lg-8 col-md-12 m-auto member-details-section">
				<div class="row top-content-outer">
					<div class="col-md-6 top-content-left">
						<div class="image">
							<img src="{{ asset( $teamMember->image ) }}" alt="{{$teamMember->name}}">
						</div>
					</div>
					<div class="col-md-6 top-content-right">
						<div class="info">
							<h2 class="title">{{$teamMember->name}}</h2>
							<h2 class="desig">{{$teamMember->designation}}</h2>

							<h3 class="contact">
								<i class="fas fa-phone"></i>
								<a href="tel:{{$teamMember->phone_1}}">{{$teamMember->phone_1}}</a>
							</h3>
							@if($teamMember->phone_2)
								<h3 class="contact">
									<i class="fas fa-phone"></i>
									<a href="tel:{{$teamMember->phone_2}}">{{$teamMember->phone_2}}</a>
								</h3>
							@endif

							<h3 class="contact">
								<i class="fas fa-envelope"></i>
								<a href="mailto:{{$teamMember->email_1}}">{{$teamMember->email_1}}</a>
							</h3>
							@if($teamMember->email_2)
								<h3 class="contact">
									<i class="fas fa-envelope"></i>
									<a href="mailto:{{$teamMember->email_2}}">{{$teamMember->email_2}}</a>
								</h3>
							@endif
							@if($teamMember->skype)
								<h3 class="contact">
									<i class="fab fa-skype"></i>
									<a href="{{$teamMember->skype}}">Connect</a>
								</h3>
							@endif
							@if($teamMember->facebook)
								<h3 class="contact">
									<i class="fab fa-facebook"></i>
									<a href="{{$teamMember->facebook}}">Connect</a>
								</h3>
							@endif
							@if($teamMember->instagram)
								<h3 class="contact">
									<i class="fab fa-instagram"></i>
									<a href="{{$teamMember->instagram}}">Connect</a>
								</h3>
							@endif
							@if($teamMember->google)
								<h3 class="contact">
									<i class="fab fa-google"></i>
									<a href="{{$teamMember->google}}">Connect</a>
								</h3>
							@endif
							@if($teamMember->youtube)
								<h3 class="contact">
									<i class="fab fa-youtube"></i>
									<a href="{{$teamMember->youtube}}">Connect</a>
								</h3>
							@endif
						</div>
					</div>
				</div>
				<div class="details">
					<h2 class="title">About Me</h2>
					<div class="description">
						{!! nl2br($teamMember->description) !!}
					</div>
				</div>
			</div>
        </div>
    </section>
	<!-- Common content Section End -->
@stop