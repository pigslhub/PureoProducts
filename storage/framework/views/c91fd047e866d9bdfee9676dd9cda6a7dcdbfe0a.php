<?php $__env->startSection('title', 'Your Orders'); ?>
<?php $__env->startSection('content'); ?>
<main>
    <!-- page title area start -->

    <section class="page__title p-relative d-flex align-items-center" style="height: 350px" data-background="<?php echo e(asset('frontend/assets/img/page-title/page-title-1.jpg')); ?>">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__title-inner text-center">
                        <h1>Your Completed Orders</h1>
                        <div class="page__title-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"> Completed Orders</li>
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
                            <?php $__empty_1 = true; $__currentLoopData = _customerCompletedOrders(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td class="product-name"><a href="#"><?php echo e($order->order_id); ?></a></td>
                                <td class="product-price"><span class="amount"><?php echo e($order->customer->name); ?></span></td>
                                <td class="product-quantity"><span class="amount"><?php echo e($order->amount); ?></span></td>
                                <td class="product-subtotal"><span class="amount"><?php echo e($order->status); ?></span></td>
                                <td class="product-subtotal"><a href="<?php echo e(route('frontend.allCompletedOrderCarts', $order)); ?>" class="btn os-btn">View</a></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                   <td colspan="5">No Orders Found</td>
                                </tr>
                            <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Cart Area End-->
</main>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pigstuhq/pureoproducts.pigslhub.com/resources/views/frontend/orders/allCompletedOrders.blade.php ENDPATH**/ ?>