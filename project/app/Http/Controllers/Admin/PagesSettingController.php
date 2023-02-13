<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\HomeIntro;
use App\Models\PagesBannerVideo;
use File;
use Illuminate\Http\Request;

class PagesSettingController extends Controller
{
    public function aboutUs()
    {
        $aboutUsData = AboutUs::first();
        if ($aboutUsData) {
            return view('admin.other-pages.about-us')->with([
                'aboutUsData' => $aboutUsData,
            ]);
        } else {
            return view('admin.other-pages.about-us');
        }
    }

    public function buyerRequirement()
    {
        $buyerRequire = AboutUs::first();
        if ($buyerRequire) {
            return view('admin.other-pages.buyer-requirement')->with([
                'buyerRequire' => $buyerRequire,
            ]);
        } else {
            return view('admin.other-pages.about-us');
        }
    }

    public function buyerRequirementUpdate(Request $request)
    {
        $this->validate($request, [
            'buyer_require_title' => 'required',
            'buyer_require_desc'  => 'required',
        ]);

        $data         = $request->all();
        $buyerRequire = AboutUs::first();
        if ($buyerRequire) {
            $buyerRequire->update($data);
            $message = "Data Updated!!";
        } else {
            AboutUs::create($data);
            $message = "Data Inserted!!";
        }

        return back()->with('message', $message);

    }

    public function awardRecognition()
    {
        $aboutUsData = AboutUs::first();
        if ($aboutUsData) {
            return view('admin.other-pages.award-recognition')->with([
                'aboutUsData' => $aboutUsData,
            ]);
        } else {
            return view('admin.other-pages.award-recognition');
        }
    }

    public function joinTheTeam()
    {
        $aboutUsData = AboutUs::first();
        if ($aboutUsData) {
            return view('admin.other-pages.join-the-team')->with([
                'aboutUsData' => $aboutUsData,
            ]);
        } else {
            return view('admin.other-pages.join-the-team');
        }
    }

    public function buyerGuide()
    {
        $aboutUsData = AboutUs::first();
        if ($aboutUsData) {
            return view('admin.other-pages.buyer-guide')->with([
                'aboutUsData' => $aboutUsData,
            ]);
        } else {
            return view('admin.other-pages.buyer-guide');
        }
    }

    public function sellerGuide()
    {
        $aboutUsData = AboutUs::first();
        if ($aboutUsData) {
            return view('admin.other-pages.seller-guide')->with([
                'aboutUsData' => $aboutUsData,
            ]);
        } else {
            return view('admin.other-pages.buyer-guide');
        }
    }

