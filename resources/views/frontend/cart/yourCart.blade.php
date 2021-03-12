@extends('frontend.layouts.master')

@section('title', 'Your Cart')

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
                <li class="active has-dropdown"><a href="index.html">Home</a>
                    <ul class="submenu transition-3">
                        <li><a href="index.html">Home Style 1</a></li>
                        <li><a href="index-2.html">Home Style 2</a></li>
                        <li><a href="index-3.html">Home Style 3</a></li>
                        <li><a href="index-4.html">Home Style 4</a></li>
                        <li><a href="index-5.html">Home Style 5</a></li>
                        <li><a href="index-6.html">Home Style 6</a></li>
                    </ul>
                </li>
                <li class="mega-menu has-dropdown"><a href="shop.html">Shop</a>
                    <ul class="submenu transition-3" data-background="assets/img/bg/mega-menu-bg.jpg">
                        <li class="has-dropdown">
                            <a href="shop.html">Shop Pages</a>
                            <ul>
                                <li><a href="shop.html">Standard Shop Page</a></li>
                                <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                <li><a href="shop-4-col.html">Shop 4 Column</a></li>
                                <li><a href="shop-3-col.html">Shop 3 Column</a></li>
                                <li><a href="shop.html">Shop Page</a></li>
                                <li><a href="shop.html">Shop Page </a></li>
                                <li><a href="shop.html">Shop Infinity</a></li>
                            </ul>
                        </li>
                        <li  class="has-dropdown">
                            <a href="shop.html">Products Pages</a>
                            <ul>
                                <li><a href="product-details.html">Product Details</a></li>
                                <li><a href="product-details.html">Product Page V2</a></li>
                                <li><a href="product-details.html">Product Page V3</a></li>
                                <li><a href="product-details.html">Product Page V4</a></li>
                                <li><a href="product-details.html">Simple Product</a></li>
                                <li><a href="product-details.html">Variable Product</a></li>
                                <li><a href="product-details.html">External Product</a></li>
                            </ul>
                        </li>
                        <li  class="has-dropdown">
                            <a href="shop.html">Other Shop Pages</a>
                            <ul>
                                <li><a href="wishlist.html">Wishlist</a></li>
                                <li><a href="cart.html">Shopping Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="register.html">Register</a></li>
                                <li><a href="login.html">Login</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="has-dropdown"><a href="blog.html">Blog</a>
                    <ul class="submenu transition-3">
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                        <li><a href="blog-no-sidebar.html">Blog No Sidebar</a></li>
                        <li><a href="blog-2-col.html">Blog 2 Column</a></li>
                        <li><a href="blog-2-col-mas.html">BLog 2 Col Masonary</a></li>
                        <li><a href="blog-3-col.html">Blog 3 Column</a></li>
                        <li><a href="blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li class="has-dropdown"><a href="shop.html">Pages</a>
                    <ul class="submenu transition-3">
                        <li><a href="wishlist.html">Wishlist</a></li>
                        <li><a href="cart.html">Shopping Cart</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                        <li><a href="register.html">Register</a></li>
                        <li><a href="login.html">Login</a></li>
                        <li><a href="error.html">Error 404</a></li>
                    </ul>
                </li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
        <!-- side-mobile-menu end -->
    </div>
</section>
<div class="body-overlay transition-3"></div>
<!-- extra info area end -->
<main>
    <!-- page title area start -->
    <section class="page__title p-relative d-flex align-items-center" data-background="{{ asset('frontend/assets/img/page-title/page-title-1.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__title-inner text-center">
                        <h1>Your Cart</h1>
                        <div class="page__title-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"> Cart</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page title area end -->

    <!-- Cart Area Strat-->
    <section class="cart-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="#">
                        <div class="table-content table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="product-thumbnail">Images</th>
                                    <th class="cart-product-name">Product</th>
                                    <th class="product-price">Unit Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Total</th>
                                    <th class="product-remove">Remove</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="product-thumbnail"><a href="product-details.html"><img src="assets/img/shop/product/product-2.jpg" alt=""></a></td>
                                    <td class="product-name"><a href="product-details.html">Bakix Furniture</a></td>
                                    <td class="product-price"><span class="amount">$130.00</span></td>
                                    <td class="product-quantity">
                                        <div class="cart-plus-minus"><input type="text" value="1" /></div>
                                    </td>
                                    <td class="product-subtotal"><span class="amount">$130.00</span></td>
                                    <td class="product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="product-thumbnail"><a href="product-details.html"><img src="assets/img/shop/product/product-4.jpg"  alt=""></a></td>
                                    <td class="product-name"><a href="product-details.html">Sujon Chair Set</a></td>
                                    <td class="product-price"><span class="amount">$120.50</span></td>
                                    <td class="product-quantity">
                                        <div class="cart-plus-minus"><input type="text" value="1" /></div>
                                    </td>
                                    <td class="product-subtotal"><span class="amount">$120.50</span></td>
                                    <td class="product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="coupon-all">
                                    <div class="coupon">
                                        <input id="coupon_code" class="input-text" name="coupon_code" value=""
                                               placeholder="Coupon code" type="text">
                                        <button class="os-btn os-btn-black" name="apply_coupon" type="submit">Apply
                                            coupon</button>
                                    </div>
                                    <div class="coupon2">
                                        <button class="os-btn os-btn-black" name="update_cart" type="submit">Update cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 ml-auto">
                                <div class="cart-page-total">
                                    <h2>Cart totals</h2>
                                    <ul class="mb-20">
                                        <li>Subtotal <span>$250.00</span></li>
                                        <li>Total <span>$250.00</span></li>
                                    </ul>
                                    <a class="os-btn" href="checkout.html">Proceed to checkout</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Cart Area End-->
</main>
@endsection
