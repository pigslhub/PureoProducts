<?php $__env->startSection('title', 'Product'); ?>

<?php $__env->startSection('breadcrumb-title', 'Product'); ?>

<?php $__env->startSection('breadcrumb-item'); ?>
    <li class="breadcrumb-item active">Product</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="pull-left">Categories List</h5>
                        <div class=" pull-right">
                            
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="row">
                            <?php $__empty_1 = true; $__currentLoopData = _getAllShopCategories(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <div class="col-md-4">
                                        <div class="card user-card">
                                        <div class="card-body">
                                            <div class="online-user">

                                            </div>
                                            <div class="user-card-image"><img class="img rounded-circle image-radius" src="<?php echo e(asset('storage/'.$category->icon)); ?>" width="100" height="100" ></div>
                                            <div class="user-deatils text-center">
                                            <h5><?php echo e($category->name); ?></h5>

                                            <a href="<?php echo e(route('product.showCategories',$category->id)); ?>" class="btn btn-sm btn-primary" type="button">View Categories</a>



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
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\shiza\Desktop\SirImran\PureoProducts\resources\views/admin/product/index.blade.php ENDPATH**/ ?>