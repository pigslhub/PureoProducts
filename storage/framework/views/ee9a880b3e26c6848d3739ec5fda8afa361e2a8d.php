<?php if(Route::currentRouteName() == 'adminProducts.edit'): ?>
    <?php $__env->startSection('title', 'Edit Product'); ?>
<?php else: ?>
    <?php $__env->startSection('title', 'Add New Product'); ?>
<?php endif; ?>

<?php $__env->startSection('breadcrumb-title', 'Product'); ?>

<?php $__env->startSection('breadcrumb-item'); ?>
    <li class="breadcrumb-item">Create</li>
    <li class="breadcrumb-item active">Product</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/tagsinput.css')); ?>">
<style>
    .bootstrap-tagsinput {
        width: 100% !important;
        }
    .bootstrap-tagsinput .tag {
        padding: 6px;
        margin-top:5px;
        }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body">
                    <?php if(Route::currentRouteName() == 'adminProducts.edit'): ?>
                    <form action="<?php echo e(route('adminProducts.update', ['adminProduct' => $adminProduct->id])); ?>" method="post" enctype="multipart/form-data">
                        <?php echo method_field('PUT'); ?>
                    <?php else: ?>
                        <form action="<?php echo e(route('adminProducts.store')); ?>" method="post" enctype="multipart/form-data">
                    <?php endif; ?>
                    <?php echo csrf_field(); ?>
                        <div class="form-row">
                        <input type="hidden" value="<?php echo e(isset($adminProduct) ? $adminProduct->sub_category_id : $sub_category_id); ?>" name="sub_category_id">
                            <div class="col-md-6">
                                <label for="name" class="col-form-label"><?php echo e(__('Product Name')); ?></label>
                                <input type="text" name="name" id="name" class="form-control"
                                value="<?php echo e(isset($adminProduct) ? $adminProduct->name : ''); ?>" autofocus>
                            </div>
                            <div class="col-md-6">
                                <label for="price" class="col-form-label"><?php echo e(__('Price')); ?></label>
                                <input type="text" name="price" id="product_name" class="form-control"
                                value="<?php echo e(isset($adminProduct) ? $adminProduct->price : ''); ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="wholesalePrice" class="col-form-label"><?php echo e(__('Wholesale Price')); ?></label>
                                <input type="text" name="wholesalePrice" id="product_name" class="form-control"
                                       value="<?php echo e(isset($adminProduct) ? $adminProduct->price : ''); ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="product_name" class="col-form-label"><?php echo e(__('Description')); ?></label>
                                <input type="text" name="description" id="product_name" class="form-control"
                                value="<?php echo e(isset($adminProduct) ? $adminProduct->description : ''); ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="product_name" class="col-form-label"><?php echo e(__('Volumes')); ?></label><br>
                                <input type="text" name="volumes" data-role="tagsinput" id="product_name"
                                value="<?php echo e(isset($adminProduct) ? $adminProduct->volumes : ''); ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="product_name" class="col-form-label"><?php echo e(__('Instructions')); ?></label><br>
                                <input type="text" name="instruction" data-role="tagsinput" id="product_name"
                                value="<?php echo e(isset($adminProduct) ? $adminProduct->instruction : ''); ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="product_name" class="col-form-label"><?php echo e(__('Ingredients')); ?></label><br>
                                <input type="text" name="ingredients" data-role="tagsinput" id="product_name"
                                value="<?php echo e(isset($adminProduct) ? $adminProduct->ingredients : ''); ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="product_name" class="col-form-label"><?php echo e(__('Available in stock')); ?></label>
                                <input type="text" name="in_stock" id="product_name" class="form-control"
                                value="<?php echo e(isset($adminProduct) ? $adminProduct->in_stock : ''); ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="icon" class="col-form-label"><?php echo e(__('Icon')); ?></label>
                                <input type="file" name="icon" id="icon" class="form-control"><br>

                            </div>
                        </div>
                        <?php if(Route::currentRouteName() == 'adminProducts.edit'): ?>
                        <button type="submit" class="btn btn-primary btn-sm">Update</button>
                        <?php else: ?>
                        <button type="submit" class="btn btn-primary btn-sm">Create</button>
                        <?php endif; ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php if(Route::currentRouteName() == 'adminProducts.edit'): ?>
<?php else: ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="col-md-12">
                                <table class="table data-table">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Product</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Sub Category</th>
                                        <th scope="col">In Stock</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Wholesale Price</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__empty_1 = true; $__currentLoopData = $adminProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $adminProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr>
                                            <th scope="row"><?php echo e($loop->iteration); ?></th>
                                            <td><?php echo e($adminProduct->name); ?></td>
                                            <td><?php echo e($adminProduct->subcategory == null ? "---" : $adminProduct->subcategory->category->name); ?></td>
                                            <td><?php echo e($adminProduct->subcategory == null ? "---" : $adminProduct->subcategory->name); ?></td>
                                            <td><?php echo e($adminProduct->in_stock); ?></td>
                                            <td><?php echo e($adminProduct->price); ?></td>
                                            <td><?php echo e($adminProduct->wholesalePrice); ?></td>
                                            <td>

                                                <?php if(strpos($adminProduct->icon,'100x75')): ?>
                                                    <img class="rounded-circle shadow-lg" src="<?php echo e($adminProduct->getIconPath()); ?>" >
                                                <?php elseif(strpos($adminProduct->icon,'100x100')): ?>
                                                    <img class="rounded-circle shadow-lg" src="<?php echo e($adminProduct->getIconPath('esm')); ?>" >
                                                <?php else: ?>
                                                    <img class="rounded-circle shadow-lg" src="<?php echo e($adminProduct->getIconPath('psm')); ?>" >
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <button data-toggle="modal"
                                                        data-target="#confirm_adminProduct_<?php echo e($adminProduct->id); ?>"
                                                        class="btn btn-danger btn-sm mb-1 px-2" title="Delete Product">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                                <?php echo $__env->make('includes.modals.confirm', ['model' => 'adminProduct', 'route' => route('adminProducts.destroy', ['adminProduct' => $adminProduct->id]), 'form' => true], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                                <a href="<?php echo e(route('adminProducts.edit', ['adminProduct' => $adminProduct->id])); ?>"
                                                   class="btn btn-primary btn-sm mb-1 px-2" title="Edit Product"><i
                                                        class="fa fa-pencil"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <?php endif; ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script src="<?php echo e(asset('assets/js/tagsinput.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\shiza\Desktop\SirImran\PureoProducts\resources\views/admin/product/create.blade.php ENDPATH**/ ?>