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
                    FAQ
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
                        <th>Title</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($faqs)>0)
                        <tr>
                            @foreach($faqs as $faq)
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $faq->title }}</td>
                            <td>
                                @if($faq->image)
                                    <img src="{{asset($faq->image)}}">
                                @endif
                            </td>
                            <td>
                                @if($faq->status == 1)
                                    <a class="badge badge-info inline-block" data-toggle="tooltip" data-placement="top" title="Make Unpublished" href="{{route('admin.seller-faq.show',$faq->id)}}">Published</a>
                                @else
                                    <a class="badge badge-warning inline-block" data-toggle="tooltip" data-placement="top" title="Make Published" href="{{route('admin.seller-faq.show',$faq->id)}}">Unpublished</a>
                                @endif
                            </td>
                            <td>
                                <a class="data-edit-view-btn" data-toggle="tooltip" data-placement="top" title="Edit FAQ" href="{{ route('admin.seller-faq.edit', $faq->id) }}"><i class="fas fa-pen"></i></a>

                                <form method="post" action="{{ route('admin.seller-faq.destroy', $faq->id) }}" accept-charset="UTF-8">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="data-delete-btn" data-toggle="tooltip" data-placement="top" title="Delete FAQ"><i class="fas fa-trash"></i></button>
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
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="DGDModalLabel">Add FAQ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body px-4">
                <form method="post" action="{{route('admin.seller-faq.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="position-relative form-group">
                        <label class="">Title</label>
                        <input name="title" type="text" class="form-control" required value="{{old('title')}}" />
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Image</label>
                        <input name="image" type="file" class="form-control-file" required/>
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Description</label>
                        <textarea required rows="5" name="description" class="form-control p-description required">{{old('description')}}</textarea>
                    </div>
                    <div class="position-relative form-group">
                        <label>Publish Status</label>
                        <select name="status" class="required-ip form-control" required>
                            <option value="1" {{(old('status')=='1')?'selected':''}}>Publish</option>
                            <option value="0" {{(old('status')=='0')?'selected':''}}>Unpublish</option>
                        </select>
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