@extends('layouts.front')
@section('content')
<!-- //Blog List Section -->
<section class="single-blog-section pt-5">
	<div class="container">
		<div class="row">
			<div class="col-md-8 single-blog-outer">
				<div class="single-blog-inner">
					<div class="image">
						<img src="{{asset($post->image)}}">
					</div>
					<div class="content">
						<h3 class="meta">
							<span class="date">
								{{-- <i class="far fa-clock"></i> --}}
								<i class="far fa-calendar-alt"></i>
								{{date("F d, Y", strtotime($post->updated_at))}} at {{date("H:i", strtotime($post->updated_at))}}
							</span>
						</h3>
						<h2 class="title">{{$post->title}}</h2>
						<div class="info">{!! $post->description !!}</div>
					</div>
				</div>
			</div>	
			<div class="col-md-4">
				<div class="side-post-item-wrapper">
					<h2 class="main-heading">Other Posts</h2>
					@if(count($posts)> 0)
						@foreach($posts as $key => $post)
							@if($key >7)
								@php
									break;
								@endphp
							@endif
							<a class="side-post-item" href="">
								<div class="image">
									<img src="{{asset($post->image)}}">
								</div>
								<div class="content">
									<h3 class="meta">
										<span class="date">
											{{-- <i class="far fa-clock"></i> --}}
											<i class="far fa-calendar-alt"></i>
											{{date("F d, Y", strtotime($post->updated_at))}} at {{date("H:i", strtotime($post->updated_at))}}
										</span>
									</h3>
									<h3 class="title">{{substr($post->title,0,40). "..."}}</h3>
									<h3 class="info">{{substr(strip_tags($post->description),0,60) . "..."}}</h3>
								</div>
							</a>
						@endforeach
					@else
					<p>No Post Found</p>
					@endif
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //Blog List Section -->
@stop