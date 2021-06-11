<?php $__env->startSection('title', 'SubCategory'); ?>

<?php $__env->startSection('breadcrumb-title', 'SubCategory'); ?>

<?php $__env->startSection('breadcrumb-item'); ?>
    <li class="breadcrumb-item active">Sub Category</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="pull-left">Sub Categories List</h5>
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
                                            <div class="user-card-image">
                                                <?php if($category->icon == null || $category->icon==''): ?>
                                                <img src="<?php echo e(asset('assets/images/noImg.jpg')); ?>" style="height:80px;width:80px;border-radius:50%">
                                                <?php else: ?>
                                                <img src="<?php echo e(asset('storage/'.$category->icon)); ?>" style="height:80px;width:80px;border-radius:50%">
                                                <?php endif; ?>
                                            </div>
                                            <div class="user-deatils text-center">
                                            <h5><?php echo e($category->name); ?></h5>
                                            <a href="<?php echo e(route('subcategory.createField',$category->id)); ?>" class="btn btn-sm btn-primary" type="button">View</a>
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

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\shiza\Desktop\SirImran\PureoProducts\resources\views/admin/subcategory/viewEarning.blade.php ENDPATH**/ ?>
