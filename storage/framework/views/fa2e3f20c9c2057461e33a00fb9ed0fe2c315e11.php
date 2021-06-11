<?php $__env->startSection('title','Point Of Sale'); ?>
<?php $__env->startSection('styles'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/datatables.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title', 'Point of Sale'); ?>
<?php $__env->startSection('breadcrumb-item'); ?>
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item">Point of Sale</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
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
                                    <th scope="col">Category</th>
                                    <th scope="col">Sub Category</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">In Stock</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = _getAllProducts(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <form action="<?php echo e(route('carts.store')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <tr>
                                            <td><?php echo e($loop->iteration); ?></td>
                                            <td><?php echo e($product->sub_category->category->name); ?></td>
                                            <td><?php echo e($product->sub_category->name); ?></td>
                                            <td><?php echo e($product->name); ?></td>
                                            <td><?php echo e($product->price); ?></td>
                                            <?php if($product->in_stock <= 0): ?>
                                                <td>
                                                    <span class="badge badge-danger m-2">Out of stock</span>
                                                </td>
                                            <?php else: ?>
                                                <td id="stock"><?php echo e($product->in_stock); ?></td>
                                            <?php endif; ?>
                                            <td>
                                                <?php if($product->in_stock <= 0): ?>
                                                    <input type="text" name="qty" readonly class="form-control qty" id="qty"
                                                           placeholder="add qty">
                                                <?php else: ?>
                                                    <input type="text" name="qty" class="form-control qty" id="qty"
                                                           placeholder="add qty">
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if($product->in_stock <= 0): ?>
                                                    <button class="btn btn-sm btn-success disabled"><i
                                                            class="fa fa-shopping-cart"></i></button>
                                                <?php else: ?>
                                                    <button value="<?php echo e($product->id); ?>" title="Add to Cart"
                                                            class="btn-print btn btn-sm btn-success"><i
                                                            class="fa fa-shopping-cart"></i></button>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    </form>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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
                            
                            <div>
                                
                                
                            </div>
                        </div>
                        <hr class="hr1">
                            <h1 style="text-align: center">Insaf Gift Center</h1>
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




<?php $__env->stopSection(); ?>
<?php $__env->startSection("scripts"); ?>
    <script src="<?php echo e(asset('assets/js/datatable/datatables/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatables/datatable.custom.js')); ?>"></script>

    <script src="<?php echo e(asset('js/kit.fontAwesome.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/chat-menu.js')); ?>"></script>
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
                    url: "<?php echo e(route('orders.loadOrderReceipt')); ?>",
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
                    url: "<?php echo e(route('orders.loadOrderReceiptOnStartup')); ?>",
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
                    url: "<?php echo e(route('orders.completeOrderOnPrint')); ?>",
                    method: "POST",
                    success: function (data) {
                        location.reload()
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

            $('.btn-print').click(function () {
                let id = $(this).val();

                let stock = Number($(this).closest('tr').find('#stock').text());
                let quantity = Number($(this).closest('tr').find('.qty').val());
                // alert(quantity);

                if (stock < quantity) {
                    alert(`You have ${stock} items in your stock.`);
                    // alert("Please select within stock range");
                    $('.qty').val('');
                } else {
                    // alert("okay" + " " + stock + " " + quantity);
                    // alert(stock);
                    // alert(quantity);
                    loadReceipt(id, quantity);
                }
            });

            // Print div code

            function printDiv(elementId) {
                completeOrderOnPrint();
                var divToPrint = document.getElementById(elementId);

                var newWin = window.open('', 'Print-Window');

                newWin.document.open();

                newWin.document.write(`<html>
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


          <style>
            @media  print {
              *{
                font-family: 'Poppins', sans-serif;

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

            }
          </style>

        <body onload='window.print()'>${divToPrint.innerHTML}</body>
        </html>`);

                newWin.document.close();

                setTimeout(function () {
                    newWin.close();
                }, 10);

            }

            $(".btn-print-receipt").on('click', function () {
                printDiv('divToPrint');
            });

        });


    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pigstuhq/pureoproducts.pigslhub.com/resources/views/admin/dashboardPos.blade.php ENDPATH**/ ?>