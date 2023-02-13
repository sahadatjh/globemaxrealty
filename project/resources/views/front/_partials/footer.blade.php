<footer class="footer-main">
	<div class="container">
		<div class="footer-top-box">
			<div class="row">
				<div class="col-md-2">
					<div class="footer-nav-item-wrapper">
						<div class="footer-logo-box">
							<!-- <a class="link" href="">
								<img src="assets/logo/logo-1.png">
							</a> -->
							<a class="company" href="">
								<h2 class="title">{{str_replace('_', ' ', env('APP_NAME'))}}.</h2>
								{{-- <h3 class="subtitle"></h3> --}}
							</a>
						</div>
						<ul class="footer-nav-item-inner">
							<li class="footer-nav-item">
								<span class="icon"><i class="fas fa-phone"></i></span>
								<a class="link" href="tel:{{$g_company_data->number}}">{{$g_company_data->number}}</a>
							</li>
							@if($g_company_data->number_2)
								<li class="footer-nav-item">
									<span class="icon"><i class="fas fa-phone"></i></span>
									<a class="link" href="tel:{{$g_company_data->number_2}}">{{$g_company_data->number_2}}</a>
								</li>
							@endif
							@if($g_company_data->number_3)
								<li class="footer-nav-item">
									<span class="icon"><i class="fas fa-phone"></i></span>
									<a class="link" href="tel:{{$g_company_data->number_3}}">{{$g_company_data->number_3}}</a>
								</li>
							@endif
							<li class="footer-nav-item">
								<span class="icon"><i class="far fa-envelope"></i></span>
								<a class="link" href="mailto:{{$g_company_data->email}}">{{$g_company_data->email}}</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-3">
					<div class="footer-nav-item-wrapper">
						<div class="heading">
							<h2 class="title">Address</h2>
						</div>
						<ul class="footer-nav-item-inner">
							<li class="footer-nav-item">
								<span class="icon mr-0"><i class="fas fa-map-marker-alt"></i></span>
								<div class="title address">
									{!! $g_company_data->address !!}
								</div>
							</li>

							@if($g_company_data->address_2)
								<li class="footer-nav-item">
									<span class="icon mr-0"><i class="fas fa-map-marker-alt"></i></span>
									<div class="title address">
										{!! $g_company_data->address_2 !!}
									</div>
								</li>
							@endif
						</ul>
					</div>
				</div>
				<div class="col-md-2">
					<div class="footer-nav-item-wrapper">
						<div class="heading">
							<h2 class="title">Info</h2>
						</div>
						<ul class="footer-nav-item-inner">
							<li class="footer-nav-item">
								<a class="link" href="{{route('about-us')}}">About Us</a>
							</li>
							<li class="footer-nav-item">
								<a class="link" href="{{route('our-team')}}">Our Team</a>
							</li>
							{{-- <li class="footer-nav-item">
								<a class="link" href="{{route('consultation')}}">Free Consultation</a>
							</li> --}}
							<li class="footer-nav-item">
								<a class="link" href="{{route('usefull-link')}}">Useful Link</a>
							</li>
							<li class="footer-nav-item">
								<a class="link" href="{{route('contact-us')}}">Contact Us</a>
							</li>
						</ul>
						<div class="content footer-google-translate-wrapper">
							<!-- Google Translate -->
							<div id="google_translate_element"></div>
							<script type="text/javascript">
								function googleTranslateElementInit() {
								  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
								}
							</script>
						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="footer-nav-item-wrapper">
						<div class="heading">
							<h2 class="title">More Info</h2>
						</div>
						<ul class="footer-nav-item-inner">
							<li class="footer-nav-item">
								<a class="link" href="{{ route("buyer-requirements") }}">Buyer Requirement</a>
							</li>
							<li class="footer-nav-item">
								<a class="link" href="{{route('mortgage-calculator')}}">Mortgage Calculator</a>
							</li>

							{{-- <li class="footer-nav-item">
								<a class="link" href="{{route('all-steps-to-selling')}}">SELLER GUIDES</a>
							</li> --}}

							<li class="footer-nav-item">
								<a class="link" href="https://www.bankrate.com/mortgages/mortgage-rates/" target="_blank">Today's Rates</a>
							</li>

							<li class="footer-nav-item">
								<a class="link" href="{{route('terms-of-use')}}">Terms of Use</a>
							</li>
							<li class="footer-nav-item">
								<a class="link" href="{{route('privacy-policy')}}">Privacy Policy</a>
							</li>
							
						</ul>
					</div>
				</div>
				<div class="col-md-3">
					<div class="footer-nav-item-wrapper gt-working-hours">
						<div class="heading">
							<h2 class="title">Working Hours</h2>
						</div>
						<ul class="footer-nav-item-inner gt-working-hours-item-wrapper">
							<li class="footer-nav-item gt-working-hours-item">
								{!! $g_company_data->opening_hours !!}
							</li>
						</ul>
						<a class="footer-find-facebook" target="_blank" href="{{$g_company_data->facebook_url}}">
							<img src="{{asset('assets/front')}}/image/fb.png">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="copyright">
		Copyright © {{str_replace('_', ' ', env('APP_NAME'))}}, {{date('Y')}}
		 {{-- | <a class="link" href="{{route('terms-of-use')}}">Terms of Use |</a>  --}}
		 Website Developed & Maintenance by <a class="link dev" href="https://bijoytech.com/"><img src="{{asset('assets/front')}}/logo/footer-logo-vt.png"></a>
	</div>
</footer>