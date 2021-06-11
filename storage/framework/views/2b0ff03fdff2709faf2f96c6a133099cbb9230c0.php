<?php $__env->startSection('title', 'Orders'); ?>
<?php $__env->startSection('styles'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/datatables.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title', 'Orders'); ?>

<?php $__env->startSection('breadcrumb-item'); ?>
    <li class="breadcrumb-item active">Start Kit</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
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

                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td>

                                        <?php $__currentLoopData = $order->carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($cart->product != '' || $cart->product != null): ?>
                                                <li><span class="badge badge-secondary"><?php echo e($cart->product->name); ?><span class="badge badge-danger ml-1"><?php echo e($cart->qty); ?></span></span></li>
                                            <?php else: ?>
                                                N/A
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </td>
                                        <td><p class="badge badge-secondary p-2"><?php echo e($order->amount); ?></p></td>
                                        <td><p class="badge badge-secondary p-2"><?php echo e($order->discount); ?></p></td>
                                        <td><p class="badge badge-secondary p-2"><?php echo e($order->amount - $order->discount); ?></p></td>
                                        <?php if($order->status == 1): ?>
                                            <td><span class="badge badge-success p-2">Completed</span></td>
                                        <?php else: ?>
                                            <td><span class="badge badge-danger p-2">Pending</span></td>
                                        <?php endif; ?>







                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\shiza\Desktop\SirImran\PureoProducts\resources\views/admin/orders/index.blade.php ENDPATH**/ ?>