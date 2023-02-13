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
                    Faq
                </div>
            </div>
            <div class="page-title-actions">
            </div>
        </div>
    </div>

    <div class="row pb-5">
        <div class="main-card mb-5 card col-md-11 m-auto">
            <div class="card-body">
                <h5 class="card-title">Update Faq</h5>
                <form method="post" action="{{route('admin.seller-guide.update')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="position-relative form-group">
                        <label class="">Description</label>
                        <textarea rows="10" id="description" class="form-control" name="faq">@if(isset($sellerGuide)) @if($sellerGuide->faq){{$sellerGuide->faq}}@endif @endif</textarea>
                    </div>
                    <button class="mt-1 btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop