<?php $__env->startSection('title', 'Product Details'); ?>

<?php $__env->startSection('content'); ?>
<main>
    <!-- page title area start -->



















    <!-- page title area end -->


    <!-- shop details area start -->
    <section class="shop__area pb-65">
        <div class="shop__top grey-bg-6 pt-100 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="product__modal-box d-flex">
                            <div class="tab-content mb-20 text-center" id="product-detailsContent">
                                <div class="tab-pane fade show active" id="pro-one" role="tabpanel" aria-labelledby="pro-one-tab">
                                    <div class="product__modal-img product__thumb w-img">
                                        <?php if(strpos($product->icon,'100x75')): ?>
                                        <img style="height:200px;width:300px;margin:auto" src="<?php echo e($product->getIconPath('lg')); ?>" alt="">
                                        <?php elseif(strpos($product->icon,'50x75')): ?>
                                        <img style="height:300px;width:200px;margin:auto" src="<?php echo e($product->getIconPath('plg')); ?>" alt="">
                                        <?php else: ?>
                                        <img style="height:300px;width:300px;margin:auto" src="<?php echo e($product->getIconPath('elg')); ?>" alt="">
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="product__modal-content product__modal-content-2">
                            <h4><a href="#"><?php echo e($product->name); ?></a></h4>
                            <div class="rating rating-shop mb-15">
                                <ul>
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li><span><i class="fal fa-star"></i></span></li>
                                </ul>
                                <span class="rating-no ml-10 rating-left">
                                            3 rating(s)
                                        </span>
                                <span class="review rating-left"><a href="#">Add your Review</a></span>
                            </div>
                            <div class="product__price-2 mb-25">
                                <span>Price: $<?php echo e($product->price); ?></span>

                            </div>
                            <div class="product__price-2 mb-25">
                                <span>Available in Stock: <?php echo e($product->in_stock); ?></span>
                                
                            </div>
                            <div class="product__modal-des mb-30">
                                <p>Description: <?php echo e($product->description); ?>.</p>
                            </div>
                            <div class="product__modal-form mb-30">
                                <form action="<?php echo e(route('carts.store')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>" >
                                    <div class="product__modal-required mb-5">
                                        <span >Required Fields *</span>
                                    </div>
                                    <div class="product__modal-input size mb-20">
                                        <label for="volumes">Volume <i class="fas fa-star-of-life"></i></label>
                                        <select name="volumes" required>
                                            <option value="">- Please select -</option>
                                            <option><?php echo e($product->volumes); ?></option>
                                        </select>
                                    </div>
                                    <div class="pro-quan-area d-sm-flex align-items-center">
                                        <div class="product-quantity-title">
                                            <label>Quantity</label>
                                        </div>
                                        <div class="product-quantity mr-20 mb-20">
                                            <div class="cart-plus-minus">
                                                <input type="text" value="1" name="qty" />
                                            </div>
                                        </div>
                                        <div class="pro-cart-btn">
                                            <button type="submit" class="add-cart-btn mb-20">+ Add to Cart</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="product__tag mb-25">
                                <span>Category:</span>
                                <span><a href="#"><?php echo e($product->sub_category->category->name); ?></a></span>
                            </div>










                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shop__bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="product__details-tab">
                            <div class="product__details-tab-nav text-center mb-45">
                                <nav>
                                    <div class="nav nav-tabs justify-content-start justify-content-sm-center" id="pro-details" role="tablist">
                                        <a class="nav-item nav-link active" id="des-tab" data-toggle="tab" href="#des" role="tab" aria-controls="des" aria-selected="true">Description</a>
                                        <a class="nav-item nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Reviews (4)</a>
                                    </div>
                                </nav>
                            </div>
                            <div class="tab-content" id="pro-detailsContent">
                                <div class="tab-pane fade show active" id="des" role="tabpanel">
                                    <div class="product__details-des">
                                        <p><?php echo e($product->description); ?></p>

                                        <h4>Instructions</h4>
                                        <div class="product__details-des-list mb-20">
                                            <ul>
                                                <li><span>hello<?php echo e($product->instruction); ?></span></li>
                                            </ul>
                                        </div>
                                        <h4>Ingredients:</h4>
                                        <div class="product__details-des-list mb-20">
                                            <ul>
                                                <li><span>hello<?php echo e($product->ingredients); ?></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="review" role="tabpanel">
                                    <div class="product__details-review">
                                        <div class="postbox__comments">
                                            <div class="postbox__comment-title mb-30">
                                                <h3>Reviews (32)</h3>
                                            </div>
                                            <div class="latest-comments mb-30">
                                                <ul>
                                                    <li>
                                                        <div class="comments-box">
                                                            <div class="comments-avatar">
                                                                <img src="assets/img/blog/comments/avater-1.png" alt="">
                                                            </div>
                                                            <div class="comments-text">
                                                                <div class="avatar-name">
                                                                    <h5>Siarhei Dzenisenka</h5>
                                                                    <span> - 3 months ago </span>
                                                                    <a class="reply" href="#">Leave Reply</a>
                                                                </div>
                                                                <div class="user-rating">
                                                                    <ul>
                                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                                <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for <span>“lorem ipsum”</span> will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose.</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="children">
                                                        <div class="comments-box">
                                                            <div class="comments-avatar">
                                                                <img src="assets/img/blog/comments/avater-2.png" alt="">
                                                            </div>
                                                            <div class="comments-text">
                                                                <div class="avatar-name">
                                                                    <h5>Julias Roy</h5>
                                                                    <span> - 6 months ago </span>
                                                                    <a class="reply" href="#">Leave Reply</a>
                                                                </div>
                                                                <div class="user-rating">
                                                                    <ul>
                                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                                <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for <span>“lorem ipsum”</span> will uncover many web sites still in their infancy. </p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="comments-box">
                                                            <div class="comments-avatar">
                                                                <img src="assets/img/blog/comments/avater-3.png" alt="">
                                                            </div>
                                                            <div class="comments-text">
                                                                <div class="avatar-name">
                                                                    <h5>Arista Williamson</h5>
                                                                    <span> - 6 months ago </span>
                                                                    <a class="reply" href="#">Leave Reply</a>
                                                                </div>
                                                                <div class="user-rating">
                                                                    <ul>
                                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                                <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for <span>“lorem ipsum”</span> will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose.</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="post-comments-form mb-100">
                                            <div class="post-comments-title mb-30">
                                                <h3>Your Review</h3>
                                            </div>
                                            <form id="contacts-form" class="conatct-post-form" action="#">
                                                <div class="row">
                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                        <div class="contact-icon p-relative contacts-name">
                                                            <input type="text" placeholder="Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                        <div class="contact-icon p-relative contacts-name">
                                                            <input type="email" placeholder="Email">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12">
                                                        <div class="contact-icon p-relative contacts-email">
                                                            <input type="text" placeholder="Subject">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12">
                                                        <div class="contact-icon p-relative contacts-message">
                                                                    <textarea name="comments" id="comments" cols="30" rows="10"
                                                                              placeholder="Comments"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12">
                                                        <button class="os-btn os-btn-black" type="submit">Post comment</button>
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
    </section>
    <!-- shop details area end -->
</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pigstuhq/pureoproducts.pigslhub.com/resources/views/frontend/products/productDetails.blade.php ENDPATH**/ ?>