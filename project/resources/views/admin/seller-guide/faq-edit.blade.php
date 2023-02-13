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
                    Edit FAQ
                </div>
            </div>
            <div class="page-title-actions">
            </div>
        </div>
    </div>

    <div class="row pb-5">
        <div class="main-card mb-5 card col-md-10 m-auto">
            <div class="card-body">
                <h5 class="card-title">Edit FAQ</h5>
                <form method="post" action="{{route('admin.seller-faq.update', $faq->id)}}" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="position-relative form-group">
                        <label class="">Image</label>
                        <input name="image" type="file" class="form-control-file"/>
                        @if($faq->image)
                            <img class="mt-2" width="150" src="{{asset($faq->image)}}">
                        @endif
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Title</label>
                        <input name="title" type="text" class="form-control" required value="{{$faq->title}}" />
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Description</label>
                        <textarea required rows="8" name="description" class="form-control p-description required">{{$faq->description}}</textarea>
                    </div>
                    <div class="position-relative form-group">
                        <label>Publish</label>
                        <select name="status" class="required-ip form-control" required>
                            <option value="1" {{($faq['status']==1)?'selected':''}}>Publish</option>
                            <option value="0" {{($faq['status']==0)?'selected':''}}>Unpublish</option>
                        </select>
                    </div>
                    <button class="mt-1 btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop