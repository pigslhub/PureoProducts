@extends('frontend.layouts.master')

@section('title', 'Products')

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
    <section style="height: 350px" class="page__title p-relative d-flex align-items-center" data-background="{{ asset('frontend/assets/img/page-title/page-title-1.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__title-inner text-center">
                        <h1>Shop</h1>
                        <div class="page__title-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"> Shop</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page title area end -->

    <!-- shop area start -->
    <section class="shop__area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-4">
                    <div class="shop__sidebar">
                        <div class="sidebar__widget mb-55">
                            <div class="sidebar__widget-title mb-25">
                                <h3>Product Categories</h3>
                            </div>
                            <div class="sidebar__widget-content">
                                <div class="categories">
                                    <div id="accordion">
                                        @forelse( _getAllCategories() as $category )
                                        <div class="card">
                                            <div class="card-header white-bg" id="accessories">
                                                <h5 class="mb-0">
                                                    <button class="shop-accordion-btn" data-toggle="collapse" data-target="#collapseAccessories{{ $loop->iteration }}" aria-expanded="true" aria-controls="collapseAccessories">
                                                        {{ $category->name }}
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="collapseAccessories{{ $loop->iteration }}" class="collapse" aria-labelledby="accessories" data-parent="#accordion">
                                                <div class="card-body">
                                                    <div class="categories__list">
                                                        <ul>
                                                            @forelse( $category->subcategories as $subcategory )
                                                                <li><a href="#">{{ $subcategory->name }}</a></li>
                                                            @empty
                                                            @endforelse
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @empty
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar__widget mb-55">
                            <div class="sidebar__widget-title mb-30">
                                <h3>Volume</h3>
                            </div>
                            <div class="sidebar__widget-content">
                                <div class="size">
                                    <ul>
                                        <li><a href="#">2oz</a></li>
                                        <li><a href="#">4oz</a></li>
                                        <li><a href="#">8oz</a></li>
                                        <li><a href="#">16oz</a></li>
                                        <li><a href="#">32oz</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-8">
                    <div class="shop__content-area">
                        <div class="shop__header d-sm-flex justify-content-between align-items-center mb-40">
                            <div class="shop__header-left">
                                <div class="show-text">
                                    <span>Showing 1-12 of {{ \App\Models\Product::get()->count() }} results</span>
                                </div>
                            </div>
                            <div class="shop__header-right d-flex align-items-center justify-content-between justify-content-sm-end">
                                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-grid-tab" data-toggle="pill" href="#pills-grid" role="tab" aria-controls="pills-grid" aria-selected="true"><i class="fas fa-th"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-grid" role="tabpanel" aria-labelledby="pills-grid-tab">
                                <div class="row custom-row-10">
                                    @forelse( $products as $product )
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 custom-col-10">
                                        <div class="product__wrapper mb-60">
                                            <div class="product__thumb">
                                                <a href="{{ route('frontend.productDetails', $product) }}" class="w-img">
                                                    @if(strpos($product->icon,'100x75'))
                                                    <img src="{{ $product->getIconPath('md') }}" style="height: 350px" alt="product-img">
                                                    <img class="product__thumb-2" src="{{ $product->getIconPath('md') }}" style="height: 350px" alt="product-img">
                                                    @elseif(strpos($product->icon,'50x75'))
                                                    <img src="{{ $product->getIconPath('pmd') }}" style="height: 350px" alt="product-img">
                                                    <img class="product__thumb-2" src="{{ $product->getIconPath('pmd') }}" style="height: 350px" alt="product-img">
                                                    @else
                                                    <img src="{{ $product->getIconPath('emd') }}" style="height: 350px" alt="product-img">
                                                    <img class="product__thumb-2" src="{{ $product->getIconPath('emd') }}" style="height: 350px" alt="product-img">
                                                    @endif
                                                    
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
{{--                                                <div class="product__sale">--}}
{{--                                                    <span class="new">new</span>--}}
{{--                                                    <span class="percent">-16%</span>--}}
{{--                                                </div>--}}
                                            </div>
                                            <div class="product__content p-relative">
                                                <div class="product__content-inner">
                                                    <h4><a href="#">{{ $product->name }}</a></h4>
                                                    <div class="product__price transition-3">
                                                        <span>${{ $product->price }}</span>
{{--                                                        <span class="old-price">$96.00</span>--}}
                                                    </div>
                                                </div>
                                                <div class="add-cart p-absolute transition-3">
                                                    <a href="{{ route('frontend.yourCart') }}">+ Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @empty
                                    @endforelse
                                </div>
                            </div>
                        </div>
                        <div class="row mt-40">
                            <div class="col-xl-12">
                                <div class="shop-pagination-wrapper d-md-flex justify-content-between align-items-center">
{{--                                    <div class="basic-pagination">--}}
{{--                                        <ul>--}}
{{--                                            <li><a href="#"><i class="fal fa-angle-left"></i></a></li>--}}
{{--                                            <li><a href="#">01</a></li>--}}
{{--                                            <li class="active"><a href="#">02</a></li>--}}
{{--                                            <li><a href="#">03</a></li>--}}
{{--                                            <li><a href="#"><i class="fas fa-ellipsis-h"></i></a></li>--}}
{{--                                            <li><a href="#"><i class="fal fa-angle-right"></i></a></li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
                                    <div class="text-center">{{ $products->links() }}</div>
                                    <div class="shop__header-left">
                                        <div class="show-text bottom">
                                            <span>Showing 1–12 of {{ \App\Models\Product::get()->count() }} results</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- shop area end -->

    <!-- shop modal start -->
    <!-- Modal -->
{{--    <div class="modal fade" id="productModalId" tabindex="-1" role="dialog" aria-hidden="true">--}}
{{--        <div class="modal-dialog modal-dialog-centered product-modal" role="document">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="product__modal-wrapper p-relative">--}}
{{--                    <div class="product__modal-close p-absolute">--}}
{{--                        <button   data-dismiss="modal"><i class="fal fa-times"></i></button>--}}
{{--                    </div>--}}
{{--                    <div class="product__modal-inner">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12">--}}
{{--                                <div class="product__modal-box">--}}
{{--                                    <div class="tab-content mb-20" id="nav-tabContent">--}}
{{--                                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">--}}
{{--                                            <div class="product__modal-img w-img">--}}
{{--                                                <img src="assets/img/shop/product/quick-view/quick-big-1.jpg" alt="">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">--}}
{{--                                            <div class="product__modal-img w-img">--}}
{{--                                                <img src="assets/img/shop/product/quick-view/quick-big-2.jpg" alt="">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">--}}
{{--                                            <div class="product__modal-img w-img">--}}
{{--                                                <img src="assets/img/shop/product/quick-view/quick-big-3.jpg" alt="">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <nav>--}}
{{--                                        <div class="nav nav-tabs justify-content-between" id="nav-tab" role="tablist">--}}
{{--                                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">--}}
{{--                                                <div class="product__nav-img w-img">--}}
{{--                                                    <img src="assets/img/shop/product/quick-view/quick-sm-1.jpg" alt="">--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">--}}
{{--                                                <div class="product__nav-img w-img">--}}
{{--                                                    <img src="assets/img/shop/product/quick-view/quick-sm-2.jpg" alt="">--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">--}}
{{--                                                <div class="product__nav-img w-img">--}}
{{--                                                    <img src="assets/img/shop/product/quick-view/quick-sm-3.jpg" alt="">--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </nav>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-xl-7 col-lg-7 col-md-6 col-sm-12 col-12">--}}
{{--                                <div class="product__modal-content">--}}
{{--                                    <h4><a href="product-details.html">Wooden container Bowl</a></h4>--}}
{{--                                    <div class="rating rating-shop mb-15">--}}
{{--                                        <ul>--}}
{{--                                            <li><span><i class="fas fa-star"></i></span></li>--}}
{{--                                            <li><span><i class="fas fa-star"></i></span></li>--}}
{{--                                            <li><span><i class="fas fa-star"></i></span></li>--}}
{{--                                            <li><span><i class="fas fa-star"></i></span></li>--}}
{{--                                            <li><span><i class="fal fa-star"></i></span></li>--}}
{{--                                        </ul>--}}
{{--                                        <span class="rating-no ml-10">--}}
{{--													3 rating(s)--}}
{{--												</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="product__price-2 mb-25">--}}
{{--                                        <span>$96.00</span>--}}
{{--                                        <span class="old-price">$96.00</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="product__modal-des mb-30">--}}
{{--                                        <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram.</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="product__modal-form">--}}
{{--                                        <form action="#">--}}
{{--                                            <div class="product__modal-input size mb-20">--}}
{{--                                                <label>Size <i class="fas fa-star-of-life"></i></label>--}}
{{--                                                <select>--}}
{{--                                                    <option>- Please select -</option>--}}
{{--                                                    <option> S</option>--}}
{{--                                                    <option> M</option>--}}
{{--                                                    <option> L</option>--}}
{{--                                                    <option> XL</option>--}}
{{--                                                    <option> XXL</option>--}}
{{--                                                </select>--}}
{{--                                            </div>--}}
{{--                                            <div class="product__modal-input color mb-20">--}}
{{--                                                <label>Color <i class="fas fa-star-of-life"></i></label>--}}
{{--                                                <select>--}}
{{--                                                    <option>- Please select -</option>--}}
{{--                                                    <option> Black</option>--}}
{{--                                                    <option> Yellow</option>--}}
{{--                                                    <option> Blue</option>--}}
{{--                                                    <option> White</option>--}}
{{--                                                    <option> Ocean Blue</option>--}}
{{--                                                </select>--}}
{{--                                            </div>--}}
{{--                                            <div class="product__modal-required mb-5">--}}
{{--                                                <span >Repuired Fiields *</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="pro-quan-area d-lg-flex align-items-center">--}}
{{--                                                <div class="product-quantity-title">--}}
{{--                                                    <label>Quantity</label>--}}
{{--                                                </div>--}}
{{--                                                <div class="product-quantity">--}}
{{--                                                    <div class="cart-plus-minus"><input type="text" value="1" /></div>--}}
{{--                                                </div>--}}
{{--                                                <div class="pro-cart-btn ml-20">--}}
{{--                                                    <a href="#" class="add-cart-btn mr-10">+ Add to Cart</a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </form>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- shop modal end -->


</main>

@endsection
