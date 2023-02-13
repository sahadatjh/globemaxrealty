<?php

use Illuminate\Support\Facades\Route;

// Frnt Controllers
use App\Http\Controllers\Admin\FAQController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\PostController;


// Admin Controllers
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Admin\GuideController;
use App\Http\Controllers\Front\PagesController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\OurTeamController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HomeIntroController;
//use App\Http\Controllers\Admin\ClientReviewController;
use App\Http\Controllers\Admin\HomeSliderController;
use App\Http\Controllers\Admin\UsefulLinkController;
use App\Http\Controllers\Admin\SubcategoryController;
use App\Http\Controllers\Admin\PagesSettingController;
use App\Http\Controllers\Front\ProductPagesController;
use App\Http\Controllers\Admin\ServiceCategoryController;




// Cache Clear
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
});

// Website/Front View Routes
Route::get('/', [HomeController::class, 'home'])->name('home');
// Property
Route::get('/property-listing', [PagesController::class, 'allProperty'])->name('property-listing');
Route::get('/property-listing/{category_slug}', [PagesController::class, 'categroyBasedProperty'])->name('categroy-property');
Route::get('/property/{product_slug}', [PagesController::class, 'singleProduct'])->name('single-product');

// Blog
Route::get('/blogs', [PagesController::class, 'allBlog'])->name('all-blog');
Route::get('/blog/{blog_slug}', [PagesController::class, 'singleBlog'])->name('single-blog');
Route::get('/licensing-service', [PagesController::class, 'licensingService'])->name('licensing-service');
Route::post('/licensing-store', [PagesController::class, 'licensingServiceStore'])->name('licensing_store');




// About Us
Route::get('/about-us', [PagesController::class, 'aboutUs'])->name('about-us');
Route::get('/useful-link', [PagesController::class, 'useFullLink'])->name('usefull-link');
Route::get('/buyer-requirements', [PagesController::class, 'buyerRequire'])->name('buyer-requirements');
Route::get('/our-team', [PagesController::class, 'ourTeam'])->name('our-team');
Route::get('/our-team/{member_slug}', [PagesController::class, 'ourTeamMember'])->name('our-team-member');
Route::get('/award-recognition', [PagesController::class, 'awardRecognition'])->name('award-recognition');
Route::get('/join-the-team', [PagesController::class, 'joinTheTeam'])->name('join-the-team');
Route::post('/join-team-post', [PagesController::class, 'joinTeamPost'])->name('join-team-post');

//Service Module
Route::get('/real-estate-services', [PagesController::class, 'realEstateServices'])->name('real-estate-services');
Route::get('/consultation', [PagesController::class, 'consultation'])->name('consultation');
Route::get('/property-tours', [PagesController::class, 'propertyTours'])->name('property-tours');
Route::get('/buyer-tips', [PagesController::class, 'buyerTips'])->name('buyer-tips');
Route::get('/seller-tips', [PagesController::class, 'sellerTips'])->name('seller-tips');
Route::get('/real-estate-staging', [PagesController::class, 'realEstateStaging'])->name('real-estate-staging');
Route::get('/fair-housing-policy', [PagesController::class, 'fairHousingPolicy'])->name('fair-housing-policy');
Route::get('/energy-tips', [PagesController::class, 'energyTips'])->name('energy-tips');
Route::get('/property-management', [PagesController::class, 'propertyManagement'])->name('property-management');


//Buyer Guides Module
Route::get('/get-pre-approved', [PagesController::class, 'getPreApproved'])->name('get-pre-approved');
Route::get('/mortgage-calculator', [PagesController::class, 'mortgageCalculator'])->name('mortgage-calculator');
Route::get('/buying-multi-family', [PagesController::class, 'buyingMultiFamily'])->name('buying-multi-family');
Route::get('/calculators', [PagesController::class, 'calculators'])->name('calculators');
Route::get('/covid-19', [PagesController::class, 'covid19'])->name('covid-19');


//Seller Guides Module
Route::get('/free-home-valuation', [PagesController::class, 'freeHomeValuation'])->name('free-home-valuation');
Route::get('/seller-closing-costs', [PagesController::class, 'sellerClosingCosts'])->name('seller-closing-costs');
Route::get('/local-market-reports', [PagesController::class, 'localMarketReports'])->name('local-market-reports');
Route::get('/seller-guide', [PagesController::class, 'allStepsToSelling'])->name('all-steps-to-selling');
Route::get('/faq', [PagesController::class, 'faq'])->name('faq');
Route::get('/free-consultation', [PagesController::class, 'freeconsultation'])->name('free-consultation');

// Other Pages
Route::get('/testimonials', [PagesController::class, 'testimonials'])->name('testimonials');

