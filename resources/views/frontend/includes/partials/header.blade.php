<!-- header area start -->
<header>
    <div id="header-sticky" class="header__area grey-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                    <div class="logo">
                        <a href="index.html">
                            <img src="{{ asset('frontend/assets/img/logo/logo.png') }}" style="height: 80px" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8">
                    <div class="header__right p-relative d-flex justify-content-between align-items-center">
                        <div class="main-menu d-none d-lg-block">
                            <nav>
                                <ul id="mobile-menu-active">
                                        <li class="active"><a href="index.html">Home</a></li>
                                        <li><a href="#categories">Categories</a></li>
                                        <li><a href="#products">Products</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="mobile-menu-btn d-lg-none">
                            <a href="javascript:void(0);" class="mobile-menu-toggle"><i class="fas fa-bars"></i></a>
                        </div>
                        <div class="header__action">
                            <ul>
                                @guest('customer')
                                    <li><a href="javascript:void(0);" class="cart"><i class="ion-person"></i> Sign up </a></li>
                                    <li><a href="javascript:void(0);" class="cart"><i class="ion-person"></i> Sign In </a></li>
                                @else
                                <li><a href="javascript:void(0);" class="cart"><i class="ion-bag"></i> Cart <span>(01)</span></a>
                                    <ul class="mini-cart">
                                        <li>
                                            <div class="cart-img f-left">
                                                <a href="product-details.html">
                                                    <img src="{{ asset('frontend/assets/img/shop/product/cart-sm/16.jpg') }}" alt="" />
                                                </a>
                                            </div>
                                            <div class="cart-content f-left text-left">
                                                <h5>
                                                    <a href="product-details.html">Consectetur adi </a>
                                                </h5>
                                                <div class="cart-price">
                                                    <span class="ammount">1 <i class="fal fa-times"></i></span>
                                                    <span class="price">$ 400</span>
                                                </div>
                                            </div>
                                            <div class="del-icon f-right mt-30">
                                                <a href="#">
                                                    <i class="fal fa-times"></i>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="total-price">
                                                <span class="f-left">Subtotal:</span>
                                                <span class="f-right">$400.0</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkout-link">
                                                <a href="{{ route('frontend.yourCart')}}" class="os-btn">view Cart</a>
                                                <a class="os-btn os-btn-black" href="{{ route('frontend.checkout') }}">Checkout</a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header area end -->
