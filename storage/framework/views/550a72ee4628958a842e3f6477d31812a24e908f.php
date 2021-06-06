<?php $__env->startSection('title', 'Add New Shop Type'); ?>

<?php $__env->startSection('breadcrumb-title', 'ShopType'); ?>

<?php $__env->startSection('breadcrumb-item'); ?>
    <li class="breadcrumb-item">Create</li>
    <li class="breadcrumb-item active">ShopType</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('form-heading', 'Add New Shop Type'); ?>

<?php $__env->startSection('route', route('adminCategories.store')); ?>

<?php $__env->startSection('form-fields'); ?>
    <?php echo $__env->make('admin.category.fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('submit-text', 'Create'); ?>

<?php $__env->startSection('scripts'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pigstuhq/pureoproducts.pigslhub.com/resources/views/admin/category/create.blade.php ENDPATH**/ ?>