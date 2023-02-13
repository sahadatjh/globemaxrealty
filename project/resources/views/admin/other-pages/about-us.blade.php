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
                    About Us
                </div>
            </div>
            <div class="page-title-actions">
            </div>
        </div>
    </div>

    <div class="row pb-5">
        <div class="main-card mb-5 card col-md-8 m-auto">
            <div class="card-body">
                <h5 class="card-title">Update About Us</h5>
                <form method="post" action="{{route('admin.about-us.update')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="position-relative form-group">
                        <label class="">Image</label>
                        <input name="about_us_image" type="file" class="form-control" accept=".jpeg,.jpg,.png"/>
                        @if(isset($aboutUsData))
                            @if($aboutUsData->about_us_image)
                                <img width="150px;" src="{{asset($aboutUsData->about_us_image)}}">
                            @endif
                        @endif
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Heading</label>
                        <input name="heading" type="text" class="form-control" value="@if(isset($aboutUsData))@if($aboutUsData->heading){{$aboutUsData->heading}}@endif @endif"/>
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Description</label>
                        <textarea id="description" class="form-control" name="description" rows="3">@if(isset($aboutUsData)) @if($aboutUsData->description){{$aboutUsData->description}}@endif @endif</textarea>
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Opening Hours</label>
                        <textarea class="form-control" id="HCKEditor1" name="opening_hours" rows="2">@if(isset($aboutUsData)) @if($aboutUsData->opening_hours){{$aboutUsData->opening_hours}}@endif @endif</textarea>
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Address 1</label>
                        <textarea  id="HCKEditor2" class="form-control" name="address" rows="2">@if(isset($aboutUsData)) @if($aboutUsData->address){{$aboutUsData->address}}@endif @endif</textarea>
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Address 2</label>
                        <textarea  id="HCKEditor3" class="form-control" name="address_2" rows="2">@if(isset($aboutUsData)) @if($aboutUsData->address_2){{$aboutUsData->address_2}}@endif @endif</textarea>
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Number 1</label>
                        <input name="number" type="text" class="form-control" value="@if(isset($aboutUsData))@if($aboutUsData->number){{$aboutUsData->number}}@endif @endif"/>
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Number 2</label>
                        <input name="number_2" type="text" class="form-control" value="@if(isset($aboutUsData))@if($aboutUsData->number_2){{$aboutUsData->number_2}}@endif @endif"/>
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Number 3</label>
                        <input name="number_3" type="text" class="form-control" value="@if(isset($aboutUsData))@if($aboutUsData->number_3){{$aboutUsData->number_3}}@endif @endif"/>
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Email 1</label>
                        <input name="email" type="email" class="form-control" value="@if(isset($aboutUsData))@if($aboutUsData->email){{$aboutUsData->email}}@endif @endif"/>
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Email 2</label>
                        <input name="email_2" type="email" class="form-control" value="@if(isset($aboutUsData))@if($aboutUsData->email_2){{$aboutUsData->email_2}}@endif @endif"/>
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Email 3</label>
                        <input name="email_3" type="email" class="form-control" value="@if(isset($aboutUsData))@if($aboutUsData->email_3){{$aboutUsData->email_3}}@endif @endif"/>
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Property Contact Info</label>
                        <textarea class="form-control" name="property_contact_info" id="HCKEditor4" rows="2">@if(isset($aboutUsData)) @if($aboutUsData->property_contact_info){{$aboutUsData->property_contact_info}}@endif @endif</textarea>
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Facebook Url</label>
                        <input name="facebook_url" type="text" class="form-control" value="@if(isset($aboutUsData))@if($aboutUsData->facebook_url){{$aboutUsData->facebook_url}}@endif @endif"/>
                    </div>
                    {{-- <div class="position-relative form-group">
                        <label class="">Youtube Url</label>
                        <input name="youtube_url" type="text" class="form-control" value="@if(isset($aboutUsData))@if($aboutUsData->youtube_url){{$aboutUsData->youtube_url}}@endif @endif"/>
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Twitter Url</label>
                        <input name="twitter_url" type="text" class="form-control" value="@if(isset($aboutUsData))@if($aboutUsData->twitter_url){{$aboutUsData->twitter_url}}@endif @endif"/>
                    </div> --}}
                    {{-- <div class="position-relative form-group">
                        <label class="">Whats App Url</label>
                        <input name="whats_app_url" type="text" class="form-control" value="@if(isset($aboutUsData))@if($aboutUsData->whats_app_url){{$aboutUsData->whats_app_url}}@endif @endif"/>
                    </div> --}}
                    {{-- <div class="position-relative form-group">
                        <label class="">Instragram Url</label>
                        <input name="instragram_url" type="text" class="form-control" value="@if(isset($aboutUsData))@if($aboutUsData->instragram_url){{$aboutUsData->instragram_url}}@endif @endif"/>
                    </div> --}}

                    <div class="position-relative form-group">
                        <label class="">Dashboard Logo (320 X 75)px</label>
                        <input name="dashboard_logo" type="file" class="form-control" accept=".jpeg,.jpg,.png" />
                        @if(isset($aboutUsData))
                            @if($aboutUsData->dashboard_logo)
                                <div class="bg-secondary">
                                    <img width="150px;" src="{{asset($aboutUsData->dashboard_logo)}}">
                                </div>
                            @endif
                        @endif
                    </div>

                    <div class="position-relative form-group">
                        <label class="">Admin Logo (320 X 75)px</label>
                        <input name="admin_logo" type="file" class="form-control" accept=".jpeg,.jpg,.png" />
                        @if(isset($aboutUsData))
                            @if($aboutUsData->admin_logo)
                                <div class="bg-secondary">
                                    <img width="150px;" src="{{asset($aboutUsData->admin_logo)}}">
                                </div>
                            @endif
                        @endif
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Header Logo (320 X 75)px</label>
                        <input name="header_logo" type="file" class="form-control" accept=".jpeg,.jpg,.png" />
                        @if(isset($aboutUsData))
                            @if($aboutUsData->header_logo)
                                <div class="bg-secondary">
                                    <img width="150px;" src="{{asset($aboutUsData->header_logo)}}">
                                </div>
                            @endif
                        @endif
                    </div>
                    {{-- <div class="position-relative form-group">
                        <label class="">Footer Logo (320 X 75)px</label>
                        <input name="footer_logo" type="file" class="form-control" accept=".jpeg,.jpg,.png" />
                        @if(isset($aboutUsData))
                            @if($aboutUsData->footer_logo)
                                <div class="bg-secondary">
                                    <img width="150px;" src="{{asset($aboutUsData->footer_logo)}}">
                                </div>
                            @endif
                        @endif
                    </div> --}}
                    <div class="position-relative form-group">
                        <label class="">Favicon Icon (32 X 32)px</label>
                        <input name="favicon_icon" type="file" class="form-control" accept=".png"/>
                        @if(isset($aboutUsData))
                            @if($aboutUsData->favicon_icon)
                                <div class="bg-secondary">
                                    <img width="40" src="{{asset($aboutUsData->favicon_icon)}}">
                                </div>
                            @endif
                        @endif
                    </div>
                    {{-- <div class="position-relative form-group">
                        <label class="">Footer Image (260 X 260)px</label>
                        <input name="footer_image" type="file" class="form-control" accept=".jpeg,.jpg,.png" />
                        @if(isset($aboutUsData))
                            @if($aboutUsData->footer_image)
                                <img width="150px;" src="{{asset($aboutUsData->footer_image)}}">
                            @endif
                        @endif
                    </div> --}}
                    <div class="position-relative form-group">
                        <label class="">Map Embed Link</label>
                        <textarea class="form-control" name="map_embed_link" id="" rows="7">@if(isset($aboutUsData)) @if($aboutUsData->map_embed_link){{$aboutUsData->map_embed_link}}@endif @endif</textarea>
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Map Link</label>
                        <textarea class="form-control" name="map_link" rows="2">@if(isset($aboutUsData)) @if($aboutUsData->map_link){{$aboutUsData->map_link}}@endif @endif</textarea>
                    </div>
                    {{-- <div class="position-relative form-group">
                        <label class="">Faq</label>
                        <textarea id="ckFaq" class="form-control" name="faq" rows="3">@if(isset($aboutUsData)) @if($aboutUsData->faq){{$aboutUsData->faq}}@endif @endif</textarea>
                    </div> --}}
                    <div class="position-relative form-group">
                        <label class="">Privacy Policy</label>
                        <textarea id="ckPrivacyPolicy" class="form-control" name="privacy_policy" rows="3">@if(isset($aboutUsData)) @if($aboutUsData->privacy_policy){{$aboutUsData->privacy_policy}}@endif @endif</textarea>
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Terms Of Use</label>
                        <textarea id="ckTermsOfUse" class="form-control" name="terms_of_use" rows="3">@if(isset($aboutUsData)) @if($aboutUsData->terms_of_use){{$aboutUsData->terms_of_use}}@endif @endif</textarea>
                    </div>
                    <button class="mt-1 btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop