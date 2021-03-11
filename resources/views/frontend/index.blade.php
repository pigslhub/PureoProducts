@extends('frontend.layouts.master')

@section('title', 'Home')

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

<!-- header area start -->

<!-- header area end -->

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
    <div class="box-white grey-bg pt-50">
        <div class="container">
            <div class="box-white-inner">
                <div class="row">
                    <div class="col-xl-12">

                        <!-- slider area start -->
                        <section class="slider__area slider__area-4 p-relative">
                            <div class="slider-active">
                                <div class="single-slider single-slider-2 slider__height-4 d-flex align-items-center" data-background="{{ asset('frontend/assets/img/argan_oil_system_banner.png') }}">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xl-7 col-lg-7 col-md-9 col-sm-11 col-12">
{{--                                                <div class="slider__content slider__content-4">--}}
{{--                                                    <h2 data-animation="fadeInUp" data-delay=".2s">Handmade <br> Hand carved Coffee</h2>--}}
{{--                                                    <p data-animation="fadeInUp" data-delay=".4s">As rich and unique as the coffee beans it is intended for, this little scoop will make your morning ritual a special occasion every day. </p>--}}
{{--                                                    <a href="#" class="os-btn os-btn-2" data-animation="fadeInUp" data-delay=".6s">Discover now</a>--}}
{{--                                                </div>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slider single-slider-2 slider__height-4 d-flex align-items-center" data-background="{{ asset('frontend/assets/img/16_oz_retail_deal.png') }}">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xl-7 col-lg-7 col-md-9 col-sm-11 col-12">
{{--                                                <div class="slider__content slider__content-4">--}}
{{--                                                    <h2 data-animation="fadeInUp" data-delay=".2s">Think Different &<br> Do it otherwise</h2>--}}
{{--                                                    <p data-animation="fadeInUp" data-delay=".4s">As rich and unique as the coffee beans it is intended for, this little scoop will make your morning ritual a special occasion every day. </p>--}}
{{--                                                    <a href="#" class="os-btn os-btn-2" data-animation="fadeInUp" data-delay=".6s">Discover now</a>--}}
{{--                                                </div>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slider single-slider-2 slider__height-4 d-flex align-items-center" data-background="{{ asset('frontend/assets/img/second_ment_banner.jpg')}}">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xl-7 col-lg-7 col-md-9 col-sm-11 col-12">
{{--                                                <div class="slider__content slider__content-4">--}}
{{--                                                    <h2 data-animation="fadeInUp" data-delay=".2s">Think Different &<br> Do it otherwise</h2>--}}
{{--                                                    <p data-animation="fadeInUp" data-delay=".4s">As rich and unique as the coffee beans it is intended for, this little scoop will make your morning ritual a special occasion every day. </p>--}}
{{--                                                    <a href="#" class="os-btn os-btn-2" data-animation="fadeInUp" data-delay=".6s">Discover now</a>--}}
{{--                                                </div>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- slider area end -->

                        <!-- banner area start -->
                        <div class="banner__area pt-20">
                            <div class="container custom-container">
                                <div class="row">
                                    @forelse( _getAllCategories() as $category )
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                        <div class="banner__item mb-30 p-relative">
                                            <div class="banner__thumb fix">
                                                <a href="product-details.html" class="w-img"><img src="{{ asset('storage/'.$category->icon) }}" alt="banner"></a>
                                            </div>
                                            <div class="banner__content p-absolute transition-3">
                                                <h5><a href="product-details.html">{{ $category->name }} <br> Knife - Oak</a></h5>
                                                <a href="product-details.html" class="link-btn">Discover now</a>
                                            </div>
                                        </div>
                                    </div>
                                        @empty
                                    @endforelse
                                </div>
                            </div>
                        </div>
                        <!-- banner area end -->

                        <!-- product area start -->
                        <section class="product__area pt-60 pb-100">
                            <div class="container custom-container">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="section__title-wrapper text-center mb-55">
                                            <div class="section__title mb-10">
                                                <h2>Trending Products</h2>
                                            </div>
                                            <div class="section__sub-title">
{{--                                                <p>Mirum est notare quam littera gothica quam nunc putamus parum claram!</p>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="product__slider-4 owl-carousel">
                                            @forelse( _getRandomProducts() as $product )
                                            <div class="product__item">
                                                <div class="product__wrapper mb-60">
                                                    <div class="product__thumb">
                                                        <a href="" class="w-img">
                                                            <img src="{{ asset('storage/'.$product->icon) }}" alt="product-img">
                                                            <img class="product__thumb-2" src="{{ asset('storage/'.$product->icon) }}" alt="product-img">
                                                        </a>
                                                        <div class="product__action transition-3">
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="fal fa-heart"></i>
                                                            </a>
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare">
                                                                <i class="fal fa-sliders-h"></i>
                                                            </a>
                                                            <!-- Button trigger modal -->
                                                            <a href="#" data-toggle="modal" data-target="#productModalId">
                                                                <i class="fal fa-search"></i>
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="product__content p-relative">
                                                        <div class="product__content-inner">
                                                            <h4><a href="product-details.html">{{ $product->name }}</a></h4>
                                                            <div class="product__price transition-3">
                                                                <span>{{ $product->price }}</span>
                                                                <span class="old-price">{{ $product->price }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-cart p-absolute transition-3">
                                                            <a href="#">+ Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @empty
                                            @endforelse
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="product__load-btn text-center mt-25">
                                            <a href="#" class="os-btn os-btn-3">Load More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- product area end -->

                        <!-- banner area start -->

                        <!-- banner area end -->

                        <!-- product offer area start -->

                        <!-- product offer area end -->

                        <!-- blog area start -->

                        <!-- blog area end -->

                        <!-- subscribe area start -->
{{--                        --}}
                        <!-- subscribe area end -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shop modal start -->
    <!-- Modal -->
    <div class="modal fade" id="productModalId" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered product-modal" role="document">
            <div class="modal-content">
                <div class="product__modal-wrapper p-relative">
                    <div class="product__modal-close p-absolute">
                        <button   data-dismiss="modal"><i class="fal fa-times"></i></button>
                    </div>
                    <div class="product__modal-inner">
                        <div class="row">
                            <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12">
                                <div class="product__modal-box">
                                    <div class="tab-content mb-20" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="{{ asset('frontend/assets/img/shop/product/quick-view/quick-big-1.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="{{ asset('frontend/assets/img/shop/product/quick-view/quick-big-2.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="{{ asset('frontend/assets/img/shop/product/quick-view/quick-big-3.jpg') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <nav>
                                        <div class="nav nav-tabs justify-content-between" id="nav-tab" role="tablist">
                                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
                                                <div class="product__nav-img w-img">
                                                    <img src="{{ asset('frontend/assets/img/shop/product/quick-view/quick-sm-1.jpg') }}" alt="">
                                                </div>
                                            </a>
                                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">
                                                <div class="product__nav-img w-img">
                                                    <img src="{{ asset('frontend/assets/img/shop/product/quick-view/quick-sm-2.jpg') }}" alt="">
                                                </div>
                                            </a>
                                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">
                                                <div class="product__nav-img w-img">
                                                    <img src="{{ asset('frontend/assets/img/shop/product/quick-view/quick-sm-3.jpg') }}" alt="">
                                                </div>
                                            </a>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-7 col-md-6 col-sm-12 col-12">
                                <div class="product__modal-content">
                                    <h4><a href="product-details.html">Wooden container Bowl</a></h4>
                                    <div class="rating rating-shop mb-15">
                                        <ul>
                                            <li><span><i class="fas fa-star"></i></span></li>
                                            <li><span><i class="fas fa-star"></i></span></li>
                                            <li><span><i class="fas fa-star"></i></span></li>
                                            <li><span><i class="fas fa-star"></i></span></li>
                                            <li><span><i class="fal fa-star"></i></span></li>
                                        </ul>
                                        <span class="rating-no ml-10">
                                                    3 rating(s)
                                                </span>
                                    </div>
                                    <div class="product__price-2 mb-25">
                                        <span>$96.00</span>
                                        <span class="old-price">$96.00</span>
                                    </div>
                                    <div class="product__modal-des mb-30">
                                        <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram.</p>
                                    </div>
                                    <div class="product__modal-form">
                                        <form action="#">
                                            <div class="product__modal-input size mb-20">
                                                <label>Size <i class="fas fa-star-of-life"></i></label>
                                                <select>
                                                    <option>- Please select -</option>
                                                    <option> S</option>
                                                    <option> M</option>
                                                    <option> L</option>
                                                    <option> XL</option>
                                                    <option> XXL</option>
                                                </select>
                                            </div>
                                            <div class="product__modal-input color mb-20">
                                                <label>Color <i class="fas fa-star-of-life"></i></label>
                                                <select>
                                                    <option>- Please select -</option>
                                                    <option> Black</option>
                                                    <option> Yellow</option>
                                                    <option> Blue</option>
                                                    <option> White</option>
                                                    <option> Ocean Blue</option>
                                                </select>
                                            </div>
                                            <div class="product__modal-required mb-5">
                                                <span >Repuired Fiields *</span>
                                            </div>
                                            <div class="pro-quan-area d-lg-flex align-items-center">
                                                <div class="product-quantity-title">
                                                    <label>Quantity</label>
                                                </div>
                                                <div class="product-quantity">
                                                    <div class="cart-plus-minus"><input type="text" value="1" /></div>
                                                </div>
                                                <div class="pro-cart-btn ml-20">
                                                    <a href="#" class="os-btn os-btn-black os-btn-3 mr-10">+ Add to Cart</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shop modal end -->
</main>

@endsection

