<?php $__env->startSection('title', 'Products'); ?>

<?php $__env->startSection('content'); ?>
<main>

    <!-- page title area start -->
    <section style="height: 350px" class="page__title p-relative d-flex align-items-center" data-background="<?php echo e(asset('frontend/assets/img/page-title/page-title-1.jpg')); ?>">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__title-inner text-center">
                        <h1>Products</h1>
                        <div class="page__title-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="<?php echo e(route('frontend.dashboard')); ?>">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"> Products</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page title area end -->

    <!-- shop area start -->
    <section class="shop__area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-4">
                    <div class="shop__sidebar">
                        <div class="sidebar__widget mb-55">
                            <div class="sidebar__widget-title mb-25">
                                <h3>Product Categories</h3>
                            </div>
                            <div class="sidebar__widget-content">
                                <div class="categories">
                                    <div id="accordion">
                                        <?php $__empty_1 = true; $__currentLoopData = _getAllCategories(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <div class="card">
                                            <div class="card-header white-bg" id="accessories">
                                                <h5 class="mb-0">
                                                    <button class="shop-accordion-btn" data-toggle="collapse" data-target="#collapseAccessories<?php echo e($loop->iteration); ?>" aria-expanded="true" aria-controls="collapseAccessories">
                                                        <?php echo e($category->name); ?>

                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="collapseAccessories<?php echo e($loop->iteration); ?>" class="collapse" aria-labelledby="accessories" data-parent="#accordion">
                                                <div class="card-body">
                                                    <div class="categories__list">
                                                        <ul>
                                                            <?php $__empty_2 = true; $__currentLoopData = $category->subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?>
                                                                <li><a href="<?php echo e(route('frontend.products', $subcategory)); ?>"><?php echo e($subcategory->name); ?></a></li>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_2): ?>
                                                            <?php endif; ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar__widget mb-55">
                            <div class="sidebar__widget-title mb-30">
                                <h3>Volume</h3>
                            </div>
                            <div class="sidebar__widget-content">
                                <div class="size">
                                    <ul>
                                        <li><a href="#">2oz</a></li>
                                        <li><a href="#">4oz</a></li>
                                        <li><a href="#">8oz</a></li>
                                        <li><a href="#">16oz</a></li>
                                        <li><a href="#">32oz</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-8">
                    <div class="shop__content-area">
                        <div class="shop__header d-sm-flex justify-content-between align-items-center mb-40">
                            <div class="shop__header-left">
                                <div class="show-text">
                                    <span>Showing <?php echo e($subCategory->products->count()); ?> results</span>
                                </div>
                            </div>
                            <div class="shop__header-right d-flex align-items-center justify-content-between justify-content-sm-end">
                                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-grid-tab" data-toggle="pill" href="#pills-grid" role="tab" aria-controls="pills-grid" aria-selected="true"><i class="fas fa-th"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-grid" role="tabpanel" aria-labelledby="pills-grid-tab">
                                <div class="row custom-row-10">
                                    <?php if( $subCategory->products->count() == '0' ): ?>
                                    <div class="text-center">
                                        <h4 style="margin-left: 10px"> No Products Found </h4>
                                    </div>
                                    <?php else: ?>
                                    <?php $__empty_1 = true; $__currentLoopData = $subCategory->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 custom-col-10">
                                        <div class="product__wrapper mb-60">
                                            <div class="product__thumb">
                                                <a href="<?php echo e(route('frontend.productDetails', $product)); ?>" class="w-img">
                                                    <?php if(strpos($product->icon,'100x75')): ?>
                                                    <img src="<?php echo e($product->getIconPath('md')); ?>" style="height: 350px" alt="product-img">
                                                    <img class="product__thumb-2" src="<?php echo e($product->getIconPath('md')); ?>" style="height: 350px" alt="product-img">
                                                    <?php elseif(strpos($product->icon,'50x75')): ?>
                                                    <img src="<?php echo e($product->getIconPath('pmd')); ?>" style="height: 350px" alt="product-img">
                                                    <img class="product__thumb-2" src="<?php echo e($product->getIconPath('pmd')); ?>" style="height: 350px" alt="product-img">
                                                    <?php else: ?>
                                                    <img src="<?php echo e($product->getIconPath('emd')); ?>" style="height: 350px" alt="product-img">
                                                    <img class="product__thumb-2" src="<?php echo e($product->getIconPath('emd')); ?>" style="height: 350px" alt="product-img">
                                                    <?php endif; ?>
                                                </a>
                                                <div class="product__action transition-3">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                        <i class="fal fa-heart"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Compare">
                                                        <i class="fal fa-sliders-h"></i>
                                                    </a>
                                                    <!-- Button trigger modal -->
                                                    <a href="#" data-toggle="modal" data-target="#productModalId">
                                                        <i class="fal fa-search"></i>
                                                    </a>

                                                </div>




                                            </div>
                                            <div class="product__content p-relative">
                                                <div class="product__content-inner">
                                                    <h4><a href="<?php echo e(route('frontend.productDetails', $product)); ?>"><?php echo e($product->name); ?></a></h4>
                                                    <div class="product__price transition-3">
                                                        <span>$<?php echo e($product->price); ?></span>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <?php endif; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-40">
                            <div class="col-xl-12">
                                <div class="shop-pagination-wrapper d-md-flex justify-content-between align-items-center">











                                    <div class="shop__header-left">
                                        <div class="show-text bottom">
                                            <span>Showing <?php echo e($subCategory->products->count()); ?> results</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- shop area end -->
</main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pigstuhq/pureoproducts.pigslhub.com/resources/views/frontend/products/products.blade.php ENDPATH**/ ?>