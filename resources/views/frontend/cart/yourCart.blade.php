@extends('frontend.layouts.master')

@section('title', 'Your Cart')

@section('content')
<main>
    <!-- page title area start -->
    <section class="page__title p-relative d-flex align-items-center" style="height: 350px" data-background="{{ asset('frontend/assets/img/page-title/page-title-1.jpg') }}">
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
                                    <a class="os-btn" href="{{ route('frontend.checkout') }}">Proceed to checkout</a>
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
