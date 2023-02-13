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
                    Property Tours
                </div>
            </div>
            <div class="page-title-actions">
            </div>
        </div>
    </div>

    <div class="row pb-5">
        <div class="main-card mb-5 card col-md-11 m-auto">
            <div class="card-body">
                <h5 class="card-title">Update Property Tours</h5>
                <form method="post" action="{{route('admin.service.update')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="position-relative form-group">
                        <label class="">Image</label>
                        <input type="file" class="form-control mb-2" name="property_tours_image" accept=".png,.jpg,.jpeg,.svg">
                        @if($serviceData->property_tours_image)
                         <img width="150" src="{{asset($serviceData->property_tours_image)}}">
                        @endif
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Short Info</label>
                        <textarea rows="3" class="form-control" name="property_tours_short_info" rows="3">@if(isset($serviceData)) @if($serviceData->property_tours_short_info){{$serviceData->property_tours_short_info}}@endif @endif</textarea>
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Description</label>
                        <textarea rows="10" id="description" class="form-control" name="property_tours" rows="3">@if(isset($serviceData)) @if($serviceData->property_tours){{$serviceData->property_tours}}@endif @endif</textarea>
                    </div>
                    {{-- Video --}}
                    <label class="mt-4">Video Link</label><br>
                    <div class="extra-price-add-btn btn btn-secondary btn-sm mb-3">Add New</div>
                    <div class="extra-price-add-wrapper mb-5">
                        @if($serviceData->property_tours_video)
                            @foreach($serviceData->property_tours_video as $key => $tVideo)
                                <div class="item d-flex align-items-center mb-3">
                                    <div class="form-group w-100 mb-0">
                                        <input name="property_tours_video[]" type="text" class="required-ip form-control" required placeholder="Video Link" value="{{$tVideo}}" />
                                    </div>
                                    <div class="add-more-price-btn extra-price-add-btn"><i class="fas fa-plus"></i></div>
                                    <div class="remove-more-price-btn"><i class="fas fa-minus"></i></div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <button class="mt-1 btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    //Extra Price Item Add 
    $(document).on('click','.extra-price-add-btn', function(){
        $('.extra-price-add-wrapper').append('<div class="item d-flex align-items-center mb-3">\
                <div class="form-group w-100 mb-0">\
                    <input name="property_tours_video[]" type="text" class="required-ip form-control" required placeholder="Video Link"/>\
                </div>\
                <div class="add-more-price-btn extra-price-add-btn"><i class="fas fa-plus"></i></div>\
                <div class="remove-more-price-btn"><i class="fas fa-minus"></i></div>\
            </div>');
    });
    //Extra Price Item Remove
    $(document).on('click','.remove-more-price-btn', function(){
        $(this).closest('.item.d-flex').remove();
    });
</script>
@stop