    public function aboutUsUpdate(Request $request)
    {
        //return $request->all();
        $data        = $request->all();
        $aboutUsData = AboutUs::first();
        if ($request->file('about_us_image')) {
            if ($aboutUsData) {
                if ($aboutUsData->about_us_image != '' && $aboutUsData->about_us_image != null) {
                    $old_file = $aboutUsData->about_us_image;
                    if (file_exists($old_file)) {
                        File::delete($old_file);
                    }
                }
            }
            $coverPhoto             = $request->about_us_image;
            $getExt                 = $coverPhoto->getClientOriginalExtension();
            $modifiedName           = 'img_' . time() . '_' . uniqid() . '.' . $getExt;
            $destination            = 'upload/about-us-image/';
            $data['about_us_image'] = $destination . $modifiedName;
            $coverPhoto->move($destination, $modifiedName);
        } else {
            if ($aboutUsData) {
                $data['about_us_image'] = $aboutUsData->about_us_image;
            }
        }
        if ($request->file('dashboard_logo')) {
            if ($aboutUsData) {
                if ($aboutUsData->dashboard_logo != '' && $aboutUsData->dashboard_logo != null) {
                    $old_file = $aboutUsData->dashboard_logo;
                    if (file_exists($old_file)) {
                        File::delete($old_file);
                    }
                }
            }
            $coverPhoto             = $request->dashboard_logo;
            $getExt                 = $coverPhoto->getClientOriginalExtension();
            $modifiedName           = 'img_' . time() . '_' . uniqid() . '.' . $getExt;
            $destination            = 'upload/header-footer/';
            $data['dashboard_logo'] = $destination . $modifiedName;
            $coverPhoto->move($destination, $modifiedName);
        } else {
            if ($aboutUsData) {
                $data['dashboard_logo'] = $aboutUsData->dashboard_logo;
            }
        }

        if ($request->file('admin_logo')) {
            if ($aboutUsData) {
                if ($aboutUsData->admin_logo != '' && $aboutUsData->admin_logo != null) {
                    $old_file = $aboutUsData->admin_logo;
                    if (file_exists($old_file)) {
                        File::delete($old_file);
                    }
                }
            }
            $coverPhoto         = $request->admin_logo;
            $getExt             = $coverPhoto->getClientOriginalExtension();
            $modifiedName       = 'img_' . time() . '_' . uniqid() . '.' . $getExt;
            $destination        = 'upload/header-footer/';
            $data['admin_logo'] = $destination . $modifiedName;
            $coverPhoto->move($destination, $modifiedName);
        } else {
            if ($aboutUsData) {
                $data['admin_logo'] = $aboutUsData->admin_logo;
            }
        }
        if ($request->file('header_logo')) {
            if ($aboutUsData) {
                if ($aboutUsData->header_logo != '' && $aboutUsData->header_logo != null) {
                    $old_file = $aboutUsData->header_logo;
                    if (file_exists($old_file)) {
                        File::delete($old_file);
                    }
                }
            }
            $coverPhoto          = $request->header_logo;
            $getExt              = $coverPhoto->getClientOriginalExtension();
            $modifiedName        = 'img_' . time() . '_' . uniqid() . '.' . $getExt;
            $destination         = 'upload/header-footer/';
            $data['header_logo'] = $destination . $modifiedName;
            $coverPhoto->move($destination, $modifiedName);
        } else {
            if ($aboutUsData) {
                $data['header_logo'] = $aboutUsData->header_logo;
            }
        }
        if ($request->file('footer_logo')) {
            if ($aboutUsData) {
                if ($aboutUsData->footer_logo != '' && $aboutUsData->footer_logo != null) {
                    $old_file = $aboutUsData->footer_logo;
                    if (file_exists($old_file)) {
                        File::delete($old_file);
                    }
                }
            }
            $coverPhoto          = $request->footer_logo;
            $getExt              = $coverPhoto->getClientOriginalExtension();
            $modifiedName        = 'img_' . time() . '_' . uniqid() . '.' . $getExt;
            $destination         = 'upload/header-footer/';
            $data['footer_logo'] = $destination . $modifiedName;
            $coverPhoto->move($destination, $modifiedName);
        } else {
            if ($aboutUsData) {
                $data['footer_logo'] = $aboutUsData->footer_logo;
            }
        }
        if ($request->file('favicon_icon')) {
            if ($aboutUsData) {
                if ($aboutUsData->favicon_icon != '' && $aboutUsData->favicon_icon != null) {
                    $old_file = $aboutUsData->favicon_icon;
                    if (file_exists($old_file)) {
                        File::delete($old_file);
                    }
                }
            }
            $coverPhoto           = $request->favicon_icon;
            $getExt               = $coverPhoto->getClientOriginalExtension();
            $modifiedName         = 'img_' . time() . '_' . uniqid() . '.' . $getExt;
            $destination          = 'upload/header-footer/';
            $data['favicon_icon'] = $destination . $modifiedName;
            $coverPhoto->move($destination, $modifiedName);
        } else {
            if ($aboutUsData) {
                $data['favicon_icon'] = $aboutUsData->favicon_icon;
            }
        }
        if ($request->file('footer_image')) {
            if ($aboutUsData) {
                if ($aboutUsData->footer_image != '' && $aboutUsData->footer_image != null) {
                    $old_file = $aboutUsData->footer_image;
                    if (file_exists($old_file)) {
                        File::delete($old_file);
                    }
                }
            }
            $coverPhoto           = $request->footer_image;
            $getExt               = $coverPhoto->getClientOriginalExtension();
            $modifiedName         = 'img_' . time() . '_' . uniqid() . '.' . $getExt;
            $destination          = 'upload/header-footer/';
            $data['footer_image'] = $destination . $modifiedName;
            $coverPhoto->move($destination, $modifiedName);
        } else {
            if ($aboutUsData) {
                $data['footer_image'] = $aboutUsData->footer_image;
            }
        }
        if ($aboutUsData) {
            $aboutUsData->update($data);
        } else {
            AboutUs::create($data);
        }
        return back()->with('message', 'Data Updated!');
    }

