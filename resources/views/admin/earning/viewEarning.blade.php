@extends('admin.layouts.master')

@section('title', 'Earning')

@section('breadcrumb-title', 'Earning')

@section('breadcrumb-item')
    <li class="breadcrumb-item active">Earning</li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-xl-6 col-lg-6">
                <div class="card o-hidden">
                    <div class="bg-primary b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="align-self-center text-center"><i class="fa fa-money"
                                                                          style="font-size: 30px"></i></div>
                            <div class="media-body"><span class="m-0">Total Earning</span>
                                <h4 class="mb-0 counter">{{ $totalEarning }}</h4><i class="icon-bg"
                                                                                    data-feather="dollar-sign"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-6 col-lg-6">
                <div class="card o-hidden">
                    <div class="bg-primary b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="align-self-center text-center"><i class="fa fa-money"
                                                                          style="font-size: 30px"></i></div>
                            <div class="media-body"><span class="m-0">Total Profit</span>
                                <h4 class="mb-0 counter">{{ $totalProfit }}</h4><i class="icon-bg"
                                                                                   data-feather="dollar-sign"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form method="post" action="{{route('earnings.searchEarning')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row pull-right">
                        <div class="col-md-4">
                            <label class="col-form-label">From Date</label>
                            <input type="datetime-local" autocomplete="off"
                                   class="form-control" name="from_date"
                                   required>
                        </div>
                        <div class="col-md-4">
                            <label class="col-form-label">To Date</label>
                            <input type="datetime-local" autocomplete="off"
                                   class="form-control" name="to_date"
                                   required>
                        </div>
                        <div class="col-md-4" style="margin-top: 37px;">
                            <button class="btn btn-sm btn-secondary" type="submit">Search</button>
                        </div>
                    </div>
                    <br>
                </form>
            </div>

            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="pull-left">Earnings List</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table data-table">
                                <thead>
                                <tr>

                                    <th scope="col">Order ID</th>
                                    <th scope="col">Items</th>
                                    <th scope="col">Purchasing Amount</th>
                                    <th scope="col">Selling Amount</th>
                                    <th scope="col">Bill Paid</th>
                                    <th scope="col">Discount</th>
                                    <th scope="col">Profit</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($orders as $order)
                                    <tr>
                                        @php
                                            $total_purchase_amount = 0

                                        @endphp
                                        <td>{{ $order->id }}</td>
                                        <td>
                                            @foreach($order->carts as $cart)
                                                <li><span
                                                        class="badge badge-secondary">{{ $cart->product->name }}<span
                                                            class="badge badge-danger ml-1">{{$cart->qty}}</span></span>
                                                </li><br>
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach($order->carts as $cart)
                                                @php
                                                    $total_purchase_amount += $cart->product->purchase_price * $cart->qty
                                                @endphp
                                                <li>{{ $cart->product->purchase_price }} x {{$cart->qty}} </li><br>
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach($order->carts as $cart)
                                                <li>{{ $cart->product->selling_price }} x {{$cart->qty}}</li><br>
                                            @endforeach
                                        </td>
                                        <td>{{ $order->amount }}</td>
                                        <td>{{ $order->discount }}</td>
                                        <td>
                                            {{ $order->amount - $order->discount - $total_purchase_amount  }}
                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
