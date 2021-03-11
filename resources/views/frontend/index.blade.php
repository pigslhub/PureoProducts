@extends('frontend.layouts.master')

@section('title', 'Home')

@section('content')
{{--<div id="del-svg-defs" class="del-svg-defs hidden">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <symbol viewBox="0 0 20 20" id="grid3" xmlns="http://www.w3.org/2000/svg">
            <circle id="a_1" data-name="1" class="acls-1" cx="4.5" cy="5.5" r="2.5"/>
            <circle id="a_1_copy_2" data-name="1 copy 2" class="acls-1" cx="4.5" cy="14.5" r="2.5"/>
            <circle id="a_3_copy_2" data-name="3 copy 2" class="acls-1" cx="14.5" cy="14.5" r="2.5"/>
        </symbol>
        <symbol viewBox="0 0 20 20" id="grid4" xmlns="http://www.w3.org/2000/svg">
            <circle id="b_1" data-name="1" class="bcls-1" cx="4.5" cy="5.5" r="2.5"/>
            <circle id="b_3" data-name="3" class="bcls-1" cx="14.5" cy="5.5" r="2.5"/>
            <circle id="b_1_copy_2" data-name="1 copy 2" class="bcls-1" cx="4.5" cy="14.5" r="2.5"/>
            <circle id="b_3_copy_2" data-name="3 copy 2" class="bcls-1" cx="14.5" cy="14.5" r="2.5"/>
        </symbol>
        <symbol viewBox="0 0 20 20" id="grid5" xmlns="http://www.w3.org/2000/svg">
            <circle id="c_1" data-name="1" class="ccls-1" cx="2.5" cy="2.5" r="2.5"/>
            <circle id="c_3" data-name="3" class="ccls-1" cx="17.5" cy="2.5" r="2.5"/>
            <circle id="c_2_copy" data-name="2 copy" class="ccls-1" cx="10.5" cy="10.5" r="2.5"/>
            <circle id="c_1_copy_2" data-name="1 copy 2" class="ccls-1" cx="2.5" cy="17.5" r="2.5"/>
            <circle id="c_3_copy_2" data-name="3 copy 2" class="ccls-1" cx="17.5" cy="17.5" r="2.5"/>
        </symbol>
        <symbol viewBox="0 0 20 20" id="grid6" xmlns="http://www.w3.org/2000/svg">
            <circle id="d_1" data-name="1" class="dcls-1" cx="2.5" cy="2.5" r="2.5"/>
            <circle id="d_2" data-name="2" class="dcls-1" cx="10.5" cy="2.5" r="2.5"/>
            <circle id="d_3" data-name="3" class="dcls-1" cx="17.5" cy="2.5" r="2.5"/>
            <circle id="d_1_copy" data-name="1 copy" class="dcls-1" cx="2.5" cy="10.5" r="2.5"/>
            <circle id="d_2_copy" data-name="2 copy" class="dcls-1" cx="10.5" cy="10.5" r="2.5"/>
            <circle id="d_3_copy" data-name="3 copy" class="dcls-1" cx="17.5" cy="10.5" r="2.5"/>
            <circle id="d_1_copy_2" data-name="1 copy 2" class="dcls-1" cx="2.5" cy="17.5" r="2.5"/>
            <circle id="d_2_copy_2" data-name="2 copy 2" class="dcls-1" cx="10.5" cy="17.5" r="2.5"/>
            <circle id="d_3_copy_2" data-name="3 copy 2" class="dcls-1" cx="17.5" cy="17.5" r="2.5"/>
        </symbol>
    </svg>
</div>--}}
    <!-- Start WOWSlider.com BODY section -->
    <div id="wowslider-container1">
        <div class="ws_images"><ul>
                <li><a href="http://wowslider.net"><img src="{{ asset('frontend/data1/images/bgmenu.jpg') }}" alt="javascript slideshow" title="bg-menu" id="wows1_0"/></a></li>
                <li><img src="{{ asset('frontend/data1/images/newsletterpopupbg.jpg') }}" alt="newsletter-popup-bg" title="newsletter-popup-bg" id="wows1_1"/></li>
            </ul></div>
        <div class="ws_bullets"><div>
                <a href="#" title="bg-menu"><span><img src="{{ asset('frontend/data1/tooltips/bgmenu.jpg') }}" alt="bg-menu"/>1</span></a>
                <a href="#" title="newsletter-popup-bg"><span><img src="{{ asset('frontend/data1/tooltips/newsletterpopupbg.jpg') }}" alt="newsletter-popup-bg"/>2</span></a>
            </div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">jquery image carousel</a> by WOWSlider.com v9.0</div>
        <div class="ws_shadow"></div>
    </div>
    <!-- End WOWSlider.com BODY section -->
    <div id="content" class="site-content">
        <div class="helendo-container-full-width">
            <div class="row">
                <div class="vc_row-full-width vc_clearfix"></div>
                <div class="vc_row wpb_row vc_row-fluid">
                    <div class="container">
                        <div class="row">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="helendo-empty-space " style="">
                                            <div class="helendo_empty_space_lg hidden-md hidden-sm hidden-xs" style="height: 55px"></div>
                                            <div class="helendo_empty_space_md hidden-lg hidden-sm hidden-xs" style="height: 55px"></div>
                                            <div class="helendo_empty_space_sm hidden-lg hidden-md hidden-xs" style="height: 55px"></div>
                                            <div class="helendo_empty_space_xs hidden-lg hidden-md hidden-sm" style="height: 30px"></div>
                                        </div>
                                        <div class="helendo-products-carousel helendo-products style-1  nav-enable" data-attr="{&quot;limit&quot;:8,&quot;columns&quot;:4,&quot;orderby&quot;:&quot;date&quot;,&quot;order&quot;:&quot;DESC&quot;}" data-load_more="0" data-nonce="390555f5dc">
                                            <div class="product-header">
                                                <div class="section-title">
                                                    <h3 class="title" style="font-size: 36px">New products</h3>
                                                </div>
                                            </div>
                                            <div class="product-wrapper" id="helendo-product-carousel-60491529773a2">
                                                <div class="product-loading">
                                                    <span class="helendo-loader"></span>
                                                </div>
                                                <div class="woocommerce columns-4 ">
                                                    <div class="woocommerce-notices-wrapper"></div>
                                                    <ul class="products columns-4">
                                                        <li class="product type-product post-599 status-publish first instock product_cat-accessories has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                                            <div class="product-inner  clearfix">
                                                                <div
                                                                    class="product-thumbnail helendo-product-thumbnail">
                                                                    <a href="index.html"
                                                                       class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img
                                                                            width="500" height="500"
                                                                            src="{{ asset('frontend/images/1-500x500.jpg') }}"
                                                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                            alt="" loading="lazy"
                                                                            srcset="{{ asset('frontend/images/1-500x500.jpg') }} 500w, client/q_glossy_ret_img_w_150/helendo/wp-content/uploads/sites/4/2018/11/1-150x150.jpg 150w, client/q_glossy_ret_img_w_300/helendo/wp-content/uploads/sites/4/2018/11/1-300x300.jpg 300w, client/q_glossy_ret_img_w_768/helendo/wp-content/uploads/sites/4/2018/11/1-768x768.jpg 768w, client/q_glossy_ret_img_w_1024/helendo/wp-content/uploads/sites/4/2018/11/1-1024x1024.jpg 1024w, client/q_glossy_ret_img_w_570/helendo/wp-content/uploads/sites/4/2018/11/1-570x570.jpg 570w, client/q_glossy_ret_img_w_600/helendo/wp-content/uploads/sites/4/2018/11/1-600x600.jpg 600w, client/q_glossy_ret_img_w_100/helendo/wp-content/uploads/sites/4/2018/11/1-100x100.jpg 100w, client/q_glossy_ret_img_w_1400/helendo/wp-content/uploads/sites/4/2018/11/1.jpg 1400w"
                                                                            sizes="(max-width: 500px) 100vw, 500px"/></a>
                                                                    <div class="actions-button"><a href="index.html"
                                                                                                   data-id="599"
                                                                                                   class="helendo-product-quick-view button hidden-sm hidden-xs"><i
                                                                                class="p-icon icon-plus"
                                                                                title="Quick View"
                                                                                data-rel="tooltip"></i></a><a
                                                                            href="index.html" data-quantity="1"
                                                                            class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                            data-product_id="599" data-product_sku=""
                                                                            aria-label="Add &ldquo;Plant pots&rdquo; to your cart"
                                                                            rel="nofollow" data-title="Plant pots"><i
                                                                                class="p-icon icon-bag2"
                                                                                title="Add to cart"
                                                                                data-rel="tooltip"></i><span
                                                                                class="add-to-cart-text">Add to cart</span></a>
                                                                        <div
                                                                            class="yith-wcwl-add-to-wishlist add-to-wishlist-599">
                                                                            <div class="yith-wcwl-add-button show"
                                                                                 style="display:block"><a
                                                                                    href="index.html#038;add_to_wishlist=599"
                                                                                    title="Add to Wishlist"
                                                                                    data-rel="tooltip"
                                                                                    data-product-id="599"
                                                                                    data-product-type="simple"
                                                                                    class="add_to_wishlist single_add_to_wishlist">
                                                                                    Add to Wishlist</a></div>
                                                                            <div
                                                                                class="yith-wcwl-wishlistaddedbrowse hide"
                                                                                style="display:none;"><span
                                                                                    class="feedback">Product added!</span>
                                                                                <a href="index.html" data-rel="tooltip"
                                                                                   title="Browse Wishlist"> Browse
                                                                                    Wishlist </a></div>
                                                                            <div
                                                                                class="yith-wcwl-wishlistexistsbrowse hide"
                                                                                style="display:none"><span
                                                                                    class="feedback">The product is already in the wishlist!</span>
                                                                                <a href="index.html" data-rel="tooltip"
                                                                                   title="Browse Wishlist"> Browse
                                                                                    Wishlist </a></div>
                                                                            <div style="clear:both"></div>
                                                                            <div
                                                                                class="yith-wcwl-wishlistaddresponse"></div>
                                                                        </div>
                                                                        <div class="clear"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-details"><h2
                                                                        class="woocommerce-loop-product__title"><a
                                                                            href="index.html">Plant pots</a></h2> <span
                                                                        class="price"><span class="woocs_price_code"
                                                                                            data-product-id="599"><span
                                                                                class="woocommerce-Price-amount amount"><bdi><span
                                                                                        class="woocommerce-Price-currencySymbol">&pound;</span>&nbsp;69.00</bdi></span></span></span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="product type-product post-599 status-publish first instock product_cat-accessories has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                                            <div class="product-inner  clearfix">
                                                                <div
                                                                    class="product-thumbnail helendo-product-thumbnail">
                                                                    <a href="index.html"
                                                                       class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img
                                                                            width="500" height="500"
                                                                            src="{{ asset('frontend/images/1-500x500.jpg') }}"
                                                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                            alt="" loading="lazy"
                                                                            srcset="{{ asset('frontend/images/1-500x500.jpg') }} 500w, client/q_glossy_ret_img_w_150/helendo/wp-content/uploads/sites/4/2018/11/1-150x150.jpg 150w, client/q_glossy_ret_img_w_300/helendo/wp-content/uploads/sites/4/2018/11/1-300x300.jpg 300w, client/q_glossy_ret_img_w_768/helendo/wp-content/uploads/sites/4/2018/11/1-768x768.jpg 768w, client/q_glossy_ret_img_w_1024/helendo/wp-content/uploads/sites/4/2018/11/1-1024x1024.jpg 1024w, client/q_glossy_ret_img_w_570/helendo/wp-content/uploads/sites/4/2018/11/1-570x570.jpg 570w, client/q_glossy_ret_img_w_600/helendo/wp-content/uploads/sites/4/2018/11/1-600x600.jpg 600w, client/q_glossy_ret_img_w_100/helendo/wp-content/uploads/sites/4/2018/11/1-100x100.jpg 100w, client/q_glossy_ret_img_w_1400/helendo/wp-content/uploads/sites/4/2018/11/1.jpg 1400w"
                                                                            sizes="(max-width: 500px) 100vw, 500px"/></a>
                                                                    <div class="actions-button"><a href="index.html"
                                                                                                   data-id="599"
                                                                                                   class="helendo-product-quick-view button hidden-sm hidden-xs"><i
                                                                                class="p-icon icon-plus"
                                                                                title="Quick View"
                                                                                data-rel="tooltip"></i></a><a
                                                                            href="index.html" data-quantity="1"
                                                                            class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                            data-product_id="599" data-product_sku=""
                                                                            aria-label="Add &ldquo;Plant pots&rdquo; to your cart"
                                                                            rel="nofollow" data-title="Plant pots"><i
                                                                                class="p-icon icon-bag2"
                                                                                title="Add to cart"
                                                                                data-rel="tooltip"></i><span
                                                                                class="add-to-cart-text">Add to cart</span></a>
                                                                        <div
                                                                            class="yith-wcwl-add-to-wishlist add-to-wishlist-599">
                                                                            <div class="yith-wcwl-add-button show"
                                                                                 style="display:block"><a
                                                                                    href="index.html#038;add_to_wishlist=599"
                                                                                    title="Add to Wishlist"
                                                                                    data-rel="tooltip"
                                                                                    data-product-id="599"
                                                                                    data-product-type="simple"
                                                                                    class="add_to_wishlist single_add_to_wishlist">
                                                                                    Add to Wishlist</a></div>
                                                                            <div
                                                                                class="yith-wcwl-wishlistaddedbrowse hide"
                                                                                style="display:none;"><span
                                                                                    class="feedback">Product added!</span>
                                                                                <a href="index.html" data-rel="tooltip"
                                                                                   title="Browse Wishlist"> Browse
                                                                                    Wishlist </a></div>
                                                                            <div
                                                                                class="yith-wcwl-wishlistexistsbrowse hide"
                                                                                style="display:none"><span
                                                                                    class="feedback">The product is already in the wishlist!</span>
                                                                                <a href="index.html" data-rel="tooltip"
                                                                                   title="Browse Wishlist"> Browse
                                                                                    Wishlist </a></div>
                                                                            <div style="clear:both"></div>
                                                                            <div
                                                                                class="yith-wcwl-wishlistaddresponse"></div>
                                                                        </div>
                                                                        <div class="clear"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-details"><h2
                                                                        class="woocommerce-loop-product__title"><a
                                                                            href="index.html">Plant pots</a></h2> <span
                                                                        class="price"><span class="woocs_price_code"
                                                                                            data-product-id="599"><span
                                                                                class="woocommerce-Price-amount amount"><bdi><span
                                                                                        class="woocommerce-Price-currencySymbol">&pound;</span>&nbsp;69.00</bdi></span></span></span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="product type-product post-599 status-publish first instock product_cat-accessories has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                                            <div class="product-inner  clearfix">
                                                                <div
                                                                    class="product-thumbnail helendo-product-thumbnail">
                                                                    <a href="index.html"
                                                                       class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img
                                                                            width="500" height="500"
                                                                            src="{{ asset('frontend/images/1-500x500.jpg') }}"
                                                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                            alt="" loading="lazy"
                                                                            srcset="{{ asset('frontend/images/1-500x500.jpg') }} 500w, client/q_glossy_ret_img_w_150/helendo/wp-content/uploads/sites/4/2018/11/1-150x150.jpg 150w, client/q_glossy_ret_img_w_300/helendo/wp-content/uploads/sites/4/2018/11/1-300x300.jpg 300w, client/q_glossy_ret_img_w_768/helendo/wp-content/uploads/sites/4/2018/11/1-768x768.jpg 768w, client/q_glossy_ret_img_w_1024/helendo/wp-content/uploads/sites/4/2018/11/1-1024x1024.jpg 1024w, client/q_glossy_ret_img_w_570/helendo/wp-content/uploads/sites/4/2018/11/1-570x570.jpg 570w, client/q_glossy_ret_img_w_600/helendo/wp-content/uploads/sites/4/2018/11/1-600x600.jpg 600w, client/q_glossy_ret_img_w_100/helendo/wp-content/uploads/sites/4/2018/11/1-100x100.jpg 100w, client/q_glossy_ret_img_w_1400/helendo/wp-content/uploads/sites/4/2018/11/1.jpg 1400w"
                                                                            sizes="(max-width: 500px) 100vw, 500px"/></a>
                                                                    <div class="actions-button"><a href="index.html"
                                                                                                   data-id="599"
                                                                                                   class="helendo-product-quick-view button hidden-sm hidden-xs"><i
                                                                                class="p-icon icon-plus"
                                                                                title="Quick View"
                                                                                data-rel="tooltip"></i></a><a
                                                                            href="index.html" data-quantity="1"
                                                                            class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                            data-product_id="599" data-product_sku=""
                                                                            aria-label="Add &ldquo;Plant pots&rdquo; to your cart"
                                                                            rel="nofollow" data-title="Plant pots"><i
                                                                                class="p-icon icon-bag2"
                                                                                title="Add to cart"
                                                                                data-rel="tooltip"></i><span
                                                                                class="add-to-cart-text">Add to cart</span></a>
                                                                        <div
                                                                            class="yith-wcwl-add-to-wishlist add-to-wishlist-599">
                                                                            <div class="yith-wcwl-add-button show"
                                                                                 style="display:block"><a
                                                                                    href="index.html#038;add_to_wishlist=599"
                                                                                    title="Add to Wishlist"
                                                                                    data-rel="tooltip"
                                                                                    data-product-id="599"
                                                                                    data-product-type="simple"
                                                                                    class="add_to_wishlist single_add_to_wishlist">
                                                                                    Add to Wishlist</a></div>
                                                                            <div
                                                                                class="yith-wcwl-wishlistaddedbrowse hide"
                                                                                style="display:none;"><span
                                                                                    class="feedback">Product added!</span>
                                                                                <a href="index.html" data-rel="tooltip"
                                                                                   title="Browse Wishlist"> Browse
                                                                                    Wishlist </a></div>
                                                                            <div
                                                                                class="yith-wcwl-wishlistexistsbrowse hide"
                                                                                style="display:none"><span
                                                                                    class="feedback">The product is already in the wishlist!</span>
                                                                                <a href="index.html" data-rel="tooltip"
                                                                                   title="Browse Wishlist"> Browse
                                                                                    Wishlist </a></div>
                                                                            <div style="clear:both"></div>
                                                                            <div
                                                                                class="yith-wcwl-wishlistaddresponse"></div>
                                                                        </div>
                                                                        <div class="clear"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-details"><h2
                                                                        class="woocommerce-loop-product__title"><a
                                                                            href="index.html">Plant pots</a></h2> <span
                                                                        class="price"><span class="woocs_price_code"
                                                                                            data-product-id="599"><span
                                                                                class="woocommerce-Price-amount amount"><bdi><span
                                                                                        class="woocommerce-Price-currencySymbol">&pound;</span>&nbsp;69.00</bdi></span></span></span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <nav class="woocommerce-pagination">
                                                        <ul class='page-numbers'>
                                                            <li><span aria-current="page" class="page-numbers current">1</span></li>
                                                            <li><a class="page-numbers" href="index.html#038;product-page=2">2</a></li>
                                                            <li><a class="page-numbers" href="index.html#038;product-page=3">3</a></li>
                                                            <li><a class="next page-numbers" href="index.html#038;product-page=2">&rarr;</a></li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="helendo-empty-space " style="">
                                            <div class="helendo_empty_space_lg hidden-md hidden-sm hidden-xs" style="height: 40px"></div>
                                            <div class="helendo_empty_space_md hidden-lg hidden-sm hidden-xs" style="height: 40px"></div>
                                            <div class="helendo_empty_space_sm hidden-lg hidden-md hidden-xs" style="height: 40px"></div>
                                            <div class="helendo_empty_space_xs hidden-lg hidden-md hidden-sm" style="height: 40px"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_row-full-width vc_clearfix"></div>
                <!-- Best Selling -->
                <div class="vc_row wpb_row vc_row-fluid">
                    <div class="container">
                        <div class="row">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="helendo-empty-space " style="">
                                            <div class="helendo_empty_space_lg hidden-md hidden-sm hidden-xs" style="height: 100px"></div>
                                            <div class="helendo_empty_space_md hidden-lg hidden-sm hidden-xs" style="height: 100px"></div>
                                            <div class="helendo_empty_space_sm hidden-lg hidden-md hidden-xs" style="height: 70px"></div>
                                            <div class="helendo_empty_space_xs hidden-lg hidden-md hidden-sm" style="height: 50px"></div>
                                        </div>
                                        <div class="helendo-products-grid helendo-products style-2 border-bottom " data-attr="{&quot;limit&quot;:8,&quot;columns&quot;:4,&quot;orderby&quot;:&quot;date&quot;,&quot;order&quot;:&quot;DESC&quot;}" data-load_more="" data-nonce="390555f5dc">
                                            <div class="product-header">
                                                <div class="section-title">
                                                    <h3 class="title" style="font-size: 36px">Best selling</h3>
                                                    <button class="btn btn-info">Test</button>
                                                </div>
                                            </div>
                                            <div class="product-wrapper">
                                                <div class="product-loading">
                                                    <span class="helendo-loader"></span>
                                                </div>
                                                <div class="woocommerce columns-4 ">
                                                    <div class="woocommerce-notices-wrapper"></div>
                                                    <ul class="products columns-4">
                                                        <li class="product type-product post-599 status-publish first instock product_cat-accessories has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                                            <div class="product-inner  clearfix">
                                                                <div class="product-thumbnail helendo-product-thumbnail">
                                                                    <a href="index.html" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                                                        <img width="500" height="500"
                                                                            src="{{ asset('frontend/images/1-500x500.jpg') }}"
                                                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                            alt="" loading="lazy"
                                                                            srcset="{{ asset('frontend/images/1-500x500.jpg') }} 500w, client/q_glossy_ret_img_w_150/helendo/wp-content/uploads/sites/4/2018/11/1-150x150.jpg 150w, client/q_glossy_ret_img_w_300/helendo/wp-content/uploads/sites/4/2018/11/1-300x300.jpg 300w, client/q_glossy_ret_img_w_768/helendo/wp-content/uploads/sites/4/2018/11/1-768x768.jpg 768w, client/q_glossy_ret_img_w_1024/helendo/wp-content/uploads/sites/4/2018/11/1-1024x1024.jpg 1024w, client/q_glossy_ret_img_w_570/helendo/wp-content/uploads/sites/4/2018/11/1-570x570.jpg 570w, client/q_glossy_ret_img_w_600/helendo/wp-content/uploads/sites/4/2018/11/1-600x600.jpg 600w, client/q_glossy_ret_img_w_100/helendo/wp-content/uploads/sites/4/2018/11/1-100x100.jpg 100w, client/q_glossy_ret_img_w_1400/helendo/wp-content/uploads/sites/4/2018/11/1.jpg 1400w"
                                                                            sizes="(max-width: 500px) 100vw, 500px"/>
                                                                    </a>
                                                                    <div class="actions-button">
                                                                        <a href="index.html" data-id="599" class="helendo-product-quick-view button hidden-sm hidden-xs">
                                                                            <i class="p-icon icon-plus" title="Quick View" data-rel="tooltip"></i>
                                                                        </a>
                                                                        <a href="index.html" data-quantity="1"
                                                                            class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                            data-product_id="599" data-product_sku=""
                                                                            aria-label="Add &ldquo;Plant pots&rdquo; to your cart"
                                                                            rel="nofollow" data-title="Plant pots">
                                                                            <i class="p-icon icon-bag2" title="Add to cart" data-rel="tooltip"></i>
                                                                            <span class="add-to-cart-text">Add to cart</span>
                                                                        </a>
                                                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-599">
                                                                            <div class="yith-wcwl-add-button show" style="display:block">
                                                                                <a href="index.html#038;add_to_wishlist=599"
                                                                                    title="Add to Wishlist"
                                                                                    data-rel="tooltip"
                                                                                    data-product-id="599"
                                                                                    data-product-type="simple"
                                                                                    class="add_to_wishlist single_add_to_wishlist">
                                                                                    Add to Wishlist
                                                                                </a>
                                                                            </div>
                                                                            <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                                                                <span class="feedback">Product added!</span>
                                                                                <a href="index.html" data-rel="tooltip" title="Browse Wishlist"> Browse Wishlist </a>
                                                                            </div>
                                                                            <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                                                                                <span class="feedback">The product is already in the wishlist!</span>
                                                                                <a href="index.html" data-rel="tooltip" title="Browse Wishlist"> Browse Wishlist </a>
                                                                            </div>
                                                                            <div style="clear:both"></div>
                                                                            <div class="yith-wcwl-wishlistaddresponse"></div>
                                                                        </div>
                                                                        <div class="clear"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-details">
                                                                    <h2 class="woocommerce-loop-product__title">
                                                                        <a href="index.html">Plant pots</a>
                                                                    </h2>
                                                                    <span class="price">
                                                                        <span class="woocs_price_code" data-product-id="599">
                                                                            <span class="woocommerce-Price-amount amount">
                                                                                <bdi>
                                                                                    <span class="woocommerce-Price-currencySymbol">&pound;</span>
                                                                                    &nbsp;69.00
                                                                                </bdi>
                                                                            </span>
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <nav class="woocommerce-pagination">
                                                        <ul class='page-numbers'>
                                                            <li><span aria-current="page" class="page-numbers current">1</span></li>
                                                            <li><a class="page-numbers" href="index.html#038;product-page=2">2</a></li>
                                                            <li><a class="page-numbers" href="index.html#038;product-page=3">3</a></li>
                                                            <li><a class="next page-numbers" href="index.html#038;product-page=2">&rarr;</a></li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Best Selling End-->
                <div class="vc_row wpb_row vc_row-fluid">
                    <div class="container">
                        <div class="row">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="helendo-empty-space " style="">
                                            <div class="helendo_empty_space_lg hidden-md hidden-sm hidden-xs" style="height: 50px"></div>
                                            <div class="helendo_empty_space_md hidden-lg hidden-sm hidden-xs" style="height: 50px"></div>
                                            <div class="helendo_empty_space_sm hidden-lg hidden-md hidden-xs" style="height: 50px"></div>
                                            <div class="helendo_empty_space_xs hidden-lg hidden-md hidden-sm" style="height: 0px"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Latest From Our Blogs -->
                <!-- Latest From Our Blogs End -->
                <div class="vc_row wpb_row vc_row-fluid">
                    <div class="container">
                        <div class="row">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="helendo-empty-space " style="">
                                            <div class="helendo_empty_space_lg hidden-md hidden-sm hidden-xs" style="height: 50px"></div>
                                            <div class="helendo_empty_space_md hidden-lg hidden-sm hidden-xs" style="height: 50px"></div>
                                            <div class="helendo_empty_space_sm hidden-lg hidden-md hidden-xs" style="height: 50px"></div>
                                            <div class="helendo_empty_space_xs hidden-lg hidden-md hidden-sm" style="height: 0px"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_row wpb_row vc_row-fluid">
                    <div class="container">
                        <div class="row">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="helendo-empty-space " style="">
                                            <div class="helendo_empty_space_lg hidden-md hidden-sm hidden-xs" style="height: 180px"></div>
                                            <div class="helendo_empty_space_md hidden-lg hidden-sm hidden-xs" style="height: 180px"></div>
                                            <div class="helendo_empty_space_sm hidden-lg hidden-md hidden-xs" style="height: 120px"></div>
                                            <div class="helendo_empty_space_xs hidden-lg hidden-md hidden-sm" style="height: 40px"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

