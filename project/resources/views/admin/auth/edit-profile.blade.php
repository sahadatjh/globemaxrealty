@extends('layouts.admin')
@section('content')
<div class="user-form-wrapper my-5">
	<div class="col-md-6 m-auto">
	    <div class="main-card mb-3 card">
	        <div class="card-body"><h5 class="card-title">Admin Profile</h5>
	            <form class="" action="{{route('admin.profile-update', Auth::user()->id)}}" method="post" enctype="multipart/form-data">
	            	@csrf
	            	@method('PUT')
	                <div class="position-relative form-group">
	                	<label class="">Name</label>
	                	<input name="name" placeholder="Name" type="text" class="form-control" value="{{ Auth::user()->name }}">
	                </div>
	                <div class="position-relative form-group">
	                	<label class="">Email</label>
	                	<input name="email" placeholder="Email" type="email" class="form-control" value="{{ Auth::user()->email }}">
	                </div>
	                <div class="position-relative form-group">
	                	<label class="">Old Password</label>
	                	<input name="old_password" placeholder="Password" type="password" class="form-control">
	                </div>
	                <div class="position-relative form-group">
	                	<label class="">New Password</label>
	                	<input name="password" placeholder="Confrim Password" type="password" class="form-control">
	                </div>
	                <div class="position-relative form-group">
	                	<label class="">Confrim Password</label>
	                	<input name="password_confirmation" placeholder="Confrim Password" type="password" class="form-control">
	                </div>
	                <div class="position-relative form-group">
	                	<label class="">Image</label>
	                	<input name="image" accept=".png,.jpg,.jpeg,.svg,.gif" type="file" class="form-control">
	                	@if(Auth::user()->image)
	                		<img src="{{ asset(Auth::user()->image) }}" style="width: 100px;margin-top: 10px;">
	                	@endif
	                </div>
	                <button class="mt-1 btn btn-primary">Update Info</button>
	            </form>
	        </div>
	    </div>
	</div>
</div>
@stop