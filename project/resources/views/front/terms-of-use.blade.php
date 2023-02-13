@extends('layouts.front')

@section('content')
	<!-- Common content Section Start -->
	<section class="common-content-section pb-4">
		<div class="col-md-8 m-auto main-common-contents-wrapper pt-5">
			{!! str_replace('http://localhost/Home-And-Habitat-Realty/', asset(''), $g_company_data->terms_of_use) !!}
        </div>
    </section>
	<!-- Common content Section End -->
@stop