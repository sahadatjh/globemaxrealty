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
            </div>
        </div>
    </div>

    <div class="row pb-5">
        <div class="main-card mb-5 card col-md-6 m-auto">
            <div class="card-body">
                <h5 class="card-title">PageTitle</h5>
                <form method="post" action="" enctype="multipart/form-data">
                    @csrf
                    <div class="position-relative form-group">
                        <label for="exampleEmail" class="">Email</label>
                        <input name="email" id="exampleEmail" placeholder="with a placeholder" type="email" class="form-control" required/>
                    </div>
                    <div class="position-relative form-group">
                        <label for="examplePassword" class="">Password</label>
                        <input name="password" id="examplePassword" placeholder="password placeholder" type="password" class="form-control" required/>
                    </div>
                    <div class="position-relative form-group">
                        <label for="exampleSelect" class="">Select</label>
                        <select name="select" id="exampleSelect" class="form-control" required>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="position-relative form-group">
                        <label for="exampleSelectMulti" class="">Select Multiple</label>
                        <select multiple="" name="selectMulti" id="exampleSelectMulti" class="form-control" required>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="position-relative form-group">
                        <label for="exampleText" class="">Text Area</label>
                        <textarea name="text" id="exampleText" class="form-control" required></textarea>
                    </div>
                    <div class="position-relative form-group">
                        <label for="exampleFile" class="">File</label>
                        <input name="file" id="exampleFile" type="file" class="form-control-file" />
                        <small class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                    </div>
                    <button class="mt-1 btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop