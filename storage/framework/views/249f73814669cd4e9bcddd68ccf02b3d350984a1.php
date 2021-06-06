<?php $__env->startSection('title', 'Checkout'); ?>

<?php $__env->startSection('content'); ?>
<main>
    <!-- page title area start -->
    <section class="page__title p-relative d-flex align-items-center" style="height: 350px" data-background="<?php echo e(asset('frontend/assets/img/page-title/page-title-1.jpg')); ?>">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__title-inner text-center">
                        <h1>Confirmation</h1>
                        <div class="page__title-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a>Order</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"> Confirmation</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php if( request()->get('sc_sid') ): ?>
        <?php echo e(_updateCustomerOrderData(request()->get('sc_sid'))); ?>

        <section class="checkout-area pb-70 mt-50">
        <div class="container">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                           <h1>Your order has been completed successfully.</h1>
                           <a href="<?php echo e(route('frontend.allOngoingOrders')); ?>" class="btn os-btn">View Your Orders</a>
                    </div>
                    <div class="col-md-2"></div>
                </div>

        </div>
    </section>
    <?php else: ?>
        <section class="checkout-area pb-70 mt-50">
        <div class="container">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                           <h1 class="text-danger">There is problem with your payment or you have cancelled the order completion.</h1>
                           <a href="<?php echo e(route('carts.index')); ?>" class="btn os-btn">Goto Cart</a>
                    </div>
                    <div class="col-md-2"></div>
                </div>

        </div>
    </section>
    <?php endif; ?>

</main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pigstuhq/pureoproducts.pigslhub.com/resources/views/frontend/cart/checkout.blade.php ENDPATH**/ ?>