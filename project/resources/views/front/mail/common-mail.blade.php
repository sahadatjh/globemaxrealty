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
</style>

<div style="text-align: center;margin-bottom:20px;margin-top:20px;">
    <a href={{route('home')}}>
        <img width="120px" src="{{asset($g_company_data->header_logo)}}">
    </a>
</div>
<p>
    <b>{{ucwords(str_replace('_',' ', $commonMailData['mail_label'])).' Mail'}}</b><br>
	@if($commonMailData['mail_label'] == 'consultation')
	    {{'Name: '.$commonMailData['name']}}<br>
	    {{'Email: '.$commonMailData['email']}}<br>
	    {{'Phone: '.$commonMailData['phone']}}<br>
	    {{'Looking For: '.$commonMailData['looking_for']}}<br>
	    {{'About: '.$commonMailData['about']}}<br>
    @elseif($commonMailData['mail_label'] == 'join_team')
        {{'Name: '.$commonMailData['name']}}<br>
        {{'Email: '.$commonMailData['email']}}<br>
        {{'Phone: '.$commonMailData['phone']}}<br>
        {{'Current Company: '.$commonMailData['current_company']}}<br>
        {{'Year(s) in Business: '.$commonMailData['years_in_business']}}<br>
        {{'About: '.$commonMailData['about']}}<br>
        {{'Exprience: '.$commonMailData['exprience']}}<br>
        {{'Address: '.$commonMailData['location']}}<br>
    @elseif($commonMailData['mail_label'] == 'property_management')
        {{'Name: '.$commonMailData['name']}}<br>
        {{'Email: '.$commonMailData['email']}}<br>
        {{'Phone: '.$commonMailData['phone']}}<br>
        {{'Own A: '.$commonMailData['own_a']}}<br>
        {{'Property Location: '.$commonMailData['in']}}<br>
        {{'About: '.$commonMailData['about']}}<br>
    @elseif($commonMailData['mail_label'] == 'get_pre_approved')
        {{'Name: '.$commonMailData['name']}}<br>
        {{'Email: '.$commonMailData['email']}}<br>
        {{'Phone: '.$commonMailData['phone']}}<br>
        {{'Desired Property Type: '.$commonMailData['desired_property_type']}}<br>
        {{'Annual Income: '.$commonMailData['annual_income']}}<br>
        {{'Credit Scores: '.$commonMailData['credit_scores']}}<br>
        {{'Communication Method: '}}
        @if(count($commonMailData['communication']) > 0)
            @foreach($commonMailData['communication'] as $key => $communication)
                @if(count($commonMailData['communication']) == $key+1)
                    {{' '.$communication}}
                @else
                    {{' '.$communication.','}}
                @endif
            @endforeach
        @endif
        <br>
        {{'About: '.$commonMailData['about']}}<br>
    @elseif($commonMailData['mail_label'] == 'free_home_valuation')
        {{'Name: '.$commonMailData['name']}}<br>
        {{'Email: '.$commonMailData['email']}}<br>
        {{'Phone: '.$commonMailData['phone']}}<br>
        {{'Property Condition: '}}
        @if(count($commonMailData['property_condition']) > 0)
            @foreach($commonMailData['property_condition'] as $key => $pCondition)
                @if(count($commonMailData['property_condition']) == $key+1)
                    {{' '.$pCondition}}
                @else
                    {{' '.$pCondition.','}}
                @endif
            @endforeach
        @endif
        <br>
        {{'Address: '.$commonMailData['address']}}<br>
    @endif
    
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
        line-height: 1.3;
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

