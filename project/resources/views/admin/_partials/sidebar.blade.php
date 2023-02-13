<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar"> <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav"> 
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu"> 
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="sm-link">
                    <a href="{{route('admin.dashboard')}}" class="{{ request()->is('admin') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon fas fa-tachometer-alt"></i>
                        Dashboard
                    </a>
                </li>

                {{-- @php
                    $catEdit = strpos($_SERVER['REQUEST_URI'], 'admin/category/');
                    $subCatEdit = strpos($_SERVER['REQUEST_URI'], 'admin/subcategory/');
                @endphp
                 <li class="sm-link {{ ($catEdit) ? 'mm-active' : '' }}">
                    <a href="{{route('admin.category.index')}}" class="{{ (request()->is('admin/category') || $catEdit) ? 'mm-active' : '' }}">
                        <i class="metismenu-icon fas fa-clipboard-list"></i>
                        Manage Category
                    </a>
                <li> --}}
                @php
                    // $product = strpos($_SERVER['REQUEST_URI'], 'admin/product');
                @endphp
                {{-- <li class="sm-link {{ ($product) ? 'mm-active' : '' }}">
                    <a href="#">
                        <i class="metismenu-icon fas fa-clipboard-list"></i>
                        Product
                        <i class="metismenu-state-icon fas fa-chevron-down"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('admin.product.index')}}" class="{{ (request()->is('admin/product')) ? 'mm-active' : '' }}">
                                <i class="metismenu-icon"></i>
                                Product List
                            </a>
                            <a href="{{route('admin.product.create')}}" class="{{ (request()->is('admin/product/create')) ? 'mm-active' : '' }}">
                                <i class="metismenu-icon"></i>
                                Create Product
                            </a>
                        </li>
                    </ul>
                <li> --}}
                @php
                    //$blog = strpos($_SERVER['REQUEST_URI'], 'admin/post');
                @endphp
                {{-- <li class="sm-link {{ ($blog) ? 'mm-active' : '' }}">
                    <a href="#">
                        <i class="metismenu-icon fas fa-clipboard-list"></i>
                        Blog
                        <i class="metismenu-state-icon fas fa-chevron-down"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('admin.post.index')}}" class="{{ (request()->is('admin/post')) ? 'mm-active' : '' }}">
                                <i class="metismenu-icon"></i>
                                Manage Blog
                            </a>
                        </li>
                    </ul>
                <li> --}}

                @php
                    $aboutUs = strpos($_SERVER['REQUEST_URI'], 'admin/about-us');
                    $homeIntro = strpos($_SERVER['REQUEST_URI'], 'admin/home-intro');
                    $usefull = strpos($_SERVER['REQUEST_URI'], 'admin/useful');
                @endphp

                <li>
                    <a href="{{route('admin.home-slider.index')}}" class="{{ (request()->is('admin/home-slider')) ? 'mm-active' : '' }}">
                        <i class="metismenu-icon fas fa-clipboard-list"></i>
                        Homepage Slider
                    </a>
                </li>
                @php
                    $gallery = strpos($_SERVER['REQUEST_URI'], 'admin/gallery');
                @endphp
                <li class="sm-link {{ ($gallery) ? 'mm-active' : '' }}">
                    <li>
                        <a href="{{route('admin.gallery.index')}}" class="{{ (request()->is('admin/gallery')) ? 'mm-active' : '' }}">
                            <i class="metismenu-icon fas fa-clipboard-list"></i>
                            Manage Images
                        </a>
                    </li>
                <li>
                

                {{-- <li class="sm-link {{ ($aboutUs) ? 'mm-active' : '' }}">
                    <a href="#">
                        <i class="metismenu-icon fas fa-clipboard-list"></i>
                        Manage About
                        <i class="metismenu-state-icon fas fa-chevron-down"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('admin.about-us')}}" class="{{ (request()->is('admin/about-us')) ? 'mm-active' : '' }}">
                                <i class="metismenu-icon"></i>
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.our-team.index')}}" class="{{ (request()->is('admin/about-us/our-team')) ? 'mm-active' : '' }}">
                                <i class="metismenu-icon"></i>
                                Our Team
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.award-recognition')}}" class="{{ (request()->is('admin/about-us/award-recognition')) ? 'mm-active' : '' }}">
                                <i class="metismenu-icon"></i>
                                Award & Recognition
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.join-the-team')}}" class="{{ (request()->is('admin/about-us/join-the-team')) ? 'mm-active' : '' }}">
                                <i class="metismenu-icon"></i>
                                Join The Team
                            </a>
                        </li>
                    </ul>
                <li> --}}

                @php
                    $buyerRequire = strpos($_SERVER['REQUEST_URI'], 'admin/buyer-require');
                @endphp

                <li class="sm-link {{ ($aboutUs) ? 'mm-active' : '' }}">
                    <a href="{{route('admin.about-us')}}" class="{{ (request()->is('admin/about-us')) ? 'mm-active' : '' }}">
                        <i class="metismenu-icon fas fa-clipboard-list"></i>
                        About Us
                    </a>
                </li>

                <li class="sm-link {{ ($usefull) ? 'mm-active' : '' }}">
                    <a href="{{route('admin.usefull')}}" class="{{ (request()->is('admin/useful')) ? 'mm-active' : '' }}">
                        <i class="metismenu-icon fas fa-clipboard-list"></i>
                        Useful Link
                    </a>
                </li>

                <li>
                    <a href="{{route('admin.our-team.index')}}" class="{{ (request()->is('admin/about-us/our-team')) ? 'mm-active' : '' }}">
                        <i class="metismenu-icon fas fa-clipboard-list"></i>
                        Our Team
                    </a>
                </li>

                <li class="sm-link {{ ($buyerRequire) ? 'mm-active' : '' }}">
                    <a href="{{route('admin.buyer-require')}}" class="{{ (request()->is('admin/buyerRequire')) ? 'mm-active' : '' }}">
                        <i class="metismenu-icon fas fa-clipboard-list"></i>
                        Buyer Requirements
                    </a>
                </li>

                @php
                    $service = strpos($_SERVER['REQUEST_URI'], 'admin/service');
                @endphp
                <li class="sm-link {{ ($service) ? 'mm-active' : '' }}">
                    <a href="#">
                        <i class="metismenu-icon fas fa-clipboard-list"></i>
                        Services
                        <i class="metismenu-state-icon fas fa-chevron-down"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('admin.service-intro')}}" class="{{ (request()->is('admin/service-intro')) ? 'mm-active' : '' }}">
                                <i class="metismenu-icon"></i>
                                Service Info
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.service.real-estate')}}" class="{{ (request()->is('admin/service/real-estate')) ? 'mm-active' : '' }}">
                                <i class="metismenu-icon"></i>
                                Real Estate Services
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.service.consultation')}}" class="{{ (request()->is('admin/service/consultation')) ? 'mm-active' : '' }}">
                                <i class="metismenu-icon"></i>
                                Free Consultation
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.service.property-tours')}}" class="{{ (request()->is('admin/service/property-tours')) ? 'mm-active' : '' }}">
                                <i class="metismenu-icon"></i>
                                Property Tours
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.service.buyer-tips')}}" class="{{ (request()->is('admin/service/buyer-tips')) ? 'mm-active' : '' }}">
                                <i class="metismenu-icon"></i>
                                Buyer Tips
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.service.seller-tips')}}" class="{{ (request()->is('admin/service/seller-tips')) ? 'mm-active' : '' }}">
                                <i class="metismenu-icon"></i>
                                Seller Tips
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.service.real-estate-staging')}}" class="{{ (request()->is('admin/service/real-estate-staging')) ? 'mm-active' : '' }}">
                                <i class="metismenu-icon"></i>
                                Real Estate Staging
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.service.fair-housing-policy')}}" class="{{ (request()->is('admin/service/fair-housing-policy')) ? 'mm-active' : '' }}">
                                <i class="metismenu-icon"></i>
                                Fair Housing Policy
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.service.energy-tips')}}" class="{{ (request()->is('admin/service/energy-tips')) ? 'mm-active' : '' }}">
                                <i class="metismenu-icon"></i>
                                Energy Tips
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.service.property-management')}}" class="{{ (request()->is('admin/service/property-management')) ? 'mm-active' : '' }}">
                                <i class="metismenu-icon"></i>
                                Property Management
                            </a>
                        </li>
                    </ul>
                </li>
                
                {{-- <li>
                    <li class="sm-link">
                    <a href="#">
                        <i class="metismenu-icon fas fa-clipboard-list"></i>
                        Buyer Guide
                        <i class="metismenu-state-icon fas fa-chevron-down"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('admin.get-pre-approved')}}" class="{{ (request()->is('admin/get-pre-approved')) ? 'mm-active' : '' }}">
                                <i class="metismenu-icon"></i>
                                Get Pre-Approved
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.buying-multi-family')}}" class="{{ (request()->is('admin/buying-multi-family')) ? 'mm-active' : '' }}">
                                <i class="metismenu-icon"></i>
                                Buing A Multi Family
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.calculators')}}" class="{{ (request()->is('admin/calculators')) ? 'mm-active' : '' }}">
                                <i class="metismenu-icon"></i>
                                Calculators
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.covid-19')}}" class="{{ (request()->is('admin/covid-19')) ? 'mm-active' : '' }}">
                                <i class="metismenu-icon"></i>
                                Covid-19
                            </a>
                        </li>
                    </ul>
                </li> --}}
                {{-- <li>
                    <li class="sm-link">
                    <a href="#">
                        <i class="metismenu-icon fas fa-clipboard-list"></i>
                        Seller Guide
                        <i class="metismenu-state-icon fas fa-chevron-down"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('admin.free-home-valuation')}}" class="{{ (request()->is('admin/free-home-valuation')) ? 'mm-active' : '' }}">
                                <i class="metismenu-icon"></i>
                                Free Home Valuation
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.seller-closing-costs')}}" class="{{ (request()->is('admin/seller-closing-costs')) ? 'mm-active' : '' }}">
                                <i class="metismenu-icon"></i>
                                Seller Closing Costs
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.local-market-reports')}}" class="{{ (request()->is('admin/local-market-reports')) ? 'mm-active' : '' }}">
                                <i class="metismenu-icon"></i>
                                Local Market Reports
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.all-steps-to-selling')}}" class="{{ (request()->is('admin/all-steps-to-selling')) ? 'mm-active' : '' }}">
                                <i class="metismenu-icon"></i>
                                Seller Guides
                            </a>
                        </li>
                        <li>
                            @php
                                $sellerFaq = strpos($_SERVER['REQUEST_URI'], 'admin/seller-faq');
                            @endphp
                            <a href="{{route('admin.seller-faq.index')}}" class="{{ ($sellerFaq) ? 'mm-active' : '' }}">
                                <i class="metismenu-icon"></i>
                                FAQS
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.free-consultation')}}" class="{{ (request()->is('admin/free-consultation')) ? 'mm-active' : '' }}">
                                <i class="metismenu-icon"></i>
                                Free Consultation
                            </a>
                        </li>
                    </ul>
                </li> --}}


                @php
                    $sellerGuide = strpos($_SERVER['REQUEST_URI'], 'admin/seller-guide');
                    $licenseService = strpos($_SERVER['REQUEST_URI'], 'admin/licensing-service-download');
                @endphp

                <li class="sm-link {{ ($sellerGuide) ? 'mm-active' : '' }}">
                    <a href="{{route('admin.seller-guide')}}" class="{{ (request()->is('admin/seller-guide')) ? 'mm-active' : '' }}">
                        <i class="metismenu-icon fas fa-clipboard-list"></i>
                        Seller Guides
                    </a>
                </li>


                <li class="sm-link {{ ($licenseService) ? 'mm-active' : '' }}">
                    <a href="{{route('admin.licensing-service-download')}}" class="{{ (request()->is('admin/licensing-service-download')) ? 'mm-active' : '' }}">
                        <i class="metismenu-icon fas fa-clipboard-list"></i>
                        Download Licensee
                    </a>
                </li>


                
            </ul>
        </div>
    </div>
</div>
