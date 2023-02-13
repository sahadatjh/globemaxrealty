<?php

namespace App\Http\Controllers\Admin;
use DB;
use Auth;
use File;
use Hash;
use Session;
use Validator;
use Carbon\Carbon;
use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\LicenseServicePdf;
use App\Http\Controllers\Controller;


class ServiceController extends Controller
{

    public function licensingServiceDownlod( Request $request )
    {
        $licensesPdf = LicenseServicePdf::orderBy('id','DESC')->get();
        return view('admin.licence-download.index', compact('licensesPdf'));
    }
    
    public function serviceIntro()
    {
        $serviceData = Service::first();
        if($serviceData){
            return view('admin.service.intro')->with([
                'serviceData' => $serviceData,
            ]);
        }else{
            return view('admin.service.intro');
        }
        
    }

    public function realEstate()
    {
        $serviceData = Service::first();
        if($serviceData){
            return view('admin.service.real-estate')->with([
                'serviceData' => $serviceData,
            ]);
        }else{
            return view('admin.service.real-estate');
        }
        
    }
    
    public function consultation()
    {
        $serviceData = Service::first();
        if($serviceData){
            return view('admin.service.consultation')->with([
                'serviceData' => $serviceData,
            ]);
        }else{
            return view('admin.service.consultation');
        }
        
    }
    
    public function propertyTours()
    {
        $serviceData = Service::first();
        if($serviceData){
            return view('admin.service.property-tours')->with([
                'serviceData' => $serviceData,
            ]);
        }else{
            return view('admin.service.property-tours');
        }
        
    }
    
    public function buyerTips()
    {
        $serviceData = Service::first();
        if($serviceData){
            return view('admin.service.buyer-tips')->with([
                'serviceData' => $serviceData,
            ]);
        }else{
            return view('admin.service.buyer-tips');
        }
        
    }
    
    public function sellerTips()
    {
        $serviceData = Service::first();
        if($serviceData){
            return view('admin.service.seller-tips')->with([
                'serviceData' => $serviceData,
            ]);
        }else{
            return view('admin.service.seller-tips');
        }
        
    }
    
    public function realEstateStaging()
    {
        $serviceData = Service::first();
        if($serviceData){
            return view('admin.service.real-estate-staging')->with([
                'serviceData' => $serviceData,
            ]);
        }else{
            return view('admin.service.real-estate-staging');
        }
        
    }
    
    public function fairHousingPolicy()
    {
        $serviceData = Service::first();
        if($serviceData){
            return view('admin.service.fair-housing-policy')->with([
                'serviceData' => $serviceData,
            ]);
        }else{
            return view('admin.service.fair-housing-policy');
        }
        
    }
    
    public function energyTips()
    {
        $serviceData = Service::first();
        if($serviceData){
            return view('admin.service.energy-tips')->with([
                'serviceData' => $serviceData,
            ]);
        }else{
            return view('admin.service.energy-tips');
        }
        
    }
    
    public function propertyManagement()
    {
        $serviceData = Service::first();
        if($serviceData){
            return view('admin.service.property-management')->with([
                'serviceData' => $serviceData,
            ]);
        }else{
            return view('admin.service.property-management');
        }
        
    }
    
    


