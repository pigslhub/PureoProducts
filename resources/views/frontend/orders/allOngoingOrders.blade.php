@extends('frontend.layouts.master')
@section('title', 'Your Orders')
@section('content')
<main>
    <!-- page title area start -->
{{--    {{ dd($product->toArray()) }}--}}
    <section class="page__title p-relative d-flex align-items-center" style="height: 350px" data-background="{{ asset('frontend/assets/img/page-title/page-title-1.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__title-inner text-center">
                        <h1>Your Ongoing Orders</h1>
                        <div class="page__title-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"> Ongoing Orders</li>
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
                                <th class="product-thumbnail">Order Id</th>
                                <th class="product-quantity">Customer</th>
                                <th class="cart-product-name">Amount</th>
                                <th class="product-price">Status</th>
                                <th class="product-price">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse(_customerOngoingOrders() as $order)
                            <tr>
                                <td class="product-name"><a href="#">{{ $order->order_id }}</a></td>
                                <td class="product-price"><span class="amount">{{ $order->customer->name }}</span></td>
                                <td class="product-quantity"><span class="amount">{{ $order->amount }}</span></td>
                                <td class="product-subtotal"><span class="amount">{{ $order->status }}</span></td>
                                <td class="product-subtotal"><a href="{{ route('frontend.allOngoingOrderCarts', $order) }}" class="btn os-btn">View</a></td>
                            </tr>
                            @empty
                                <tr>
                                   <td colspan="5">No Orders Found</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Cart Area End-->
</main>
@endsection

