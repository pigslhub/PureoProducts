<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>
<main>
    <div class="box-white grey-bg pt-50">
        <div class="container">
            <div class="box-white-inner">
                <div class="row">
                    <div class="col-xl-12">
                        <!-- slider area start -->
                        <section class="slider__area slider__area-4 p-relative">
                            <div class="slider-active">
                                <div class="single-slider single-slider-2 slider__height-4 d-flex align-items-center" style="background-color: #f5f5f5">
                                    <div class="container">
                                        <div class="row">
                                            <div class=" d-sm-none d-md-block col-md-7 col-sm-12 col-12">
                                                <div class="slider__content slider__content-4">
                                                    <h4 style="margin-top: 70px" data-animation="fadeInUp" data-delay=".2s"> Hair Solution<br></h4>
                                                    <h2 data-animation="fadeInUp" data-delay=".2s">ARGAN OIL CONDITIONER</h2>
                                                    <p data-animation="fadeInUp" data-delay=".4s">It is packed with Organicals AHA Complex that improves the penetration of the cationic polymers and other ingredients while giving your hair the botanical benefits it greatly desires.  </p>
                                                    <a href="#" class="os-btn os-btn-2" data-animation="fadeInUp" data-delay=".6s"><i style="font-size: 24px" class="ion-social-apple"></i></a>
                                                    <a href="#" class="os-btn os-btn-2" data-animation="fadeInUp" data-delay=".6s"><i style="font-size: 24px" class="ion-social-android"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-sm-12 col-12">
                                                <div class="slider__content slider__content-4">
                                                    <img src="<?php echo e(asset('frontend/assets/img/conditioner4oz.png')); ?>" style="height: 450px" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slider single-slider-2 slider__height-4 d-flex align-items-center" style="background-color: #f5f5f5">
                                    <div class="container">
                                        <div class="row">
                                            <div class="d-sm-none d-md-block col-md-7 col-sm-12 col-12">
                                                <div class="slider__content slider__content-4">
                                                    <h4 style="margin-top: 20px" data-animation="fadeInUp" data-delay=".2s">Men's Collection<br></h4>
                                                    <h2 data-animation="fadeInUp" data-delay=".2s">GROOMING SHAVING CREAM</h2>
                                                    <p data-animation="fadeInUp" data-delay=".4s">It’s a shaving cream designed to nurture the skin, while still providing a good shave, but a much more comfortable shave, leaving the skin soft, smooth, and protected. </p>
                                                    <a href="#" class="os-btn os-btn-2" data-animation="fadeInUp" data-delay=".6s"><i style="font-size: 24px" class="ion-social-apple"></i></a>
                                                    <a href="#" class="os-btn os-btn-2" data-animation="fadeInUp" data-delay=".6s"><i style="font-size: 24px" class="ion-social-android"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-sm-12 col-12">
                                                <div class="slider__content slider__content-4">
                                                    <img src="<?php echo e(asset('frontend/assets/img/grooming_shaving_cream_8_oz.png')); ?>" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slider single-slider-2 slider__height-4 d-flex align-items-center" style="background-color: #f5f5f5">
                                    <div class="container">
                                        <div class="row">
                                            <div class="d-sm-none d-lg-block col-md-7 col-sm-12 col-12">
                                                <div class="slider__content slider__content-4">
                                                    <h4 style="margin-top: 50px" data-animation="fadeInUp" data-delay=".2s">Skincare<br></h4>
                                                    <h2 data-animation="fadeInUp" data-delay=".2s">OXYGENATION PLUS CLEANSER</h2>
                                                    <p data-animation="fadeInUp" data-delay=".4s">This cleanser is a natural face wash that you’ll reach for time and time again. Formulated to address the issues of combination oily skin (T-Zone) and congested skin with the best that nature has to offer.  </p>
                                                    <a href="#" class="os-btn os-btn-2" data-animation="fadeInUp" data-delay=".6s"><i style="font-size: 24px" class="ion-social-apple"></i></a>
                                                    <a href="#" class="os-btn os-btn-2" data-animation="fadeInUp" data-delay=".6s"><i style="font-size: 24px" class="ion-social-android"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-sm-12 col-12">
                                                <div class="slider__content slider__content-4">
                                                    <img src="<?php echo e(asset('frontend/assets/img/3D.png')); ?>" style="height: 400px" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- slider area end -->

                            <!-- banner area start -->
                            <div class="banner__area pt-20" id="categories">
                                <div class="container custom-container">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="section__title-wrapper text-center mb-55">
                                                <div class="section__title mb-10">
                                                    <h2>Trending Categories</h2>
                                                </div>
                                            </div>
                                        </div>
                                        <?php $__empty_1 = true; $__currentLoopData = _getAllCategories(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <a href="<?php echo e(route('frontend.subcategories', $category)); ?>">
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                <div class="banner__item mb-30 p-relative" style="background-color:#f5f5f5">
                                                    <div class="banner__thumb fix">
                                                        <?php if(strpos($category->icon,'100x75')): ?>
                                                            <a href=<?php echo e(route('frontend.subcategories', $category)); ?> class="w-img"><img style="height:150px;width:150px;float:right" src="<?php echo e($category->getIconPath('md')); ?>" alt="banner"></a>
                                                        <?php elseif(strpos($category->icon,'50x75')): ?>
                                                            <a href=<?php echo e(route('frontend.subcategories', $category)); ?> class="w-img"><img style="height:150px;width:150px;float:right" src="<?php echo e($category->getIconPath('pmd')); ?>" alt="banner"></a>
                                                        <?php else: ?>
                                                            <a href=<?php echo e(route('frontend.subcategories', $category)); ?> class="w-img"><img style="height:150px;width:150px;float:right" src="<?php echo e($category->getIconPath('emd')); ?>" alt="banner"></a>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="banner__content p-absolute transition-3">
                                                        <h5><a href=<?php echo e(route('frontend.subcategories', $category)); ?>><?php echo e($category->name); ?></a></h5>
                                                        <a href=<?php echo e(route('frontend.subcategories', $category)); ?> class="link-btn">View Sub Categories</a>
                                                    </div>
                                                </div>
                                            </div>
                                            </a>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <!-- banner area end -->











































                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shop modal start -->
    <!-- Modal -->
    <div class="modal fade" id="productModalId" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered product-modal" role="document">
            <div class="modal-content">
                <div class="product__modal-wrapper p-relative">
                    <div class="product__modal-close p-absolute">
                        <button   data-dismiss="modal"><i class="fal fa-times"></i></button>
                    </div>
                    <div class="product__modal-inner">
                        <div class="row">
                            <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12">
                                <div class="product__modal-box">
                                    <div class="tab-content mb-20" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="<?php echo e(asset('frontend/assets/img/shop/product/quick-view/quick-big-1.jpg')); ?>" alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="<?php echo e(asset('frontend/assets/img/shop/product/quick-view/quick-big-2.jpg')); ?>" alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="<?php echo e(asset('frontend/assets/img/shop/product/quick-view/quick-big-3.jpg')); ?>" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <nav>
                                        <div class="nav nav-tabs justify-content-between" id="nav-tab" role="tablist">
                                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
                                                <div class="product__nav-img w-img">
                                                    <img src="<?php echo e(asset('frontend/assets/img/shop/product/quick-view/quick-sm-1.jpg')); ?>" alt="">
                                                </div>
                                            </a>
                                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">
                                                <div class="product__nav-img w-img">
                                                    <img src="<?php echo e(asset('frontend/assets/img/shop/product/quick-view/quick-sm-2.jpg')); ?>" alt="">
                                                </div>
                                            </a>
                                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">
                                                <div class="product__nav-img w-img">
                                                    <img src="<?php echo e(asset('frontend/assets/img/shop/product/quick-view/quick-sm-3.jpg')); ?>" alt="">
                                                </div>
                                            </a>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-7 col-md-6 col-sm-12 col-12">
                                <div class="product__modal-content">
                                    <h4><a href="product-details.html">Wooden container Bowl</a></h4>
                                    <div class="rating rating-shop mb-15">
                                        <ul>
                                            <li><span><i class="fas fa-star"></i></span></li>
                                            <li><span><i class="fas fa-star"></i></span></li>
                                            <li><span><i class="fas fa-star"></i></span></li>
                                            <li><span><i class="fas fa-star"></i></span></li>
                                            <li><span><i class="fal fa-star"></i></span></li>
                                        </ul>
                                        <span class="rating-no ml-10">
                                                    3 rating(s)
                                                </span>
                                    </div>
                                    <div class="product__price-2 mb-25">
                                        <span>$96.00</span>
                                        <span class="old-price">$96.00</span>
                                    </div>
                                    <div class="product__modal-des mb-30">
                                        <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram.</p>
                                    </div>
                                    <div class="product__modal-form">
                                        <form action="#">
                                            <div class="product__modal-input size mb-20">
                                                <label>Size <i class="fas fa-star-of-life"></i></label>
                                                <select>
                                                    <option>- Please select -</option>
                                                    <option> S</option>
                                                    <option> M</option>
                                                    <option> L</option>
                                                    <option> XL</option>
                                                    <option> XXL</option>
                                                </select>
                                            </div>
                                            <div class="product__modal-input color mb-20">
                                                <label>Color <i class="fas fa-star-of-life"></i></label>
                                                <select>
                                                    <option>- Please select -</option>
                                                    <option> Black</option>
                                                    <option> Yellow</option>
                                                    <option> Blue</option>
                                                    <option> White</option>
                                                    <option> Ocean Blue</option>
                                                </select>
                                            </div>
                                            <div class="product__modal-required mb-5">
                                                <span >Repuired Fiields *</span>
                                            </div>
                                            <div class="pro-quan-area d-lg-flex align-items-center">
                                                <div class="product-quantity-title">
                                                    <label>Quantity</label>
                                                </div>
                                                <div class="product-quantity">
                                                    <div class="cart-plus-minus"><input type="text" value="1" /></div>
                                                </div>
                                                <div class="pro-cart-btn ml-20">
                                                    <a href="#" class="os-btn os-btn-black os-btn-3 mr-10">+ Add to Cart</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shop modal end -->
</main>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script type="text/javascript">
    $(document).ready(function(){
        $('.categorySlickSlider').slick({
            centerMode: true,
            centerPadding: '60px',
            slidesToShow: 3,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 1
                    }
                }
            ]
        });
    });
</script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pigstuhq/pureoproducts.pigslhub.com/resources/views/frontend/index.blade.php ENDPATH**/ ?>