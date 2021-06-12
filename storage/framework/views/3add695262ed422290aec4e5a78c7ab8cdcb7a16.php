<?php $__env->startSection('title', 'Earning'); ?>

<?php $__env->startSection('breadcrumb-title', 'Earning'); ?>

<?php $__env->startSection('breadcrumb-item'); ?>
    <li class="breadcrumb-item active">Earning</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-xl-6 col-lg-6">
                <div class="card o-hidden">
                    <div class="bg-primary b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="align-self-center text-center"><i class="fa fa-money"
                                                                          style="font-size: 30px"></i></div>
                            <div class="media-body"><span class="m-0">Total Earning</span>
                                <h4 class="mb-0 counter"><?php echo e($totalEarning); ?></h4><i class="icon-bg"
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
                                <h4 class="mb-0 counter"><?php echo e($totalProfit); ?></h4><i class="icon-bg"
                                                                                   data-feather="dollar-sign"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form method="post" action="<?php echo e(route('earnings.searchEarning')); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
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
                                <?php $__empty_1 = true; $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <?php
                                            $total_purchase_amount = 0

                                        ?>
                                        <td><?php echo e($order->id); ?></td>
                                        <td>
                                            <?php $__currentLoopData = $order->carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><span
                                                        class="badge badge-secondary"><?php echo e($cart->product->name); ?><span
                                                            class="badge badge-danger ml-1"><?php echo e($cart->qty); ?></span></span>
                                                </li><br>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </td>
                                        <td>
                                            <?php $__currentLoopData = $order->carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php
                                                    $total_purchase_amount += $cart->product->purchase_price * $cart->qty
                                                ?>
                                                <li><?php echo e($cart->product->purchase_price); ?> x <?php echo e($cart->qty); ?> </li><br>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </td>
                                        <td>
                                            <?php $__currentLoopData = $order->carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><?php echo e($cart->product->selling_price); ?> x <?php echo e($cart->qty); ?></li><br>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </td>
                                        <td><?php echo e($order->amount); ?></td>
                                        <td><?php echo e($order->discount); ?></td>
                                        <td>
                                            <?php echo e($order->amount - $order->discount - $total_purchase_amount); ?>

                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\shiza\Desktop\SirImran\PureoProducts\resources\views/admin/earning/viewEarning.blade.php ENDPATH**/ ?>