<!-- JS here -->
<script src="<?php echo e(asset('frontend/assets/js/vendor/modernizr-3.5.0.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/assets/js/vendor/jquery-3.5.1.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/assets/js/vendor/waypoints.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/assets/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/assets/js/metisMenu.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/assets/js/slick.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/assets/js/jquery.fancybox.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/assets/js/isotope.pkgd.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/assets/js/owl.carousel.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/assets/js/jquery-ui-slider-range.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/assets/js/ajax-form.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/assets/js/wow.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/assets/js/imagesloaded.pkgd.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/assets/js/main.js')); ?>"></script>

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>

<script src="<?php echo e(asset('assets/js/toastr.min.js')); ?>"></script>
<script>
<?php ($notifications = array('error', 'success', 'warning', 'info')); ?>
<?php $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if(Session::has($notification)): ?>
        <?php echo e("toastr." . $notification); ?><?php echo "('"; ?><?php echo e(Session::get($notification)); ?><?php echo "')"; ?>

    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</script>
<?php echo $__env->yieldContent('scripts'); ?>
<?php /**PATH /home/pigstuhq/pureoproducts.pigslhub.com/resources/views/frontend/includes/partials/scripts.blade.php ENDPATH**/ ?>