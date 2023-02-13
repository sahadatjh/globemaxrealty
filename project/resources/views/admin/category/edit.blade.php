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
                    Edit Category
                </div>
            </div>
            <div class="page-title-actions">
            </div>
        </div>
    </div>

    <div class="row pb-5">
        <div class="main-card mb-5 card col-md-6 m-auto">
            <div class="card-body">
                <h5 class="card-title">Edit Category</h5>
                <form method="post" action="{{route('admin.category.update', $category->id)}}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="position-relative form-group">
                        <label class="">Category Name</label>
                        <input name="category_name" type="text" class="form-control" value="{{$category->category_name}}" required/>
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Description</label>
                        <textarea name="description" rows="3" class="form-control">{{$category->description}}</textarea>
                    </div>
                    {{-- <div class="position-relative form-group image">
                        <label class="">Image</label>
                        <input name="category_image" type="file" accept=".jpg,.png,.jpeg" class="form-control" value="" />
                        @if($category->category_image)
                            <img src="{{asset($category->category_image)}}">
                        @endif
                    </div> --}}
                    {{-- <div class="position-relative form-group">
                        <label class="">View Priority</label>
                        <input name="view_priority" type="number" class="form-control" value="{{($category->view_priority == 'none') ? 0 : $category->view_priority}}" />
                    </div> --}}
                    <button class="mt-1 btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop