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
                    Client Review
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
                        <th>Image</th>
                        <th>Name</th>
                        <th>Review</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($clientReviewData)>0)
                        <tr>
                            @foreach($clientReviewData as $review)
                            <td>{{ $loop->index+1 }}</td>
                            <td>
                                @if($review->image)
                                <img src="{{asset($review->image)}}">
                                @endif
                            </td>
                            <td>{{ $review->name }}</td>
                            <td>{{ substr($review->description, 0,20) }}...</td>
                            <td>{{ date('d F Y',strtotime($review->date)) }}</td>
                            <td>
                                <a class="data-edit-view-btn" data-toggle="tooltip" data-placement="top" title="Edit Review" href="{{ route('admin.client-review.edit', $review->id) }}"><i class="fas fa-pen"></i></a>
                                <form method="POST" action="{{ route('admin.client-review.destroy', $review->id) }}" accept-charset="UTF-8">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="data-delete-btn" data-toggle="tooltip" data-placement="top" title="Delete Review"><i class="fas fa-trash"></i></button>
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
                <h5 class="modal-title" id="DGDModalLabel">Add Client Review</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body px-4">
                <form action="{{route('admin.client-review.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="position-relative form-group">
                        <label class="">Image</label>
                        <input name="image" type="file" accept=".jpg,.png,.jpeg,.svg" class="form-control" required/>
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Name</label>
                        <input name="name" type="text" class="form-control" value="{{old('name')}}" required/>
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Review</label>
                        <textarea name="description" class="form-control" required>{{old('description')}}</textarea>
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Date</label>
                        <input name="date" type="date" class="form-control" value="{{old('date')}}" required/>
                    </div>
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