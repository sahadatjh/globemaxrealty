<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{ str_replace('_', ' ', config('app.name')) }}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <link rel="icon" href="{{asset((isset($g_company_data->favicon_icon))?$g_company_data->favicon_icon:'')}}" type="image/png" sizes="32x32">

    @include('admin._partials.stylesheets')
    <style type="text/css">
      /*Loader Css start*/
      .pa-preloader {
          background-color: #fff;
          bottom: 0;
          height: 100%;
          left: 0;
          position: fixed;
          z-index: 99999999999;
          right: 0;
          top: 0;
          width: 100%;
      }
      .pa-ellipsis {
          margin: 0 auto;
          position: relative;
          top: 50%;
          -moz-transform: translateY(-50%);
          -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
          width: 75px;
          text-align: center;
          z-index: 9999;
      }
      .pa-ellipsis span {
          display: inline-block;
          width: 15px;
          height: 15px;
          border-radius: 50%;
          background: #04c37f;
          -webkit-animation: ball-pulse-sync 1s 0s infinite ease-in-out;
          animation: ball-pulse-sync 1s 0s infinite ease-in-out;
      }
      .pa-ellipsis span:nth-child(1) {
          -webkit-animation:ball-pulse-sync 1s -.14s infinite ease-in-out;
          animation:ball-pulse-sync 1s -.14s infinite ease-in-out
      }
      .pa-ellipsis span:nth-child(2) {
          -webkit-animation:ball-pulse-sync 1s -70ms infinite ease-in-out;
          animation:ball-pulse-sync 1s -70ms infinite ease-in-out
      }
      .pa-ellipsis span:first-child {
          background: #ea2127;
      }

      .pa-ellipsis span:nth-child(2) {
          background: #30398f;
      }

      .pa-ellipsis span:nth-child(3) {
          background: #f59426;
      }

      .pa-ellipsis span:nth-child(4) {
          background: #04a552;
      }
      @-webkit-keyframes ball-pulse-sync {
          33% {
              -webkit-transform:translateY(10px);
              transform:translateY(10px)
       }
          66% {
              -webkit-transform:translateY(-10px);
              transform:translateY(-10px)
          }
          100% {
              -webkit-transform:translateY(0);
              transform:translateY(0)
          }
      }
      @keyframes ball-pulse-sync {
          33% {
              -webkit-transform:translateY(10px);
              transform:translateY(10px)
          }
          66% {
              -webkit-transform:translateY(-10px);
              transform:translateY(-10px)
          }
          100% {
              -webkit-transform:translateY(0);
              transform:translateY(0)
          }
      }
      /*Loader Css end*/
    </style>

<body>
    <div class="pa-preloader">
       <div class="pa-ellipsis">
           <span></span>
           <span></span>
           <span></span>
           <span></span>
       </div>
    </div>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <!--Header Start -->
        @include('admin._partials.header')
        <!--Header End -->
        <div class="app-main">
            <!--Sidebar Start -->
            @include('admin._partials.sidebar')
            <!--Sidebar End -->

            <div class="app-main__outer">
                {{-- Common Message Start --}}
                @if ($errors->any())
                    <div class="alert alert-danger mt-1 common-message-section">
                       <ul class="m-0">
                           @foreach ($errors->all() as $error)
                               <li>{{ $error }}</li>
                           @endforeach
                       </ul>
                    </div>
                @endif
                @if(Session::has('success') || Session::has('message'))
                   <div class="alert alert-success mt-1 alert-dismissible fade show" role="alert">
                      {{Session::has('success') ? Session::get('success') : Session::get('message')}}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                @endif
                {{-- Common Message End --}}

                @yield('content')
                @include('admin._partials.footer')
                
            </div>
        </div>
    </div>

@include('admin._partials.scripts')
</body>
</html>
