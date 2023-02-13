<?php

namespace App\Providers;
session_start();
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use App\Models\Category;
use App\Models\Product;
use App\Models\Setting;
use App\Models\AboutUs;
use Carbon\Carbon;
use Auth;

class AppServiceProvider extends ServiceProvider
{
    
    public function register()
    {
        //
    }

   
    public function boot()
    {
        Paginator::useBootstrap();
        //unset($_SESSION['rp_cart_items']);
        View::composer(['*'], function($view){
            $g_categories = Category::orderBy('view_priority','ASC')->get();
            // $g_products = Product::orderBy('view_priority','ASC')->get();
            $g_company_data = AboutUs::first();
            $view->with([
                'g_categories' => $g_categories,
                // 'g_products' => $g_products,
                'g_company_data' => $g_company_data,
            ]);
        });
    }
}
