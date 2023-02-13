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
            </div>
        </div>
    </div>

    <div class="row pb-5">
        <div class="main-card mb-5 card col-md-10 m-auto">
            <div class="card-body">
                <h5 class="card-title">Edit Team Info</h5>
                <form method="post" action="{{route('admin.our-team.update', $team['id'])}}" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="position-relative form-group">
                        <label class="">Image</label>
                        <input name="image" type="file" class="form-control-file mb-2"/>
                        @if($team['image'])
                            <img width="150" src="{{asset($team['image'])}}">
                        @endif
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Name</label>
                        <input name="name" type="text" class="form-control" required value="{{$team['name']}}" />
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Designation</label>
                        <input name="designation" type="text" class="form-control" required value="{{$team['designation']}}" />
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Description</label>
                        <textarea rows="6" required id="" name="description" class="form-control p-description required">{{$team['description']}}</textarea>
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Phone 1</label>
                        <input name="phone_1" type="text" class="form-control" value="{{$team['phone_1']}}" />
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Phone 2</label>
                        <input name="phone_2" type="text" class="form-control" value="{{$team['phone_2']}}" />
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Email 1</label>
                        <input name="email_1" type="text" class="form-control" value="{{$team['email_1']}}" />
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Email 2</label>
                        <input name="email_2" type="text" class="form-control" value="{{$team['email_2']}}" />
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Facebook Url</label>
                        <input name="facebook" type="text" class="form-control" value="{{$team['facebook']}}" />
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Google Url</label>
                        <input name="google" type="text" class="form-control" value="{{$team['google']}}" />
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Instagram Url</label>
                        <input name="instagram" type="text" class="form-control" value="{{$team['instagram']}}" />
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Skype Url</label>
                        <input name="skype" type="text" class="form-control" value="{{$team['skype']}}" />
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Linkedin Url</label>
                        <input name="linkedin" type="text" class="form-control" value="{{$team['linkedin']}}" />
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Youtube Url</label>
                        <input name="youtube" type="text" class="form-control" value="{{$team['youtube']}}" />
                    </div>
                    <div class="position-relative form-group">
                        <label>Publish</label>
                        <select name="status" class="required-ip form-control" required>
                            <option value="1" {{($team['status']==1)?'selected':''}}>Publish</option>
                            <option value="0" {{($team['status']==0)?'selected':''}}>Unpublish</option>
                        </select>
                    </div>
                    <button class="mt-1 btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop