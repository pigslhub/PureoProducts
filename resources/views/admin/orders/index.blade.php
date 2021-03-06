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
                        <h4>Ongoing Orders</h4>
                    </div>
                    <div class="card-body">  
                        <div class="table-responsive">
                            <table class="display" id="basic-1">
                                <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Order ID</th>
                                    <th scope="col">Customer Name</th>
                                    <th scope="col">Driver Name</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Due Date</th>
                                    <th scope="col">Due Time</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($onGoingOrders as $orders)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$orders->order_id}}</td>
                                        <td>{{$orders->customer ==null ? '---': $orders->customer->name}}</td>
                                        <td>{{$orders->driver ==null ? '---': $orders->driver->name }}</td>
                                        <td>{{$orders->amount}}</td>
                                        <td>{{$orders->due_date}}</td>
                                        <td>{{$orders->due_time}}</td>
                                        <td>
                                                @if($orders->conversation != null)
                                                    <a href="{{route('orders.showAllChats', ['conversation' => $orders->conversation->id])}}" title="Chat" class="btn btn-xs btn-success"><i class="fa fa-comment"></i></a>
                                                @endif
                                                <a href="{{route('orders.onGoingToReady', ['order' => $orders->id])}}" title="Mark Order As Ready" class="btn btn-xs btn-info"><i class="fa fa-spinner"></i></a>
                                                    <a href="{{route('orders.onGoingToCancel', ['order' => $orders->id])}}" title="Cancel Order" class="btn btn-xs btn-danger"><i class="fa fa-times-circle"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Ready Orders</h4>
                    </div>
                    <div class="card-body">  
                        <div class="table-responsive">
                            <table class="display" id="basic-2">
                                <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Order ID</th>
                                    <th scope="col">Customer Name</th>
                                    <th scope="col">Driver Name</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Due Date</th>
                                    <th scope="col">Due Time</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($readyOrders as $orders)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$orders->order_id}}</td>
                                        <td>{{$orders->customer ==null ? '---': $orders->customer->name}}</td>
                                        <td>{{$orders->driver ==null ? '---': $orders->driver->name }}</td>
                                        <td>{{$orders->amount}}</td>
                                        <td>{{$orders->due_date}}</td>
                                        <td>{{$orders->due_time}}</td>
                                        <td>
                                            @if($orders->conversation != null)
                                            <a href="{{route('orders.showAllChats', ['conversation' => $orders->conversation->id])}}" title="Chat" class="btn btn-xs btn-success"><i class="fa fa-comment"></i></a>
                                            @endif
                                            <a href="{{route('orders.readyToComplete', ['order' => $orders->id])}}" title="Mark Order As Complete" class="btn btn-xs btn-info"><i class="fa fa-check-circle"></i></a>
                                        </td>
                                    </tr>
                                 @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Completed Orders</h4>
                    </div>
                    <div class="card-body">  
                        <div class="table-responsive">
                            <table class="display" id="basic-3">
                                <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Order ID</th>
                                    <th scope="col">Customer Name</th>
                                    <th scope="col">Driver Name</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Due Date</th>
                                    <th scope="col">Due Time</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($completeOrders as $orders)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$orders->order_id}}</td>
                                        <td>{{$orders->customer ==null ? '---': $orders->customer->name}}</td>
                                        <td>{{$orders->driver ==null ? '---': $orders->driver->name }}</td>
                                        <td>{{$orders->amount}}</td>
                                        <td>{{$orders->due_date}}</td>
                                        <td>{{$orders->due_time}}</td>
                                        <td>
                                            @if($orders->conversation != null)
                                            <a href="{{route('orders.showAllChats', ['conversation' => $orders->conversation->id])}}" class="btn btn-xs btn-success"><i class="fa fa-comment"></i></a>
                                            @else
                                            <p>N/A</p>
                                            @endif
                                        </td>

                                    </tr>

                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Cancelled Orders</h4>
                    </div>
                    <div class="card-body">  
                        <div class="table-responsive">
                            <table class="display" id="basic-4">
                                <thead>
                                <tr><th scope="col">ID</th>
                                    <th scope="col">Order ID</th>
                                    <th scope="col">Customer Name</th>
                                    <th scope="col">Driver Name</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Due Date</th>
                                    <th scope="col">Due Time</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($cancelOrders as $orders)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$orders->order_id}}</td>
                                        <td>{{$orders->customer ==null ? '---': $orders->customer->name}}</td>
                                        <td>{{$orders->driver ==null ? '---': $orders->driver->name }}</td>
                                        <td>{{$orders->amount}}</td>
                                        <td>{{$orders->due_date}}</td>
                                        <td>{{$orders->due_time}}</td>
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
