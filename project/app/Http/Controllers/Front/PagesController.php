<?php

namespace App\Http\Controllers\Front;

use Session;
use Validator;
use App\Models\Faq;
use App\Models\Post;
use App\Models\OurTeam;
use App\Models\Product;
use App\Models\Service;
use App\Mail\CommonMail;
use App\Models\BuyerGuide;
use App\Models\Subscriber;
use App\Models\Usefullink;
use App\Mail\ContactUsMail;
use App\Models\SellerGuide;

use Illuminate\Http\Request;
use App\Mail\SubscriptionMail;
use App\Mail\PropertyContactMail;
use App\Models\LicenseServicePdf;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use PDF;
use App;

class PagesController extends Controller
{
    public function singleProduct($product_slug)
    {
        $productData   = Product::where('product_slug', $product_slug)->where('status', 1)->with('categoryData', 'productDefaultImage', 'productImages')->first();
        $otherProducts = Product::where('category', $productData['category'])->where('status', 1)->with('categoryData', 'productDefaultImage', 'productImages')->whereNotIn('id', [$productData['id']])->get();
        if ($productData) {
            return view('front.single-product')->with([
                'productData'   => $productData,
                'otherProducts' => $otherProducts,
            ]);
        } else {
            return redirect('/')->with('error', 'Data Not Found');
        }
        return view('front.single-service');
    }

