@extends('frontend.layouts.master')

@section('title', 'Product Details')

@section('content')
<main>
    <!-- page title area start -->
{{--    <section class="page__title p-relative d-flex align-items-center" style="height: 350px" data-background="{{ asset('frontend/assets/img/page-title/page-title-1.jpg') }}">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-xl-12">--}}
{{--                    <div class="page__title-inner text-center">--}}
{{--                        <h1>Product Details</h1>--}}
{{--                        <div class="page__title-breadcrumb">--}}
{{--                            <nav aria-label="breadcrumb">--}}
{{--                                <ol class="breadcrumb justify-content-center">--}}
{{--                                    <li class="breadcrumb-item"><a href="#">Home</a></li>--}}
{{--                                    <li class="breadcrumb-item active" aria-current="page"> Product details</li>--}}
{{--                                </ol>--}}
{{--                            </nav>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- page title area end -->


    <!-- shop details area start -->
    <section class="shop__area pb-65">
        <div class="shop__top grey-bg-6 pt-100 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="product__modal-box d-flex">
                            <div class="tab-content mb-20 text-center" id="product-detailsContent">
                                <div class="tab-pane fade show active" id="pro-one" role="tabpanel" aria-labelledby="pro-one-tab">
                                    <div class="product__modal-img product__thumb w-img">
                                        @if(strpos($product->icon,'100x75'))
                                        <img style="height:200px;width:300px;margin:auto" src="{{ $product->getIconPath('lg') }}" alt="">
                                        @elseif(strpos($product->icon,'50x75'))
                                        <img style="height:300px;width:200px;margin:auto" src="{{ $product->getIconPath('plg') }}" alt="">
                                        @else
                                        <img style="height:300px;width:300px;margin:auto" src="{{ $product->getIconPath('elg') }}" alt="">
                                        @endif
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
                                <span>Price: ${{ $product->price }}</span>
{{--                                <span class="old-price">$96.00</span>--}}
                            </div>
                            <div class="product__price-2 mb-25">
                                <span>Available in Stock: {{ $product->in_stock }}</span>
                                {{--                                <span class="old-price">$96.00</span>--}}
                            </div>
                            <div class="product__modal-des mb-30">
                                <p>Description: {{ $product->description }}.</p>
                            </div>
                            <div class="product__modal-form mb-30">
                                <form action="{{route('carts.store')}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{$product->id}}" >
                                    <div class="product__modal-required mb-5">
                                        <span >Required Fields *</span>
                                    </div>
                                    <div class="product__modal-input size mb-20">
                                        <label for="volumes">Volume <i class="fas fa-star-of-life"></i></label>
                                        <select name="volumes" required>
                                            <option value="">- Please select -</option>
                                            <option>{{$product->volumes}}</option>
                                        </select>
                                    </div>
                                    <div class="pro-quan-area d-sm-flex align-items-center">
                                        <div class="product-quantity-title">
                                            <label>Quantity</label>
                                        </div>
                                        <div class="product-quantity mr-20 mb-20">
                                            <div class="cart-plus-minus">
                                                <input type="number" value="1" name="qty" />
                                            </div>
                                        </div>
                                        <div class="pro-cart-btn">
                                            <button type="submit" class="add-cart-btn mb-20">+ Add to Cart</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="product__tag mb-25">
                                <span>Category:</span>
                                <span><a href="#">{{ $product->sub_category->category->name }}</a></span>
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
                                        <p>{{ $product->description }}</p>

                                        <h4>Instructions</h4>
                                        <div class="product__details-des-list mb-20">
                                            <ul>
                                                <li><span>hello{{ $product->instruction }}</span></li>
                                            </ul>
                                        </div>
                                        <h4>Ingredients:</h4>
                                        <div class="product__details-des-list mb-20">
                                            <ul>
                                                <li><span>hello{{ $product->ingredients }}</span></li>
                                            </ul>
                                        </div>
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
</main>
@endsection
