@extends('layouts.front')
@section('content')
	<!-- Property List Section -->
	<section class="our-service-common-section margin-top-80">
		<div class="container">
			<div class="common-heading">
				<h3 class="sub-title">Property Listing</h3>
				<h2 class="title">Our All Property</h2>
			</div>
			<div class="row common-sidebar-and-content-wrapper pt-4 {{ request()->is('property-listing/open-houses') ? 'open-houses' : '' }}">
				<div class="col-md-12">
					<div class="row real-estate-service-items-wrapper">
						@if(count($productData) > 0)
							@foreach($productData as $key => $sProduct)
								<div class="col-lg-3 col-md-4 col-sm-6 real-estate-service-item-outer">
									<a class="real-estate-service-item-inner" href="{{route('single-product',$sProduct->product_slug)}}">
										<div class="image">
											<span class="label">{{$sProduct->categoryData['category_name']}}</span>
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
							@endforeach
							@if(count($productData) > 12)
								<div class="col-md-12 py-5 d-flex justify-content-end">
									{{$productData->links()}}
								</div>
							@endif
						@endif
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- //Property List Section -->
@endsection