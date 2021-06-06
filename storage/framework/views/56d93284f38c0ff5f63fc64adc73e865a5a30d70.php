<!-- header area start -->
<header>
    <div id="header-sticky" class="header__area grey-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                    <div class="logo">
                        <a href="<?php echo e(route('frontend.dashboard')); ?>">
                            <img src="<?php echo e(asset('frontend/assets/img/logo/logo.png')); ?>" style="height: 80px" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8">
                    <div class="header__right p-relative d-flex justify-content-between align-items-center">
                        <div class="main-menu d-none d-lg-block">
                            <nav>
                                <ul id="mobile-menu-active">
                                    <?php if(Route::currentRouteName() == 'frontend.dashboard'): ?>
                                        <li class="active"><a href="<?php echo e(route('frontend.dashboard')); ?>">Home</a></li>
                                        <li><a href="#categories">Categories</a></li>
                                        <li class="has-dropdown"><a href="">Products</a>
                                            <ul class="submenu transition-3">
                                                <?php $__empty_1 = true; $__currentLoopData = _getAllCategories(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                    <li><a href="<?php echo e(route('frontend.subcategories', $category)); ?>"><?php echo e($category->name); ?></a></li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                <?php endif; ?>
                                            </ul>
                                        </li>
                                    <?php else: ?>
                                        <li class="active"><a href="<?php echo e(route('frontend.dashboard')); ?>">Home</a></li>
                                        <li class="has-dropdown"><a href="">Products</a>
                                            <ul class="submenu transition-3">
                                                <?php $__empty_1 = true; $__currentLoopData = _getAllCategories(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                    <li><a href="<?php echo e(route('frontend.subcategories', $category)); ?>"><?php echo e($category->name); ?></a></li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                <?php endif; ?>
                                            </ul>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            </nav>
                        </div>
                        <div class="mobile-menu-btn d-lg-none">
                            <a href="javascript:void(0);" class="mobile-menu-toggle"><i class="fas fa-bars"></i></a>
                        </div>
                        <div class="header__action">
                            <ul>
                                <?php if(auth()->guard('customer')->guest()): ?>
                                    <li><a href="<?php echo e(route('customer.login')); ?>" class="cart"><i class="ion-person"></i> Sign In </a></li>
                                <?php else: ?>
                                <li><a href="javascript:void(0);" class="cart"><i class="ion-bag"></i> Cart <span>( <?php echo e(_getCartsCount()); ?> )</span></a>
                                    <ul class="mini-cart">
                                        <?php $__empty_1 = true; $__currentLoopData = _getCustomerCart(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <li>
                                            <div class="cart-img f-left">
                                                <a href="#">
                                                    <?php if(strpos($cart->product->icon,'100x75')): ?>
                                                    <img src="<?php echo e($cart->product->getIconPath('md')); ?>" style="width:100px;height: 80px;" alt="product-img">
                                                    <?php elseif(strpos($cart->product->icon,'50x75')): ?>
                                                        <img src="<?php echo e($cart->product->getIconPath('pmd')); ?>" style="width:60px ;height: 95px" alt="product-img">
                                                    <?php else: ?>
                                                        <img src="<?php echo e($cart->product->getIconPath('emd')); ?>" style="width:100px; height: 100px" alt="product-img">
                                                    <?php endif; ?>

                                                </a>
                                            </div>
                                            <div class="cart-content f-left text-left">
                                                <h5>
                                                    <a href="#"><?php echo e($cart->product->name); ?> </a>
                                                </h5>
                                                <div class="cart-price">
                                                    <span class="ammount"><?php echo e($cart->qty); ?> <i class="fal fa-times"></i></span>
                                                    <span class="price">$<?php echo e($cart->product->price); ?></span><br>
                                                    <span class="price"><b>Total : $<?php echo e($cart->qty * $cart->product->price); ?></b></span>
                                                </div>
                                            </div>
                                        </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            <li>Nothing in cart</li>
                                        <?php endif; ?>
                                        <li>
                                            <div class="total-price">
                                                <span class="f-left">Subtotal:</span>
                                                <span class="f-right">$<?php echo e(_getCustomerCartTotalAmount()); ?></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkout-link">
                                                <a href="<?php echo e(route('carts.index')); ?>" class="os-btn">View Cart</a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0);" class="cart"><i class="ion-person"></i> <?php echo e(auth('customer')->user()->name); ?> </a>
                                    <ul class="mini-cart">
                                        <li>
                                            <div>
                                                <a href="<?php echo e(route('customer.updateProfileForm')); ?>">
                                                    <i class="ion-person" style="color: black; margin-left: 5px"></i> <span style="color: black"> My Profile</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <a href="<?php echo e(route('frontend.allOngoingOrders')); ?>">
                                                    <i class="ion-bag" style="color: black; margin-left: 5px"></i> <span style="color: black"> My Ongoing Orders</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <a href="<?php echo e(route('frontend.allCompletedOrders')); ?>">
                                                    <i class="ion-bag" style="color: black; margin-left: 5px"></i> <span style="color: black"> My Completed Orders</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <a href="<?php echo e(route('customer.logout')); ?>"
                                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                    <i class="ion-power" style="color: black; margin-left: 5px"></i> <span style="color: black"> Logout</span></a>
                                                <form id="logout-form" action="<?php echo e(route('customer.logout')); ?>" method="POST"
                                                      style="display: none;">
                                                    <?php echo csrf_field(); ?>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header area end -->
<?php /**PATH /home/pigstuhq/pureoproducts.pigslhub.com/resources/views/frontend/includes/partials/header.blade.php ENDPATH**/ ?>