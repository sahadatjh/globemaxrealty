@extends('layouts.front')

@section('content')
	<!-- Common content Section Start -->
	<section class="our-team-section margin-top-80">
        <div class="container">
        	<div class="common-heading mb-5">
				<h3 class="sub-title">Our Associates</h3>
				<h2 class="title">MEET THE TEAM</h2>
			</div>
			<div class="row pt-5">
				@if(count($ourTeam) > 0)
					@foreach($ourTeam as $member)
						<div class="col-lg-4 col-md-6 col-sm-12 agent-item-outer">
							<div class="agent-item-inner">
								<div class="image">
									<img src="{{asset($member->image)}}">
								</div>
								<div class="content">
									<h3 class="title">{{$member->name}}</h3>
									<h3 class="desig mb-0">{{$member->designation}}</h3>
									<h3 class="desig mb-0">{{$member->phone_1}}</h3>
									<h3 class="desig">{{$member->email_1}}</h3>
									<a class="details-btn" href="{{route('our-team-member',$member->slug)}}">View Details</a>
								</div>
							</div>
						</div>
					@endforeach
				@endif
			</div>
        </div>
    </section>
	<!-- Common content Section End -->
@stop