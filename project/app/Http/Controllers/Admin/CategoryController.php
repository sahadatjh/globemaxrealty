<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Product;
use App\Models\ProductImage;
use Carbon\Carbon;
use Validator;
use Session;
use Hash;
use Auth;
use File;
use DB;

class CategoryController extends Controller
{
    
    public function index()
    {
        $categories = Category::orderBy('view_priority','asc')->get();
        return view('admin.category.index')->with('categories', $categories);
    }

    
    public function create()
    {
        return view('admin.category.edit');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'unique:categories|required',
            'category_image' => 'nullable|mimes:jpeg,jpg,png',
            'view_priority' => 'nullable',
        ]);
        $data = $request->all();
        if($request->view_priority <= 0){
            $data['view_priority'] = 'none';
        }else{
            $data['view_priority'] = $request->view_priority;
        }
        if($request->file('category_image')){
            $coverPhoto = $request->category_image;
            $getExt = $coverPhoto->getClientOriginalExtension();
            $modifiedName = 'img_'.time().'_'.uniqid().'.'.$getExt;
            $destination ='upload/category-image/';
            $data['category_image'] = $destination.$modifiedName;
            $coverPhoto->move( $destination ,$modifiedName );
        }
        $data['slug'] = Str::slug($data['category_name']);
        $category_data = Category::create($data);
        return back()->with('message', 'Data Inserted');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $category = Category::find($id);
        if($category){
            return view('admin.category.edit')->with('category', $category);
        }else{
            return back()->with('error', 'Data Not Found!');
        }
    }

    
    public function update(Request $request, $id)
    {
        $request->validate([
            'category_name' => 'required|unique:categories,category_name,'.$id,
            "category_image" => "nullable|mimes:jpeg,jpg,png",
            'view_priority' => 'nullable',
        ]);
        $category = Category::find($id);
        if($category){
            $data = $request->all();
            if($request->view_priority <= 0){
                $data['view_priority'] = 'none';
            }else{
                $data['view_priority'] = $request->view_priority;
            }
            if($request->file('category_image')){
                if($category->category_image != ''  && $category->category_image != null){
                    $old_file = $category->category_image;
                    if(file_exists($old_file)){
                        File::delete($old_file);
                    }
                }
                $coverPhoto = $request->category_image;
                $getExt = $coverPhoto->getClientOriginalExtension();
                $modifiedName = 'img_'.time().'_'.uniqid().'.'.$getExt;
                $destination ='upload/category-image/';
                $data['category_image'] = $destination.$modifiedName;
                $coverPhoto->move( $destination ,$modifiedName );
            }else{
                $data['category_image'] = $category->category_image;
            }
            $data['slug'] = $category->slug;
            $category->update($data);
        }else{
            return back()->with('error', 'Data Not Found!');
        }
        return redirect('admin/category')->with('message', 'Data Updated!');
    }

    
    public function destroy($id)
    {
        $category = Category::find($id);
        if($category){
            if($category->category_image != ''  && $category->category_image != null){
                $old_file = $category->category_image;
                if(file_exists($old_file)){
                    File::delete($old_file);
                }
            }
            $category->delete();
        }else{
            return back()->with('error', 'Data Not Found!');
        }
        return back()->with('message', 'Data Deleted!');
    }
}
