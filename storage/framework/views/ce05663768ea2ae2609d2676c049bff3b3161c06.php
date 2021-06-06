<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>
    <main>
        <div class="box-white grey-bg pt-50">
            <div class="container">
                <div class="box-white-inner">
                    <div class="row">
                        <div class="col-xl-12">

                            <!-- banner area start -->
                            <div class="banner__area pt-20" id="categories">
                                <div class="container custom-container">
                                    <div class="row" style="padding: 10px">
                                        <div class="col-xl-12">
                                            <div class="section__title-wrapper text-center mb-55">
                                                <div class="section__title mb-10">
                                                    <h2><?php echo e($category->name); ?></h2>
                                                </div>
                                            </div>
                                        </div>
                                        <?php $__empty_1 = true; $__currentLoopData = $category->subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <a href="<?php echo e(route('frontend.products', $subCategory)); ?>">
                                            <div class="col-xl-5 col-lg-5" style="margin-left: 60px; margin-bottom: 20px; background-color: #f5f5f5; height: 200px">
                                                <div class="banner__item-2 banner-right p-relative mt-30 pr-15">
                                                    <div class="banner__thumb fix">

                                                            <a href=<?php echo e(route('frontend.products', $subCategory)); ?> class="w-img"><img style="height:150px;width:150px;float:right" src="<?php echo e(asset('storage/'.$subCategory->icon)); ?>" alt="banner"></a>






                                                    </div>
                                                    <div class="banner__content-2 banner__content-4 p-absolute transition-3">

                                                        <h4><a href="<?php echo e(route('frontend.products', $subCategory)); ?>"><?php echo e($subCategory->name); ?></a></h4>
                                                        <a href="<?php echo e(route('frontend.products', $subCategory)); ?>" class="os-btn os-btn-2">View Products</a>
                                                    </div>
                                                </div>
                                            </div>
                                            </a>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <!-- banner area end -->











































                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pigstuhq/pureoproducts.pigslhub.com/resources/views/frontend/subcategory/subcategory.blade.php ENDPATH**/ ?>