<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Faq;
use Carbon\Carbon;
use Validator;
use Session;
use Hash;
use Auth;
use File;
use DB;

class FAQController extends Controller
{
    
    public function index()
    {
        $faqs = Faq::get();
        return view('admin.seller-guide.faq')->with('faqs', $faqs);
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|mimes:jpeg,jpg,png',
        ]);
        $data = $request->all();
        if($request->file('image')){
            $coverPhoto = $request->image;
            $getExt = $coverPhoto->getClientOriginalExtension();
            $modifiedName = 'img_'.time().'_'.uniqid().'.'.$getExt;
            $destination ='upload/faq-image/';
            $data['image'] = $destination.$modifiedName;
            $coverPhoto->move( $destination ,$modifiedName );
        }
        $data['slug'] = Str::slug($data['title'].'-'.Str::random(5));
        $faq_data = Faq::create($data);
        return back()->with('message', 'Data Inserted');
    }

    
    public function show($id)
    {
        $product = Faq::find($id);
        if($product){
            if($product->status ==1){
                $product->update([
                    'status' => 0,
                ]);
            }else{
                $product->update([
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
        $faq = Faq::find($id);
        if($faq){
            return view('admin.seller-guide.faq-edit')->with('faq', $faq);
        }else{
            return back()->with('error', 'Data Not Found!');
        }
    }

    
    public function update(Request $request, $id)
    {
        $request->validate([
            "image" => "nullable|mimes:jpeg,jpg,png",
            'title' => 'required',
            'description' => 'required',
        ]);
        $faq = Faq::find($id);
        if($faq){
            $data = $request->all();
            if($request->file('image')){
                if($faq->image != ''  && $faq->image != null){
                    $old_file = $faq->image;
                    if(file_exists($old_file)){
                        File::delete($old_file);
                    }
                }
                $coverPhoto = $request->image;
                $getExt = $coverPhoto->getClientOriginalExtension();
                $modifiedName = 'img_'.time().'_'.uniqid().'.'.$getExt;
                $destination ='upload/faq-image/';
                $data['image'] = $destination.$modifiedName;
                $coverPhoto->move( $destination ,$modifiedName );
            }else{
                $data['image'] = $faq->image;
            }
            $data['slug'] = $faq->slug;
            $faq->update($data);
        }else{
            return back()->with('error', 'Data Not Found!');
        }
        return redirect('admin/seller-faq')->with('message', 'Data Updated!');
    }

    
    public function destroy($id)
    {
        $faq = Faq::find($id);
        if($faq){
            if($faq->image != ''  && $faq->image != null){
                $old_file = $faq->image;
                if(file_exists($old_file)){
                    File::delete($old_file);
                }
            }
            $faq->delete();
        }else{
            return back()->with('error', 'Data Not Found!');
        }
        return back()->with('message', 'Data Deleted!');
    }
}
