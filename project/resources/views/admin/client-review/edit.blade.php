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
                    Edit Client Review
                </div>
            </div>
            <div class="page-title-actions">
            </div>
        </div>
    </div>

    <div class="row pb-5">
        <div class="main-card mb-5 card col-md-6 m-auto">
            <div class="card-body">
                <h5 class="card-title">Edit Client Review</h5>
                <form method="post" action="{{route('admin.client-review.update', $clientReviewData->id)}}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="position-relative form-group">
                        <label class="">Image</label>
                        <input name="image" type="file" accept=".jpg,.png,.jpeg,.svg" class="form-control"/>
                        @if($clientReviewData->image)
                            <img width="150px" src="{{asset($clientReviewData->image)}}">
                        @endif
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Name</label>
                        <input name="name" type="text" class="form-control" value="{{$clientReviewData->name}}" required/>
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Description</label>
                        <textarea name="description" class="form-control"required>{{$clientReviewData->description}}</textarea>
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Date</label>
                        <input name="date" type="date" class="form-control" value="{{date('Y-m-d',strtotime($clientReviewData->date))}}" required/>
                    </div>
                    {{-- <div class="position-relative form-group">
                        <label class="">View Priority</label>
                        <input name="view_priority" type="number" class="form-control" value="{{old('view_priority')}}"/>
                    </div> --}}
                    <button class="mt-1 btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop