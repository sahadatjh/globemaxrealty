@component('mail::message')
<style>
    p{
        color: #000000!important;
        margin-bottom: 0!important;
    }
    .company-name-wrapper{
        color: #333333!important;
        margin-top: 10px!important;
        margin-bottom: 0!important;
    }
    .company-name{
        font-weight: 700!important;
        margin-bottom: 0!important;
        color: #333333!important;
        margin-top: 0!important;
    }
    .visit-property-btn{
	    display: inline-block;
	    padding: 5px 15px;
	    background: #000000;
	    color: #ffffff;
	    text-decoration: none;
	    font-size: 15px;
	    margin-top: 5px;
    }
</style>

<div style="text-align: center;margin-bottom:20px;margin-top:20px;">
    <a href={{route('home')}}>
        <img width="120px" src="{{asset($g_company_data->header_logo)}}">
    </a>
</div>
<p>
    <b>{{ 'Property Contact Mail' }}</b><br>
    {{'Name: '.$messageData['name']}}<br>
    {{'Email: '.$messageData['email']}}<br>
    {{'Phone: '.$messageData['phone']}}<br>
    {{'Message: '.$messageData['message']}}<br>
    {{'Property Name: '.$messageData['property_title']}}<br>
    <a class="visit-property-btn" href="{{$messageData['property_permalink']}}">Visit Property</a>
</p>

<div class="company-name-wrapper">
    Thanks,<br>
    <p class="company-name">
        {{ str_replace('_', ' ', config('app.name')) }}
    </p>
</div>
<style>
    .company-address{
        margin-bottom: 50px!important;
        color: #000!important;
    }
    .company-address *{
        margin: 0;
        line-height: 1.3!important;
        color: #000!important;
        text-align: left!important
    }
</style>
<div class="company-address">
    {!!$g_company_data->address!!}
</div>
@if($g_company_data->address_2)
    <div class="company-address">
        {!!$g_company_data->address_2!!}
    </div>
@endif


@php
    //exit();
@endphp
@endcomponent