    public function serviceUpdate(Request $request)
    {
        $data = $request->all();
        $serviceData = Service::first();
        if($serviceData){
            if($request->file('real_estate_image')){
                if($serviceData){
                    if($serviceData->real_estate_image != ''  && $serviceData->real_estate_image != null){
                        $old_file = $serviceData->real_estate_image;
                        if(file_exists($old_file)){
                            File::delete($old_file);
                        }
                    }
                }
                $coverPhoto = $request->real_estate_image;
                $getExt = $coverPhoto->getClientOriginalExtension();
                $modifiedName = 'img_'.time().'_'.uniqid().'.'.$getExt;
                $destination ='upload/service-photo/';
                $data['real_estate_image'] = $destination.$modifiedName;
                $coverPhoto->move( $destination ,$modifiedName );
            }else{
                if($serviceData){
                    $data['real_estate_image'] = $serviceData->real_estate_image;
                }
            }
            if($request->file('consultation_image')){
                if($serviceData){
                    if($serviceData->consultation_image != ''  && $serviceData->consultation_image != null){
                        $old_file = $serviceData->consultation_image;
                        if(file_exists($old_file)){
                            File::delete($old_file);
                        }
                    }
                }
                $coverPhoto = $request->consultation_image;
                $getExt = $coverPhoto->getClientOriginalExtension();
                $modifiedName = 'img_'.time().'_'.uniqid().'.'.$getExt;
                $destination ='upload/service-photo/';
                $data['consultation_image'] = $destination.$modifiedName;
                $coverPhoto->move( $destination ,$modifiedName );
            }else{
                if($serviceData){
                    $data['consultation_image'] = $serviceData->consultation_image;
                }
            }
            if($request->file('property_tours_image')){
                if($serviceData){
                    if($serviceData->property_tours_image != ''  && $serviceData->property_tours_image != null){
                        $old_file = $serviceData->property_tours_image;
                        if(file_exists($old_file)){
                            File::delete($old_file);
                        }
                    }
                }
                $coverPhoto = $request->property_tours_image;
                $getExt = $coverPhoto->getClientOriginalExtension();
                $modifiedName = 'img_'.time().'_'.uniqid().'.'.$getExt;
                $destination ='upload/service-photo/';
                $data['property_tours_image'] = $destination.$modifiedName;
                $coverPhoto->move( $destination ,$modifiedName );
            }else{
                if($serviceData){
                    $data['property_tours_image'] = $serviceData->property_tours_image;
                }
            }
            if($request->file('buyer_tips_image')){
                if($serviceData){
                    if($serviceData->buyer_tips_image != ''  && $serviceData->buyer_tips_image != null){
                        $old_file = $serviceData->buyer_tips_image;
                        if(file_exists($old_file)){
                            File::delete($old_file);
                        }
                    }
                }
                $coverPhoto = $request->buyer_tips_image;
                $getExt = $coverPhoto->getClientOriginalExtension();
                $modifiedName = 'img_'.time().'_'.uniqid().'.'.$getExt;
                $destination ='upload/service-photo/';
                $data['buyer_tips_image'] = $destination.$modifiedName;
                $coverPhoto->move( $destination ,$modifiedName );
            }else{
                if($serviceData){
                    $data['buyer_tips_image'] = $serviceData->buyer_tips_image;
                }
            }
            if($request->file('seller_tips_image')){
                if($serviceData){
                    if($serviceData->seller_tips_image != ''  && $serviceData->seller_tips_image != null){
                        $old_file = $serviceData->seller_tips_image;
                        if(file_exists($old_file)){
                            File::delete($old_file);
                        }
                    }
                }
                $coverPhoto = $request->seller_tips_image;
                $getExt = $coverPhoto->getClientOriginalExtension();
                $modifiedName = 'img_'.time().'_'.uniqid().'.'.$getExt;
                $destination ='upload/service-photo/';
                $data['seller_tips_image'] = $destination.$modifiedName;
                $coverPhoto->move( $destination ,$modifiedName );
            }else{
                if($serviceData){
                    $data['seller_tips_image'] = $serviceData->seller_tips_image;
                }
            }
            if($request->file('real_estate_staging_image')){
                if($serviceData){
                    if($serviceData->real_estate_staging_image != ''  && $serviceData->real_estate_staging_image != null){
                        $old_file = $serviceData->real_estate_staging_image;
                        if(file_exists($old_file)){
                            File::delete($old_file);
                        }
                    }
                }
                $coverPhoto = $request->real_estate_staging_image;
                $getExt = $coverPhoto->getClientOriginalExtension();
                $modifiedName = 'img_'.time().'_'.uniqid().'.'.$getExt;
                $destination ='upload/service-photo/';
                $data['real_estate_staging_image'] = $destination.$modifiedName;
                $coverPhoto->move( $destination ,$modifiedName );
            }else{
                if($serviceData){
                    $data['real_estate_staging_image'] = $serviceData->real_estate_staging_image;
                }
            }
            if($request->file('fair_housing_policy_image')){
                if($serviceData){
                    if($serviceData->fair_housing_policy_image != ''  && $serviceData->fair_housing_policy_image != null){
                        $old_file = $serviceData->fair_housing_policy_image;
                        if(file_exists($old_file)){
                            File::delete($old_file);
                        }
                    }
                }
                $coverPhoto = $request->fair_housing_policy_image;
                $getExt = $coverPhoto->getClientOriginalExtension();
                $modifiedName = 'img_'.time().'_'.uniqid().'.'.$getExt;
                $destination ='upload/service-photo/';
                $data['fair_housing_policy_image'] = $destination.$modifiedName;
                $coverPhoto->move( $destination ,$modifiedName );
            }else{
                if($serviceData){
                    $data['fair_housing_policy_image'] = $serviceData->fair_housing_policy_image;
                }
            }
            if($request->file('energy_tips_image')){
                if($serviceData){
                    if($serviceData->energy_tips_image != ''  && $serviceData->energy_tips_image != null){
                        $old_file = $serviceData->energy_tips_image;
                        if(file_exists($old_file)){
                            File::delete($old_file);
                        }
                    }
                }
                $coverPhoto = $request->energy_tips_image;
                $getExt = $coverPhoto->getClientOriginalExtension();
                $modifiedName = 'img_'.time().'_'.uniqid().'.'.$getExt;
                $destination ='upload/service-photo/';
                $data['energy_tips_image'] = $destination.$modifiedName;
                $coverPhoto->move( $destination ,$modifiedName );
            }else{
                if($serviceData){
                    $data['energy_tips_image'] = $serviceData->energy_tips_image;
                }
            }
            if($request->file('property_management_image')){
                if($serviceData){
                    if($serviceData->property_management_image != ''  && $serviceData->property_management_image != null){
                        $old_file = $serviceData->property_management_image;
                        if(file_exists($old_file)){
                            File::delete($old_file);
                        }
                    }
                }
                $coverPhoto = $request->property_management_image;
                $getExt = $coverPhoto->getClientOriginalExtension();
                $modifiedName = 'img_'.time().'_'.uniqid().'.'.$getExt;
                $destination ='upload/service-photo/';
                $data['property_management_image'] = $destination.$modifiedName;
                $coverPhoto->move( $destination ,$modifiedName );
            }else{
                if($serviceData){
                    $data['property_management_image'] = $serviceData->property_management_image;
                }
            }
            $serviceData->update($data);
        }else{
            if($request->file('real_estate_image')){
                $coverPhoto = $request->real_estate_image;
                $getExt = $coverPhoto->getClientOriginalExtension();
                $modifiedName = 'img_'.time().'_'.uniqid().'.'.$getExt;
                $destination ='upload/service-photo/';
                $data['real_estate_image'] = $destination.$modifiedName;
                $coverPhoto->move( $destination ,$modifiedName );
            }
            if($request->file('consultation_image')){
                $coverPhoto = $request->consultation_image;
                $getExt = $coverPhoto->getClientOriginalExtension();
                $modifiedName = 'img_'.time().'_'.uniqid().'.'.$getExt;
                $destination ='upload/service-photo/';
                $data['consultation_image'] = $destination.$modifiedName;
                $coverPhoto->move( $destination ,$modifiedName );
            }
            if($request->file('property_tours_image')){
                $coverPhoto = $request->property_tours_image;
                $getExt = $coverPhoto->getClientOriginalExtension();
                $modifiedName = 'img_'.time().'_'.uniqid().'.'.$getExt;
                $destination ='upload/service-photo/';
                $data['property_tours_image'] = $destination.$modifiedName;
                $coverPhoto->move( $destination ,$modifiedName );
            }
            if($request->file('buyer_tips_image')){
                $coverPhoto = $request->buyer_tips_image;
                $getExt = $coverPhoto->getClientOriginalExtension();
                $modifiedName = 'img_'.time().'_'.uniqid().'.'.$getExt;
                $destination ='upload/service-photo/';
                $data['buyer_tips_image'] = $destination.$modifiedName;
                $coverPhoto->move( $destination ,$modifiedName );
            }
            if($request->file('seller_tips_image')){
                $coverPhoto = $request->seller_tips_image;
                $getExt = $coverPhoto->getClientOriginalExtension();
                $modifiedName = 'img_'.time().'_'.uniqid().'.'.$getExt;
                $destination ='upload/service-photo/';
                $data['seller_tips_image'] = $destination.$modifiedName;
                $coverPhoto->move( $destination ,$modifiedName );
            }
            if($request->file('real_estate_staging_image')){
                $coverPhoto = $request->real_estate_staging_image;
                $getExt = $coverPhoto->getClientOriginalExtension();
                $modifiedName = 'img_'.time().'_'.uniqid().'.'.$getExt;
                $destination ='upload/service-photo/';
                $data['real_estate_staging_image'] = $destination.$modifiedName;
                $coverPhoto->move( $destination ,$modifiedName );
            }
            if($request->file('fair_housing_policy_image')){
                $coverPhoto = $request->fair_housing_policy_image;
                $getExt = $coverPhoto->getClientOriginalExtension();
                $modifiedName = 'img_'.time().'_'.uniqid().'.'.$getExt;
                $destination ='upload/service-photo/';
                $data['fair_housing_policy_image'] = $destination.$modifiedName;
                $coverPhoto->move( $destination ,$modifiedName );
            }
            if($request->file('energy_tips_image')){
                $coverPhoto = $request->energy_tips_image;
                $getExt = $coverPhoto->getClientOriginalExtension();
                $modifiedName = 'img_'.time().'_'.uniqid().'.'.$getExt;
                $destination ='upload/service-photo/';
                $data['energy_tips_image'] = $destination.$modifiedName;
                $coverPhoto->move( $destination ,$modifiedName );
            }
            if($request->file('property_management_image')){
                $coverPhoto = $request->property_management_image;
                $getExt = $coverPhoto->getClientOriginalExtension();
                $modifiedName = 'img_'.time().'_'.uniqid().'.'.$getExt;
                $destination ='upload/service-photo/';
                $data['property_management_image'] = $destination.$modifiedName;
                $coverPhoto->move( $destination ,$modifiedName );
            }
            Service::create($data);
        }
        return back()->with('message', 'Data Updated!');
    }

}
