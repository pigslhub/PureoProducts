<?php $__env->startSection('title', 'Product'); ?>

<?php $__env->startSection('breadcrumb-title', 'Product'); ?>

<?php $__env->startSection('breadcrumb-item'); ?>
    <li class="breadcrumb-item active">Product</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-xl-6 col-lg-6">
                <div class="card o-hidden">
                    <div class="bg-primary b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="align-self-center text-center"><i class="fa fa-cubes" style="font-size: 30px"></i></div>
                            <div class="media-body"><span class="m-0">Total Products</span>
                                <h4 class="mb-0 counter"><?php echo e($productsCount); ?></h4><i class="icon-bg" data-feather="package"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-6 col-lg-6">
                <div class="card o-hidden">
                    <div class="bg-primary b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="align-self-center text-center"><i class="fa fa-money" style="font-size: 30px"></i></div>
                            <div class="media-body"><span class="m-0">Total Purchase</span>
                                <h4 class="mb-0 counter"><?php echo e(20); ?></h4><i class="icon-bg" data-feather="dollar-sign"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\shiza\Desktop\SirImran\PureoProducts\resources\views/admin/newproduct/index.blade.php ENDPATH**/ ?>