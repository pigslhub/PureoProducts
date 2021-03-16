@extends('frontend.layouts.master')

@section('title', 'Your Cart')

@section('content')
<main>
    <!-- page title area start -->
{{--    {{ dd($product->toArray()) }}--}}
    <section class="page__title p-relative d-flex align-items-center" style="height: 350px" data-background="{{ asset('frontend/assets/img/page-title/page-title-1.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__title-inner text-center">
                        <h1>Your Cart</h1>
                        <div class="page__title-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
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
                    <form action="{{ route('carts.update') }}" method="POST">
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
                                @forelse($carts as $cart)
                                <tr>
                                    <td class="product-thumbnail"><a href="product-details.html">
                                                @if(strpos($cart->product->icon,'100x75'))
                                                    <img src="{{ $cart->product->getIconPath('md') }}" style="width:150px;height: 120px;" alt="product-img">
                                                @elseif(strpos($cart->product->icon,'50x75'))
                                                    <img src="{{ $cart->product->getIconPath('pmd') }}" style="width:100px ;height: 150px" alt="product-img">
                                                @else
                                                    <img src="{{ $cart->product->getIconPath('emd') }}" style="width:200px; height: 200px" alt="product-img">
                                                @endif
                                        </a>
                                    </td>
                                    <td class="product-name"><a href="product-details.html">{{ $cart->product->name }}</a></td>
                                    <td class="product-price"><span class="amount">{{ $cart->product->price }}</span></td>
                                    <td class="product-quantity">
                                        <div class="cart-plus-minus"><input type="number" value={{ $cart->qty }} /></div>
                                    </td>
                                    <td class="product-subtotal"><span class="amount">{{ $cart->total }}</span></td>
                                    <td class="product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                </tr>
                                @empty
                                    <tr>
                                       <td colspan="6">No Item found in your cart</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="coupon-all">
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
