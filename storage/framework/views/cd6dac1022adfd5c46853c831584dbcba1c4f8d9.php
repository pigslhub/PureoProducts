<?php $__env->startSection('title', 'Edit Category'); ?>

<?php $__env->startSection('breadcrumb-title', 'Category'); ?>

<?php $__env->startSection('breadcrumb-item'); ?>
    <li class="breadcrumb-item">Edit</li>
    <li class="breadcrumb-item active">Category</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('form-heading', 'Edit Category'); ?>
<?php $__env->startSection('route', route('adminCategories.update', ['adminCategory' => $adminCategory->id])); ?>

<?php $__env->startSection('form-fields'); ?>
    <?php echo $__env->make('admin.category.fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo method_field('PUT'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('submit-text', 'Update'); ?>

<?php $__env->startSection('scripts'); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\shiza\Desktop\SirImran\PureoProducts\resources\views/admin/category/edit.blade.php ENDPATH**/ ?>