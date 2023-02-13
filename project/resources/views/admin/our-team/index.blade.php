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
                    Our Team
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
                        <th>Name</th>
                        <th>Designation</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($teamMembers)>0)
                        <tr>
                            @foreach($teamMembers as $teamMember)
                            <td>{{ $loop->index+1 }}</td>
                            <td>
                                @if($teamMember->image)
                                    <img src="{{asset($teamMember->image)}}">
                                @endif
                            </td>
                            <td>{{ $teamMember->name }}</td>
                            <td>{{ $teamMember->designation }}</td>
                            <td>
                                @if($teamMember->status == 1)
                                    <a class="badge badge-info inline-block" data-toggle="tooltip" data-placement="top" title="Make Unpublished" href="{{route('admin.our-team.show',$teamMember->id)}}">Published</a>
                                @else
                                    <a class="badge badge-warning inline-block" data-toggle="tooltip" data-placement="top" title="Make Published" href="{{route('admin.our-team.show',$teamMember->id)}}">Unpublished</a>
                                @endif
                            </td>
                            <td>
                                <a class="data-edit-view-btn" data-toggle="tooltip" data-placement="top" title="Edit Member" href="{{ route('admin.our-team.edit', $teamMember->id) }}"><i class="fas fa-pen"></i></a>

                                <form method="POST" action="{{ route('admin.our-team.destroy', $teamMember->id) }}" accept-charset="UTF-8">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="data-delete-btn" data-toggle="tooltip" data-placement="top" title="Delete Member"><i class="fas fa-trash"></i></button>
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
                <h5 class="modal-title" id="DGDModalLabel">Our Team</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body px-4">
                <form method="post" action="{{route('admin.our-team.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="position-relative form-group">
                        <label class="">Image</label>
                        <input name="image" type="file" class="form-control-file" accept=".jpg,.png,.jpeg" required/>
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Name</label>
                        <input name="name" type="text" class="form-control" required value="{{old('name')}}" />
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Designation</label>
                        <input name="designation" type="text" class="form-control" required value="{{old('designation')}}" />
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Description</label>
                        <textarea rows="6" id="" name="description" class="form-control p-description required">{{old('description')}}</textarea>
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Phone 1</label>
                        <input name="phone_1" type="text" class="form-control" value="{{old('phone_1')}}" />
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Phone 2</label>
                        <input name="phone_2" type="text" class="form-control" value="{{old('phone_2')}}" />
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Email 1</label>
                        <input name="email_1" type="text" class="form-control" value="{{old('email_1')}}" />
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Email 2</label>
                        <input name="email_2" type="text" class="form-control" value="{{old('email_2')}}" />
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Facebook Url</label>
                        <input name="facebook" type="text" class="form-control" value="{{old('facebook')}}" />
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Google Url</label>
                        <input name="google" type="text" class="form-control" value="{{old('google')}}" />
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Instagram Url</label>
                        <input name="instagram" type="text" class="form-control" value="{{old('instagram')}}" />
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Skype Url</label>
                        <input name="skype" type="text" class="form-control" value="{{old('skype')}}" />
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Linkedin Url</label>
                        <input name="linkedin" type="text" class="form-control" value="{{old('linkedin')}}" />
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Youtube Url</label>
                        <input name="youtube" type="text" class="form-control" value="{{old('youtube')}}" />
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