@extends('layouts.front')
@section('content')

	<div class="single-property-wrapper">
		<section class="section-detail-content">
		    <div class="container">
		        <div class="row justify-content-center">
		            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 container-contentbar">
		            	<div class="detail-top detail-top-grid">
						    <div class="container">
				                <div class="header-detail">
				                    <div class="header-left">
				                        <ol class="breadcrumb">
				                            <li>
				                                <a href="{{route('home')}}"><span>Home</span></a>
				                            </li>
				                            <li>
				                                <a href="{{route('categroy-property',$productData->category)}}"><span>{{($productData->categoryData)?$productData->categoryData->category_name:''}}</span></a>
				                            </li>
				                            <li class="active">{{$productData['title']}}</li>
				                        </ol>
				                        <div class="table-list">
				                            <div class="table-cell"><h1>{{$productData['title']}} <span class="label-status label-status-117 label label-default"><a href="{{route('categroy-property',$productData->category)}}">{{($productData->categoryData)?$productData->categoryData->category_name:''}}</a></span></h1></div>
				                        </div>

				                        <address class="property-address">
				                        	{{$productData['address']}},
				                        	{{$productData['city']}},
				                        	{{$productData['state']}},
				                        	{{$productData['zip']}},
				                        	{{$productData['country']}},
				                        </address>
				                    </div>
				                    <div class="header-right">
				                        <ul class="actions">
				                            <li class="share-btn">
				                                <div class="share_tooltip tooltip_left fade">
				                                    <a href="">
				                                        <i class="fa fa-facebook"></i>
				                                    </a>
				                                    <a href="">
				                                        <i class="fa fa-twitter"></i>
				                                    </a>

				                                    <a href="">
				                                        <i class="fa fa-pinterest"></i>
				                                    </a>

				                                    <a href="">
				                                        <i class="fa fa-linkedin"></i>
				                                    </a>

				                                    <a href="">
				                                        <i class="fa fa-google-plus"></i>
				                                    </a>
				                                    <a href="mailto:"><i class="fa fa-envelope"></i></a>
				                                </div>
				                                <span title="" data-placement="right" data-toggle="tooltip" data-original-title="share"><i class="fa fa-share-alt"></i></span>
				                            </li>
				                            <li class="print-btn">
				                                <span data-toggle="tooltip" data-placement="right" data-original-title="Print" onclick="proprtyPrintFunction()"><i id="houzez-print" class="fa fa-print" data-propid="146"></i></span>
				                            </li>
				                        </ul>
				                        <span class="item-price">${{number_format($productData['price'])}}</span>
				                        @php
				                        	$spPrice = $productData['price'];
				                        	$spSize = $productData['size'];
				                        	$pricePerPt = ($productData['price']/$productData['size']);
				                        @endphp
				                        <span class="item-sub-price">${{number_format($pricePerPt, 2)}}/Sq. Ft</span>
				                    </div>
				                </div>
				                <div class="detail-media">
				                    <!-- Main Slider -->
									<section class="home-slider-section mb-4">
										<div class="home-main-slider-inner owl-carousel " id="product-gallery">
											@if(count($productData->productImages) > 0)
									        	@foreach($productData->productImages as $key => $pSliderItem)
									        		<div class="item gallitem" data-src="{{asset($pSliderItem->product_image)}}">
											            <img class="img-fluid blur-up lazyload" src="{{asset($pSliderItem->product_image)}}" alt="">
											        </div>  
									        	@endforeach   
									        @endif   
									    </div>
									</section>
									<!-- //Main Slider -->
				                </div>
						    </div>
						</div>
		                <div class="detail-bar">
		                    <div id="description" class="property-description detail-block target-block">
		                        <div class="detail-title">
		                            <h2 class="title-left">Description</h2>
		                        </div>
		                        <p>{!!nl2br($productData['description'])!!}</p>
		                    </div>
		                    <div id="address" class="detail-address detail-block target-block">
		                        <div class="detail-title">
		                            <h2 class="title-left">Address</h2>
		                            <div class="title-right">
		                            	@if($productData['map_link'])
		                                	<a target="_blank" href="{{$productData['map_link']}}">Open on Google Maps <i class="fa fa-map-marker"></i></a>
		                                @endif
		                            </div>
		                        </div>
		                        <ul class="list-three-col">
		                            <li class="detail-address"><strong>Address:</strong> {{$productData['address']}}</li>
		                            <li class="detail-city"><strong>City:</strong> {{$productData['city']}}</li>
		                            <li class="detail-state"><strong>State/county:</strong> {{$productData['state']}}</li>
		                            <li class="detail-zip"><strong>Zip/Postal Code:</strong> {{$productData['zip']}}</li>
		                            <li class="detail-country"><strong>Country:</strong> {{$productData['country']}}</li>
		                        </ul>
		                    </div>
		                    <div id="detail" class="detail-list detail-block target-block">
		                        <div class="detail-title">
		                            <h2 class="title-left">Details</h2>

		                            <div class="title-right">
		                                <p>Updated on {{$infoUpdated = date("F d, Y", strtotime($productData['updated_at']))}} at {{$infoUpdated = date("H:i", strtotime($productData['updated_at']))}}</p>
		                            </div>
		                        </div>
		                        <div class="alert alert-info">
		                            <ul class="list-three-col">
		                                <li><strong>Property ID:</strong> {{$productData['property_id']}}</li>
		                                <li><strong>Price:</strong> ${{number_format($productData['price'])}}</li>
		                                <li><strong>Property Size:</strong> {{$productData['size']}} Sq. Ft</li>
		                                <li><strong>Bedrooms:</strong> {{$productData['bedrooms']}}</li>
		                                <li><strong>Bathrooms:</strong> {{$productData['bathrooms']}}</li>
		                                <li><strong>Garage:</strong> {{$productData['garage']}}</li>
		                                <li><strong>Garage Size:</strong> {{$productData['garage_size']}} Sq. Ft</li>
		                                <li><strong>Year Built:</strong> {{$productData['year_built']}}</li>
		                                <li class="prop_type"><strong>Property Type:</strong> {{($productData->categoryData)?$productData->categoryData->category_name:''}}</li>
		                                <li class="prop_status"><strong>Property Status:</strong> {{$productData['label']}}</li>
		                            </ul>
		                        </div>

		                        <div class="detail-title-inner">
		                            <h4 class="title-inner">Additional Details</h4>
		                        </div>
		                        <ul class="list-three-col">
		                            {!! $productData['additional_details'] !!}
		                        </ul>
		                    </div>
		                    <div id="features" class="detail-features detail-block target-block">
		                        <div class="detail-title">
		                            <h2 class="title-left">Features</h2>
		                        </div>
		                        <ul class="list-three-col list-features">
		                            {!! $productData['features'] !!}
		                        </ul>
		                    </div>

		                    <div id="floor_plan" class="property-plans detail-block target-block">
		                        <div class="detail-title">
		                            <h2 class="title-left">Floor Plans</h2>
		                        </div>
		                        <div class="accord-block">
		                        	@if(count($productData->productFloorPlans) > 0)
	                        		<div id="floorPlanAccordion">
		                        		@foreach($productData->productFloorPlans as $pFloorPlan)
											<div class="card">
												<div class="card-header" id="headingOne">
													<h5 class="mb-0">
														<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#floorPlanCollapse{{$pFloorPlan->id}}" aria-expanded="true" aria-controls="floorPlanCollapse{{$pFloorPlan->id}}">
															<h3 class="title">{{$pFloorPlan->floor_title}}</h3>
															<div class="details">
																{!! $pFloorPlan->description !!}
															</div>
															<h3 class="price"><b>Price:</b>${{number_format($pFloorPlan->price)}}</h3>
															<span class="main-icon"><i class="fas fa-chevron-up"></i></span>
													</button>
													</h5>
												</div>

												<div id="floorPlanCollapse{{$pFloorPlan->id}}" class="collapse" aria-labelledby="headingOne" data-parent="#floorPlanAccordion">
													<div class="card-body">
														<img src="{{asset($pFloorPlan->image)}}">
														<p>{{$pFloorPlan->info}}</p>
													</div>
												</div>
											</div>
		                        		@endforeach
									</div>
		                        	@endif
		                        </div>
		                    </div>
		                    <div id="video" class="property-video detail-block target-block">
		                        <div class="detail-title">
		                            <h2 class="title-left">Video</h2>
		                        </div>
		                        <div class="row video-block">
		                           	@if($productData['video'])
		                           		@foreach($productData['video'] as $sPVideo)
				                           <div class="col-md-4 video-item">
				                           		<iframe width="560" height="250" src="{{str_replace('watch?v=','embed/', $sPVideo)}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				                           </div>
		                           		@endforeach
		                           	@endif
		                        </div>
		                    </div>
		                    <div id="agent_bottom" class="detail-contact detail-block target-block">
		                        <div class="detail-title">
		                            <h2 class="title-left">Contact Info</h2>
		                            <div class="title-right">
		                                <strong><a href=""></a></strong>
		                            </div>
		                        </div>

		                        <form method="post" action="{{route('property-contact-mail')}}">
		                        	@csrf
		                        	<div class="contact-info">
		                            	{!! $productData['contact_info'] !!}
		                        	</div>
		                            <input type="hidden" name="target_email" value=""
		                            />
		                            <input type="hidden" name="property_permalink" value="{{route('single-product',$productData['product_slug'])}}" />
		                            <input type="hidden" name="property_title" value="{{$productData['title']}}" />
		                            <div class="row mt-5">
		                                <div class="col-sm-4 col-xs-12">
		                                    <div class="form-group">
		                                        <input class="form-control" name="name" value="" placeholder="Your Name" type="text" />
		                                    </div>
		                                </div>
		                                <div class="col-sm-4 col-xs-12">
		                                    <div class="form-group">
		                                        <input class="form-control" name="phone" value="" placeholder="Phone" type="text" required/>
		                                    </div>
		                                </div>
		                                <div class="col-sm-4 col-xs-12">
		                                    <div class="form-group">
		                                        <input
		                                            class="form-control"
		                                            name="email"
		                                            value=""
		                                            placeholder="Email"
		                                            type="email" required/>
		                                    </div>
		                                </div>
		                                <div class="col-sm-12 col-xs-12">
		                                    <div class="form-group">
		                                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required>Hello, I am interested in [{{$productData['title']}}]</textarea>
		                                    </div>
		                                </div>

		                                <div class="col-sm-12 col-xs-12"></div>
		                            </div>
		                            <button class="agent_contact_form btn btn-secondary">Request info</button>
		                            <div class="form_messages"></div>
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


		            <div class="col-lg-4 col-md-8 col-sm-12 col-xs-12 col-md-offset-0 col-sm-offset-3 container-sidebar mb-5">
		                <aside id="sidebar" class="sidebar-white">
		                    <div id="houzez_properties-2" class="widget widget_houzez_properties">
		                        <div class="widget-top"><h3 class="widget-title">Properties</h3></div>

		                        <div class="widget-body">
		                        	@if(count($otherProducts) >0)
		                        		@foreach($otherProducts as $key => $otherProduct)
				                            <div class="media">
				                                <div class="media-left">
				                                    <figure class="item-thumb">
				                                        <a class="hover-effect" href="{{route('single-product',$otherProduct->product_slug)}}"><img src="{{asset(($otherProduct->productDefaultImage)?$otherProduct->productDefaultImage->product_image:'http://placehold.it/150x110&amp;text='.str_replace('_', ' ', env('APP_NAME')))}}"/></a>
				                                    </figure>
				                                </div>
				                                <div class="media-body">
				                                    <h3 class="media-heading"><a href="{{route('single-product',$otherProduct->product_slug)}}">{{$otherProduct->title}}</a></h3>
				                                    <p><span class="item-price item-price-text">{{number_format($otherProduct->price)}}</span></p>
				                                    <div class="amenities">
				                                        <p>{{$otherProduct->bedrooms}} Beds •
				                                        {{$otherProduct->bathrooms}} Baths •
				                                        {{$otherProduct->size}} Sq. Ft</p>
				                                        <p>{{($otherProduct->categoryData)?$otherProduct->categoryData->category_name:''}}</p>
				                                    </div>
				                                </div>
				                            </div>
			                            @endforeach
			                        @else
			                        <p>No Related Property Found</p>
			                        @endif
		                        </div>
		                    </div>
		                </aside>
		            </div>
		        </div>
		    </div>
		</section>
	</div>



@stop