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
                    Consultation
                </div>
            </div>
            <div class="page-title-actions">
            </div>
        </div>
    </div>

    <div class="row pb-5">
        <div class="main-card mb-5 card col-md-11 m-auto">
            <div class="card-body">
                <h5 class="card-title">Update Consultation</h5>
                <form method="post" action="{{route('admin.service.update')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="position-relative form-group">
                        <label class="">Image</label>
                        <input type="file" class="form-control mb-2" name="consultation_image" accept=".png,.jpg,.jpeg,.svg">
                        @if($serviceData->consultation_image)
                         <img width="150" src="{{asset($serviceData->consultation_image)}}">
                        @endif
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Short Info</label>
                        <textarea rows="3" class="form-control" name="consultation_short_info" rows="3">@if(isset($serviceData)) @if($serviceData->consultation_short_info){{$serviceData->consultation_short_info}}@endif @endif</textarea>
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Description</label>
                        <textarea rows="10" id="description" class="form-control" name="consultation" rows="3">@if(isset($serviceData)) @if($serviceData->consultation){{$serviceData->consultation}}@endif @endif</textarea>
                    </div>
                    <button class="mt-1 btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop