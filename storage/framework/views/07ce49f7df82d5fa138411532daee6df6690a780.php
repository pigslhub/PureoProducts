<?php $__env->startSection('title', 'Your Cart'); ?>
<?php $__env->startSection('content'); ?>
<main>
    <!-- page title area start -->

    <section class="page__title p-relative d-flex align-items-center" style="height: 350px" data-background="<?php echo e(asset('frontend/assets/img/page-title/page-title-1.jpg')); ?>">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__title-inner text-center">
                        <h1>Your Ongoing Orders Cart</h1>
                        <div class="page__title-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"> Ongoing Carts</li>
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
                                <th class="product-thumbnail">Images</th>
                                <th class="cart-product-name">Product</th>
                                <th class="product-price">Unit Price</th>
                                <th class="product-quantity">Quantity</th>
                                <th class="product-subtotal">Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $order->carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td class="product-thumbnail">
                                    <a href="#">
                                        <?php if(strpos($cart->product->icon,'100x75')): ?>
                                            <img src="<?php echo e($cart->product->getIconPath('md')); ?>" style="width:150px;height: 120px;" alt="product-img">
                                        <?php elseif(strpos($cart->product->icon,'50x75')): ?>
                                            <img src="<?php echo e($cart->product->getIconPath('pmd')); ?>" style="width:100px ;height: 150px" alt="product-img">
                                        <?php else: ?>
                                            <img src="<?php echo e($cart->product->getIconPath('emd')); ?>" style="width:200px; height: 200px" alt="product-img">
                                        <?php endif; ?>
                                    </a>
                                </td>
                                <td class="product-name"><a href="#"><?php echo e($cart->product->name); ?></a></td>
                                <td class="product-price"><span class="amount"><?php echo e($cart->product->price); ?></span></td>
                                <td class="product-quantity"><span class="amount"><?php echo e($cart->qty); ?></span></td>
                                <td class="product-subtotal"><span class="amount"><?php echo e($cart->total); ?></span></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                   <td colspan="5">No Items found in your cart</td>
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

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pigstuhq/pureoproducts.pigslhub.com/resources/views/frontend/orders/singleOngoingOrderCarts.blade.php ENDPATH**/ ?>