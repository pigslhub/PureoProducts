<!DOCTYPE html>
<html lang="en">
  <head>
    @include('shop.includes.partials.head')
    
    <title>@yield('title') | EzCare2Go</title>
    @include('shop.includes.partials.styles')
  </head>
  <body>
    <!-- Loader starts-->
    <!-- <div class="loader-wrapper">
      <div class="loader bg-white">
        <div class="whirly-loader"> </div>
      </div>
    </div> -->
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper">
      @include('shop.includes.partials.header')
      
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        @include('shop.includes.partials.sidebar')
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col">
                  <div class="page-header-left">
                    <h3>@yield('breadcrumb-title')</h3>
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#"><i data-feather="home"></i></a></li>
                      @yield('breadcrumb-item')                      
                    </ol>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @yield('content')
          
        </div>
        @include('shop.includes.partials.footer')

      </div>
    </div>
    @include('shop.includes.partials.scripts')
    @include('shop.includes.partials.footervarview')
  </body>
  
</html>
