<?php $__env->startSection('title', 'Category'); ?>

<?php $__env->startSection('breadcrumb-title', 'Category'); ?>

<?php $__env->startSection('breadcrumb-item'); ?>
    <li class="breadcrumb-item active">Category</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="pull-left">Categories List</h5>
                        <div class=" pull-right">
                            <a href="<?php echo e(route('adminCategories.create')); ?>" class="btn btn-primary btn-sm px-2" title=""><i
                                    class="fa fa-plus"></i> Add New Category</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table data-table">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Enter Category</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <th scope="row"><?php echo e($loop->iteration); ?></th>
                                        <td><?php echo e($category->name); ?></td>
                                        <td>
                                            <?php if($category->icon == null || $category->icon==''): ?>
                                                <img src="<?php echo e(asset('assets/images/noImg.jpg')); ?>" style="height:80px;width:80px;border-radius:50%">
                                                <?php else: ?>
                                                <img src="<?php echo e(asset('storage/'.$category->icon)); ?>" style="height:80px;width:80px;border-radius:50%">
                                                <?php endif; ?>
                                        </td>
                                        <td>
                                            <button data-toggle="modal"
                                                    data-target="#confirm_category_<?php echo e($category->id); ?>"
                                                    class="btn btn-danger btn-sm mb-1 px-2" title="Delete Category">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                            <?php echo $__env->make('includes.modals.confirm', ['model' => 'category', 'route' => route('adminCategories.destroy', ['adminCategory' => $category->id]), 'form' => true], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                            <a href="<?php echo e(route('adminCategories.edit', ['adminCategory' => $category->id])); ?>"
                                               class="btn btn-primary btn-sm mb-1 px-2" title="Edit Category"><i
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

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pigstuhq/pureoproducts.pigslhub.com/resources/views/admin/category/index.blade.php ENDPATH**/ ?>