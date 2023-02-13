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
                    Homepage Slider
                </div>
            </div>
            <div class="page-title-actions">
            </div>
        </div>
    </div>

    <div class="row pb-5">
        <div class="main-card mb-5 card col-md-6 m-auto">
            <div class="card-body">
                <h5 class="card-title">Edit Homepage Slider Image</h5>
                <form method="post" action="{{route('admin.home-slider.update',$h_slider_data->id)}}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="position-relative form-group">
                        <label class="">Subtitle</label>
                        <input name="subtitle" type="text" class="form-control" required value="{{$h_slider_data->subtitle}}" />
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Title</label>
                        <input name="title" type="text" class="form-control" required value="{{$h_slider_data->title}}" />
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Info</label>
                        <textarea class="form-control" name="info">{{$h_slider_data->info}}</textarea>
                    </div>
                    <div class="position-relative form-group image">
                        <label class="">Image</label>
                        <input name="image" type="file" class="form-control" required accept=".jpg,.png,.jpeg"/>
                        <img src="{{asset($h_slider_data->image)}}">
                    </div>
                    <button class="mt-1 btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop