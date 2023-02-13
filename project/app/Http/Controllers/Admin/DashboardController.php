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

class DashboardController extends Controller
{
    public function dashboard(){
    	return view('admin.dashboard')->with([
            'data' => 1,
        ]);
    }
    
}
