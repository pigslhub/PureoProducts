@extends('admin.layouts.master')
@section('title','Point Of Sale')
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/datatables.css')}}">
@endsection

@section('breadcrumb-title', 'Sales Return')
@section('breadcrumb-item')
    <li class="breadcrumb-item">Sales Return</li>
@endsection

@section('content')
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <!-- Zero Configuration  Starts-->
            <input type='hidden' class='selected-order-id'/>
            <input type='hidden' class='selected-order-id-string'/>
            <input type='hidden' class='selected-customer-id'/>
            <div class="col-md-8 orders">
                <div class="card">
                    <div class="card-header">
                        <h4>Products List</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display" id="basic-1">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Selling Price</th>
                                    <th scope="col">Min Price</th>
                                    <th scope="col">In Stock</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach (_getAllProducts() as $product)
                                    {{--                                    <form action="{{route('carts.store')}}" method="POST">--}}
                                    {{--                                        @csrf--}}
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->selling_price}}</td>
                                        <td>{{$product->min_price}}</td>
                                        @if($product->in_stock <= 0)
                                            <td>
                                                <span class="badge badge-danger m-2">Out of stock</span>
                                            </td>
                                        @else
                                            <td id="stock">{{ $product->in_stock }}</td>
                                        @endif
                                        <td>
                                            @if($product->in_stock <= 0)
                                                <input type="text" name="qty" readonly class="form-control qty" id="qty"
                                                       placeholder="add qty">
                                            @else
                                                <input type="text" name="qty" class="form-control qty" id="qty"
                                                       placeholder="add qty">
                                            @endif
                                        </td>
                                        <td>
                                            @if($product->in_stock <= 0)
                                                <button class="btn btn-sm btn-success disabled"><i
                                                        class="fa fa-shopping-cart"></i></button>
                                            @else
                                                <button value="{{$product->id}}" title="Add to Cart"
                                                        class="btn-print btn btn-xs btn-success">+ <i
                                                        class="fa fa-shopping-cart"></i></button>
                                            @endif
                                        </td>
                                        <input type="hidden" name="return" class="form-control return" id="return"
                                               value="return">

                                    </tr>
                                    {{--                                    </form>--}}
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-lg">
                    <div class="card-body" id="divToPrint">
                        <div class="text-center">
                            {{--                    <img src="{{_getShopAvatar(auth('shop')->user()->id)}}" style="background-size:cover;height:100px;width:100px" id="reciptImage" />--}}
                            <div>
                                {{--                      <p style='font-size:12px' id=receiptAddress><i style='font-size:12px' class='fa fa-map-marker'></i></i>&nbsp;&nbsp;{{auth('shop')->user()->address}}<br></p>--}}
                                {{--                      <p style='font-size:12px' id="receiptPhone"><i style='font-size:12px' class="fa fa-phone"></i>&nbsp;&nbsp;{{auth('shop')->user()->phone}}</p>--}}
                            </div>
                        </div>
                        <hr class="hr1">
                        <h1 style="text-align: center">Insaf Gift Center</h1>
                        <br>
                        <div class="table-responsive posReceipt">
                        </div>
                        <br><br><br>
                        <div class="text-center shopDetails d-none">
                            <h5>Thank you for your visit</h5>
                            <p>*****************************************************</p>
                            <h5><i class="fa fa-location-arrow"></i> 162B Gulistan Colony Near Ideal Bakery Milat Chowk
                                Faisalabad</h5>
                            <h5><i class="fa fa-phone"></i>&nbsp;03457551920</h5>
                            <h5><i class="fa fa-phone"></i>&nbsp;03127552019</h5>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-success btn-block btn-print-receipt"
                           href="">Update</a>
                    </div>
                </div>
            </div>

            {{--            /////////////////////////////--}}
        </div>
    </div>




@endsection
@section("scripts")
    <script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>

    <script src="{{asset('js/kit.fontAwesome.js')}}"></script>
    <script src="{{asset('assets/js/chat-menu.js')}}"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).ready(function () {

            setTimeout(() => {
                $(".page-sidebar").addClass("open");
                $(".page-main-header").addClass("open");
            }, 200);

            // Button print handle for shops other than food

            function loadReceipt(productId, quantity) {
                $.ajax({
                    url: "{{route('sales_return.loadOrderReceipt')}}",
                    method: "POST",
                    data: {"product_id": productId, "quantity": quantity},
                    success: function (data) {
                        console.log(data);
                        $('.posReceipt').html(data);
                        $('.btn-print-receipt').removeClass('d-none');
                        $('.qty').val('');
                    },
                    error: function (err) {
                        alert("error");
                        console.log(err);
                    }
                });
            }

            function loadReceiptOnStartup() {
                $.ajax({
                    url: "{{route('sales_return.loadOrderReceiptOnStartup')}}",
                    method: "POST",
                    success: function (data) {

                        console.log(data);
                        $('.posReceipt').html(data);
                        // $('.btn-print-receipt').removeClass('d-none');
                    },
                    error: function (err) {
                        alert("error");
                        console.log(err);
                    }
                });
            }

            loadReceiptOnStartup();

            function completeOrderOnPrint() {
                $.ajax({
                    url: "{{route('sales_return.completeOrderOnPrint')}}",
                    method: "POST",
                    data: {"discount": $(".discountfield").val()},
                    success: function (data) {
                        location.reload();

                    },
                    error: function (err) {
                        // alert("error");
                        console.log(err);
                    }
                });
            }
            function removeReceiptFromCart(cart_id) {
                $.ajax({
                    url: "{{route('sales_return.removeReceiptFromCart')}}",
                    method: "POST",
                    data: {"cart_id": cart_id},
                    success: function (data) {
                        $('.posReceipt').html(data);
                        $('.btn-print-receipt').removeClass('d-none');
                    },
                    error: function (err) {
                        alert("error");
                        console.log(err);
                    }
                });
            }

            // $(".btn-print").on('click', function () {
            //     let id = $(this).val();
            //     let quantity = $('.qty').val();
            //     // loadReceipt(id, quantity);
            // });
            $(".posReceipt").delegate(".discountfield", "input", function () {
                let tb = $(".totalbillamount").text();
                $(".lblNetBill").text(tb - $(this).val());
                $(".discountFieldLabel").text($(this).val());
            });


            $(".posReceipt").delegate("a", "click", function () {
                let cart_id = $(this).attr('cartid');
                removeReceiptFromCart(cart_id);
            });


            $(document).on('click', '.btn-print', function () {
                let id = $(this).val();

                let stock = Number($(this).closest('tr').find('#stock').text());
                let quantity = Number($(this).closest('tr').find('.qty').val());


                if (stock < quantity) {
                    alert(`You have ${stock} items in your stock.`);
                    $('.qty').val('');
                } else {
                    loadReceipt(id, quantity);
                }
            });

            // $('.btn-print').click(function () {
            //     let id = $(this).val();

            //     let stock = Number($(this).closest('tr').find('#stock').text());
            //     let quantity = Number($(this).closest('tr').find('.qty').val());

            //     alert(id);
            //     alert(stock);
            //     alert(quantity);

            //     // if (stock < quantity) {
            //     //     alert(`You have ${stock} items in your stock.`);
            //     //     $('.qty').val('');
            //     // } else {
            //     //     loadReceipt(id, quantity);
            //     // }
            // });

            $('.btn-remove').click(function () {
                removeReceiptFromCart();
            });


            $(".btn-print-receipt").on('click', function () {
                $('.bill-action').hide();
                $('.discountFieldLabel, .shopDetails').removeClass('d-none');
                $('.discountfield').addClass('d-none');
                completeOrderOnPrint();

            });
        });


    </script>

@endsection
