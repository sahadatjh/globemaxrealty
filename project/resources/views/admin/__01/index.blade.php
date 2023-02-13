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
                    PageTitle
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

    <div class="row">
        <div class="col-md-12">
            <table id="SMDataTable" class="w-100 table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>View Priority</th>
                        <th>Category Name</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="{{route('admin.category.create')}}">Edit</a>
                        </td>
                    </tr>
                    {{-- @if(count($categories)>0)
                        <tr>
                            @foreach($categories as $category)
                            <td>{{ $loop->index+1 }}</td>
                            <td>
                                {{ $category->view_priority }}
                            </td>
                            <td>{{ $category->category_name }}</td>
                            <td>
                                @if($category->category_image)
                                    <img src="{{asset($category->category_image)}}">
                                @endif
                            </td>
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
                    @endif --}}
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
                <h5 class="modal-title" id="DGDModalLabel">PageTitle</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body px-4">
                <form method="post" action="" enctype="multipart/form-data">
                    @csrf
                    <div class="position-relative form-group">
                        <label for="exampleEmail" class="">Email</label>
                        <input name="email" id="exampleEmail" placeholder="with a placeholder" type="email" class="form-control" required />
                    </div>
                    <div class="position-relative form-group">
                        <label for="examplePassword" class="">Password</label>
                        <input name="password" id="examplePassword" placeholder="password placeholder" type="password" class="form-control" required/>
                    </div>
                    <div class="position-relative form-group">
                        <label for="exampleSelect" class="">Select</label>
                        <select name="select" id="exampleSelect" class="form-control" required>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="position-relative form-group">
                        <label for="exampleSelectMulti" class="">Select Multiple</label>
                        <select multiple="" name="selectMulti" id="exampleSelectMulti" class="form-control" required>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="position-relative form-group">
                        <label for="exampleText" class="">Text Area</label>
                        <textarea name="text" id="exampleText" class="form-control" required></textarea>
                    </div>
                    <div class="position-relative form-group">
                        <label for="exampleFile" class="">File</label>
                        <input name="file" id="exampleFile" type="file" class="form-control-file" />
                        <small class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
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