Route::get('/contact-us', [PagesController::class, 'contactUs'])->name('contact-us');
Route::post('/contact-us', [PagesController::class, 'contactUsMessage'])->name('contact-us.message');
Route::get('/terms-of-use', [PagesController::class, 'termsOfUse'])->name('terms-of-use');
Route::get('/privacy-policy', [PagesController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/faq', [PagesController::class, 'faq'])->name('faq');
Route::post('/subscribe', [PagesController::class, 'sendSubscribe'])->name('subscribe.send');

//Mail Sending
Route::post('/property-contact-mail', [PagesController::class, 'propertyContactMail'])->name('property-contact-mail');
Route::post('/common-mail', [PagesController::class, 'commonMail'])->name('common-mail');


// Admin Login Module
Route::get('/admin/login', [AuthController::class, 'login'])->name('login');
Route::post('/admin/loginaction', [AuthController::class, 'LoginAction'])->name('admin.login.action');

//Admin Panel Routes
Route::group(['middleware' =>'auth'], function () {
	Route::group(['prefix' => '/admin', 'as'=>'admin.'], function () {
		// Admin Auth Module
		Route::get('/profile-edit/{id}', [AuthController::class, 'profileEdit'])->name('profile-edit');
		Route::put('/profile-update/{id}', [AuthController::class, 'profileUpdate'])->name('profile-update');
		Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
		
		// Dashboard Module
		Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');

		// Category Module
		Route::resource('/category', CategoryController::class);
		Route::resource('/subcategory', SubcategoryController::class);

		// Product Module
		Route::resource('/product', ProductController::class);
		Route::get('/product-duplicate/{id}', [ProductController::class, 'productDuplicate'])->name('product-duplicate');
		Route::post('/product/ajax-store', [ProductController::class, 'productAjaxStore'])->name('product-store.ajax');
		Route::put('/product/ajax-update/{product}', [ProductController::class, 'productAjaxUpdate'])->name('product-update.ajax');
		Route::get('/product-image/delete', [ProductController::class, 'productImageDelete'])->name('product-image.delete');
		Route::get('/floor-plan/delete', [ProductController::class, 'floorPlanDelete'])->name('floor-plan.delete');
		Route::post('/product/subcategory', [ProductController::class, 'productSubcategory'])->name('product.subcategory');
		
		// Blog/Post
		Route::resource('/post', PostController::class);

		// Home Intro
		Route::resource('/home-intro', HomeIntroController::class);

		//Gallery
		Route::resource('/gallery', GalleryController::class);
		
		//About Us 
		Route::get('/about-us', [PagesSettingController::class, 'aboutUs'])->name('about-us');
		Route::post('/about-us', [PagesSettingController::class, 'aboutUsUpdate'])->name('about-us.update');

		Route::get('/buyer-require', [PagesSettingController::class, 'buyerRequirement'])->name('buyer-require');
		Route::post('/buyer-require', [PagesSettingController::class, 'buyerRequirementUpdate'])->name('buyer-require-update');



		Route::resource('/about-us/our-team', OurTeamController::class);
		Route::get('/about-us/award-recognition', [PagesSettingController::class, 'awardRecognition'])->name('award-recognition');
		Route::get('/about-us/join-the-team', [PagesSettingController::class, 'joinTheTeam'])->name('join-the-team');

		//Service
		Route::get('/service', [ServiceController::class, 'serviceIntro'])->name('service-intro');
		Route::get('/service/real-estate', [ServiceController::class, 'realEstate'])->name('service.real-estate');
		Route::get('/service/consultation', [ServiceController::class, 'consultation'])->name('service.consultation');
		Route::get('/service/property-tours', [ServiceController::class, 'propertyTours'])->name('service.property-tours');
		Route::get('/service/buyer-tips', [ServiceController::class, 'buyerTips'])->name('service.buyer-tips');
		Route::get('/service/seller-tips', [ServiceController::class, 'sellerTips'])->name('service.seller-tips');
		Route::get('/service/real-estate-staging', [ServiceController::class, 'realEstateStaging'])->name('service.real-estate-staging');
		Route::get('/service/fair-housing-policy', [ServiceController::class, 'fairHousingPolicy'])->name('service.fair-housing-policy');
		Route::get('/service/energy-tips', [ServiceController::class, 'energyTips'])->name('service.energy-tips');
		Route::get('/service/property-management', [ServiceController::class, 'propertyManagement'])->name('service.property-management');
		Route::post('/service/update', [ServiceController::class, 'serviceUpdate'])->name('service.update');

		//Buyer Guide
		Route::get('get-pre-approved', [GuideController::class, 'getPreApproved'])->name('get-pre-approved');
		Route::get('buying-multi-family', [GuideController::class, 'buyingMultiFamily'])->name('buying-multi-family');
		Route::get('calculators', [GuideController::class, 'calculators'])->name('calculators');
		Route::get('covid-19', [GuideController::class, 'covid19'])->name('covid-19');
		Route::get('free-home-valuation', [GuideController::class, 'freeHomeValuation'])->name('free-home-valuation');
		Route::get('seller-closing-costs', [GuideController::class, 'sellerClosingCosts'])->name('seller-closing-costs');
		Route::get('local-market-reports', [GuideController::class, 'localMarketReports'])->name('local-market-reports');
		Route::get('seller-guide', [GuideController::class, 'allStepsToSelling'])->name('seller-guide');
		//Route::get('faq', [GuideController::class, 'faq'])->name('faq');
		Route::get('free-consultation', [GuideController::class, 'freeConsultation'])->name('free-consultation');
		Route::post('/buyer-guide/update', [ServiceController::class, 'buyerGuideUpdate'])->name('buyer-guide.update');
		Route::post('/buyer-guide/update', [GuideController::class, 'buyerGuideUpdate'])->name('buyer-guide.update');
		Route::post('/seller-guide/update', [GuideController::class, 'sellerGuideUpdate'])->name('seller-guide.update');

		// Seller Guide FAQ
		Route::resource('/seller-faq', FAQController::class);

		// Pages All Setting
		Route::resource('/home-slider', HomeSliderController::class);

		Route::get('/pages-photo-video', [PagesSettingController::class, 'pagesPhotoVideo'])->name('pages-photo-video');
		Route::post('/update-pages-photo-video', [PagesSettingController::class, 'updatePagesPhotoVideo'])->name('update-pages-photo-video');

		// Client Review
		//Route::resource('/client-review', ClientReviewController::class);

		Route::get('/useful', [UsefulLinkController::class, 'usefull'])->name('usefull');
		Route::post('/useful/update', [UsefulLinkController::class, 'useFullUpdate'])->name('usefull-update');

		Route::get('/licensing-service-download', [ServiceController::class, 'licensingServiceDownlod'])->name('licensing-service-download');

	});
});