@extends('layouts.admin')

@section('content')
@php
    $carbon = '\Carbon\Carbon';
@endphp
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-car icon-gradient bg-mean-fruit"> </i>
                </div>
                <div>
                    {{ str_replace('_', ' ', config('app.name')) }} <br>
                    Admin Dashboard
                </div>
            </div>
            <div class="page-title-actions">
            </div>
        </div>
    </div>
    <div class="col-md-12">
        {{-- @if(isset($g_company_data))
            @if($g_company_data->dashboard_logo)
                <div class="demo-image">
                    <img width="300" src="{{asset($g_company_data->dashboard_logo)}}">
                </div>
            @endif
        @endif --}}
    </div>
</div>
@stop