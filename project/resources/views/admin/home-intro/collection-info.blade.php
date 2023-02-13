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
                    Edit Collection Info
                </div>
            </div>
            <div class="page-title-actions">
            </div>
        </div>
    </div>

    <div class="row pb-5">
        <div class="main-card mb-5 card col-md-8 m-auto">
            <div class="card-body">
                <h5 class="card-title">Edit Collection Info</h5>
                <form method="post" action="{{route('admin.update-collection-info')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="position-relative form-group">
                        <label class="">Title</label>
                        <input name="collection_title" type="text" class="form-control" value="@if(isset($collectionData)) @if($collectionData->collection_title){{$collectionData->collection_title}}@endif @endif" required/>
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Description</label>
                        <textarea id="description" name="collection_description" class="form-control" required>@if(isset($collectionData)) @if($collectionData->collection_description){{$collectionData->collection_description}}@endif @endif</textarea>
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Image</label>
                        <input name="collection_image" type="file" accept=".jpg,.png,.jpeg,.svg" class="form-control"/>
                        @if(isset($collectionData))
                            @if($collectionData->collection_image)
                                <img class="mt-2" width="150px;" src="{{asset($collectionData->collection_image)}}">
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