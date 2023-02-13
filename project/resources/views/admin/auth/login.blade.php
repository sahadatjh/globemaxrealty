<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<link rel="shortcut icon" href="{{asset($g_company_data->favicon_icon)}}" type="image/png">
@include('admin/_partials/stylesheets')
<body>
	<section class="common-form-section-main">
		<div class="common-form-inner col-md-4">
			{{-- Common Errors Start --}}
	        @if ($errors->any())
	            <div class="alert alert-danger mt-1 common-message-section">
	                <ul class="m-0">
	                    @foreach ($errors->all() as $error)
	                        <li>{{ $error }}</li>
	                    @endforeach
	                </ul>
            	</div>
	        @endif
	        {{-- Common Errors End --}}
			<h3 class="form-title text-center py-3">Login</h3>
				<form action="{{ route('admin.login.action') }}" method="post">
					@csrf
					<div class="form-group">
						<label>User Name</label>
						<input class="form-control" type="email" name="email">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input class="form-control" type="password" name="password">
					</div>
					<div class="text-center">
						<button class="btn btn-info">Login</button>
					</div>
				</form>
		</div>
	</section>
@include('admin/_partials/scripts')
</body>