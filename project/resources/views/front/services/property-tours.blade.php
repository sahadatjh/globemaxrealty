@extends('layouts.front')

@section('content')
	<!-- Page Content Start -->
	<section class="our-service-common-section margin-top-80">
		<div class="container">
			<div class="row common-sidebar-and-content-wrapper justify-content-center">
				<div class="col-md-8 common-width-box our-service-content-wrapper">
					<div class="common-heading mb-5">
						<h2 class="title">Property Tours</h2>
						<h2 class="sub-title">{{str_replace('_', ' ', env('APP_NAME'))}} run by professionals</h2>
					</div>
					<div class="common-content-section mb-5">
						<div class="main-common-contents-wrapper">
							{!! str_replace('http://localhost/Home-And-Habitat-Realty/', asset(''), $serviceData['property_tours']) !!}
						</div>
					</div>
					<div class="row property-tours-videos-wrapper">
						@if($serviceData->property_tours_video)
                            @foreach($serviceData->property_tours_video as $key => $tVideo)
                            @php
                            $url = $tVideo;
	                            parse_str( parse_url( $url, PHP_URL_QUERY ), $my_array_of_vars );
								//echo $my_array_of_vars['v'];    
							  	// Output: C4kxS1ksqtw
                            @endphp
                            	<div class="col-md-6 property-tours-video">
									<iframe width="560" height="315" src="{{'https://www.youtube.com/embed/'.$my_array_of_vars['v']}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								</div>
							@endforeach
                        @endif
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Page Content End -->
@stop