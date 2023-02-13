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
                    Gallery
                </div>
            </div>
            <div class="page-title-actions">
            </div>
        </div>
    </div>

    <div class="row pb-5">
        <div class="main-card mb-5 card col-md-8 m-auto">
            <div class="card-body">
                <h5 class="card-title">Edit Gallery</h5>
                <form method="post" action="{{route('admin.gallery.update', $gallery['id'])}}" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="position-relative form-group">
                        <label class="">Image</label>
                        <input name="image" type="file" class="form-control-file mb-2"/>
                        @if($gallery['image'])
                            <img width="150" src="{{asset($gallery['image'])}}">
                        @endif
                    </div>
                    <button class="mt-1 btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop