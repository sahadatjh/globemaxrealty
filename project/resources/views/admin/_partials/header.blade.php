<div class="app-header header-shadow">
   <div class="app-header__logo">
      <div class="logo-src">
         <a href="{{route('home')}}" target="_blank">
            <img src="{{asset((isset($g_company_data->admin_logo))?$g_company_data->admin_logo:'')}}">
         </a>
      </div>
      <div class="header__pane ml-auto">
         <div>
            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
            <span class="hamburger-box">
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
   <div class="app-header__content">
      <div class="app-header-right">
         <div class="header-btn-lg pr-0">
            <div class="widget-content p-0">
               <div class="widget-content-wrapper">
                  <div class="widget-content-left">
                     <div class="btn-group">
                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                        @if(Auth::user()->image)
                        <img width="42" class="rounded-circle" src="{{ asset(Auth::user()->image) }}" alt="">
                        @else
                        <img width="42" class="rounded-circle" src="{{ asset('assets/admin/images/avatars/images.jpg') }}" alt="">
                        @endif
                        <i class="fa fa-angle-down ml-2 opacity-8"></i>
                        </a>
                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right header-dropdown">
                            <a class="dropdown-item" href="{{route('admin.profile-edit', Auth::user()->id)}}">User Profile</a>
                            <a class="dropdown-item" href="{{ route('admin.logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('form_logout').submit();
                                "> Logout </a>
                            <form id="form_logout" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                     </div>
                  </div>
                  <div class="widget-content-left  ml-3 header-user-info">
                     <div class="widget-heading">
                        {{ Auth::user()->name }}
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
