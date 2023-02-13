<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\SellerGuide;
use App\Models\BuyerGuide;
use Carbon\Carbon;
use Validator;
use Session;
use Hash;
use Auth;
use File;
use DB;

class GuideController extends Controller
{
    //Buyer Guide
    public function getPreApproved()
    {
        $buyerGuide = BuyerGuide::first();
        if($buyerGuide){
            return view('admin.buyer-guide.get-pre-approved')->with([
                'buyerGuide' => $buyerGuide,
            ]);
        }else{
            return view('admin.buyer-guide.get-pre-approved');
        } 
    }
    public function buyingMultiFamily()
    {
        $buyerGuide = BuyerGuide::first();
        if($buyerGuide){
            return view('admin.buyer-guide.buying-multi-family')->with([
                'buyerGuide' => $buyerGuide,
            ]);
        }else{
            return view('admin.buyer-guide.buying-multi-family');
        } 
    }
    public function calculators()
    {
        $buyerGuide = BuyerGuide::first();
        if($buyerGuide){
            return view('admin.buyer-guide.calculators')->with([
                'buyerGuide' => $buyerGuide,
            ]);
        }else{
            return view('admin.buyer-guide.calculators');
        } 
    }
    public function covid19()
    {
        $buyerGuide = BuyerGuide::first();
        if($buyerGuide){
            return view('admin.buyer-guide.covid-19')->with([
                'buyerGuide' => $buyerGuide,
            ]);
        }else{
            return view('admin.buyer-guide.covid-19');
        } 
    }
    public function buyerGuideUpdate(Request $request)
    {
        $data = $request->all();
        $buyerGuide = BuyerGuide::first();
        if($buyerGuide){
            $buyerGuide->update($data);
        }else{
            BuyerGuide::create($data);
        } 
        return back()->with('message', 'Data Updated!');
    }




    //Seller Guide
    public function freeHomeValuation()
    {
        $sellerGuide = SellerGuide::first();
        if($sellerGuide){
            return view('admin.seller-guide.free-home-valuation')->with([
                'sellerGuide' => $sellerGuide,
            ]);
        }else{
            return view('admin.seller-guide.free-home-valuation');
        } 
    }
    public function sellerClosingCosts()
    {
        $sellerGuide = SellerGuide::first();
        if($sellerGuide){
            return view('admin.seller-guide.seller-closing-costs')->with([
                'sellerGuide' => $sellerGuide,
            ]);
        }else{
            return view('admin.seller-guide.seller-closing-costs');
        } 
    }
    public function localMarketReports()
    {
        $sellerGuide = SellerGuide::first();
        if($sellerGuide){
            return view('admin.seller-guide.local-market-reports')->with([
                'sellerGuide' => $sellerGuide,
            ]);
        }else{
            return view('admin.seller-guide.local-market-reports');
        } 
    }
    public function allStepsToSelling()
    {
        $sellerGuide = SellerGuide::first();
        if($sellerGuide){
            return view('admin.seller-guide.all-steps-to-selling')->with([
                'sellerGuide' => $sellerGuide,
            ]);
        }else{
            return view('admin.seller-guide.all-steps-to-selling');
        } 
    }
    public function faq()
    {
        $sellerGuide = SellerGuide::first();
        if($sellerGuide){
            return view('admin.seller-guide.faq')->with([
                'sellerGuide' => $sellerGuide,
            ]);
        }else{
            return view('admin.seller-guide.faq');
        } 
    }
    public function freeConsultation()
    {
        $sellerGuide = SellerGuide::first();
        if($sellerGuide){
            return view('admin.seller-guide.free-consultation')->with([
                'sellerGuide' => $sellerGuide,
            ]);
        }else{
            return view('admin.seller-guide.free-consultation');
        } 
    }

    public function sellerGuideUpdate(Request $request)
    {
        $data = $request->all();
        $sellerGuide = SellerGuide::first();
        if($sellerGuide){
            $sellerGuide->update($data);
        }else{
            SellerGuide::create($data);
        } 
        return back()->with('message', 'Data Updated!');
    }
}
