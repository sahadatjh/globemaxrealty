@extends('layouts.admin')

@section('content')
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-car icon-gradient bg-mean-fruit"></i>
                </div>
                <div>
                    All Page Banner & Video
                </div>
            </div>
            <div class="page-title-actions">
            </div>
        </div>
    </div>

    <div class="row pb-5">
        <div class="main-card mb-5 card col-md-8 m-auto">
            <div class="card-body">
                <h5 class="card-title">Update All Page Banner & Video</h5>
                <form method="post" action="{{route('admin.update-pages-photo-video')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="position-relative form-group">
                        <label class="">Page Intro Banner</label>
                        <input name="page_intro_banner" type="file" class="form-control" accept=".jpeg,.jpg,.png"/>
                        @if(isset($commonPageData))
                            @if($commonPageData->page_intro_banner)
                                <img width="150px;" src="{{asset($commonPageData->page_intro_banner)}}">
                            @endif
                        @endif
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Our Service BG Banner</label>
                        <input name="our_service_bg_banner" type="file" class="form-control" accept=".jpeg,.jpg,.png"/>
                        @if(isset($commonPageData))
                            @if($commonPageData->our_service_bg_banner)
                                <img width="150px;" src="{{asset($commonPageData->our_service_bg_banner)}}">
                            @endif
                        @endif
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Client Opinion BG Banner</label>
                        <input name="client_opinion_bg_banner" type="file" class="form-control" accept=".jpeg,.jpg,.png"/>
                        @if(isset($commonPageData))
                            @if($commonPageData->client_opinion_bg_banner)
                                <img width="150px;" src="{{asset($commonPageData->client_opinion_bg_banner)}}">
                            @endif
                        @endif
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Home Products BG Video</label>
                        <input name="home_products_bg_video" type="file" class="form-control" accept=".mp4,.ogg,.ogv,.mkv,.3gp,.mov,.avi,.wmv,.flv"/>
                        @if(isset($commonPageData))
                            @if($commonPageData->home_products_bg_video)
                                <video controls width="200px" class="mt-2 video-background" loop muted playsinline>
                                    <source src="{{asset($commonPageData->home_products_bg_video)}}" type="video/{{substr($commonPageData->home_products_bg_video, -3)}}">
                                </video>
                            @endif
                        @endif
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Product Page BG Video</label>
                        <input name="product_page_bg_video" type="file" class="form-control" accept=".mp4,.ogg,.ogv,.mkv,.3gp,.mov,.avi,.wmv,.flv"/>
                        @if(isset($commonPageData))
                            @if($commonPageData->product_page_bg_video)
                                <video controls width="200px" class="mt-2 video-background" loop muted playsinline>
                                    <source src="{{asset($commonPageData->product_page_bg_video)}}" type="video/{{substr($commonPageData->product_page_bg_video, -3)}}">
                                </video>
                            @endif
                        @endif
                    </div>
                    
                    <button class="mt-1 btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop