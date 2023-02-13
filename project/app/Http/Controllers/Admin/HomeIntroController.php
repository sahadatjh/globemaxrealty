<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeIntro;
use Carbon\Carbon;
use Validator;
use Session;
use Hash;
use Auth;
use File;
use DB;

class HomeIntroController extends Controller
{
    
    public function index()
    {
        
    }

    
    public function create()
    {
        $homeIntro = HomeIntro::first();
        if($homeIntro){
            return view('admin.home-intro.home-intro-edit')->with('homeIntro', $homeIntro);
        }else{
            return view('admin.home-intro.home-intro-edit');
        }
    }

    
    public function store(Request $request)
    {
       $request->validate([
           'title' => 'required',
           "description" => 'required',
           "image" => "nullable|mimes:jpeg,jpg,png,svg",
           "bg_video" => "nullable|mimes:mp4,ogg,ogv,mkv,3gp,mov,avi,wmv,flv",
           "total_design" => 'required|numeric|min:1',
           "total_customer" => 'required|numeric|min:1',
           "total_business_year" => 'required|numeric|min:1',
        ]);

        $data=$request->all();
        $homeIntro = HomeIntro::first();
        if($homeIntro){
            if($request->file('image')){
                if($homeIntro->image != ''  && $homeIntro->image != null){
                    $old_file = $homeIntro->image;
                    if(file_exists($old_file)){
                        File::delete($old_file);
                    }
                }
                $coverPhoto = $request->image;
                $getExt = $coverPhoto->getClientOriginalExtension();
                $modifiedName = 'img_'.time().'_'.uniqid().'.'.$getExt;
                $destination ='upload/home-intro/';
                $data['image'] = $destination.$modifiedName;
                $coverPhoto->move( $destination ,$modifiedName );
            }else{
                $data['image'] = $homeIntro->image;
            }
            if($request->file('bg_video')){
                if($homeIntro->bg_video != ''  && $homeIntro->bg_video != null){
                    $old_file = $homeIntro->bg_video;
                    if(file_exists($old_file)){
                        File::delete($old_file);
                    }
                }
                $coverPhoto = $request->bg_video;
                $getExt = $coverPhoto->getClientOriginalExtension();
                $modifiedName = 'bg-video'.time().'_'.uniqid().'.'.$getExt;
                $destination ='upload/home-intro/';
                $data['bg_video'] = $destination.$modifiedName;
                $coverPhoto->move( $destination ,$modifiedName );
            }else{
                $data['bg_video'] = $homeIntro->bg_video;
            }
            $homeIntro->update($data);
            return redirect('admin/home-intro/create')->with('message', 'Data Updated!');
        }else{
            if($request->file('image')){
                $coverPhoto = $request->image;
                $getExt = $coverPhoto->getClientOriginalExtension();
                $modifiedName = 'img_'.time().'_'.uniqid().'.'.$getExt;
                $destination ='upload/home-intro/';
                $data['image'] = $destination.$modifiedName;
                $coverPhoto->move( $destination ,$modifiedName );
            }else{
                $data['image'] = null;
            }
            if($request->file('bg_video')){
                $coverPhoto = $request->bg_video;
                $getExt = $coverPhoto->getClientOriginalExtension();
                $modifiedName = 'bg-video-'.time().'_'.uniqid().'.'.$getExt;
                $destination ='upload/home-intro/';
                $data['bg_video'] = $destination.$modifiedName;
                $coverPhoto->move( $destination ,$modifiedName );
            }else{
                $data['bg_video'] = null;
            }
            HomeIntro::create($data);
            return redirect('admin/home-intro/create')->with('message', 'Data Updated!');
        }
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit()
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        
    }

    
    public function destroy($id)
    {
        $service = Service::find($id);
        if($service){
            if($service->image != ''  && $service->image != null){
                $old_file = $service->image;
                if(file_exists($old_file)){
                    File::delete($old_file);
                }
            }
            $service->delete();
            return back()->with('message', 'Data Deleted!');
        }else{
            return back()->with('error', 'Data Not Found!');
        }
    }
}

