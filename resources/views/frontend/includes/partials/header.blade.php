<!-- header area start -->
<header>
    <div id="header-sticky" class="header__area grey-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                    <div class="logo">
                        <a href="{{ route('frontend.dashboard') }}">
                            <img src="{{ asset('frontend/assets/img/logo/logo.png') }}" style="height: 80px" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8">
                    <div class="header__right p-relative d-flex justify-content-between align-items-center">
                        <div class="main-menu d-none d-lg-block">
                            <nav>
                                <ul id="mobile-menu-active">
                                    @if(Route::currentRouteName() == 'frontend.dashboard')
                                        <li class="active"><a href="{{ route('frontend.dashboard') }}">Home</a></li>
                                        <li><a href="#categories">Categories</a></li>
                                        <li class="has-dropdown"><a href="">Products</a>
                                            <ul class="submenu transition-3">
                                                @forelse( _getAllCategories() as $category )
                                                    <li><a href="{{ route('frontend.subcategories', $category) }}">{{ $category->name }}</a></li>
                                                @empty
                                                @endforelse
                                            </ul>
                                        </li>
                                    @else
                                        <li class="active"><a href="{{ route('frontend.dashboard') }}">Home</a></li>
                                        <li class="has-dropdown"><a href="">Products</a>
                                            <ul class="submenu transition-3">
                                                @forelse( _getAllCategories() as $category )
                                                    <li><a href="{{ route('frontend.subcategories', $category) }}">{{ $category->name }}</a></li>
                                                @empty
                                                @endforelse
                                            </ul>
                                        </li>
                                    @endif
                                </ul>
                            </nav>
                        </div>
                        <div class="mobile-menu-btn d-lg-none">
                            <a href="javascript:void(0);" class="mobile-menu-toggle"><i class="fas fa-bars"></i></a>
                        </div>
                        <div class="header__action">
                            <ul>
                                @guest('customer')
                                    <li><a href="{{ route('customer.login') }}" class="cart"><i class="ion-person"></i> Sign In </a></li>
                                @else
                                <li><a href="javascript:void(0);" class="cart"><i class="ion-bag"></i> Cart <span>( {{ _getCartsCount() }} )</span></a>
                                    <ul class="mini-cart">
                                        @forelse(_getCustomerCart() as $cart)
                                        <li>
                                            <div class="cart-img f-left">
                                                <a href="#">
                                                    @if(strpos($cart->product->icon,'100x75'))
                                                    <img src="{{ $cart->product->getIconPath('md') }}" style="width:100px;height: 80px;" alt="product-img">
                                                    @elseif(strpos($cart->product->icon,'50x75'))
                                                        <img src="{{ $cart->product->getIconPath('pmd') }}" style="width:60px ;height: 95px" alt="product-img">
                                                    @else
                                                        <img src="{{ $cart->product->getIconPath('emd') }}" style="width:100px; height: 100px" alt="product-img">
                                                    @endif

                                                </a>
                                            </div>
                                            <div class="cart-content f-left text-left">
                                                <h5>
                                                    <a href="#">{{ $cart->product->name }} </a>
                                                </h5>
                                                <div class="cart-price">
                                                    <span class="ammount">{{ $cart->qty }} <i class="fal fa-times"></i></span>
                                                    <span class="price">${{ $cart->product->price }}</span><br>
                                                    <span class="price"><b>Total : ${{ $cart->qty * $cart->product->price }}</b></span>
                                                </div>
                                            </div>
                                        </li>
                                        @empty
                                            <li>Nothing in cart</li>
                                        @endforelse
                                        <li>
                                            <div class="total-price">
                                                <span class="f-left">Subtotal:</span>
                                                <span class="f-right">${{_getCustomerCartTotalAmount()}}</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkout-link">
                                                <a href="{{ route('carts.index')}}" class="os-btn">View Cart</a>

                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0);" class="cart"><i class="ion-person"></i> {{ auth('customer')->user()->name }} </a>
                                    <ul class="mini-cart">
{{--                                        <li class="total-price">--}}
{{--                                            <a href="{{ route('customer.logout') }}"--}}
{{--                                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">--}}
{{--                                                <i class="ion-person"></i> Logout</a>--}}
{{--                                        </li>--}}
{{--                                        <form id="logout-form" action="{{ route('customer.logout') }}" method="POST"--}}
{{--                                              style="display: none;">--}}
{{--                                            @csrf--}}
{{--                                        </form>--}}
                                        <li>
                                            <div>
                                                <a href="{{ route('customer.logout') }}"
                                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                <i class="ion-power" style="color: black; margin-left: 5px"></i> <span style="color: black"> Logout</span></a>
                                                <form id="logout-form" action="{{ route('customer.logout') }}" method="POST"
                                                      style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
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
