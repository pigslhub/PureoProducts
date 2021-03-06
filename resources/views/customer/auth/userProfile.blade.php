@extends('frontend.layouts.master')

@section('title', 'Profile')

@section('content')

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
            <ul id="mobile-menu-active">
                <li class="active has-dropdown"><a href="#">Home</a>
                    <ul class="submenu transition-3">
                        <li><a href="#">Home Style 1</a></li>
                        <li><a href="#">Home Style 2</a></li>
                        <li><a href="#">Home Style 3</a></li>
                        <li><a href="#">Home Style 4</a></li>
                        <li><a href="#">Home Style 5</a></li>
                        <li><a href="#">Home Style 6</a></li>
                    </ul>
                </li>
                <li class="mega-menu has-dropdown"><a href="#">Shop</a>
                    <ul class="submenu transition-3" data-background="assets/img/bg/mega-menu-bg.jpg">
                        <li class="has-dropdown">
                            <a href="#">Shop Pages</a>
                            <ul>
                                <li><a href="#">Standard Shop Page</a></li>
                                <li><a href="#">Shop Right Sidebar</a></li>
                                <li><a href="#">Shop 4 Column</a></li>
                                <li><a href="#">Shop 3 Column</a></li>
                                <li><a href="#">Shop Page</a></li>
                                <li><a href="#">Shop Page </a></li>
                                <li><a href="#">Shop Infinity</a></li>
                            </ul>
                        </li>
                        <li  class="has-dropdown">
                            <a href="#">Products Pages</a>
                            <ul>
                                <li><a href="#">Product Details</a></li>
                                <li><a href="#">Product Page V2</a></li>
                                <li><a href="#">Product Page V3</a></li>
                                <li><a href="#">Product Page V4</a></li>
                                <li><a href="#">Simple Product</a></li>
                                <li><a href="#">Variable Product</a></li>
                                <li><a href="#">External Product</a></li>
                            </ul>
                        </li>
                        <li  class="has-dropdown">
                            <a href="#">Other Shop Pages</a>
                            <ul>
                                <li><a href="#">Wishlist</a></li>
                                <li><a href="#">Shopping Cart</a></li>
                                <li><a href="#">Checkout</a></li>
                                <li><a href="#">Register</a></li>
                                <li><a href="#">Login</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="has-dropdown"><a href="#">Blog</a>
                    <ul class="submenu transition-3">
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Blog Left Sidebar</a></li>
                        <li><a href="#">Blog No Sidebar</a></li>
                        <li><a href="#">Blog 2 Column</a></li>
                        <li><a href="#">BLog 2 Col Masonary</a></li>
                        <li><a href="#">Blog 3 Column</a></li>
                        <li><a href="#">Blog Details</a></li>
                    </ul>
                </li>
                <li class="has-dropdown"><a href="#">Pages</a>
                    <ul class="submenu transition-3">
                        <li><a href="#">Wishlist</a></li>
                        <li><a href="#">Shopping Cart</a></li>
                        <li><a href="#">Checkout</a></li>
                        <li><a href="#">Register</a></li>
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Error 404</a></li>
                    </ul>
                </li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
        <!-- side-mobile-menu end -->
    </div>
</section>
<div class="body-overlay transition-3"></div>
<!-- extra info area end -->

<main>
    <!-- login Area Strat-->
    <section class="login-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="basic-login">
                        <h3 class="text-center mb-60">Profile</h3>
{{--                        {{ $errors }}--}}
                        <form class="theme-form" method="POST" id="login-form" action="{{ route('customer.updateProfile') }}">
                            @csrf
                            <input type="hidden" value="{{ auth('customer')->user()->id }}" name="id" >
                            <label for="name">Username <span>**</span></label>
                            <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name"
                                   value="{{ auth('customer')->user()->name }}" required autocomplete="off" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                            <label for="phone">Phone Number <span>**</span></label>
                            <input id="phone" type="text" class="@error('phone') is-invalid @enderror" name="phone"
                                   value="{{ auth('customer')->user()->phone }}" required autocomplete="off" autofocus>
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                            <label for="address">Address <span>**</span></label>
                            <input id="address" type="text" class="@error('address') is-invalid @enderror" name="address"
                                   value="{{ auth('customer')->user()->address }}" required autocomplete="off" autofocus>
                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                            <label for="email">Email Address <span>**</span></label>
                            <input readonly id="email" type="email" class="@error('email') is-invalid @enderror" name="email"
                                   value="{{ auth('customer')->user()->email }}" required autocomplete="off">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                            <label for="password">New Password <span>**</span></label>
                            <input id="password" type="password" class="@error('password') is-invalid @enderror"
                                   name="password" autocomplete="off">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                            <div class="mt-10"></div>
                            <button class="os-btn w-100" type="submit">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- login Area End-->
</main>

@endsection
