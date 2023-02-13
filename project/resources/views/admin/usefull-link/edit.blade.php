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
                    Edit Useful Link
                </div>
            </div>
            <div class="page-title-actions">
            </div>
        </div>
    </div>

    <div class="row pb-5">
        <div class="main-card mb-5 card col-md-8 m-auto">
            <div class="card-body">
                <h5 class="card-title">Edit Useful Link</h5>
                <form method="post" action="{{route('admin.usefull-update')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="position-relative form-group">
                        <label class="">Title</label>
                        <input name="title" type="text" class="form-control" value="{{ ( isset( $usefull->title ) ) ? $usefull->title : '' }}" required/>
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Description</label>
                        <textarea id="description" name="description" rows="3" class="form-control">{{ ( isset( $usefull->description ) ) ? $usefull->description : '' }}</textarea>
                    </div>
                    
                    <button class="mt-1 btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop