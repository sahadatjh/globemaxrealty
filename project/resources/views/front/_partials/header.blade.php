<header class="header-main intro-banner">
	<!-- Navbar Wrappper Start -->
	<div class="header-inner-wrapper">
		<nav class="navbar-main">
			<div class="logo-section">
				<a class="brand-logo" href="{{route('home')}}">
					<img src="{{asset((isset($g_company_data->header_logo))?$g_company_data->header_logo:'')}}">
				</a>

				<button class="navbar-menu-toggle-btn">
					<span class="toggler-icon-bar"></span>
				</button>
			</div>
			<div class="nav-items-wrapper">
				<ul class="nav-item-inner-wrapper">
					<li class="nav-item-main">
						<a class="nav-item-link" href="{{route('home')}}">Home</a>
					</li>

					<li class="nav-item-main">
						<a class="nav-item-link" href="{{route('about-us')}}">About Us</a>
					</li>

					<li class="nav-item-main">
						<a class="nav-item-link" href="{{route('our-team')}}">Our Team</a>
					</li>

					<li class="nav-item-main">
						<a class="nav-item-link" href="{{ route('buyer-requirements') }}">Buyer Requirements</a>
					</li>

					<li class="nav-item-main">
						<a class="nav-item-link" href="{{route('mortgage-calculator')}}">Mortgage Calculator</a>
					</li>

					{{-- <li class="nav-item-main">
						<a class="nav-item-link" href="https://www.bankrate.com/mortgages/mortgage-rates/" target="_blank">Todays Rates</a>
					</li> --}}

					<li class="nav-item-main">
						<a class="nav-item-link" href="{{route('all-steps-to-selling')}}">SELLER GUIDES</a>
					</li>

					<li class="nav-item-main">
						<a class="nav-item-link" href="{{route('consultation')}}">Free Consultation</a>
					</li>

					<li class="nav-item-main">
						<a class="nav-item-link" href="{{route('contact-us')}}">Contact</a>
					</li>


					{{-- <li class="nav-item-main item-has-submenu">
						<a class="nav-item-link" href="{{route('about-us')}}">About Us</a>
						<ul class="nav-item-submenu service-list">
							
							
							<li class="nav-item-submenu-item">
								<a class="nav-item-submenu-item-link" href="{{route('award-recognition')}}">Award & Recognitions</a>
							</li>
							<li class="nav-item-submenu-item">
								<a class="nav-item-submenu-item-link" href="{{route('join-the-team')}}">Join The Team</a>
							</li>
						</ul>
					</li>

					<li class="nav-item-main item-has-submenu">
						<a class="nav-item-link" href="{{route('property-listing')}}">Listing</a>
						<ul class="nav-item-submenu service-list">
							@if(count($g_categories) > 0)
								@foreach($g_categories as $key => $gCategory)
									@if($gCategory->slug == 'sold' || $gCategory->slug == 'rentals')
										@continue
									@endif
									<li class="nav-item-submenu-item">
										<a class="nav-item-submenu-item-link" href="{{route('categroy-property',$gCategory->slug)}}">{{$gCategory->category_name}}</a>
									</li>
								@endforeach
							@endif
						</ul>
					</li>
					<li class="nav-item-main item-has-submenu">
						<a class="nav-item-link" href="javascript:void(0)">Services</a>
						<ul class="nav-item-submenu service-list">
							<li class="nav-item-submenu-item">
								<a class="nav-item-submenu-item-link" href="{{route('real-estate-services')}}">Real Estate Services</a>
							</li>
							<li class="nav-item-submenu-item">
								<a class="nav-item-submenu-item-link" href="{{route('consultation')}}">Free Consultation</a>
							</li>
							<li class="nav-item-submenu-item">
								<a class="nav-item-submenu-item-link" href="{{route('property-tours')}}">Property Tours</a>
							</li>
							<li class="nav-item-submenu-item">
								<a class="nav-item-submenu-item-link" href="{{route('buyer-tips')}}">Buyer Tips</a>
							</li>
							<li class="nav-item-submenu-item">
								<a class="nav-item-submenu-item-link" href="{{route('seller-tips')}}">Seller Tips</a>
							</li>
							<li class="nav-item-submenu-item">
								<a class="nav-item-submenu-item-link" href="{{route('real-estate-staging')}}">Real Estate Staging</a>
							</li>
							<li class="nav-item-submenu-item">
								<a class="nav-item-submenu-item-link" href="{{route('fair-housing-policy')}}">Fair Housing Policy</a>
							</li>
							<li class="nav-item-submenu-item">
								<a class="nav-item-submenu-item-link" href="{{route('energy-tips')}}">Energy Tips</a>
							</li>
							<li class="nav-item-submenu-item">
								<a class="nav-item-submenu-item-link" href="{{route('property-management')}}">Property Management</a>
							</li>
						</ul>
					</li>
					<li class="nav-item-main item-has-submenu">
						<a class="nav-item-link" href="javascript:void(0)">Buyer Guides</a>
						<ul class="nav-item-submenu service-list">
							<li class="nav-item-submenu-item">
								<a class="nav-item-submenu-item-link" href="{{route('get-pre-approved')}}">Get Pre-Approved</a>
							</li>

							<li class="nav-item-submenu-item">
								<a class="nav-item-submenu-item-link" href="{{route('buying-multi-family')}}">Buying A Multi Family</a>
							</li>
							<li class="nav-item-submenu-item">
								<a class="nav-item-submenu-item-link" href="{{route('calculators')}}">Calculators</a>
							</li>
							<li class="nav-item-submenu-item">
								<a class="nav-item-submenu-item-link" href="{{route('covid-19')}}">Covid-19</a>
							</li>
						</ul>
					</li>
					<li class="nav-item-main item-has-submenu">
						<a class="nav-item-link" href="javascript:void(0)">Seller Guides</a>
						<ul class="nav-item-submenu service-list">
							<li class="nav-item-submenu-item">
								<a class="nav-item-submenu-item-link" href="{{route('free-home-valuation')}}">Free Queens Home Valuation</a>
							</li>
							<li class="nav-item-submenu-item">
								<a class="nav-item-submenu-item-link" href="{{route('seller-closing-costs')}}">Seller Closing Costs</a>
							</li>
							<li class="nav-item-submenu-item">
								<a class="nav-item-submenu-item-link" href="{{route('local-market-reports')}}">Local Market Reports</a>
							</li>
							<li class="nav-item-submenu-item">
								<a class="nav-item-submenu-item-link" href="{{route('all-steps-to-selling')}}">25 Steps To Selling In Queens</a>
							</li>
							<li class="nav-item-submenu-item">
								<a class="nav-item-submenu-item-link" href="{{route('faq')}}">FAQS</a>
							</li>
							<li class="nav-item-submenu-item">
								<a class="nav-item-submenu-item-link" href="{{route('consultation')}}">Free Consultation</a>
							</li>
							<li class="nav-item-submenu-item">
								<a class="nav-item-submenu-item-link" href="{{route('covid-19')}}">Covid-19</a>
							</li>
						</ul>
					</li>
					<li class="nav-item-main">
						<a class="nav-item-link" href="{{route('all-blog')}}">Blog</a>
					</li>
					<li class="nav-item-main">
						<a class="nav-item-link" href="{{route('testimonials')}}">Testimonials</a>
					</li>
					<li class="nav-item-main">
						<a class="nav-item-link" href="{{route('contact-us')}}">Contact</a>
					</li> --}}
				</ul>
			</div>
		</nav>
	</div>
	<!-- Navbar Wrappper End -->
</header>
