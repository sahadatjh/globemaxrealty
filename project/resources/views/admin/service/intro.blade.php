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
                    Service
                </div>
            </div>
            <div class="page-title-actions">
            </div>
        </div>
    </div>

    <div class="row pb-5">
        <div class="main-card mb-5 card col-md-11 m-auto">
            <div class="card-body">
                <h5 class="card-title">Update Service</h5>
                <form method="post" action="{{route('admin.service.update')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="position-relative form-group">
                        <label class="">Heading</label>
                        <input type="text" class="form-control mb-2" name="service_heading" value="@if(isset($serviceData)) @if($serviceData->service_heading){{$serviceData->service_heading}}@endif @endif">
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Short Info</label>
                        <textarea rows="5" class="form-control" name="service_info">@if(isset($serviceData)) @if($serviceData->service_info){{$serviceData->service_info}}@endif @endif</textarea>
                    </div>
                    <button class="mt-1 btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop