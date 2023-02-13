<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductFloorPlans;
use App\Models\Setting;
use Carbon\Carbon;
use Validator;
use Session;
use Hash;
use Auth;
use File;
use DB;
use Illuminate\Support\Facades\Mail;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::orderBy('view_priority','asc')->with('categoryData','subcategoryData','productImages','productDefaultImage','productFloorPlans')->get();
        return view('admin.product.index')->with([
            'products' => $products,
        ]);
    }


    public function create()
    {
        $categories = Category::get();
        //$subCategories = Subcategory::get();
        return view('admin.product.create')->with([
            'categories' => $categories,
            //'subcategories' => $subCategories,
        ]);
    }

    public function productSubcategory(Request $request){
        $subcategories = Subcategory::where('category',$request->category)->get();

        return view('admin.product.subcategory-list')->with([
            'subcategories' => $subcategories,
        ]);
    }


    public function store(Request $request)
    {
        //
    }

    public function productAjaxStore(Request $request)
    {
        $data = $request->all();

        $productData = Product::create([
            'category' => $data['category'],
            'product_slug' => Str::slug($data['title'].'-'.Str::random(5)),
            'property_id' => $data['property_id'],
            'title' => $data['title'],
            'label' => $data['label'],
            'price' => $data['price'],
            'size' => $data['size'],
            'description' => $data['short_description'],
            'map_link' => $data['map_link'],
            'address' => $data['address'],
            'city' => $data['city'],
            'state' => $data['state'],
            'zip' => $data['zip'],
            'country' => $data['country'],
            'bedrooms' => $data['bedrooms'],
            'bathrooms' => $data['bathrooms'],
            'garage' => $data['garage'],
            'garage_size' => $data['garage_size'],
            'year_built' => $data['year_built'],
            //'property_type' => $data['property_type'],
            //'property_status' => $data['property_status'],
            'additional_details' => $data['additional_details'],
            'features' => $data['features'],
            'video' => $data['video'],
            'contact_info' => $data['contact_info'],
            //'view_priority' => $data['view_priority'],
            'status' => $data['status'],
        ]);

        if($request->file('product_image')){
            foreach($request->product_image as $key => $image){
                $coverPhoto = $request->product_image[$key];
                $getExt = $coverPhoto->getClientOriginalExtension();
                $modifiedName = 'img_'.time().'_'.uniqid().'.'.$getExt;
                $destination ='upload/product-image/';
                $product_image = $destination.$modifiedName;
                $coverPhoto->move( $destination ,$modifiedName );
                ProductImage::create([
                    'product_id' => $productData['id'],
                    'product_image' => $product_image, 
                    'default_image' => $request->default_image[$key], 
                ]);
            }
        }

        if(isset($request->floor_title)){
            foreach($request->floor_title as $key => $floorPlan){
                if(isset($request->floor_image[$key])){
                    $coverPhoto = $request->floor_image[$key];
                    $getExt = $coverPhoto->getClientOriginalExtension();
                    $modifiedName = 'img_'.time().'_'.uniqid().'.'.$getExt;
                    $destination ='upload/floor-plan-image/';
                    $floor_image = $destination.$modifiedName;
                    $coverPhoto->move( $destination ,$modifiedName );
                }else{
                    $floor_image = null;
                }
                ProductFloorPlans::create([
                    'product_id' => $productData['id'],
                    'floor_title' => $request->floor_title[$key],
                    'description' => $request->floor_description[$key],
                    'price' => $request->floor_price[$key],
                    'image' => $floor_image,
                    'info' => $request->floor_info[$key],
                ]); 
            }
        }

        Session::put('success','Data Inserted');
        $response = [
            'success' => 'Data Inserted',
        ];
        return $response;
        
    }

    public function productDuplicate($id)
    {
        $data = Product::find($id);

        $productData = Product::create([
            'category' => $data['category'],
            'product_slug' => Str::slug($data['title'].'-'.Str::random(5)),
            'property_id' => $data['property_id'],
            'title' => $data['title'],
            'label' => $data['label'],
            'price' => $data['price'],
            'size' => $data['size'],
            'description' => $data['description'],
            'map_link' => $data['map_link'],
            'address' => $data['address'],
            'city' => $data['city'],
            'state' => $data['state'],
            'zip' => $data['zip'],
            'country' => $data['country'],
            'bedrooms' => $data['bedrooms'],
            'bathrooms' => $data['bathrooms'],
            'garage' => $data['garage'],
            'garage_size' => $data['garage_size'],
            'year_built' => $data['year_built'],
            //'property_type' => $data['property_type'],
            //'property_status' => $data['property_status'],
            'additional_details' => $data['additional_details'],
            'features' => $data['features'],
            'video' => $data['video'],
            'contact_info' => $data['contact_info'],
            //'view_priority' => $data['view_priority'],
            'status' => 0,
        ]);

        $floorPlans = ProductFloorPlans::where('product_id',$id)->get();
        if(count($floorPlans) >0){
            foreach($floorPlans as $key => $floorPlan){
                ProductFloorPlans::create([
                    'product_id' => $productData['id'],
                    'floor_title' => $floorPlan->floor_title,
                    'description' => $floorPlan->description,
                    'price' => $floorPlan->price,
                    'image' => null,
                    'info' => $floorPlan->info,
                ]); 
            }
        }

        Session::put('success','Data Duplicated');
        return redirect()->route('admin.product.edit',$productData['id'])->with('success','Data Duplicated');
        
    }


    public function show($id)
    {
        $product = Product::find($id);
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
        $productData = Product::find($id);
        if($productData){
            $categories = Category::get();
            //$subCategories = Subcategory::get();
            return view('admin.product.edit')->with([
                'product' => $productData,
                'categories' => $categories,
                //'subcategories' => $subCategories,
            ]);
        }else{
            return back()->with('error','Data Not Found');
        }
        
    }

    public function floorPlanDelete(Request $request){
        $id = $request->id;

        $planExistance = ProductFloorPlans::find($id);
        if($planExistance){
            if($planExistance->image != '' && $planExistance->image != null){
                $old_file = $planExistance->image;
                if(file_exists($old_file)){
                    File::delete($old_file);
                }
            }
            $planExistance->delete();
            $status = [
                'success' => 1,
                'message' => 'Data Deleted',
            ];
        }else{
            $status = [
                'success' => 0,
                'message' => 'Data Not Found',
            ];
        }
        return $status;
    }

    public function productImageDelete(Request $request){
        $id = $request->id;
        $imageExistance = ProductImage::find($id);
        if($imageExistance){
            if($imageExistance->product_image != '' && $imageExistance->product_image != null){
                $old_file = $imageExistance->product_image;
                if(file_exists($old_file)){
                    File::delete($old_file);
                }
            }
            $isDefault = $imageExistance->default_image;
            $productId = $imageExistance->product_id;
            $imageExistance->delete();
            if($isDefault == 1){
                $lastImage = ProductImage::where('product_id',$productId)->orderBy('id','DESC')->first();
                if($lastImage){
                    $lastImage->update([
                        'default_image' => 1,
                    ]);
                }
            }
            $status = [
                'success' => 1,
                'is_default' => $isDefault,
            ];
        }else{
            $status = [
                'success' => 0,
                'is_default' => 0,
            ];
        }
        return $status;
    }

    public function Update(Request $request, $id)
    {
        //
    }

    public function productAjaxUpdate(Request $request, $id)
    {
        $data = $request->all();
        $data['description'] = $request->short_description;
        if($request->view_priority <= 0){
            $data['view_priority'] = 'none';
        }else{
            $data['view_priority'] = $request->view_priority;
        }
        $productExist = Product::find($id);
        if($productExist){
            $productExist->update($data);
            if($request->file('product_image')){
                ProductImage::where('product_id',$id)->update([
                    'default_image' => 0,
                ]);
                foreach($request->product_image as $key => $image){
                    $coverPhoto = $request->product_image[$key];
                    $getExt = $coverPhoto->getClientOriginalExtension();
                    $modifiedName = 'img_'.time().'_'.uniqid().'.'.$getExt;
                    $destination ='upload/product-image/';
                    $product_image = $destination.$modifiedName;
                    $coverPhoto->move( $destination ,$modifiedName );
                    ProductImage::create([
                        'product_id' => $id,
                        'product_image' => $product_image, 
                        'default_image' => $request->default_image[$key], 
                    ]);
                }
            }

            if(isset($request->floor_title)){
                foreach($request->floor_title as $key => $floorPlan){
                    if(isset($request->floor_plan_id[$key])){
                        $floorPlanExist = ProductFloorPlans::find($request->floor_plan_id[$key]);
                        if($floorPlanExist){
                            if(isset($request->floor_image[$key])){
                                if($floorPlanExist->image != ''  && $floorPlanExist->image != null){
                                    $old_file = $floorPlanExist->image;
                                    if(file_exists($old_file)){
                                        File::delete($old_file);
                                    }
                                }
                                $coverPhoto = $request->floor_image[$key];
                                $getExt = $coverPhoto->getClientOriginalExtension();
                                $modifiedName = 'img_'.time().'_'.uniqid().'.'.$getExt;
                                $destination ='upload/floor-plan-image/';
                                $fplan_image = $destination.$modifiedName;
                                $coverPhoto->move( $destination ,$modifiedName );
                            }else{
                                $fplan_image = $floorPlanExist->image;
                            }
                            $floorPlanExist->update([
                                'product_id' => $id,
                                'floor_title' => $request->floor_title[$key],
                                'description' => $request->floor_description[$key],
                                'price' => $request->floor_price[$key],
                                'image' => $fplan_image,
                                'info' => $request->floor_info[$key],
                            ]); 
                        }else{
                            if(isset($request->floor_image[$key])){
                                $coverPhoto = $request->floor_image[$key];
                                $getExt = $coverPhoto->getClientOriginalExtension();
                                $modifiedName = 'img_'.time().'_'.uniqid().'.'.$getExt;
                                $destination ='upload/floor-plan-image/';
                                $fplan_image = $destination.$modifiedName;
                                $coverPhoto->move( $destination ,$modifiedName );
                            }else{
                                $fplan_image = null;
                            }
                            ProductFloorPlans::create([
                                'product_id' => $id,
                                'floor_title' => $request->floor_title[$key],
                                'description' => $request->floor_description[$key],
                                'price' => $request->floor_price[$key],
                                'image' => $fplan_image,
                                'info' => $request->floor_info[$key],
                            ]);
                        }
                    }else{
                        if(isset($request->floor_image[$key])){
                            $coverPhoto = $request->floor_image[$key];
                            $getExt = $coverPhoto->getClientOriginalExtension();
                            $modifiedName = 'img_'.time().'_'.uniqid().'.'.$getExt;
                            $destination ='upload/floor-plan-image/';
                            $fplan_image = $destination.$modifiedName;
                            $coverPhoto->move( $destination ,$modifiedName );
                        }else{
                            $fplan_image = null;
                        }
                        ProductFloorPlans::create([
                            'product_id' => $id,
                            'floor_title' => $request->floor_title[$key],
                            'description' => $request->floor_description[$key],
                            'price' => $request->floor_price[$key],
                            'image' => $fplan_image,
                            'info' => $request->floor_info[$key],
                        ]);
                    } 
                }
            }


            Session::put('success','Data Updated');
            $response = [
                'success' => 'Data Updated',
            ];
            return $response;
        }else{
            $response = [
                'error' => 'Data Not Found',
            ];
            return $response;
        }
    }


    public function destroy($id)
    {
        $productExistance = Product::find($id);
        if($productExistance){
            $productImages = ProductImage::where('product_id', $id)->get();
            if(count($productImages) > 0){
                foreach ($productImages as $productImage) {
                    if($productImage->product_image != ''  && $productImage->product_image != null){
                        $old_file = $productImage->product_image;
                        if(file_exists($old_file)){
                            File::delete($old_file);
                        }
                    }
                }
                ProductImage::where('product_id', $id)->delete();
            }
            $floorPlans = ProductFloorPlans::where('product_id', $id)->get();
            if(count($floorPlans) > 0){
                foreach ($floorPlans as $floorPlan) {
                    if($floorPlan->image != ''  && $floorPlan->image != null){
                        $old_file = $floorPlan->image;
                        if(file_exists($old_file)){
                            File::delete($old_file);
                        }
                    }
                }
                ProductFloorPlans::where('product_id', $id)->delete();
            }

            $productExistance->delete();
        }else{
            return back()->with('error', 'Data Not Found!');
        }
        return back()->with('message', 'Data Deleted!');
    }
}
