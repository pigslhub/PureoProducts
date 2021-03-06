@extends('shop.layouts.master')
@section('title','Point Of Sale')
@section('styles')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/datatables.css')}}">


@endsection

@section('breadcrumb-title', 'Point of Sale')
@section('breadcrumb-item')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item">Point of Sale</li>
@endsection
@section('content')
@section('content')
<!-- Container-fluid starts-->


<div class="container-fluid">
  <div class="row">
    <!-- Zero Configuration  Starts-->
    <input type='hidden' class='selected-order-id' />
    <input type='hidden' class='selected-order-id-string' />
    <input type='hidden' class='selected-customer-id' />
    <div class="col-md-8 orders">
      <div class="card">
          <div class="card-header">
            <h4>Orders List</h4>
          </div>
        <div class="card-body">
            <div class="table-responsive">
                  <table class="display" id="basic-1">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Action</th>
                        <th scope="col">Order ID</th>
                        <th scope="col">Description</th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Driver Name</th>
                        <th scope="col">Due Date</th>
                        <th scope="col">Due Time</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach (_getAllOrderOfFoodShop() as $orders)
                        <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>
                            @if($orders->has_cart == 1)
                            <button value="{{$orders->id}}" order_id="{{$orders->order_id}}" class="btn-print btn btn-sm btn-success"><i class="fa fa-print"></i></button>
                            @else

                            <button value="{{$orders->id}}" order_id="{{$orders->order_id}}" customerid="{{$orders->customer->id}}" class="btn-show-products btn btn-sm btn-danger"><i class="fa fa-th-large"></i></button>
                            @endif
                        </td>
                        <td>{{$orders->order_id}}</td>
                        <td>{{$orders->description == "" ||$orders->description == null ? "---" :$orders->description }}</td>
                        <td>{{$orders->customer ==null ? '---': $orders->customer->name}}</td>
                        <td>{{$orders->driver ==null ? '---': $orders->driver->name }}</td>
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


    <div class="col-md-8 products d-none">
      <div class="card">
        <div class="card-body">
            <h4>Select Category</h4>
            @foreach (_getAllCategoriesForShopTypeId() as $category)
                <button class="btn btn-large btn-category btn-success m-2" value="{{$category->id}}">{{$category->category_name}}</button>
            @endforeach

            <div class="row category-container">

            </div>
        </div>
      </div>
    </div>


      <div class="col-md-4">
        <div class="card shadow-lg">
            <div class="card-body" id="divToPrint">
                  <div class="text-center">
                    <img src="{{_getShopAvatar(auth('shop')->user()->id)}}" style="background-size:cover;height:100px;width:100px" id="reciptImage" />
                    <div>
                      <p style='font-size:12px' id=receiptAddress><i style='font-size:12px' class='fa fa-map-marker'></i></i>&nbsp;&nbsp;{{auth('shop')->user()->address}}<br></p>
                      <p style='font-size:12px' id="receiptPhone"><i style='font-size:12px' class="fa fa-phone"></i>&nbsp;&nbsp;{{auth('shop')->user()->phone}}</p>
                    </div>
                  </div>
                  <hr class="hr1">
                <div class="table-responsive posReceipt">
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-success btn-block btn-print-receipt d-none">Print</button>
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
<script>
  $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
  $(document).ready(function(){



        setTimeout(()=>{
            $(".page-sidebar").addClass("open");
            $(".page-main-header").addClass("open");
        },200);

      // Button print handle for shops other than food

        function loadReceipt(id,orderId)
        {
            $.ajax({
            url:"{{route('ordersShop.loadOrderReceipt')}}",
            method:"POST",
            data:{"id":id,"order_id":orderId},
            success:function(data){
              $('.posReceipt').html(data);
              $('.btn-print-receipt').removeClass('d-none');
            },
            error:function(err){
              alert("erro");
                console.log(err);
            }
          });
        }

      $(".btn-print").on('click',function(){

          let id =  $(this).val();
          let orderId =  $(this).attr('order_id');

          loadReceipt(id,orderId);
      });

      // Print div code

      function printDiv(elementId)
      {

        var divToPrint=document.getElementById(elementId);

        var newWin=window.open('','Print-Window');

        newWin.document.open();

        newWin.document.write(`<html>
          <link href='https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap' rel='stylesheet'>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


          <style>
            @media print {
              *{
                font-family: 'Quicksand', sans-serif;

              }

             td{
                border-bottom:1px solid black;
                border-collapse:collapse;
                text-align:center;
              }
              tfoot{
                border-bottom:1px solid black;
                font-weight: bold;
                font-color:red;
              }

              #reciptImage{
                     display:block;
                     margin-left: auto;
                     margin-right: auto;

                }
              #receiptAddress{
                     text-align:center;
                     display:block;

                     width:70%;
                     margin-left: auto;
                     margin-right: auto;

              }
              #receiptPhone{
                     text-align: center;

              }
              #receiptCustomerName{
                float:left;
                padding-left:10%;
                width:35%;
                margin-bottom:1%;


              }
              #receiptCustomerPhoneNo{
                float:left;
                padding-left:25%;
                width:25%;
                margin-bottom:1%;



              }
              #receiptDriverName{
                float:left;
                padding-left:10%;
                width:35%;



              }
              #receiptDriverPhoneNo{
                float:left;
                padding-left:25%;
                width:25%;

              }
              .mainbill{
                width:100%;
                margin-top:2%;
                border-bottom:2px solid black;

              }
              .bill{

                width:33.3%;

                padding:1%;
                border-bottom:2px black;
                border-bottom-style:double;
                border-top:2px black;
                border-top-style:double;

              }
              .wrapper{
                width:100%;
              }
              .wrapper:after{
                content:"";
                display:block;
                clear:both;
              }
              .extradiv{
                clear:both;
                width:100%;
                display:block;
                height:1px;
                border:1px solid black;
                margin-top:2%;
              }
              .extradiv1{
                clear:both;
                width:100%;
                display:block;
                height:1px;
                border:1px solid black;
                margin-top:2%;
              }
              .hr1{
                height:1px;
                border:1px solid black;
                margin-top:2%;
                margin-bottom:2%;
              }
              .qtystyle{
                border:2px solid black;
              }
              .foot{
                border-bottom:1px solid black;


              }
              .foot1{

              }


              tr{
                background-color:"red";
              }

            }
          </style>

        <body onload='window.print()'>${divToPrint.innerHTML}</body>
        </html>`);

        newWin.document.close();

        setTimeout(function(){newWin.close();},10);

      }

      //

      $(".btn-print-receipt").on('click',function(){
        printDiv('divToPrint');
      });


      $(".btn-show-products").on('click',function(){
        $(".products").removeClass('d-none');
        $(".orders").addClass('d-none');
        $('.selected-order-id').val($(this).val());
        $('.selected-customer-id').val($(this).attr('customerid'));
        $('.selected-order-id-string').val($(this).attr('order_id'));

      });


      $(".btn-subcategory").on('click',function(){
            $.ajax({
            url:"{{route('ordersShop.loadAllProductsAgainstCategory')}}",
            method:"POST",
            data:{"category_id":$(this).val()},
            success:function(data){
                console.log(data);
                $('.subcategory-container').html(data);
            },
            error:function(err){
              alert("erro");
                console.log(err);
            }
          });
      });

      $(".subcategory-container").delegate( "i", "click", function() {
           switch($(this).attr('btnfor'))
           {


               case "add":
                   let orderidForadd = $('.selected-order-id').val();
                   let orderidStringForadd = $('.selected-order-id-string').val();
                   let customeridForadd = $('.selected-customer-id').val();
                   let productidforadd = $(this).attr('productid');
                   let priceforadd = $(this).attr('price');
                    $.ajax({
                        url:"{{route('ordersShop.createManualReceipt')}}",
                        method:"POST",
                        data:{"order_id":orderidForadd,"customer_id":customeridForadd,"product_id":productidforadd,"price":priceforadd,"qty":1,"total":priceforadd,"purchased":1, "action":"add"},
                        success:function(data){
                            console.log(data);
                            loadReceipt(orderidForadd,orderidStringForadd);
                        },
                        error:function(err){
                          alert("erro");
                            console.log(err);
                        }
                      });

                   break;


               case "remove":
                    let orderidForRemove = $('.selected-order-id').val();
                    let orderidStringForRemove = $('.selected-order-id-string').val();
                    let customeridForRemove = $('.selected-customer-id').val();
                    let productidforremove = $(this).attr('productid');
                    let priceforremove = $(this).attr('price');
                    $.ajax({
                        url:"{{route('ordersShop.createManualReceipt')}}",
                        method:"POST",
                        data:{"order_id":orderidForRemove,"customer_id":customeridForRemove,"product_id":productidforremove,"price":priceforremove,"qty":1,"purchased":1,"action":"remove"},
                        success:function(data){
                           loadReceipt(orderidForRemove,orderidStringForRemove);
                        },
                        error:function(err){
                          alert("erro");
                            console.log(err);
                        }
                      });
                break;



           }
        });




  });



</script>

@endsection
