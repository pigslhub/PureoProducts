<!doctype html>
<html lang="en">
<head>
    <title><?php echo $__env->yieldContent('title'); ?> | PureONaturalProducts</title>
    <?php echo $__env->make('frontend.includes.partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('frontend.includes.partials.styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <style>
        html {
        scroll-behavior:smooth
        }
    </style>
</head>
<body>
    <?php echo $__env->make('frontend.includes.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- prealoder area start -->
<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object" id="first_object"></div>
            <div class="object" id="second_object"></div>
            <div class="object" id="third_object"></div>
        </div>
    </div>
</div>
<!-- prealoder area end -->

<!-- scroll up area start -->
<div class="scroll-up" id="scroll" style="display: none;">
    <a href="javascript:void(0);"><i class="fas fa-level-up-alt"></i></a>
</div>
<!-- scroll up area end -->

<!-- search area start -->
<section class="header__search white-bg transition-3">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="header__search-inner text-center">
                    <form action="#">
                        <div class="header__search-btn">
                            <a href="javascript:void(0);" class="header__search-btn-close"><i class="fal fa-times"></i></a>
                        </div>
                        <div class="header__search-header">
                            <h3>Search</h3>
                        </div>
                        <div class="header__search-categories">
                            <ul class="search-category">
                                <li><a href="#">All Categories</a></li>
                                <li><a href="#">Accessories</a></li>
                                <li><a href="#">Chair</a></li>
                                <li><a href="#">Tablet</a></li>
                                <li><a href="#">Men</a></li>
                                <li><a href="#">Women</a></li>

                            </ul>
                        </div>
                        <div class="header__search-input p-relative">
                            <input type="text" placeholder="Search for products... ">
                            <button type="submit"><i class="far fa-search"></i></button>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</section>
<div class="body-overlay transition-3"></div>
<!-- search area end -->

<!-- extra info area start -->
<section class="extra__info transition-3">
    <div class="extra__info-inner">
        <div class="extra__info-close text-right">
            <a href="javascript:void(0);" class="extra__info-close-btn"><i class="fal fa-times"></i></a>
        </div>
        <!-- side-mobile-menu start -->
        <nav class="side-mobile-menu d-block d-lg-none">
            <?php if(auth()->guard('customer')->guest()): ?>
            <ul id="mobile-menu-active">
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="#">Categories</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Login</a></li>
            </ul>
            <?php else: ?>
            <h3>hello<?php echo e(auth('customer')->user()->name); ?></h3>
            <ul id="mobile-menu-active">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Categories</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
            <?php endif; ?>

        </nav>
        <!-- side-mobile-menu end -->
    </div>
</section>
<div class="body-overlay transition-3"></div>
<!-- extra info area end -->

    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('frontend.includes.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
<?php echo $__env->make('frontend.includes.partials.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</html>
<?php /**PATH C:\Users\shiza\Desktop\SirImran\PureoProducts\resources\views/frontend/layouts/master.blade.php ENDPATH**/ ?>