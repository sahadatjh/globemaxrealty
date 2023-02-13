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
                    PageTitle
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
                        <th>Subtitle</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($h_slider_data)>0)
                        <tr>
                            @foreach($h_slider_data as $hSliderItem)
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $hSliderItem->subtitle }}</td>
                            <td>{{ $hSliderItem->title }}</td>
                            <td>
                                <img style="width: 300px;max-width:100%" src="{{asset($hSliderItem->image)}}">
                            </td>
                            <td>
                                <a class="data-edit-view-btn" data-toggle="tooltip" data-placement="top" title="Edit Category" href="{{ route('admin.home-slider.edit', $hSliderItem->id) }}"><i class="fas fa-pen"></i></a>

                                <form method="POST" action="{{ route('admin.home-slider.destroy', $hSliderItem->id) }}" accept-charset="UTF-8">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="data-delete-btn" data-toggle="tooltip" data-placement="top" title="Delete Category"><i class="fas fa-trash"></i></button>
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
                <h5 class="modal-title" id="DGDModalLabel">PageTitle</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body px-4">
                <form method="post" action="{{route('admin.home-slider.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="position-relative form-group">
                        <label class="">Subtitle</label>
                        <input name="subtitle" type="text" class="form-control" required/>
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Title</label>
                        <input name="title" type="text" class="form-control" required/>
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Info</label>
                        <textarea class="form-control" name="info"></textarea>
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Image</label>
                        <input name="image" type="file" class="form-control" required accept=".jpg,.png,.jpeg"/>
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
@stop