    public function pagesPhotoVideo()
    {
        $commonPageData = PagesBannerVideo::first();
        if ($commonPageData) {
            return view('admin.other-pages.page-banner-video')->with([
                'commonPageData' => $commonPageData,
            ]);
        } else {
            return view('admin.other-pages.page-banner-video');
        }
    }

    public function updatePagesPhotoVideo(Request $request)
    {
        $data           = $request->all();
        $commonPageData = PagesBannerVideo::first();
        if ($request->file('page_intro_banner')) {
            if ($commonPageData) {
                if ($commonPageData->page_intro_banner != '' && $commonPageData->page_intro_banner != null) {
                    $old_file = $commonPageData->page_intro_banner;
                    if (file_exists($old_file)) {
                        File::delete($old_file);
                    }
                }
            }
            $coverPhoto                = $request->page_intro_banner;
            $getExt                    = $coverPhoto->getClientOriginalExtension();
            $modifiedName              = 'img_' . time() . '_' . uniqid() . '.' . $getExt;
            $destination               = 'upload/pages-banner-video/';
            $data['page_intro_banner'] = $destination . $modifiedName;
            $coverPhoto->move($destination, $modifiedName);
        } else {
            if ($commonPageData) {
                $data['page_intro_banner'] = $commonPageData->page_intro_banner;
            }
        }
        if ($request->file('our_service_bg_banner')) {
            if ($commonPageData) {
                if ($commonPageData->our_service_bg_banner != '' && $commonPageData->our_service_bg_banner != null) {
                    $old_file = $commonPageData->our_service_bg_banner;
                    if (file_exists($old_file)) {
                        File::delete($old_file);
                    }
                }
            }
            $coverPhoto                    = $request->our_service_bg_banner;
            $getExt                        = $coverPhoto->getClientOriginalExtension();
            $modifiedName                  = 'img-' . time() . '_' . uniqid() . '.' . $getExt;
            $destination                   = 'upload/pages-banner-video/';
            $data['our_service_bg_banner'] = $destination . $modifiedName;
            $coverPhoto->move($destination, $modifiedName);
        } else {
            if ($commonPageData) {
                $data['our_service_bg_banner'] = $commonPageData->our_service_bg_banner;
            }
        }
        if ($request->file('client_opinion_bg_banner')) {
            if ($commonPageData) {
                if ($commonPageData->client_opinion_bg_banner != '' && $commonPageData->client_opinion_bg_banner != null) {
                    $old_file = $commonPageData->client_opinion_bg_banner;
                    if (file_exists($old_file)) {
                        File::delete($old_file);
                    }
                }
            }
            $coverPhoto                       = $request->client_opinion_bg_banner;
            $getExt                           = $coverPhoto->getClientOriginalExtension();
            $modifiedName                     = 'img-' . time() . '_' . uniqid() . '.' . $getExt;
            $destination                      = 'upload/pages-banner-video/';
            $data['client_opinion_bg_banner'] = $destination . $modifiedName;
            $coverPhoto->move($destination, $modifiedName);
        } else {
            if ($commonPageData) {
                $data['client_opinion_bg_banner'] = $commonPageData->client_opinion_bg_banner;
            }
        }
        if ($request->file('home_products_bg_video')) {
            if ($commonPageData) {
                if ($commonPageData->home_products_bg_video != '' && $commonPageData->home_products_bg_video != null) {
                    $old_file = $commonPageData->home_products_bg_video;
                    if (file_exists($old_file)) {
                        File::delete($old_file);
                    }
                }
            }
            $coverPhoto                     = $request->home_products_bg_video;
            $getExt                         = $coverPhoto->getClientOriginalExtension();
            $modifiedName                   = 'video-' . time() . '_' . uniqid() . '.' . $getExt;
            $destination                    = 'upload/pages-banner-video/';
            $data['home_products_bg_video'] = $destination . $modifiedName;
            $coverPhoto->move($destination, $modifiedName);
        } else {
            if ($commonPageData) {
                $data['home_products_bg_video'] = $commonPageData->home_products_bg_video;
            }
        }
        if ($request->file('product_page_bg_video')) {
            if ($commonPageData) {
                if ($commonPageData->product_page_bg_video != '' && $commonPageData->product_page_bg_video != null) {
                    $old_file = $commonPageData->product_page_bg_video;
                    if (file_exists($old_file)) {
                        File::delete($old_file);
                    }
                }
            }
            $coverPhoto                    = $request->product_page_bg_video;
            $getExt                        = $coverPhoto->getClientOriginalExtension();
            $modifiedName                  = 'video-' . time() . '_' . uniqid() . '.' . $getExt;
            $destination                   = 'upload/pages-banner-video/';
            $data['product_page_bg_video'] = $destination . $modifiedName;
            $coverPhoto->move($destination, $modifiedName);
        } else {
            if ($commonPageData) {
                $data['product_page_bg_video'] = $commonPageData->product_page_bg_video;
            }
        }

        if ($commonPageData) {
            $commonPageData->update($data);
        } else {
            PagesBannerVideo::create($data);
        }
        return back()->with('message', 'Data Updated!');
    }

