@extends('layouts.front')
@section('content')
<!-- //Blog List Section -->
<section class="blog-list-section {{(count($posts) > 12)?'pt-5':'py-5'}}">
	<div class="container">
		<div class="common-heading">
			<h3 class="sub-title">News & Events </h3>
			<h2 class="title">Latest News & Articles From Our Blog</h2>
		</div>
		<div class="row">
			@if(count($posts) > 0)
				@foreach($posts as $key => $post)
				{{-- @if($key >2)
					@php
						break;
					@endphp
				@endif --}}
					<div class="col-md-4 col-sm-6 blog-item-outer">
						<div class="blog-item-inner">
							<a class="image" href="{{route('single-blog',$post->slug)}}">
								<img src="{{asset($post->image)}}">
							</a>
							<div class="content">
								<h3 class="meta">
									<span class="date">
										{{-- <i class="far fa-clock"></i> --}}
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
				@if(count($posts) > 12)
					<div class="col-md-12 py-5 d-flex justify-content-end">
						{{$posts->links()}}
					</div>
				@endif
			@endif
		</div>
	</div>
</section>
<!-- //Blog List Section -->
@stop