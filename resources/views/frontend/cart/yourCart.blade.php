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

                        <div class="table-content table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="product-thumbnail">Images</th>
                                    <th class="cart-product-name">Product</th>
                                    <th class="product-price">Unit Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Total</th>
                                    <th class="product-remove">Update</th>
                                    <th class="product-remove">Remove</th>
                                </tr>
                                </thead>
                                <tbody>
                                     <input type="hidden" id="customer_id" value="{{ auth('customer')->user()->id }}" id="">

                                @forelse($carts as $cart)
                                <tr>
                                <form action="{{ route('carts.update',['cart' => $cart->id]) }}" method="POST">
                                        @method('PUT')
                                        @csrf
                                    <td class="product-thumbnail"><a href="#">
                                                @if(strpos($cart->product->icon,'100x75'))
                                                    <img src="{{ $cart->product->getIconPath('md') }}" style="width:150px;height: 120px;" alt="product-img">
                                                @elseif(strpos($cart->product->icon,'50x75'))
                                                    <img src="{{ $cart->product->getIconPath('pmd') }}" style="width:100px ;height: 150px" alt="product-img">
                                                @else
                                                    <img src="{{ $cart->product->getIconPath('emd') }}" style="width:200px; height: 200px" alt="product-img">
                                                @endif
                                        </a>
                                    </td>
                                    <td class="product-name"><a href="#">{{ $cart->product->name }}</a></td>
                                    <td class="product-price"><span class="amount">{{ $cart->price }}</span></td>
                                    <td class="product-quantity">
                                        <div class="cart-plus-minus"><input type="text" name="qty" value={{ $cart->qty }} /></div>
                                    </td>
                                    <td class="product-subtotal"><span class="amount">{{ $cart->total }}</span></td>
                                    <td class="product-remove">
                                        <button class="btn" type="submit"><i class="fa fa-check"></i></button>
                                    </td>
                                    </form>
                                    <td class="product-remove">
                                        <button data-toggle="modal"
                                                    data-target="#confirm_cart_{{$cart->id}}"
                                                    class="btn" title="Delete Cart">
                                                <i class="fa fa-times"></i>
                                            </button>
                                            @include('includes.modals.confirm', ['model' => 'cart', 'route' => route('carts.destroy', ['cart' => $cart->id]), 'form' => true])
                                    </td>
                                </tr>

                                @empty
                                    <tr>
                                       <td colspan="7">No Item found in your cart</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>

                        <div class="row">
                            <div class="col-md-5 ml-auto">
                                <div class="cart-page-total">
                                    <h2>Cart totals</h2>
                                    <ul class="mb-20">
                                        <li>Subtotal <span>${{ _getCustomerCartTotalAmount() }}</span></li>
                                        <li>Total <span>${{ _getCustomerCartTotalAmount() }}</span></li>
                                    </ul>
                                    <button class="os-btn" id="checkout-button">Complete your Order</button>
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
@section('scripts')
    <script src="https://js.stripe.com/v3/"></script>
    <script>
         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    var stripe = Stripe('pk_test_AZtCwmVhmnSK1PaQo0RD00rS00JTZJoAsx');
    $(document).ready(function(){
        $("#checkout-button").on('click',function(){
            var customer_id  = $("#customer_id").val();
            $.ajax({
                    type: 'post',
                    url: "{{ route('frontend.checkoutpayment') }}",
                    data: {'customer_id': customer_id},
                    success: function (data) {
                    var res =  stripe.redirectToCheckout({ sessionId: data });

                    },
                    error: function (err) {
                        console.log(err);
                    },
                });

        });
    })

    </script>
@endsection
