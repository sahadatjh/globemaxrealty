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
                    Subcategory
                </div>
            </div>
            <div class="page-title-actions">
                <!-- Button trigger modal -->
                <button type="button" class="btn mr-2 mb-2 btn-primary" data-toggle="modal" data-target="#DGDModal">
                    Add New
                </button>
            </div>
        </div>
    </div>

    <div class="row table-row">
        <div class="col-md-12">
            <table id="SMDataTable" class="w-100 table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>View Priority</th>
                        <th>Category</th>
                        <th>Subcategory</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($subcategories)>0)
                        <tr>
                            @foreach($subcategories as $subcategory)
                            <td>{{ $loop->index+1 }}</td>
                            <td>
                                {{ $subcategory->view_priority }}
                            </td>
                            <td>
                                @if($subcategory->categoryData)
                                    {{ $subcategory->categoryData['category_name'] }}
                                @endif
                            </td>
                            <td>{{ $subcategory->subcategory_name }}</td>
                            <td>
                                @if($subcategory->subcategory_image)
                                    <img src="{{asset($subcategory->subcategory_image)}}">
                                @endif
                            </td>
                            <td>
                                <a class="data-edit-view-btn" data-toggle="tooltip" data-placement="top" title="Edit subcategory" href="{{ route('admin.subcategory.edit', $subcategory->id) }}"><i class="fas fa-pen"></i></a>


                                <form method="POST" action="{{ route('admin.subcategory.destroy', $subcategory->id) }}" accept-charset="UTF-8">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="data-delete-btn" data-toggle="tooltip" data-placement="top" title="Delete subcategory"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>




<!-- Modal -->
<div class="modal fade" id="DGDModal" tabindex="-1" role="dialog" aria-labelledby="DGDModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="DGDModalLabel">Add Subcategory</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body px-4">
                <form action="{{route('admin.subcategory.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="position-relative form-group">
                        <label class="">Category Name</label>
                        <select name="category" class="form-control" required>
                            {{print_r($categories)}}
                            <option value="">--Select Category--</option>
                            @if(count($categories)>0)
                                @foreach($categories as $category)
                                    <option value="{{$category->slug}}" {{(old('category')==$category->slug)?'selected':''}}>{{$category->category_name}}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Subcategory Name</label>
                        <input name="subcategory_name" type="text" class="form-control" value="{{old('subcategory_name')}}" required/>
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Image</label>
                        <input name="subcategory_image" type="file" accept=".jpg,.png,.jpeg" class="form-control" />
                    </div>
                    <div class="position-relative form-group">
                        <label class="">View Priority</label>
                        <input name="view_priority" type="number" class="form-control" value="{{old('view_priority')}}"/>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop