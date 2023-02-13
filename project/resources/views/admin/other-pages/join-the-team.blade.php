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
                    Join The Team
                </div>
            </div>
            <div class="page-title-actions">
            </div>
        </div>
    </div>

    <div class="row pb-5">
        <div class="main-card mb-5 card col-md-11 m-auto">
            <div class="card-body">
                <h5 class="card-title">Update Join The Team</h5>
                <form method="post" action="{{route('admin.about-us.update')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="position-relative form-group">
                        <label class="">Join The Team</label>
                        <textarea rows="10" id="description" class="form-control" name="join_the_team" rows="3">@if(isset($aboutUsData)) @if($aboutUsData->join_the_team){{$aboutUsData->join_the_team}}@endif @endif</textarea>
                    </div>
                    <button class="mt-1 btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop