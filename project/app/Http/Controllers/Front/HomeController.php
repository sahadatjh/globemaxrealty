<?php

namespace App\Http\Controllers\Front;
use DB;
use Auth;
use File;
use Hash;
use Session;
use Validator;
use Carbon\Carbon;
use App\Models\Product;
use App\Models\Setting;
use App\Models\Category;
use App\Models\HomeIntro;
use App\Models\HomeSlider;
use App\Mail\ContactUsMail;
use App\Mail\SubscriptionMail;
use App\Models\Subcategory;
use App\Models\Post;
use App\Models\Service;
use Illuminate\Support\Str;
use App\Models\ProductImage;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function home(){
        $posts = Post::orderBy('id','desc')->get();
        $serviceData = Service::first();
        $homeSliders = HomeSlider::get();
        $productData = Product::where('status', 1)->with('categoryData','productDefaultImage','productImages')->get();
        // $homeIntro = HomeIntro::get();
  //   	$categoryData = Category::orderBy('view_priority','ASC')->with('subcategoryData','productData')->get();
  //   	$categoryBasedProducts = Product::select()
  //   					->where('status', 1)
  //   					->orderBy('id', 'desc')
  //   					->with('productDefaultImage')
		// 	            ->get()
		// 				->groupBy('category');
		// $homeSlider = HomeSlider::get();
    	return view('front.home')->with([
        //'homeIntro' => $homeIntro,
    		'serviceData' => $serviceData,
        'homeSliders' => $homeSliders,
        'productData' => $productData,
        'posts' => $posts,
    		// 'category_data' => $categoryData,
    		// 'category_based_products' => $categoryBasedProducts,
    	]);
	}

}
