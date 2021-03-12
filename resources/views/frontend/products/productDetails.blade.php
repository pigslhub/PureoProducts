@extends('frontend.layouts.master')

@section('title', 'Product Details')

@section('content')

{{--    {{ dd($product->toArray()) }}--}}

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
    <section class="page__title p-relative d-flex align-items-center" style="height: 350px" data-background="{{ asset('frontend/assets/img/page-title/page-title-1.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__title-inner text-center">
                        <h1>Product Details</h1>
                        <div class="page__title-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"> Product details</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page title area end -->


    <!-- shop details area start -->
    <section class="shop__area pb-65">
        <div class="shop__top grey-bg-6 pt-100 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="product__modal-box d-flex">
{{--                            <div class="product__modal-nav mr-20">--}}
{{--                                <nav>--}}
{{--                                    <div class="nav nav-tabs" id="product-details" role="tablist">--}}
{{--                                        <a class="nav-item nav-link active" id="pro-one-tab" data-toggle="tab" href="#pro-one" role="tab" aria-controls="pro-one" aria-selected="true">--}}
{{--                                            <div class="product__nav-img w-img">--}}
{{--                                                <img src="assets/img/shop/product/details/details-sm-1.jpg" alt="">--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                        <a class="nav-item nav-link" id="pro-two-tab" data-toggle="tab" href="#pro-two" role="tab" aria-controls="pro-two" aria-selected="false">--}}
{{--                                            <div class="product__nav-img w-img">--}}
{{--                                                <img src="assets/img/shop/product/quick-view/quick-sm-2.jpg" alt="">--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                        <a class="nav-item nav-link" id="pro-three-tab" data-toggle="tab" href="#pro-three" role="tab" aria-controls="pro-three" aria-selected="false">--}}
{{--                                            <div class="product__nav-img w-img">--}}
{{--                                                <img src="assets/img/shop/product/quick-view/quick-sm-3.jpg" alt="">--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </nav>--}}
{{--                            </div>--}}
                            <div class="tab-content mb-20 text-center" id="product-detailsContent">
                                <div class="tab-pane fade show active" id="pro-one" role="tabpanel" aria-labelledby="pro-one-tab">
                                    <div class="product__modal-img product__thumb w-img">
                                        <img src="{{ asset('storage/'.$product->icon) }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="product__modal-content product__modal-content-2">
                            <h4><a href="#">{{ $product->name }}</a></h4>
                            <div class="rating rating-shop mb-15">
                                <ul>
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li><span><i class="fal fa-star"></i></span></li>
                                </ul>
                                <span class="rating-no ml-10 rating-left">
                                            3 rating(s)
                                        </span>
                                <span class="review rating-left"><a href="#">Add your Review</a></span>
                            </div>
                            <div class="product__price-2 mb-25">
                                <span>${{ $product->price }}</span>
{{--                                <span class="old-price">$96.00</span>--}}
                            </div>
                            <div class="product__modal-des mb-30">
                                <p>Description: {{ $product->description }}.</p>
                            </div>
                            <div class="product__modal-form mb-30">
                                <form action="#">
                                    <div class="product__modal-input size mb-20">
                                        <label>Volume <i class="fas fa-star-of-life"></i></label>
                                        <select>
                                            <option>- Please select -</option>
                                            <option> 2oz</option>
                                            <option> 4oz</option>
                                            <option> 8oz</option>
                                            <option> 16oz</option>
                                            <option> 32oz</option>
                                        </select>
                                    </div>
                                    <div class="product__modal-required mb-5">
                                        <span >Repuired Fiields *</span>
                                    </div>
                                    <div class="pro-quan-area d-sm-flex align-items-center">
                                        <div class="product-quantity-title">
                                            <label>Quantity</label>
                                        </div>
                                        <div class="product-quantity mr-20 mb-20">
                                            <div class="cart-plus-minus"><input type="text" value="1" /></div>
                                        </div>
                                        <div class="pro-cart-btn">
                                            <a href="#" class="add-cart-btn mb-20">+ Add to Cart</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="product__tag mb-25">
                                <span>Category:</span>
                                <span><a href="#">{{ $product->subcategory->category->name }}</a></span>
                            </div>
{{--                            <div class="product__share">--}}
{{--                                <span>Share :</span>--}}
{{--                                <ul>--}}
{{--                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>--}}
{{--                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>--}}
{{--                                    <li><a href="#"><i class="fab fa-behance"></i></a></li>--}}
{{--                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>--}}
{{--                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shop__bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="product__details-tab">
                            <div class="product__details-tab-nav text-center mb-45">
                                <nav>
                                    <div class="nav nav-tabs justify-content-start justify-content-sm-center" id="pro-details" role="tablist">
                                        <a class="nav-item nav-link active" id="des-tab" data-toggle="tab" href="#des" role="tab" aria-controls="des" aria-selected="true">Description</a>
                                        <a class="nav-item nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Reviews (4)</a>
                                    </div>
                                </nav>
                            </div>
                            <div class="tab-content" id="pro-detailsContent">
                                <div class="tab-pane fade show active" id="des" role="tabpanel">
                                    <div class="product__details-des">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when anunknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>

                                        <div class="product__details-des-list mb-20">
                                            <ul>
                                                <li><span>Claritas est etiam processus dynamicus.</span></li>
                                                <li><span>Qui sequitur mutationem consuetudium lectorum.</span></li>
                                                <li><span>Claritas est etiam processus dynamicus.</span></li>
                                                <li><span>Qui sequitur mutationem consuetudium lectorum.</span></li>
                                                <li><span>Claritas est etiam processus dynamicus.</span></li>
                                                <li><span>Qui sequitur mutationem consuetudium lectorum.</span></li>
                                            </ul>
                                        </div>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release.</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="review" role="tabpanel">
                                    <div class="product__details-review">
                                        <div class="postbox__comments">
                                            <div class="postbox__comment-title mb-30">
                                                <h3>Reviews (32)</h3>
                                            </div>
                                            <div class="latest-comments mb-30">
                                                <ul>
                                                    <li>
                                                        <div class="comments-box">
                                                            <div class="comments-avatar">
                                                                <img src="assets/img/blog/comments/avater-1.png" alt="">
                                                            </div>
                                                            <div class="comments-text">
                                                                <div class="avatar-name">
                                                                    <h5>Siarhei Dzenisenka</h5>
                                                                    <span> - 3 months ago </span>
                                                                    <a class="reply" href="#">Leave Reply</a>
                                                                </div>
                                                                <div class="user-rating">
                                                                    <ul>
                                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                                <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for <span>“lorem ipsum”</span> will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose.</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="children">
                                                        <div class="comments-box">
                                                            <div class="comments-avatar">
                                                                <img src="assets/img/blog/comments/avater-2.png" alt="">
                                                            </div>
                                                            <div class="comments-text">
                                                                <div class="avatar-name">
                                                                    <h5>Julias Roy</h5>
                                                                    <span> - 6 months ago </span>
                                                                    <a class="reply" href="#">Leave Reply</a>
                                                                </div>
                                                                <div class="user-rating">
                                                                    <ul>
                                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                                <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for <span>“lorem ipsum”</span> will uncover many web sites still in their infancy. </p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="comments-box">
                                                            <div class="comments-avatar">
                                                                <img src="assets/img/blog/comments/avater-3.png" alt="">
                                                            </div>
                                                            <div class="comments-text">
                                                                <div class="avatar-name">
                                                                    <h5>Arista Williamson</h5>
                                                                    <span> - 6 months ago </span>
                                                                    <a class="reply" href="#">Leave Reply</a>
                                                                </div>
                                                                <div class="user-rating">
                                                                    <ul>
                                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                                <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for <span>“lorem ipsum”</span> will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose.</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="post-comments-form mb-100">
                                            <div class="post-comments-title mb-30">
                                                <h3>Your Review</h3>
                                            </div>
                                            <form id="contacts-form" class="conatct-post-form" action="#">
                                                <div class="row">
                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                        <div class="contact-icon p-relative contacts-name">
                                                            <input type="text" placeholder="Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                        <div class="contact-icon p-relative contacts-name">
                                                            <input type="email" placeholder="Email">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12">
                                                        <div class="contact-icon p-relative contacts-email">
                                                            <input type="text" placeholder="Subject">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12">
                                                        <div class="contact-icon p-relative contacts-message">
                                                                    <textarea name="comments" id="comments" cols="30" rows="10"
                                                                              placeholder="Comments"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12">
                                                        <button class="os-btn os-btn-black" type="submit">Post comment</button>
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
    </section>
    <!-- shop details area end -->

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
                                                <img src="assets/img/shop/product/quick-view/quick-big-1.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="assets/img/shop/product/quick-view/quick-big-2.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="assets/img/shop/product/quick-view/quick-big-3.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <nav>
                                        <div class="nav nav-tabs justify-content-between" id="nav-tab" role="tablist">
                                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
                                                <div class="product__nav-img w-img">
                                                    <img src="assets/img/shop/product/quick-view/quick-sm-1.jpg" alt="">
                                                </div>
                                            </a>
                                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">
                                                <div class="product__nav-img w-img">
                                                    <img src="assets/img/shop/product/quick-view/quick-sm-2.jpg" alt="">
                                                </div>
                                            </a>
                                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">
                                                <div class="product__nav-img w-img">
                                                    <img src="assets/img/shop/product/quick-view/quick-sm-3.jpg" alt="">
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
                                                    <a href="#" class="add-cart-btn mr-10">+ Add to Cart</a>
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
