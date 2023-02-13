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
                    Edit Home Intro
                </div>
            </div>
            <div class="page-title-actions">
            </div>
        </div>
    </div>

    <div class="row pb-5">
        <div class="main-card mb-5 card col-md-6 m-auto">
            <div class="card-body">
                <h5 class="card-title">Edit Home Intro</h5>
                <form method="post" action="{{route('admin.home-intro.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="position-relative form-group">
                        <label class="">Title</label>
                        <input name="title" type="text" class="form-control" value="@if(isset($homeIntro)) @if($homeIntro->title){{$homeIntro->title}}@endif @endif" required/>
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Description</label>
                        <textarea name="description" class="form-control" required>@if(isset($homeIntro)) @if($homeIntro->description){{$homeIntro->description}}@endif @endif</textarea>
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Image</label>
                        <input name="image" type="file" accept=".jpg,.png,.jpeg,.svg" class="form-control"/>
                        @if(isset($homeIntro))
                            @if($homeIntro->image)
                                <img class="mt-2" width="150px;" src="{{asset($homeIntro->image)}}">
                            @endif
                        @endif
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Background Video</label>
                        <input name="bg_video" type="file" accept=".mp4,.ogg,.ogv,.mkv,.3gp,.mov,.avi,.wmv,.flv" class="form-control"/>
                        @if(isset($homeIntro))
                            @if($homeIntro->bg_video)
                                <video controls width="200px" class="mt-2 video-background" loop muted playsinline>
                                    <source src="{{asset($homeIntro->bg_video)}}" type="video/{{substr($homeIntro->bg_video, -3)}}">
                                </video>
                            @endif
                        @endif
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Total Design</label>
                        <input name="total_design" type="number" class="form-control" value="{{(isset($homeIntro))?(isset($homeIntro->total_design))?$homeIntro->total_design:'':''}}" required min="1"/>
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Total Customer</label>
                        <input name="total_customer" type="number" class="form-control" value="{{(isset($homeIntro))?(isset($homeIntro->total_customer))?$homeIntro->total_customer:'':''}}" required min="1"/>
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Total Business Year</label>
                        <input name="total_business_year" type="number" class="form-control" value="{{(isset($homeIntro))?(isset($homeIntro->total_business_year))?$homeIntro->total_business_year:'':''}}" required min="1"/>
                    </div>
                    <button class="mt-1 btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop