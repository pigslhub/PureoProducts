<?php if(Route::currentRouteName() == 'adminSubCategories.edit'): ?>
<?php $__env->startSection('title', 'Edit SubCategory'); ?>
<?php else: ?>
<?php $__env->startSection('title', 'Add New SubCategory'); ?>
<?php endif; ?>

<?php $__env->startSection('breadcrumb-title', 'SubCategory'); ?>

<?php $__env->startSection('breadcrumb-item'); ?>
    <li class="breadcrumb-item">Create</li>
    <li class="breadcrumb-item active">Sub Category</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body">
                    <?php if(Route::currentRouteName() == 'adminSubCategories.edit'): ?>
                    <form action="<?php echo e(route('adminSubCategories.update', ['adminSubCategory' => $adminSubCategory->id])); ?>" method="post" enctype="multipart/form-data">
                        <?php echo method_field('PUT'); ?>
                    <?php else: ?>
                        <form action="<?php echo e(route('adminSubCategories.store')); ?>" method="post" enctype="multipart/form-data">

                    <?php endif; ?>
                    <?php echo csrf_field(); ?>
                        <div class="form-row">
                        <input type="hidden" value="<?php echo e(isset($adminSubCategory) ? $adminSubCategory->category_id : $category_id); ?>" name="category_id">
                            <div class="col-md-6">
                                <label for="category_name" class="col-form-label"><?php echo e(__('Sub Category Name')); ?></label>
                                <input type="text" name="name" id="category_name" class="form-control"
                                value="<?php echo e(isset($adminSubCategory) ? $adminSubCategory->name : ''); ?>">
                            </div>

                            <div class="col-md-6">
                                <label for="icon" class="col-form-label"><?php echo e(__('Icon')); ?></label>
                                <input type="file" name="icon" id="icon" class="form-control"><br>
                                <?php if(isset($adminSubCategory)): ?>
                                    <?php if($adminSubCategory->icon == null || $adminSubCategory->icon == ''): ?>
                                    <img src="<?php echo e(asset('assets/images/noImg.jpg')); ?>" style="height:80px;width:80px;border-radius:50%">
                                    <?php else: ?>
                                    <img src="<?php echo e(asset('storage/'.$adminSubCategory->icon)); ?>" style="height:80px;width:80px;border-radius:50%">
                                    <?php endif; ?>


                                <?php endif; ?>
                            </div>
                        </div>
                        <?php if(Route::currentRouteName() == 'adminSubCategories.edit'): ?>
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
<?php if(Route::currentRouteName() == 'adminSubCategories.edit'): ?>
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
                                    <th scope="col">Sub Category</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <th scope="row"><?php echo e($loop->iteration); ?></th>
                                        <td><?php echo e($subcategory->name); ?></td>
                                        <td><?php echo e($subcategory->category->name); ?></td>
                                        <td>
                                            <?php if($subcategory->icon == null || $subcategory->icon == ''): ?>
                                                <img src="<?php echo e(asset('assets/images/noImg.jpg')); ?>" style="height:80px;width:80px;border-radius:50%">
                                                <?php else: ?>
                                                <img src="<?php echo e(asset('storage/'.$subcategory->icon)); ?>" style="height:80px;width:80px;border-radius:50%">
                                                <?php endif; ?>

                                        </td>
                                        <td>
                                            <button data-toggle="modal"
                                                    data-target="#confirm_subcategory_<?php echo e($subcategory->id); ?>"
                                                    class="btn btn-danger btn-sm mb-1 px-2" title="Delete Sub Category">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                            <?php echo $__env->make('includes.modals.confirm', ['model' => 'subcategory', 'route' => route('adminSubCategories.destroy', ['adminSubCategory' => $subcategory->id]), 'form' => true], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                            <a href="<?php echo e(route('adminSubCategories.edit', ['adminSubCategory' => $subcategory->id])); ?>"
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
</div>
<?php endif; ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pigstuhq/pureoproducts.pigslhub.com/resources/views/admin/subcategory/create.blade.php ENDPATH**/ ?>