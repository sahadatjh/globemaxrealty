<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\HomeSlider;
use App\Models\Setting;
use Carbon\Carbon;
use Validator;
use Session;
use Hash;
use Auth;
use File;
use DB;
use Illuminate\Support\Facades\Mail;

class HomeSliderController extends Controller
{

    public function index()
    {
        $homeSlider = HomeSlider::get();
        return view('admin.home-slider.index')->with([
            'h_slider_data' => $homeSlider,
        ]);
    }


    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|mimes:jpg,jpeg,png',
        ]);
        $data = $request->all();
        if($request->file('image')){
            $sliderImage = $request->image;
            $getExt = $sliderImage->getClientOriginalExtension();
            $modifiedName = 'img_'.time().'_'.uniqid().'.'.$getExt;
            $destination ='upload/slider-image/';
            $data['image'] = $destination.$modifiedName;
            $sliderImage->move( $destination ,$modifiedName );
        }
        HomeSlider::create($data);
        return back()->with('message', 'Data Inserted!');
    }

    
    public function show($id)
    {
        
    }

    
    public function edit($id)
    {
        $homeSlider = HomeSlider::find($id);
        if($homeSlider){
            return view('admin.home-slider.edit')->with([
                'h_slider_data' => $homeSlider
            ]);
        }else{
            return back()->with('error', 'Data Not Found!');
        }
        
    }

    
    public function update(Request $request, $id)
    {
        $homeSlider = HomeSlider::find($id);
        if($homeSlider){
            $request->validate([
                'image' => 'required|mimes:jpg,jpeg,png',
            ]);
            $data = $request->all();
            if($request->file('image')){
                    if($homeSlider->image != ''  && $homeSlider->image != null){
                        $old_file = $homeSlider->image;
                        if(file_exists($old_file)){
                            File::delete($old_file);
                        }
                    }
                $sliderImage = $request->image;
                $getExt = $sliderImage->getClientOriginalExtension();
                $modifiedName = 'img_'.time().'_'.uniqid().'.'.$getExt;
                $destination ='upload/slider-image/';
                $data['image'] = $destination.$modifiedName;
                $sliderImage->move( $destination ,$modifiedName );
            }
            $homeSlider->update($data);
            return redirect('admin/home-slider')->with('message', 'Data Updated!');
        }else{
            return back()->with('error', 'Data Not Found!');
        }
    }

    
    public function destroy($id)
    {
        $homeSlider = HomeSlider::find($id);
        if($homeSlider){
            if($homeSlider->image != ''  && $homeSlider->image != null){
                $old_file = $homeSlider->image;
                if(file_exists($old_file)){
                    File::delete($old_file);
                }
            }
            $homeSlider->delete();
            return redirect('admin/home-slider')->with('message', 'Data Updated!');
        }else{
            return back()->with('error', 'Data Not Found!');
        }
    }
}