    public function collectionInfo()
    {
        $collectionData = HomeIntro::first();
        if ($collectionData) {
            return view('admin.home-intro.collection-info')->with([
                'collectionData' => $collectionData,
            ]);
        } else {
            return view('admin.home-intro.collection-info');
        }
    }

    public function updateCollectionInfo(Request $request)
    {
        $request->validate([
            'collection_title'       => 'required',
            "collection_description" => 'required',
            "collection_image"       => "nullable|mimes:jpeg,jpg,png,svg",
        ]);

        $data           = $request->all();
        $collectionData = HomeIntro::first();
        if ($collectionData) {
            if ($request->file('collection_image')) {
                if ($collectionData->collection_image != '' && $collectionData->collection_image != null) {
                    $old_file = $collectionData->collection_image;
                    if (file_exists($old_file)) {
                        File::delete($old_file);
                    }
                }
                $coverPhoto               = $request->collection_image;
                $getExt                   = $coverPhoto->getClientOriginalExtension();
                $modifiedName             = 'img_' . time() . '_' . uniqid() . '.' . $getExt;
                $destination              = 'upload/home-intro/';
                $data['collection_image'] = $destination . $modifiedName;
                $coverPhoto->move($destination, $modifiedName);
            } else {
                $data['collection_image'] = $collectionData->collection_image;
            }
            $collectionData->update($data);
            return redirect('admin/collection-info')->with('message', 'Data Updated!');
        } else {
            if ($request->file('collection_image')) {
                $coverPhoto               = $request->collection_image;
                $getExt                   = $coverPhoto->getClientOriginalExtension();
                $modifiedName             = 'img_' . time() . '_' . uniqid() . '.' . $getExt;
                $destination              = 'upload/home-intro/';
                $data['collection_image'] = $destination . $modifiedName;
                $coverPhoto->move($destination, $modifiedName);
            } else {
                $data['collection_image'] = null;
            }
            HomeIntro::create($data);
            return redirect('admin/collection-info')->with('message', 'Data Updated!');
        }
    }

}
