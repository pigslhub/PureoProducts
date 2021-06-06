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
                                    <th scope="col">Amount</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $onGoingOrders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orders): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($orders->order_id); ?></td>
                                        <td><?php echo e($orders->customer ==null ? '---': $orders->customer->name); ?></td>
                                        <td><?php echo e($orders->amount); ?></td>
                                        <td>
                                                <?php if($orders->conversation != null): ?>
                                                    <a href="<?php echo e(route('orders.showAllChats', ['conversation' => $orders->conversation->id])); ?>" title="Chat" class="btn btn-xs btn-success"><i class="fa fa-comment"></i></a>
                                                <?php endif; ?>
                                                <a href="<?php echo e(route('orders.onGoingToReady', ['order' => $orders->id])); ?>" title="Mark Order As Ready" class="btn btn-xs btn-info"><i class="fa fa-spinner"></i></a>
                                                    <a href="<?php echo e(route('orders.onGoingToCancel', ['order' => $orders->id])); ?>" title="Cancel Order" class="btn btn-xs btn-danger"><i class="fa fa-times-circle"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Shipped Orders</h4>
                    </div>
                    <div class="card-body">  
                        <div class="table-responsive">
                            <table class="display" id="basic-2">
                                <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Order ID</th>
                                    <th scope="col">Customer Name</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $shippedOrder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orders): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($orders->order_id); ?></td>
                                        <td><?php echo e($orders->customer ==null ? '---': $orders->customer->name); ?></td>
                                        <td><?php echo e($orders->amount); ?></td>
                                        <td>
                                            <?php if($orders->conversation != null): ?>
                                            <a href="<?php echo e(route('orders.showAllChats', ['conversation' => $orders->conversation->id])); ?>" title="Chat" class="btn btn-xs btn-success"><i class="fa fa-comment"></i></a>
                                            <?php endif; ?>
                                            <a href="<?php echo e(route('orders.readyToComplete', ['order' => $orders->id])); ?>" title="Mark Order As Complete" class="btn btn-xs btn-info"><i class="fa fa-check-circle"></i></a>
                                        </td>
                                    </tr>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                                    <th scope="col">Amount</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $completeOrders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orders): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($orders->order_id); ?></td>
                                        <td><?php echo e($orders->customer ==null ? '---': $orders->customer->name); ?></td>
                                        <td><?php echo e($orders->amount); ?></td>
                                        <td>
                                            <?php if($orders->conversation != null): ?>
                                            <a href="<?php echo e(route('orders.showAllChats', ['conversation' => $orders->conversation->id])); ?>" class="btn btn-xs btn-success"><i class="fa fa-comment"></i></a>
                                            <?php else: ?>
                                            <p>N/A</p>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                                    <th scope="col">Amount</th>
                                   </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $cancelOrders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orders): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($orders->order_id); ?></td>
                                        <td><?php echo e($orders->customer ==null ? '---': $orders->customer->name); ?></td>
                                        <td><?php echo e($orders->amount); ?></td>
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