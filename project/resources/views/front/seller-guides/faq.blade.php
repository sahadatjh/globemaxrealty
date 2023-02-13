@extends('layouts.front')

@section('content')
	<!-- Page Content Start -->
	<section class="our-service-common-section margin-top-80">
		<div class="container">
			<div class="row common-sidebar-and-content-wrapper justify-content-center">
				<div class="col-md-10 common-width-box our-service-content-wrapper">
					<div class="common-heading mb-5">
						<h2 class="title">FAQ</h2>
						<h2 class="sub-title">{{str_replace('_', ' ', env('APP_NAME'))}} run by professionals</h2>
					</div>
					<div id="floor_plan" class="property-plans detail-block target-block">
                        <div class="accord-block">
                        	@if(count($faqData) > 0)
                        		<div id="FAQAccordion" class="faq-accordion-item">
                        		@foreach($faqData as $faq)
									<div class="card">
										<div class="card-header" id="heading{{$faq->id}}">
											<h5 class="mb-0">
												<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#faqCollapse{{$faq->id}}" aria-expanded="true" aria-controls="faqCollapse{{$faq->id}}">
													<h3 class="title">{{$faq->title}}</h3>
													<span class="main-icon"><i class="fas fa-chevron-up"></i></span>
											</button>
											</h5>
										</div>

										<div id="faqCollapse{{$faq->id}}" class="collapse" aria-labelledby="heading{{$faq->id}}" data-parent="#FAQAccordion">
											<div class="card-body">
												<img src="{{asset($faq->image)}}">
												<p>{!! nl2br($faq->description) !!}</p>
											</div>
										</div>
									</div>
                        		@endforeach
							</div>
                        	@endif
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</section>
	<script type="text/javascript">
		$('#FAQAccordion .card-header').click(function(){
			var thisParent = $(this).closest('.faq-accordion-item')
	        setTimeout(function(){
	        	theOffset = thisParent.offset();
	        	$('body,html').animate({
		            scrollTop: theOffset.top - 150
		        },300);
	        },100);
		});
	</script>
	<!-- Page Content End -->
@stop