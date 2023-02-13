<div class="home-about-us-left-box">
	<div class="home-about-us-left-item">
		<div class="heading">
			<h2 class="title">Quick Contact</h2>
		</div>
		<div class="content">
			<ul class="about-us-usefull-links-wrapper">
				<li class="company-name">
					{{str_replace('_', ' ', env('APP_NAME'))}}.
				</li>
				<li class="contact">
					<span class="title">Tel:</span>
					<a class="link" href="tel:{{$g_company_data->number}}">
						{{$g_company_data->number}}
					</a>
				</li>
				@if($g_company_data->number_2)
				<li class="contact">
					<span class="title">Tel:</span>
					<a class="link" href="tel:{{$g_company_data->number_2}}">
						{{$g_company_data->number_2}}
					</a>
				</li>
				@endif
				@if($g_company_data->number_3)
				<li class="contact">
					<span class="title">Tel:</span>
					<a class="link" href="tel:{{$g_company_data->number_3}}">
						{{$g_company_data->number_3}}
					</a>
				</li>
				@endif
				<li class="contact">
					<span class="title">Email:</span>
					<a class="link" href="mailto:{{$g_company_data->email}}">
						{{$g_company_data->email}}
					</a>
				</li>
				<li class="address">
					{!! $g_company_data->address !!}
				</li>
				<li class="address">
					{!! $g_company_data->address_2 !!}
				</li>
			</ul>
		</div>
	</div>
	<div class="home-about-us-left-item">
		<div class="heading">
			<h2 class="title">More Information</h2>
		</div>
		<div class="content">
			<a class="find-facebook" target="_blank" href="{{$g_company_data->facebook_url}}">
				<img src="{{asset('assets/front')}}/image/fb.png">
			</a>
		</div>
	</div>
	{{-- <div class="home-about-us-left-item">
		<div class="heading">
			<h2 class="title">Helpful Links</h2>
		</div>
		<div class="content">
			<ul class="about-us-usefull-links-wrapper icon">
				<li class="usefull-link-item">
					<a class="link" href="">Tax Forms</a>
				</li>
			</ul>
		</div>
	</div> --}}
	<!-- Google Translate -->
	<!-- <div class="home-about-us-left-item">
		<div class="heading">
			<h2 class="title">Translate</h2>
		</div>
		<div class="content">
			<div id="google_translate_element"></div>
			<script type="text/javascript">
				function googleTranslateElementInit() {
				  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
				}
			</script>
		</div> 
	</div>-->
	<!-- <div class="home-about-us-left-item">
		<div class="content">
			<ul class="about-us-usefull-links-wrapper employees">
				<li class="usefull-link-item">
					<a class="link" href="https://app.globalgroupny.com/dashboard">
						<span class="icon"></span>
					 	For Global Employees
					</a>
				</li>
			</ul>
		</div>
	</div> -->
</div>