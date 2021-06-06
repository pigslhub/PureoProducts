<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="endless admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
          content="admin template, endless admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="icon" href="<?php echo e(asset('assets/images/favicon.png')); ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo e(asset('assets/images/favicon.png')); ?>" type="image/x-icon">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/fontawesome.css')); ?>">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/icofont.css')); ?>">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/themify.css')); ?>">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/flag-icon.css')); ?>">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/feather-icon.css')); ?>">
    <?php echo $__env->yieldContent('styles'); ?>
<!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/bootstrap.css')); ?>">
    <!-- input phone with country flag -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/intlTelInput.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/data-tables.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/toastr.min.css')); ?>">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/style.css')); ?>">
    <link id="color" rel="stylesheet" href="<?php echo e(asset('assets/css/light-1.css')); ?>" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/responsive.css')); ?>">
</head>
<body main-theme-layout="main-theme-layout-1">

<!-- page-wrapper Start-->
<div class="page-wrapper">
    <!-- Page Body Start-->
<?php echo $__env->yieldContent('content'); ?>
<!-- Page Body End-->
</div>
<!-- page-wrapper End-->
<!-- latest jquery-->
<script src="<?php echo e(asset('assets/js/jquery-3.2.1.min.js')); ?>"></script>
<!-- Bootstrap js-->
<script src="<?php echo e(asset('assets/js/bootstrap/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/bootstrap/bootstrap.js')); ?>"></script>
<!-- feather icon js-->
<script src="<?php echo e(asset('assets/js/icons/feather-icon/feather.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/icons/feather-icon/feather-icon.js')); ?>"></script>
<!-- Sidebar jquery-->
<script src="<?php echo e(asset('assets/js/sidebar-menu.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/config.js')); ?>"></script>
<!-- Plugins JS Ends-->
<?php echo $__env->yieldContent('scripts'); ?>
<script src="<?php echo e(asset('assets/js/data-tables.js')); ?>"></script>
<!-- Theme js-->
<script src="<?php echo e(asset('assets/js/script.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/statesAjax.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/toastr.min.js')); ?>"></script>

<!-- Plugin used-->
<script src="<?php echo e(asset('assets/js/intlTelInput.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/intlTelInput-jquery.min.js')); ?>"></script>
<script>
    <?php ($notifications = array('error', 'success', 'warning', 'info')); ?>
    <?php $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if(Session::has($notification)): ?>
            <?php echo e("toastr." . $notification); ?><?php echo "('"; ?><?php echo e(Session::get($notification)); ?><?php echo "')"; ?>

        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</script>
<script>
    $(document).ready(function () {
        $('#phone').intlTelInput({
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/js/utils.js"
        });
        $(document).ready(function () {
            $('.data-table').DataTable();
        });

        $('.phone').intlTelInput({
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/js/utils.js"
        });
    });
</script>
</body>
</html><?php /**PATH C:\Users\shiza\Desktop\SirImran\PureoProducts\resources\views/layouts/auth.blade.php ENDPATH**/ ?>