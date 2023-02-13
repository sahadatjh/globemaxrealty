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
                    Category
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
                        {{-- <th>View Priority</th> --}}
                        <th>Category Name</th>
                        <th>Description</th>
                        {{-- <th>Image</th> --}}
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($categories)>0)
                        <tr>
                            @foreach($categories as $category)
                            <td>{{ $loop->index+1 }}</td>
                            {{-- <td>
                                {{ $category->view_priority }}
                            </td> --}}
                            <td>{{ $category->category_name }}</td>
                            <td>{{ substr($category->description, 0, 50) }}...</td>
                            {{-- <td>
                                @if($category->category_image)
                                    <img src="{{asset($category->category_image)}}">
                                @endif
                            </td> --}}
                            <td>
                                <a class="data-edit-view-btn" data-toggle="tooltip" data-placement="top" title="Edit Category" href="{{ route('admin.category.edit', $category->id) }}"><i class="fas fa-pen"></i></a>


                                <form method="POST" action="{{ route('admin.category.destroy', $category->id) }}" accept-charset="UTF-8">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="data-delete-btn" data-toggle="tooltip" data-placement="top" title="Delete Category"><i class="fas fa-trash"></i></button>
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
                <h5 class="modal-title" id="DGDModalLabel">Add Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body px-4">
                <form action="{{route('admin.category.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="position-relative form-group">
                        <label class="">Category Name</label>
                        <input name="category_name" type="text" class="form-control" value="{{old('category_name')}}" required/>
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Description</label>
                        <textarea name="description" rows="3" class="form-control">{{old('description')}}</textarea>
                    </div>
                    {{-- <div class="position-relative form-group">
                        <label class="">Image</label>
                        <input name="category_image" type="file" accept=".jpg,.png,.jpeg" class="form-control" />
                    </div> --}}
                    {{-- <div class="position-relative form-group">
                        <label class="">View Priority</label>
                        <input name="view_priority" type="number" class="form-control" value="{{old('view_priority')}}"/>
                    </div> --}}
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