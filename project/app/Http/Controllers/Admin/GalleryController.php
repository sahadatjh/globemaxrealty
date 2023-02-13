<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Gallery;
use Carbon\Carbon;
use Validator;
use Session;
use Hash;
use Auth;
use File;
use DB;

class GalleryController extends Controller
{
    
    public function index()
    {
        $gallery = Gallery::orderBy('id','desc')->get();
        return view('admin.gallery.index')->with('gallery', $gallery);
    }

    
    public function create()
    {
        return view('admin.gallery.edit');
    }

    
    public function store(Request $request)
    {
        // $request->validate([
        //     'image' => 'nullable|mimes:jpeg,jpg,png',
        // ]);
        $data = $request->all();
        if($request->image){
            foreach ($request->image as $key => $gImage) {
                $coverPhoto = $request->image[$key];
                $getExt = $coverPhoto->getClientOriginalExtension();
                $modifiedName = 'img_'.time().'_'.uniqid().'.'.$getExt;
                $destination ='upload/gallery-image/';
                $data['image'] = $destination.$modifiedName;
                $coverPhoto->move( $destination ,$modifiedName );
                $gallery_data = Gallery::create($data);
            }
        }
        return back()->with('message', 'Data Inserted');
    }

    
    public function show($id)
    {
        $gallery = Gallery::find($id);
        if($gallery){
            if($gallery->status ==1){
                $gallery->update([
                    'status' => 0,
                ]);
            }else{
                $gallery->update([
                    'status' => 1,
                ]);
            }
            return back()->with('message', 'Status Updated');
        }else{
            return back()->with('error', 'Data Not Found!');
        }
    }

    
    public function edit($id)
    {
        $gallery = Gallery::find($id);
        if($gallery){
            return view('admin.gallery.edit')->with('gallery', $gallery);
        }else{
            return back()->with('error', 'Data Not Found!');
        }
    }

    
    public function update(Request $request, $id)
    {
        // $request->validate([
        //     "image" => "nullable|mimes:jpeg,jpg,png",
        // ]);
        $gallery = Gallery::find($id);
        if($gallery){
            $data = $request->all();
            if($request->file('image')){
                if($gallery->image != ''  && $gallery->image != null){
                    $old_file = $gallery->image;
                    if(file_exists($old_file)){
                        File::delete($old_file);
                    }
                }
                $coverPhoto = $request->image;
                $getExt = $coverPhoto->getClientOriginalExtension();
                $modifiedName = 'img_'.time().'_'.uniqid().'.'.$getExt;
                $destination ='upload/gallery-image/';
                $data['image'] = $destination.$modifiedName;
                $coverPhoto->move( $destination ,$modifiedName );
            }else{
                $data['image'] = $gallery->image;
            }
            $gallery->update($data);
        }else{
            return back()->with('error', 'Data Not Found!');
        }
        return redirect('admin/gallery')->with('message', 'Data Updated!');
    }

    
    public function destroy($id)
    {
        $gallery = Gallery::find($id);
        if($gallery){
            if($gallery->image != ''  && $gallery->image != null){
                $old_file = $gallery->image;
                if(file_exists($old_file)){
                    File::delete($old_file);
                }
            }
            $gallery->delete();
        }else{
            return back()->with('error', 'Data Not Found!');
        }
        return back()->with('message', 'Data Deleted!');
    }
}