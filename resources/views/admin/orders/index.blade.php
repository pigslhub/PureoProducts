@extends('admin.layouts.master')

@section('title', 'Orders')
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/datatables.css')}}">
@endsection

@section('breadcrumb-title', 'Orders')

@section('breadcrumb-item')
    <li class="breadcrumb-item active">Start Kit</li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>All Orders</h4>
                    </div>
                    <div class="card-body">  
                        <div class="table-responsive">
                            <table class="display" id="basic-1">
                                <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Product Item</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Discount</th>
                                    <th scope="col">Net Bill</th>
                                    <th scope="col">Status</th>
{{--                                    <th scope="col">Action</th>--}}
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>

                                        @foreach ($order->carts as $cart)
                                            @if($cart->product != '' || $cart->product != null)
                                                <li><span class="badge badge-secondary">{{ $cart->product->name }}<span class="badge badge-danger ml-1">{{ $cart->qty }}</span></span></li>
                                            @else
                                                N/A
                                            @endif
                                        @endforeach
                                        </td>
                                        <td><p class="badge badge-secondary p-2">{{$order->amount}}</p></td>
                                        <td><p class="badge badge-secondary p-2">{{$order->discount}}</p></td>
                                        <td><p class="badge badge-secondary p-2">{{$order->amount - $order->discount}}</p></td>
                                        @if($order->status == 1)
                                            <td><span class="badge badge-success p-2">Completed</span></td>
                                        @else
                                            <td><span class="badge badge-danger p-2">Pending</span></td>
                                        @endif
{{--                                        <td>--}}
{{--                                                @if($orders->conversation != null)--}}
{{--                                                    <a href="{{route('orders.showAllChats', ['conversation' => $orders->conversation->id])}}" title="Chat" class="btn btn-xs btn-success"><i class="fa fa-comment"></i></a>--}}
{{--                                                @endif--}}
{{--                                                <a href="{{route('orders.onGoingToReady', ['order' => $orders->id])}}" title="Mark Order As Ready" class="btn btn-xs btn-info"><i class="fa fa-spinner"></i></a>--}}
{{--                                                    <a href="{{route('orders.onGoingToCancel', ['order' => $orders->id])}}" title="Cancel Order" class="btn btn-xs btn-danger"><i class="fa fa-times-circle"></i></a>--}}
{{--                                        </td>--}}
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("scripts")
    <script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>

    <script src="{{asset('js/kit.fontAwesome.js')}}"></script>
    <script src="{{asset('assets/js/chat-menu.js')}}"></script>
@endsection