    public function propertyContactMail(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'email|required',
        ]);
        if ($validator->fails()) {
            $_SESSION['validation_error'] = 'Please enter a valid mail';
            return back();
        } else {
            $data = $request->all();
            //return $data;
            Mail::to(env('MAIL_FROM_ADDRESS'))->queue(new PropertyContactMail($data));
            $_SESSION['success'] = 'Mail Sended.';
            return back();
        }
    }

    public function singleBlog($blog_slug)
    {
        $posts = Post::whereNotIn('slug', [$blog_slug])->orderBy('id', 'desc')->get();
        $post  = Post::where('slug', $blog_slug)->first();
        return view('front.single-blog')->with([
            'post'  => $post,
            'posts' => $posts,
        ]);
    }

    public function allBlog()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(12);
        return view('front.all-blog')->with([
            'posts' => $posts,
        ]);
    }

    public function allProperty()
    {
        $productData = Product::where('status', 1)->whereNotIn('category', ['sold', 'rentals'])->with('categoryData', 'productDefaultImage', 'productImages')->paginate(12);
        return view('front.property-listing')->with([
            'productData' => $productData,
        ]);
    }

    public function categroyBasedProperty($category_slug)
    {
        $productData = Product::where('status', 1)->where('category', $category_slug)->with('categoryData', 'productDefaultImage', 'productImages')->paginate(12);
        return view('front.property-listing')->with([
            'productData' => $productData,
        ]);
    }

    public function testimonials()
    {
        //$testimonial_data = Testimonial::get();
        return view('front.testimonial')->with([
            //'testimonial_data' => $testimonial_data,
        ]);
    }

    //About Us Module
    public function aboutUs()
    {
        return view('front.about-company.about-us');
    }

    public function buyerRequire()
    {
        return view('front.about-company.buyer-requirement');
    }

    public function ourTeam()
    {
        $ourTeam = OurTeam::where('status', 1)->get();
        return view('front.about-company.our-team')->with([
            'ourTeam' => $ourTeam,
        ]);
    }

    public function ourTeamMember($member_slug)
    {
        $teamMember = OurTeam::where('status', 1)->where('slug', $member_slug)->first();
        return view('front.about-company.our-team-member')->with([
            'teamMember' => $teamMember,
        ]);
    }

    public function awardRecognition()
    {
        return view('front.about-company.award-recognition');
    }

    public function joinTheTeam()
    {
        return view('front.about-company.join-the-team');
    }

    public function joinTeamPost()
    {
        return back();
    }

    //Service Module
    public function realEstateServices()
    {
        $serviceData = Service::first();
        return view('front.services.real-estate-services')->with([
            'serviceData' => $serviceData,
        ]);
    }

    public function consultation()
    {
        $serviceData = Service::first();
        return view('front.services.consultation')->with([
            'serviceData' => $serviceData,
        ]);
    }

    public function propertyTours()
    {
        $serviceData = Service::first();
        return view('front.services.property-tours')->with([
            'serviceData' => $serviceData,
        ]);
    }

    public function buyerTips()
    {
        $serviceData = Service::first();
        return view('front.services.buyer-tips')->with([
            'serviceData' => $serviceData,
        ]);
    }

    public function sellerTips()
    {
        $serviceData = Service::first();
        return view('front.services.seller-tips')->with([
            'serviceData' => $serviceData,
        ]);
    }
    public function realEstateStaging()
    {
        $serviceData = Service::first();
        return view('front.services.real-estate-staging')->with([
            'serviceData' => $serviceData,
        ]);
    }

    public function fairHousingPolicy()
    {
        $serviceData = Service::first();
        return view('front.services.fair-housing-policy')->with([
            'serviceData' => $serviceData,
        ]);
    }

    public function energyTips()
    {
        $serviceData = Service::first();
        return view('front.services.energy-tips')->with([
            'serviceData' => $serviceData,
        ]);
    }

    public function propertyManagement()
    {
        $serviceData = Service::first();
        return view('front.services.property-management')->with([
            'serviceData' => $serviceData,
        ]);
    }

    //Buyer Guides Module
    public function getPreApproved()
    {
        $buyerGuide = BuyerGuide::first();
        return view('front.buyer-guides.get-pre-approved')->with([
            'buyerGuide' => $buyerGuide,
        ]);
    }

    public function mortgageCalculator()
    {
        $buyerGuide = BuyerGuide::first();
        return view('front.buyer-guides.mortgage-calculator')->with([
            'buyerGuide' => $buyerGuide,
        ]);
    }

    public function buyingMultiFamily()
    {
        $buyerGuide = BuyerGuide::first();
        return view('front.buyer-guides.buying-multi-family')->with([
            'buyerGuide' => $buyerGuide,
        ]);
    }

    public function calculators()
    {
        $buyerGuide = BuyerGuide::first();
        return view('front.buyer-guides.calculators')->with([
            'buyerGuide' => $buyerGuide,
        ]);
    }

    public function covid19()
    {
        $buyerGuide = BuyerGuide::first();
        return view('front.covid-19')->with([
            'buyerGuide' => $buyerGuide,
        ]);
    }

    //Seller Guides
    public function freeHomeValuation()
    {
        $sellerGuide = SellerGuide::first();
        return view('front.seller-guides.free-home-valuation')->with([
            'sellerGuide' => $sellerGuide,
        ]);
    }

    public function sellerClosingCosts()
    {
        $sellerGuide = SellerGuide::first();
        return view('front.seller-guides.seller-closing-costs')->with([
            'sellerGuide' => $sellerGuide,
        ]);
    }

    public function localMarketReports()
    {
        $sellerGuide = SellerGuide::first();
        return view('front.seller-guides.local-market-reports')->with([
            'sellerGuide' => $sellerGuide,
        ]);
    }

    public function allStepsToSelling()
    {
        $sellerGuide = SellerGuide::first();
        return view('front.seller-guides.all-steps-to-selling')->with([
            'sellerGuide' => $sellerGuide,
        ]);
    }

    public function faq()
    {
        $sellerGuide = SellerGuide::first();
        $faqData     = Faq::get();
        return view('front.seller-guides.faq')->with([
            'sellerGuide' => $sellerGuide,
            'faqData'     => $faqData,
        ]);
    }

    public function freeConsultation()
    {
        $sellerGuide = SellerGuide::first();
        return view('front.seller-guides.free-consultation')->with([
            'sellerGuide' => $sellerGuide,
        ]);
    }

    public function useFullLink()
    {
        $data['usefull'] = Usefullink::first();
        return view('front.usefull-link', $data);
    }

    public function termsOfUse()
    {
        return view('front.terms-of-use');
    }

    public function privacyPolicy()
    {
        return view('front.privacy-policy');
    }

    // public function faq(){
    //     return view('front.faq');
    // }

    public function contactUs()
    {
        $firstNum  = rand(9, 0);
        $secondNum = rand(9, 0);

        Session::put('bt_first_num', rand(9, 0));
        Session::put('bt_second_num', rand(9, 0));
        return view('front.contact-us');
    }

    public function contactUsMessage(Request $request)
    {
        if (Session::has('bt_first_num') && Session::has('bt_second_num')) {
            $validator = Validator::make($request->all(), [
                'name'    => 'required',
                'phone'   => 'numeric|required',
                'email'   => 'email|required',
                'message' => 'required',
                // 'calculation' => 'numeric|required',
            ]);

            if ($validator->fails()) {
                $_SESSION['validation_error'] = 'Please Give All Information Correctly';
                return back()->withInput();
            } else {
                // $actualCal = (Session::get('bt_first_num')+Session::get('bt_second_num'));
                // $userCal = ($request->calculation);
                // if($actualCal != $userCal){
                //     $_SESSION['validation_error'] = 'Invalid Captcha';
                //     return back()->withInput();
                // }
                $user_name    = $request->f_name . ($request->l_name) ? ' ' . $request->l_name : '';
                $user_email   = $request->email;
                $user_message = $request->message;
                $email_from   = $user_email;
                Mail::to(env('MAIL_FROM_ADDRESS'))->queue(new ContactUsMail($request->all()));
                $_SESSION['success'] = 'Mail Send Successfully';
                return back();
            }
        } else {
            $_SESSION['validation_error'] = 'Something went wrong, please try again.';
            return back();
        }
    }

    public function sendSubscribe(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'email|required',
        ]);

        if ($validator->fails()) {
            $_SESSION['validation_error'] = 'Please enter a valid mail';
            return back();
        } else {
            $data      = $request->all();
            $existance = Subscriber::where('email', $request->email)->first();
            if (!$existance) {
                Subscriber::create($data);
            }
            Mail::to(env('MAIL_FROM_ADDRESS'))->queue(new SubscriptionMail($request->all()));
            $_SESSION['success'] = 'Subscription Done.';
            return back();
        }
    }

    //Mail Sending
    public function commonMail(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'email|required',
        ]);
        if ($validator->fails()) {
            $_SESSION['validation_error'] = 'Please enter a valid mail';
            return back();
        } else {
            $data = $request->all();
            //return $data;
            Mail::to(env('MAIL_FROM_ADDRESS'))->queue(new CommonMail($data));
            $_SESSION['success'] = 'Mail Sended.';
            return back();
        }
    }

    public function licensingService()
    {
        return view('licensing-service.license-service');
    }

    public function licensingServiceStore(Request $request)
    {

        $licenseService = LicenseServicePdf::create($request->all());

        $pdf = PDF::loadView('licensing-service.pdf', ['licenseService' => $licenseService])->setPaper('A4');

        return $pdf->download('licence-service-'.time().'.pdf');

        // Mail::send('front.mail.license-service.blade', function ($message) use ($pdf) {
        //     $message->to('sajib@bijoytech.com');
        //     $message->subject('License Service');
        //     $message->attachData($pdf->output(), 'licence-service.pdf');
        // });
    
       
    }
}
