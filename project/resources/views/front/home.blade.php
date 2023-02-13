@extends('layouts.front')
@section('content')
<!-- Main Slider -->
	<section class="home-slider-section">
		<div class="home-main-slider-inner owl-carousel">
			@if(count($homeSliders) > 0)
	        	@foreach($homeSliders as $key => $hSliderItem)
	        		<div class="item">
			            <img src="{{asset($hSliderItem->image)}}" alt="">
			            <div class="container">
		                    <div class="cover">
				                <div class="container">
				                    <div class="header-content">
				                        <h2>{{$hSliderItem->subtitle}}</h2>
				                        <h1>{{$hSliderItem->title}}</h1>
				                        <h4>{{$hSliderItem->info}}</h4>
				                    </div>
				                </div>
				            </div>
		                </div>
			        </div>  
	        	@endforeach   
	        @endif   
	    </div>
	</section>
	<!-- //Main Slider -->

	<!-- About-us/Service-section -->
	<section class="home-about-us-section pb-0">
		<div class="container">
			<div class="row common-sidebar-and-content-wrapper">
				<div class="col-md-12 home-about-us-right-box-wrapper">
					<div class="home-about-us-right-box">
						<div class="common-heading">
							<h3 class="sub-title">Welcome to {{str_replace('_', ' ', env('APP_NAME'))}}.</h3>
							<h2 class="title">{{$serviceData->service_heading}}</h2>
						</div>
						<div class="common-description">
							<div class="about text-center">
								<p>{{$serviceData->service_info}}</p>
							</div>
							<div class="row">
								<div class="col-md-3 home-our-service-outer">
									<div class="home-our-service">
										<div class="image">
											<img src="{{asset($serviceData->real_estate_image)}}">
										</div>
										<div class="title-box">
											<h2 class="title">Real Estate Services</h2>
										</div>
										<div class="content">
											<p>{{substr($serviceData->real_estate_short_info, 0,125)}}...</p>
											<a class="details-btn" href="{{route('real-estate-services')}}">See Details</a>
										</div>
									</div>
								</div>
								<div class="col-md-3 home-our-service-outer">
									<div class="home-our-service">
										<div class="image">
											<img src="{{asset($serviceData->consultation_image)}}">
										</div>
										<div class="title-box">
											<h2 class="title">Free Consultation</h2>
										</div>
										<div class="content">
											<p>{{substr($serviceData->consultation_short_info, 0,125)}}...</p>
											<a class="details-btn" href="{{route('consultation')}}">See Details</a>
										</div>
									</div>
								</div>
								<div class="col-md-3 home-our-service-outer">
									<div class="home-our-service">
										<div class="image">
											<img src="{{asset($serviceData->buyer_tips_image)}}">
										</div>
										<div class="title-box">
											<h2 class="title">Buyer Tips</h2>
										</div>
										<div class="content">
											<p>{{substr($serviceData->buyer_tips_short_info, 0,125)}}...</p>
											<a class="details-btn" href="{{route('buyer-tips')}}">See Details</a>
										</div>
									</div>
								</div>
								<div class="col-md-3 home-our-service-outer">
									<div class="home-our-service">
										<div class="image">
											<img src="{{asset($serviceData->seller_tips_image)}}">
										</div>
										<div class="title-box">
											<h2 class="title">Seller Tips</h2>
										</div>
										<div class="content">
											<p>{{substr($serviceData->seller_tips_short_info, 0,125)}}...</p>
											<a class="details-btn" href="{{route('seller-tips')}}">See Details</a>
										</div>
									</div>
								</div>
								<div class="col-md-3 home-our-service-outer">
									<div class="home-our-service">
										<div class="image">
											<img src="{{asset($serviceData->real_estate_staging_image)}}">
										</div>
										<div class="title-box">
											<h2 class="title">Real Estate Staging</h2>
										</div>
										<div class="content">
											<p>{{substr($serviceData->real_estate_staging_short_info, 0,125)}}...</p>
											<a class="details-btn" href="{{route('real-estate-staging')}}">See Details</a>
										</div>
									</div>
								</div>
								<div class="col-md-3 home-our-service-outer">
									<div class="home-our-service">
										<div class="image">
											<img src="{{asset($serviceData->fair_housing_policy_image)}}">
										</div>
										<div class="title-box">
											<h2 class="title">Fair Housing Policy</h2>
										</div>
										<div class="content">
											<p>{{substr($serviceData->fair_housing_policy_short_info, 0,125)}}...</p>
											<a class="details-btn" href="{{route('fair-housing-policy')}}">See Details</a>
										</div>
									</div>
								</div>
								<div class="col-md-3 home-our-service-outer">
									<div class="home-our-service">
										<div class="image">
											<img src="{{asset($serviceData->energy_tips_image)}}">
										</div>
										<div class="title-box">
											<h2 class="title">Energy Tips</h2>
										</div>
										<div class="content">
											<p>{{substr($serviceData->energy_tips_short_info, 0,125)}}...</p>
											<a class="details-btn" href="{{route('energy-tips')}}">See Details</a>
										</div>
									</div>
								</div>
								<div class="col-md-3 home-our-service-outer">
									<div class="home-our-service">
										<div class="image">
											<img src="{{asset($serviceData->property_management_image)}}">
										</div>
										<div class="title-box">
											<h2 class="title">Property Management</h2>
										</div>
										<div class="content">
											<p>{{substr($serviceData->property_management_short_info, 0,125)}}...</p>
											<a class="details-btn" href="{{route('property-management')}}">See Details</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- //About-us/Service-section -->

	<!-- Property List Section -->
	{{-- <section class="our-service-common-section margin-top-80">
		<div class="container">
			<div class="common-heading">
				<h3 class="sub-title">Property Listing</h3>
				<h2 class="title">Our All Property</h2>
			</div>
			<div class="row common-sidebar-and-content-wrapper pt-4">
				<div class="col-md-12">
					<div class="row real-estate-service-items-wrapper">
						@if(count($productData) > 0)
							@php
								$allProperty = 0
							@endphp
							@foreach($productData as $key => $sProduct)
								@if($sProduct->category != 'sold' && $sProduct->category != 'rentals')
									@php
										$allProperty++;
									@endphp
									@if($allProperty >8)
										@php
											break;
										@endphp
									@endif
									<div class="col-lg-3 col-md-4 col-sm-6 real-estate-service-item-outer">
										<a class="real-estate-service-item-inner" href="{{route('single-product',$sProduct->product_slug)}}">
											<div class="image">
												<span class="label">{{$sProduct->categoryData['category_name']}}</span>
												<img src="{{asset(($sProduct->productDefaultImage)?$sProduct->productDefaultImage->product_image:'http://placehold.it/150x110&amp;text='.str_replace('_', ' ', env('APP_NAME')))}}">
											</div>
											<div class="bottom-content">
												<h2 class="title">{{$sProduct->title}}
												</h2>
												<div class="bottom-box">
													<h2 class="price">${{number_format($sProduct->price)}}
														<br>
														<span class="d-block mt-1">{{$sProduct->address}}</span>
													</h2>
													<h2 class="text">{{($sProduct->bedrooms)?$sProduct->bedrooms.' BR,':''}} {{($sProduct->bathrooms)?$sProduct->bathrooms.' BTH':''}}</h2>
												</div>
											</div>
										</a>
									</div>
								@endif
							@endforeach
							@if($allProperty > 8)
								<div class="d-flex justify-content-center w-100">
									<a class="see-more-property" href="{{route('property-listing')}}">See More</a>
								</div>
							@endif
						@endif
					</div>
				</div>
			</div>
		</div>
	</section> --}}
	<!-- //Property List Section -->

	<!-- Rental Property List Section -->
	{{-- <section class="our-service-common-section margin-top-80">
		<div class="container">
			<div class="common-heading">
				<h3 class="sub-title">Rental Property</h3>
				<h2 class="title">Our Rental Property</h2>
			</div>
			<div class="row common-sidebar-and-content-wrapper pt-4">
				<div class="col-md-12">
					<div class="row real-estate-service-items-wrapper">
						@if(count($productData) > 0)
							@php
								$rentalCount = 0
							@endphp
							@foreach($productData as $key => $sProduct)
								@if($sProduct->category == 'rentals')
									@php
										$rentalCount++
									@endphp
									@if($rentalCount >7)
										@php
											break;
										@endphp
									@endif
									<div class="col-lg-3 col-md-4 col-sm-6 real-estate-service-item-outer">
										<a class="real-estate-service-item-inner" href="{{route('single-product',$sProduct->product_slug)}}">
											<div class="image">
												<img src="{{asset(($sProduct->productDefaultImage)?$sProduct->productDefaultImage->product_image:'http://placehold.it/150x110&amp;text='.str_replace('_', ' ', env('APP_NAME')))}}">
											</div>
											<div class="bottom-content">
												<h2 class="title">{{$sProduct->title}}</h2>
												<div class="bottom-box">
													<h2 class="price">${{number_format($sProduct->price)}}</h2>
													<h2 class="text">{{($sProduct->bedrooms)?$sProduct->bedrooms.' BR,':''}} {{($sProduct->bathrooms)?$sProduct->bathrooms.' BTH':''}}</h2>
												</div>
											</div>
										</a>
									</div>
								@endif
							@endforeach
							@if($rentalCount > 8)
								<div class="d-flex justify-content-center w-100">
									<a class="see-more-property" href="{{route('categroy-property','rentals')}}">See More</a>
								</div>
							@endif
						@endif
					</div>
				</div>
			</div>
		</div>
	</section> --}}
	<!-- //Rental Property List Section -->

	<!-- Sold Property List Section -->
	{{-- <section class="our-service-common-section margin-top-80">
		<div class="container">
			<div class="common-heading">
				<h3 class="sub-title">Sold Property</h3>
				<h2 class="title">Our Sold Property</h2>
			</div>
			<div class="row common-sidebar-and-content-wrapper pt-4">
				<div class="col-md-12">
					<div class="row real-estate-service-items-wrapper">
						@if(count($productData) > 0)
							@php
								$soldCount = 0
							@endphp
							@foreach($productData as $key => $sProduct)
								@if($sProduct->category == 'sold')
									@php
										$soldCount++
									@endphp
									@if($soldCount >4)
										@php
											break;
										@endphp
									@endif
									<div class="col-lg-3 col-md-4 col-sm-6 real-estate-service-item-outer">
										<a class="real-estate-service-item-inner" href="{{route('single-product',$sProduct->product_slug)}}">
											<div class="image">
												<img src="{{asset(($sProduct->productDefaultImage)?$sProduct->productDefaultImage->product_image:'http://placehold.it/150x110&amp;text='.str_replace('_', ' ', env('APP_NAME')))}}">
											</div>
											<div class="bottom-content">
												<h2 class="title">{{$sProduct->title}}</h2>
												<div class="bottom-box">
													<h2 class="price">${{number_format($sProduct->price)}}</h2>
													<h2 class="text">{{($sProduct->bedrooms)?$sProduct->bedrooms.' BR,':''}} {{($sProduct->bathrooms)?$sProduct->bathrooms.' BTH':''}}</h2>
												</div>
											</div>
										</a>
									</div>
								@endif
							@endforeach
							@if($soldCount > 4)
								<div class="d-flex justify-content-center w-100">
									<a class="see-more-property" href="{{route('categroy-property','sold')}}">See More</a>
								</div>
							@endif
						@endif
					</div>
				</div>
			</div>
		</div>
	</section> --}}
	<!-- //Sold Property List Section -->

	<!-- //Blog List Section -->
	{{-- <section class="blog-list-section">
		<div class="container">
			<div class="common-heading">
				<h3 class="sub-title">News & Events </h3>
				<h2 class="title">Latest News & Articles From Our Blog</h2>
			</div>
			<div class="row">
				@if(count($posts) > 0)
					@foreach($posts as $key => $post)
					@if($key >2)
						@php
							break;
						@endphp
					@endif
						<div class="col-md-4 col-sm-6 blog-item-outer">
							<div class="blog-item-inner">
								<a class="image" href="{{route('single-blog',$post->slug)}}">
									<img src="{{asset($post->image)}}">
								</a>
								<div class="content">
									<h3 class="meta">
										<span class="date">
											<i class="far fa-calendar-alt"></i>
											{{date("F d, Y", strtotime($post->updated_at))}} at {{date("H:i", strtotime($post->updated_at))}}
										</span>
									</h3>
									<a class="title" href="{{route('single-blog',$post->slug)}}">{{substr($post->title,0,50). "..."}}</a>
									<h3 class="info">{{substr(strip_tags($post->description),0,110) . "..."}}</h3>
								</div>
							</div>
						</div>
					@endforeach
				@endif
			</div>
		</div>
	</section> --}}
	<!-- //Blog List Section -->



	<!-- Client Opinion Section Slider -->
	{{-- <section class="home-client-opinion-section">
		<div class="container">
			<div class="heading">
				<h2 class="title">Testimonials</h2>
			</div>
			<div class="home-client-opinion-slider-wrapper owl-carousel">
				<div class="home-client-opinion-inner slider-item">
					<div class="image">
						<div class="inner">
							<img src="{{asset('assets/front')}}/image/client/client.jpg">
						</div>
					</div>
					<div class="client-info">
						<h2 class="name-city">Maria, New York</h2>
					</div>
					<div class="client-rating-and-date">
						<div class="client-rating">
							<span class="rating-icon"><i class="fas fa-star"></i></span>
							<span class="rating-icon"><i class="fas fa-star"></i></span>
							<span class="rating-icon"><i class="fas fa-star"></i></span>
							<span class="rating-icon"><i class="fas fa-star"></i></span>
							<span class="rating-icon"><i class="fas fa-star"></i></span>
						</div>
						<div class="date">
							<span>01-08-2020</span>
						</div>
					</div>
					<div class="client-qoute">
						<p>Everything was fast and flawless! When I had questions, I never had to wait long for an answer. Very efficient process. Easiest financing experience I’ve had.</p>
					</div>
				</div>
				<div class="home-client-opinion-inner slider-item">
					<div class="image">
						<div class="inner">
							<img src="{{asset('assets/front')}}/image/client/client-2.jpg">
						</div>
					</div>
					<div class="client-info">
						<h2 class="name-city">John, New York</h2>
					</div>
					<div class="client-rating-and-date">
						<div class="client-rating">
							<span class="rating-icon"><i class="fas fa-star"></i></span>
							<span class="rating-icon"><i class="fas fa-star"></i></span>
							<span class="rating-icon"><i class="fas fa-star"></i></span>
							<span class="rating-icon"><i class="fas fa-star"></i></span>
							<span class="rating-icon"><i class="fas fa-star"></i></span>
						</div>
						<div class="date">
							<span>09-08-2020</span>
						</div>
					</div>
					<div class="client-qoute">
						<p>Everything was fast and flawless! When I had questions, I never had to wait long for an answer. Very efficient process. Easiest financing experience I’ve had.</p>
					</div>
				</div>
				<div class="home-client-opinion-inner slider-item">
					<div class="image">
						<div class="inner">
							<img src="{{asset('assets/front')}}/image/client/client-3.jpg">
						</div>
					</div>
					<div class="client-info">
						<h2 class="name-city">Michael, New York</h2>
					</div>
					<div class="client-rating-and-date">
						<div class="client-rating">
							<span class="rating-icon"><i class="fas fa-star"></i></span>
							<span class="rating-icon"><i class="fas fa-star"></i></span>
							<span class="rating-icon"><i class="fas fa-star"></i></span>
							<span class="rating-icon"><i class="fas fa-star"></i></span>
							<span class="rating-icon"><i class="fas fa-star"></i></span>
						</div>
						<div class="date">
							<span>07-08-2020</span>
						</div>
					</div>
					<div class="client-qoute">
						<p>Everything was fast and flawless! When I had questions, I never had to wait long for an answer. Very efficient process. Easiest financing experience I’ve had.</p>
					</div>
				</div>
				<div class="home-client-opinion-inner slider-item">
					<div class="image">
						<div class="inner">
							<img src="{{asset('assets/front')}}/image/client/Testimonial 4.jpg">
						</div>
					</div>
					<div class="client-info">
						<h2 class="name-city">Martha, New York</h2>
					</div>
					<div class="client-rating-and-date">
						<div class="client-rating">
							<span class="rating-icon"><i class="fas fa-star"></i></span>
							<span class="rating-icon"><i class="fas fa-star"></i></span>
							<span class="rating-icon"><i class="fas fa-star"></i></span>
							<span class="rating-icon"><i class="fas fa-star"></i></span>
							<span class="rating-icon"><i class="fas fa-star"></i></span>
						</div>
						<div class="date">
							<span>15-10-2020</span>
						</div>
					</div>
					<div class="client-qoute">
						<p>Everything was fast and flawless! When I had questions, I never had to wait long for an answer. Very efficient process. Easiest financing experience I’ve had.</p>
					</div>
				</div>
				<div class="home-client-opinion-inner slider-item">
					<div class="image">
						<div class="inner">
							<img src="{{asset('assets/front')}}/image/client/Testimonial-5.jpg">
						</div>
					</div>
					<div class="client-info">
						<h2 class="name-city">William, New York</h2>
					</div>
					<div class="client-rating-and-date">
						<div class="client-rating">
							<span class="rating-icon"><i class="fas fa-star"></i></span>
							<span class="rating-icon"><i class="fas fa-star"></i></span>
							<span class="rating-icon"><i class="fas fa-star"></i></span>
							<span class="rating-icon"><i class="fas fa-star"></i></span>
							<span class="rating-icon"><i class="fas fa-star"></i></span>
						</div>
						<div class="date">
							<span>05-09-2020</span>
						</div>
					</div>
					<div class="client-qoute">
						<p>Everything was fast and flawless! When I had questions, I never had to wait long for an answer. Very efficient process. Easiest financing experience I’ve had.</p>
					</div>
				</div>
				<div class="home-client-opinion-inner slider-item">
					<div class="image">
						<div class="inner">
							<img src="{{asset('assets/front')}}/image/client/Testimonial-6.jpg">
						</div>
					</div>
					<div class="client-info">
						<h2 class="name-city">James, New York</h2>
					</div>
					<div class="client-rating-and-date">
						<div class="client-rating">
							<span class="rating-icon"><i class="fas fa-star"></i></span>
							<span class="rating-icon"><i class="fas fa-star"></i></span>
							<span class="rating-icon"><i class="fas fa-star"></i></span>
							<span class="rating-icon"><i class="fas fa-star"></i></span>
							<span class="rating-icon"><i class="fas fa-star"></i></span>
						</div>
						<div class="date">
							<span>24-08-2020</span>
						</div>
					</div>
					<div class="client-qoute">
						<p>Everything was fast and flawless! When I had questions, I never had to wait long for an answer. Very efficient process. Easiest financing experience I’ve had.</p>
					</div>
				</div>
			</div>
		</div>
	</section> --}}
	<!-- //Client Opinion Section Slider -->
	<!-- Recognized-by-section -->



    <section class="profile-main-section our-service-common-section margin-top-80 mt-5 mb-0">
        <div class="container">
            <div class="row common-sidebar-and-content-wrapper justify-content-center">
                <div class="col-md-7 col-sm-12 common-width-box profile-content-wrapper">
					<div class="buyer-desc">
						<div class="common-heading">
							<h2 class="title">{{$g_company_data->buyer_require_title}}</h2>
						</div>
						<div class="common-description">
							<div class="px-4 text-justify">
								{!! str_replace('http://localhost/Home-And-Habitat-Realty/', asset(''), $g_company_data->buyer_require_desc) !!}
							</div>
						</div>
					</div>
            	</div>
        	</div>
        </div>
    </section>



	@include('front._partials.recognized-by')
	<!-- //Recognized-by-section -->
@endsection