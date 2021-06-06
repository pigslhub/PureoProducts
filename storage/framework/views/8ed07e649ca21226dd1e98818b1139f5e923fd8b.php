<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="endless admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, endless admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="<?php echo e(asset('assets/images/favicon.png')); ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo e(asset('assets/images/favicon.png')); ?>" type="image/x-icon">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <?php echo $__env->make('errors.layouts.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </head>
  <body main-theme-layout="main-theme-layout-1">
    <!-- page-wrapper Start-->
    <div class="page-wrapper">
      <?php echo $__env->yieldContent('content'); ?>
    </div>
    <!-- page-wrapper End-->
    <?php echo $__env->make('errors.layouts.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
</html>
<?php /**PATH C:\Users\shiza\Desktop\SirImran\PureoProducts\resources\views/errors/layouts/master.blade.php ENDPATH**/ ?>