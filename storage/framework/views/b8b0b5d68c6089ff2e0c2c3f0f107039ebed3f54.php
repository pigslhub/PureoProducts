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
                        <h5 class="pull-left">Products List</h5>
                        <div class=" pull-right">
                            <a href="<?php echo e(route('products.create')); ?>" class="btn btn-primary btn-sm px-2"><i
                                    class="fa fa-plus"></i> Add New Product</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table data-table">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Product Title</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <th scope="row"><?php echo e($loop->iteration); ?></th>
                                        <td><?php echo e($product->name); ?></td>
                                        <td>
                                            <?php if(strpos($product->icon,'100x75')): ?>
                                                <img class="rounded-circle shadow-lg" src="<?php echo e($product->getIconPath()); ?>" >
                                            <?php elseif(strpos($product->icon,'100x100')): ?>
                                                <img class="rounded-circle shadow-lg" src="<?php echo e($product->getIconPath('esm')); ?>" >
                                            <?php else: ?>
                                                <img class="rounded-circle shadow-lg" src="<?php echo e($product->getIconPath('psm')); ?>" >
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <button data-toggle="modal"
                                                    data-target="#confirm_product_<?php echo e($product->id); ?>"
                                                    class="btn btn-danger btn-sm mb-1 px-2" title="Delete Product">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                            <?php echo $__env->make('includes.modals.confirm', ['model' => 'product', 'route' => route('products.destroy', ['product' => $product->id]), 'form' => true], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                            <a href="<?php echo e(route('products.edit', ['product' => $product->id])); ?>"
                                               class="btn btn-primary btn-sm mb-1 px-2" title="Edit Product"><i
                                                    class="fa fa-pencil"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\shiza\Desktop\SirImran\PureoProducts\resources\views/admin/newproduct/viewEarning.blade.php ENDPATH**/ ?>
