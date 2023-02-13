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
                    Buyer Requirement
                </div>
            </div>
            <div class="page-title-actions">
            </div>
        </div>
    </div>

    <div class="row pb-5">
        <div class="main-card mb-5 card col-md-8 m-auto">
            <div class="card-body">
                <h5 class="card-title">Update Buyer Requirement</h5>
                <form method="post" action="{{route('admin.buyer-require-update')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="position-relative form-group">
                        <label class="">Buyer Require Title</label>
                        <input name="buyer_require_title" type="text" class="form-control" value="@if(isset($buyerRequire))@if($buyerRequire->buyer_require_title){{$buyerRequire->buyer_require_title}}@endif @endif"/>
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Buyer Require Description</label>
                        <textarea id="description" class="form-control" name="buyer_require_desc" rows="3">@if(isset($buyerRequire)) @if($buyerRequire->buyer_require_desc){{$buyerRequire->buyer_require_desc}}@endif @endif</textarea>
                    </div>

                    <button class="mt-1 btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop