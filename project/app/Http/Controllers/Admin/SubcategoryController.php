<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Wishlist;
use App\Models\Setting;
use Carbon\Carbon;
use Validator;
use Session;
use Hash;
use Auth;
use File;
use DB;
use Illuminate\Support\Facades\Mail;

class SubcategoryController extends Controller
{
    
    public function index()
    {
        $categories = Category::orderBy('view_priority','asc')->get();
        $subcategories = Subcategory::orderBy('view_priority','asc')->get();
        return view('admin.subcategory.index')->with([
            'categories' => $categories,
            'subcategories' => $subcategories,
        ]);
    }

    
    public function create()
    {
        return view('admin.subcategory.edit');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required',
            'subcategory_name' => 'required',
            'subcategory_image' => 'nullable|mimes:jpeg,jpg,png',
            'view_priority' => 'nullable',
        ]);
        $subcategoryExist = Subcategory::where('category',$request->category)->where('subcategory_name',$request->subcategory_name)->first();
        if($subcategoryExist){
            $request->validate([
                'subcategory_name' => 'unique:subcategories'
            ]);
        }
        $data = $request->all();
        if($request->view_priority <= 0){
            $data['view_priority'] = 'none';
        }else{
            $data['view_priority'] = $request->view_priority;
        }
        if($request->file('subcategory_image')){
            $coverPhoto = $request->subcategory_image;
            $getExt = $coverPhoto->getClientOriginalExtension();
            $modifiedName = 'img_'.time().'_'.uniqid().'.'.$getExt;
            $destination ='upload/subcategory-image/';
            $data['subcategory_image'] = $destination.$modifiedName;
            $coverPhoto->move( $destination ,$modifiedName );
        }
        $data['slug'] = Str::slug($data['subcategory_name'].'-'.Str::random(5));
        $subcategory_data = Subcategory::create($data);
        return back()->with('message', 'Data Inserted');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $categories = Category::orderBy('view_priority','asc')->get();
        $subcategory = Subcategory::find($id);
        if($subcategory){
            return view('admin.subcategory.edit')->with([
                'categories' => $categories,
                'subcategory' => $subcategory,
            ]);
        }else{
            return back()->with('error', 'Data Not Found!');
        }
    }

    
    public function update(Request $request, $id)
    {
        $request->validate([
            'category' => 'required',
            'subcategory_name' => 'required|unique:subcategories,subcategory_name,'.$id,
            "subcategory_image" => "nullable|mimes:jpeg,jpg,png",
            'view_priority' => 'nullable',
        ]);
        $subcategory = Subcategory::find($id);
        if($subcategory){
            $data = $request->all();
            if($request->view_priority <= 0){
                $data['view_priority'] = 'none';
            }else{
                $data['view_priority'] = $request->view_priority;
            }
            if($request->file('subcategory_image')){
                if($subcategory->subcategory_image != ''  && $subcategory->subcategory_image != null){
                    $old_file = $subcategory->subcategory_image;
                    if(file_exists($old_file)){
                        File::delete($old_file);
                    }
                }
                $coverPhoto = $request->subcategory_image;
                $getExt = $coverPhoto->getClientOriginalExtension();
                $modifiedName = 'img_'.time().'_'.uniqid().'.'.$getExt;
                $destination ='upload/subcategory-image/';
                $data['subcategory_image'] = $destination.$modifiedName;
                $coverPhoto->move( $destination ,$modifiedName );
            }else{
                $data['subcategory_image'] = $subcategory->subcategory_image;
            }
            $data['slug'] = $subcategory->slug;
            $subcategory->update($data);
        }else{
            return back()->with('error', 'Data Not Found!');
        }
        return redirect('admin/subcategory')->with('message', 'Data Updated!');
    }

    
    public function destroy($id)
    {
        $subcategory = Subcategory::find($id);
        if($subcategory){
            if($subcategory->subcategory_image != ''  && $subcategory->subcategory_image != null){
                $old_file = $subcategory->subcategory_image;
                if(file_exists($old_file)){
                    File::delete($old_file);
                }
            }
            $subcategory->delete();
        }else{
            return back()->with('error', 'Data Not Found!');
        }
        return back()->with('message', 'Data Deleted!');
    }
}
