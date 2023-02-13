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
                    Edit Subcategory
                </div>
            </div>
            <div class="page-title-actions">
            </div>
        </div>
    </div>

    <div class="row pb-5">
        <div class="main-card mb-5 card col-md-6 m-auto">
            <div class="card-body">
                <h5 class="card-title">Edit Subcategory</h5>
                <form method="post" action="{{route('admin.subcategory.update', $subcategory->id)}}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="position-relative form-group">
                        <label class="">Category Name</label>
                        <select name="category" class="form-control" required>
                            {{print_r($categories)}}
                            <option value="">--Select Category--</option>
                            @if(count($categories)>0)
                                @foreach($categories as $category)
                                    <option value="{{$category->slug}}" {{($subcategory['category']==$category->slug)?'selected':''}}>{{$category->category_name}}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Subcategory Name</label>
                        <input name="subcategory_name" type="text" class="form-control" value="{{$subcategory->subcategory_name}}" required/>
                    </div>
                    <div class="position-relative form-group image">
                        <label class="">Image</label>
                        <input name="subcategory_image" type="file" accept=".jpg,.png,.jpeg" class="form-control" value="" />
                        @if($subcategory->subcategory_image)
                            <img src="{{asset($subcategory->subcategory_image)}}">
                        @endif
                    </div>
                    <div class="position-relative form-group">
                        <label class="">View Priority</label>
                        <input name="view_priority" type="number" class="form-control" value="{{($subcategory->view_priority == 'none') ? 0 : $subcategory->view_priority}}" />
                    </div>
                    <button class="mt-1 btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop