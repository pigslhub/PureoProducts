<!doctype html>
<html lang="en">
<head>
    <title>@yield('title') | PureONaturalProducts</title>
    @include('frontend.includes.partials.head')
    @include('frontend.includes.partials.styles')
    <style>
        html {
        scroll-behavior:smooth 
        }
    </style>
</head>
<body>
    @include('frontend.includes.partials.header')
    <!-- prealoder area start -->
<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object" id="first_object"></div>
            <div class="object" id="second_object"></div>
            <div class="object" id="third_object"></div>
        </div>
    </div>
</div>
<!-- prealoder area end -->


<!-- scroll up area start -->
<div class="scroll-up" id="scroll" style="display: none;">
    <a href="javascript:void(0);"><i class="fas fa-level-up-alt"></i></a>
</div>
<!-- scroll up area end -->

<!-- search area start -->
<section class="header__search white-bg transition-3">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="header__search-inner text-center">
                    <form action="#">
                        <div class="header__search-btn">
                            <a href="javascript:void(0);" class="header__search-btn-close"><i class="fal fa-times"></i></a>
                        </div>
                        <div class="header__search-header">
                            <h3>Search</h3>
                        </div>
                        <div class="header__search-categories">
                            <ul class="search-category">
                                <li><a href="shop.html">All Categories</a></li>
                                <li><a href="shop.html">Accessories</a></li>
                                <li><a href="shop.html">Chair</a></li>
                                <li><a href="shop.html">Tablet</a></li>
                                <li><a href="shop.html">Men</a></li>
                                <li><a href="shop.html">Women</a></li>

                            </ul>
                        </div>
                        <div class="header__search-input p-relative">
                            <input type="text" placeholder="Search for products... ">
                            <button type="submit"><i class="far fa-search"></i></button>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</section>
<div class="body-overlay transition-3"></div>
<!-- search area end -->

<!-- extra info area start -->
<section class="extra__info transition-3">
    <div class="extra__info-inner">
        <div class="extra__info-close text-right">
            <a href="javascript:void(0);" class="extra__info-close-btn"><i class="fal fa-times"></i></a>
        </div>
        <!-- side-mobile-menu start -->
        <nav class="side-mobile-menu d-block d-lg-none">
            @guest('customer')    
            <ul id="mobile-menu-active">
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="shop.html">Categories</a></li>
                <li><a href="blog.html">Products</a></li>
                <li><a href="contact.html">Login</a></li>
            </ul>
            @else
            <h3>{{auth()->user('customer')->name}}</h3>
            <ul id="mobile-menu-active">
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="shop.html">Categories</a></li>
                <li><a href="blog.html">Products</a></li>
                <li><a href="contact.html">Logout</a></li>
            </ul>
            @endguest
            
        </nav>
        <!-- side-mobile-menu end -->
    </div>
</section>
<div class="body-overlay transition-3"></div>
<!-- extra info area end -->

    @yield('content')
    @include('frontend.includes.partials.footer')
</body>
@include('frontend.includes.partials.scripts')
</html>
