<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <?php echo $__env->make('front.includes.partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('front.includes.partials.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <style>
            .opactiyWhiteColorWithPadding{
                background-color:rgba(255,255,255,0.7);
                padding:30px;
            }
            .opactiySuperMarketColorWithPadding{
                background-color:rgba(152,138,105,0.9);
                padding:30px;
                color: "#FFFFFF"
            }
            .opactiyLaundryColorWithPadding{
                background-color:rgba(72,161,207,0.9);
                padding:30px;
                color: "#FFFFFF"
            }
            .opactiyFoodColorWithPadding{
                background-color:rgba(0,77,106,0.9);
                padding:30px;
                color: "#FFFFFF"
            }
            .opactiyPharmacyColorWithPadding{
                background-color:rgba(12,84,74,0.9);
                padding:30px;
                color: "#FFFFFF"
            }
            .opactiyCustomerColorWithPadding{
                background-color:rgba(125,46,81,0.9);
                padding:30px;
                color: "#FFFFFF"
            }
            .opactiyDriverColorWithPadding{
                background-color:rgba(16,92,131,0.9);
                padding:30px;
                color: "#FFFFFF"
            }
            .opactiyShopColorWithPadding{
                background-color:rgba(223,132,123,0.9);
                padding:30px;
                color: "#FFFFFF"
            }
            .howWeUseSliderAnimation{
                animation-name: howToUseAnimation;
                animation-duration: 4s;
               /* z-index: 4; */
            }

            @keyframes  howToUseAnimation {
                from {right: 0px;}
                to {right: 600px;}
            }

        </style>
            <!-- Start WOWSlider.com HEAD section -->
            <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/engine1/style.css')); ?>" />
            <script type="text/javascript" src="<?php echo e(asset('assets/engine1/jquery.js')); ?>"></script>
            <!-- End WOWSlider.com HEAD section -->
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
        <!-- Add your site or application content here -->
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
        <!-- header area start -->
        <?php echo $__env->make('front.includes.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- header area end -->
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
                                        <li><a href="">All Categories</a></li>
                                        <li><a href="">Accessories</a></li>
                                        <li><a href="">Chair</a></li>
                                        <li><a href="">Tablet</a></li>
                                        <li><a href="">Men</a></li>
                                        <li><a href="">Women</a></li>
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
                    <ul id="mobile-menu-active">
                        <li class="active"><a href="tf/outstock-prv/outstock/index.html">Home</a>

                        </li>
                        <li class=""><a href="">Shop</a>

                        </li>
                        <li class=""><a href="">Blog</a>

                        </li>
                        <li class=""><a href="">Pages</a>
                        </li>
                        <li><a href="">Contact</a></li>
                    </ul>
                </nav>
                <!-- side-mobile-menu end -->
            </div>
        </section>
        <div class="body-overlay transition-3"></div>
        <!-- extra info area end -->
        <main id="home">
                <!-- slider area start -->
                <section class="slider__area slider__area-3 p-relative">
                    <div class="slider-active">
                        <div class="single-slider single-slider-2 slider__height-5 d-flex align-items-center" data-background="<?php echo e(asset('front/img/slider/slider-1.jpg')); ?>">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-7 col-md-10 opactiyWhiteColorWithPadding">
                                        <div class="slider__content slider__content-3 pl-250">
                                            <h2 data-animation="fadeInUp" data-delay=".2s">Laundry <br> Fresh Clothes, Fresh Life</h2>
                                            <p data-animation="fadeInUp" data-delay=".4s">Sell quality work at one place for caring clothes better</p>
                                            <div>
                                                <a href="" class="os-btn os-btn-2" data-animation="fadeInUp" data-delay=".6s"><i class="fab fa-google-play"></i>&nbsp;&nbsp;&nbsp;Customer</a>
                                                <a href="" class="os-btn os-btn-2" data-animation="fadeInUp" data-delay=".6s"><i class="fab fa-apple"></i>&nbsp;&nbsp;&nbsp;Customer</a>
                                            </div>
                                            <div style="margin: 5px"></div>
                                            <div>
                                                <a href="" class="os-btn os-btn-2" data-animation="fadeInUp" data-delay=".6s">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fab fa-google-play"></i>&nbsp;&nbsp;&nbsp;Driver&nbsp;&nbsp;&nbsp;&nbsp;</a>
                                                <a href="" class="os-btn os-btn-2" data-animation="fadeInUp" data-delay=".6s">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fab fa-apple"></i>&nbsp;&nbsp;&nbsp;Driver&nbsp;&nbsp;&nbsp;&nbsp;</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-slider single-slider-2 slider__height-5 d-flex align-items-center" data-background="<?php echo e(asset('front/img/slider/slider-2.jpg')); ?>">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-10 opactiyWhiteColorWithPadding">
                                        <div class="slider__content slider__content-3 pl-250">
                                            <h2 data-animation="fadeInUp" data-delay=".2s">Pharmaceutical <br> To Live Healthy Life</h2>
                                            <p data-animation="fadeInUp" data-delay=".4s">Sell drugs on prescription to build a healthier tomorrow for patients</p>
                                            <div>
                                                <a href="" class="os-btn os-btn-2" data-animation="fadeInUp" data-delay=".6s"><i class="fab fa-google-play"></i>&nbsp;&nbsp;&nbsp;Customer</a>
                                                <a href="" class="os-btn os-btn-2" data-animation="fadeInUp" data-delay=".6s"><i class="fab fa-apple"></i>&nbsp;&nbsp;&nbsp;Customer</a>
                                            </div>
                                            <div style="margin: 5px"></div>
                                            <div>
                                                <a href="" class="os-btn os-btn-2" data-animation="fadeInUp" data-delay=".6s">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fab fa-google-play"></i>&nbsp;&nbsp;&nbsp;Driver&nbsp;&nbsp;&nbsp;&nbsp;</a>
                                                <a href="" class="os-btn os-btn-2" data-animation="fadeInUp" data-delay=".6s">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fab fa-apple"></i>&nbsp;&nbsp;&nbsp;Driver&nbsp;&nbsp;&nbsp;&nbsp;</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-slider single-slider-2 slider__height-5 d-flex align-items-center" data-background="<?php echo e(asset('front/img/slider/slider-3.jpg')); ?>">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-10 opactiyWhiteColorWithPadding">
                                        <div class="slider__content slider__content-3 pl-250">
                                            <h2 data-animation="fadeInUp" data-delay=".2s">Restaurant<br> Food and Drinks</h2>
                                            <p data-animation="fadeInUp" data-delay=".4s">Sell your best food and drinks of your choice at one place for millions of users</p>
                                            <div>
                                                <a href="" class="os-btn os-btn-2" data-animation="fadeInUp" data-delay=".6s"><i class="fab fa-google-play"></i>&nbsp;&nbsp;&nbsp;Customer</a>
                                                <a href="" class="os-btn os-btn-2" data-animation="fadeInUp" data-delay=".6s"><i class="fab fa-apple"></i>&nbsp;&nbsp;&nbsp;Customer</a>
                                            </div>
                                            <div style="margin: 5px"></div>
                                            <div>
                                                <a href="" class="os-btn os-btn-2" data-animation="fadeInUp" data-delay=".6s">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fab fa-google-play"></i>&nbsp;&nbsp;&nbsp;Driver&nbsp;&nbsp;&nbsp;&nbsp;</a>
                                                <a href="" class="os-btn os-btn-2" data-animation="fadeInUp" data-delay=".6s">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fab fa-apple"></i>&nbsp;&nbsp;&nbsp;Driver&nbsp;&nbsp;&nbsp;&nbsp;</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- slider area end -->
                <!-- What we -->
                <div class="box-25">
                    <!-- product area start -->
                    <section class="product__area pt-60 pb-100">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="section__title-wrapper text-center mb-55" id="facility">
                                        <div class="section__title mb-10">
                                            <h2>What EzCare2Go Provides</h2>
                                        </div>
                                        <div class="section__sub-title">
                                            <p>We Are Providing One Click Solution For All Tasks!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row no-gutters">
                                <div class="row">
                                    <div class="col-md-1">
                                    </div>
                                    <div class="col-md-10">
                                     <!-- Start WOWSlider.com BODY section -->
                                    <div id="wowslider-container1">
                                        <div class="ws_images"><ul>
                                            <li><img src="<?php echo e(asset('assets/data1/images/one.png')); ?>" alt="one" title="One Click Receipt's Printing" id="wows1_2"/></li>
                                            <li><img src="<?php echo e(asset('assets/data1/images/two.png')); ?>" alt="two" title="One Click Business Switching" id="wows1_4"/></li>
                                            <li><img src="<?php echo e(asset('assets/data1/images/three.png')); ?>" alt="html slider" title="All Major Business Categories Provided" id="wows1_3"/></li>
                                            <li><img src="<?php echo e(asset('assets/data1/images/four.png')); ?>" alt="four" title="One Click Load Products From Our Database" id="wows1_1"/></li>
                                                <li><img src="<?php echo e(asset('assets/data1/images/five.png')); ?>" alt="five" title="Create Advertisement To Boost Your Sales" id="wows1_0"/></li>
                                            </ul></div>
                                            <div class="ws_bullets"><div>
                                                <a href="#" title="five"><span><img src="<?php echo e(asset('assets/data1/tooltips/five.png')); ?>" alt="five"/>1</span></a>
                                                <a href="#" title="four"><span><img src="<?php echo e(asset('assets/data1/tooltips/four.png')); ?>" alt="four"/>2</span></a>
                                                <a href="#" title="one"><span><img src="<?php echo e(asset('assets/data1/tooltips/one.png')); ?>" alt="one"/>3</span></a>
                                                <a href="#" title="three"><span><img src="<?php echo e(asset('assets/data1/tooltips/three.png')); ?>" alt="three"/>4</span></a>
                                                <a href="#" title="two"><span><img src="<?php echo e(asset('assets/data1/tooltips/two.png')); ?>" alt="two"/>5</span></a>
                                            </div></div>

                                        <div class="ws_shadow"></div>
                                        </div>
                                        <script type="text/javascript" src="<?php echo e(asset('assets/engine1/wowslider.js')); ?>"></script>
                                        <script type="text/javascript" src="<?php echo e(asset('assets/engine1/script.js')); ?>"></script>
                                        <!-- End WOWSlider.com BODY section -->
                                    </div>
                                    <div class="col-md-1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- box -->
                <div class="box-25">
                    <!-- product area start -->
                    <section class="product__area pt-60 pb-100">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="section__title-wrapper text-center mb-55" id="supported_business">
                                        <div class="section__title mb-10">
                                            <h2>Supported Bussiness</h2>
                                        </div>
                                        <div class="section__sub-title">
                                            <p>We Are Ready For Support Your Bussiness!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row no-gutters">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="banner__item-2 banner-right p-relative mb-30 pr-15">
                                        <div class="banner__thumb fix">
                                            <a href="index.html" class="w-img"><img src="<?php echo e(asset('front/img/shop/banner/banner-big-4.jpg')); ?>" alt="banner"></a>
                                        </div>
                                        <div class="banner__content-2 p-absolute transition-3 opactiyLaundryColorWithPadding">
                                            <span style="color: #FFFFFF">Laundry</span>
                                            <h4 style="color: #FFFFFF"><a href="index.html">Washing, Iron... etc</a></h4>
                                            <a href="index.html" class="os-btn os-btn-2">Start Selling</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="banner__item-2 banner-right p-relative mb-30 pr-15">
                                        <div class="banner__thumb fix">
                                            <a href="index.html" class="w-img"><img src="<?php echo e(asset('front/img/shop/banner/banner-big-1.jpg')); ?>" alt="banner"></a>
                                        </div>
                                        <div class="banner__content-2 p-absolute transition-3 opactiySuperMarketColorWithPadding">
                                            <span style="color: #FFFFFF">General Stores</span>
                                            <h4 style="color: #FFFFFF"><a href="index.html">Dairy + Fruit And Other General Products</a></h4>
                                            <a href="index.html" class="os-btn os-btn-2">Start Selling</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="banner__item-2 banner-right p-relative mb-30 pr-15">
                                        <div class="banner__thumb fix">
                                            <a class="w-img">
                                                <img src="<?php echo e(asset('front/img/shop/banner/banner-big-2.jpg')); ?>" alt="banner">
                                            </a>
                                        </div>
                                        <div class="banner__content-2 p-absolute transition-3 opactiyFoodColorWithPadding">

                                            <span style="color: #FFFFFF">Food Delivery</span>
                                            <h4 style="color: #FFFFFF"><a href="index.html">Fast, Chinese and other food delivery</a></h4>
                                            <a href="index.html" class="os-btn os-btn-2">Start Selling</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="banner__item-2 banner-right p-relative mb-30 pr-15">
                                        <div class="banner__thumb fix">
                                            <a href="index.html" class="w-img"><img src="<?php echo e(asset('front/img/shop/banner/banner-big-3.jpg')); ?>" alt="banner"></a>
                                        </div>
                                        <div class="banner__content-2 p-absolute transition-3 opactiyPharmacyColorWithPadding">
                                            <span style="color: #FFFFFF">Pharmaceutical</span>
                                            <h4 style="color: #FFFFFF"><a href="index.html">Sell All Drugs On Prescription</a></h4>
                                            <a href="index.html" class="os-btn os-btn-2">Start Selling</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="product__load-btn text-center mt-25">
                                        <a class="os-btn os-btn-3">AND MANY MORE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- banner area end -->

                    <!-- stakeholder area start-->
                    <section class="product__area pt-60 pb-100">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="section__title-wrapper text-center mb-55" id="stakeholders">
                                        <div class="section__title mb-10">
                                            <h2>Stakeholders</h2>
                                        </div>
                                        <div class="section__sub-title">
                                            <p>Here are some Stakeholders!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row no-gutters">
                                <div class="col-xl-4 col-lg-4">
                                    <div class="banner__item-2 banner-right p-relative mb-30 pr-15">
                                        <div class="banner__thumb fix">
                                            <a href="index.html" class="w-img"><img src="<?php echo e(asset('front/img/shop/stakeholder/customer.jpg')); ?>" alt="banner"></a>
                                        </div>
                                        <div class="banner__content-2 p-absolute transition-3 opactiyCustomerColorWithPadding">
                                            <span style="color: #FFFFFF; font-size: 20px">Customer</span>


                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4">
                                    <div class="banner__item-2 banner-right p-relative mb-30 pr-15">
                                        <div class="banner__thumb fix">
                                            <a href="index.html" class="w-img"><img src="<?php echo e(asset('front/img/shop/stakeholder/driver.jpg')); ?>" alt="banner"></a>
                                        </div>
                                        <div class="banner__content-2 p-absolute transition-3 opactiyDriverColorWithPadding">
                                            <span style="color: #FFFFFF; font-size: 20px">Driver</span>


                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4">
                                    <div class="banner__item-2 banner-right p-relative mb-30 pr-15">
                                        <div class="banner__thumb fix">
                                            <a class="w-img">
                                                <img src="<?php echo e(asset('front/img/shop/stakeholder/shop.jpg')); ?>" alt="banner">
                                            </a>
                                        </div>
                                        <div class="banner__content-2 p-absolute transition-3 opactiyShopColorWithPadding">
                                            <span style="color: #FFFFFF; font-size: 20px">Shop</span>


                                        </div>
                                    </div>
                                </div>
                            </div>







                        </div>
                    </section>
                    <!-- stakeholder area end-->

                    <!-- subscribe area start -->
                    <section class="subscribe__area pb-100">
                        <div class="container">
                            <div class="subscribe__inner pt-95">
                                <div class="row">
                                    <div class="col-xl-8 offset-xl-2 col-lg-8 offset-lg-2">
                                        <div class="subscribe__content text-center">
                                            <h2>Get Discount Info</h2>
                                            <p>Subscribe to the Outstock mailing list to receive updates on new arrivals, special offers and other discount information.</p>
                                            <div class="subscribe__form">
                                                <form action="#">
                                                    <input type="email" placeholder="Subscribe to our newsletter...">
                                                    <button class="os-btn os-btn-2 os-btn-3">subscribe</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- subscribe area end -->
                </div>
        </main>
        <!-- footer area start -->
        <div id="contact"></div>
        <?php echo $__env->make('front.includes.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- footer area end -->
        <!-- JS here -->
        <?php echo $__env->make('front.includes.partials.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>
</html>
<?php /**PATH /home/pigstuhq/pureoproducts.pigslhub.com/resources/views/front/viewEarning.blade.php ENDPATH**/ ?>
