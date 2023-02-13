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
                    Gallery
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
                        <th>Image</th>
                        <th>link</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($gallery)>0)
                        <tr>
                            @foreach($gallery as $galleryImg)
                            <td>{{ $loop->index+1 }}</td>
                            <td>
                                @if($galleryImg->image)
                                    <img src="{{asset($galleryImg->image)}}">
                                @endif
                            </td>
                            <td>
                                <div class="gallery-img-url-wrapper">
                                    <input class="gallery-img-url" type="text" value="{{ asset($galleryImg->image) }}" readonly>
                                    <span class="img-url-copy-icon"><i class="fas fa-copy"></i></span>
                                </div>
                            </td>
                            <td>
                                <a class="data-edit-view-btn" data-toggle="tooltip" data-placement="top" title="Edit Image" href="{{ route('admin.gallery.edit', $galleryImg->id) }}"><i class="fas fa-pen"></i></a>

                                <form method="POST" action="{{ route('admin.gallery.destroy', $galleryImg->id) }}" accept-charset="UTF-8">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="data-delete-btn" data-toggle="tooltip" data-placement="top" title="Delete Image"><i class="fas fa-trash"></i></button>
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
                <h5 class="modal-title" id="DGDModalLabel">Gallery</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body px-4">
                <form method="post" action="{{route('admin.gallery.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="gallery-img-item-wrapper mb-5">
                        <label class="">Image</label><br>
                        <div class="btn btn-secondary add-more-gallery-btn mb-4">Add New</div>
                        <div class="gallery-img-item position-relative form-group">
                            <input name="image[]" type="file" class="form-control-file" accept=".jpg,.png,.jpeg,.svg" required/>
                            <div class="btn btn-secondary add-more-gallery-btn mr-3"><i class="fas fa-plus"></i></div>
                            <div class="btn btn-danger remove-more-gallery-btn"><i class="fas fa-trash"></i></div>
                        </div>
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
<script type="text/javascript">
    $('.gallery-img-url-wrapper').click(function(){
        var copyText = $(this).find('.gallery-img-url')[0];
        copyText.select();
        document.execCommand("copy");
        toastr.success('Link Copied');
        //alert("Copied the text: " + copyText.value);
    });

    $(document).on('click','.add-more-gallery-btn', function(){
        $('.gallery-img-item-wrapper').append('<div class="gallery-img-item position-relative form-group">\
                <input name="image[]" type="file" class="form-control-file" accept=".jpg,.png,.jpeg,.svg" required/>\
                <div class="btn btn-secondary add-more-gallery-btn mr-3"><i class="fas fa-plus"></i></div>\
                <div class="btn btn-danger remove-more-gallery-btn"><i class="fas fa-trash"></i></div>\
            </div>')
    });
    $(document).on('click','.remove-more-gallery-btn', function(){
        $(this).closest('.gallery-img-item').remove();
    });
</script>
@stop