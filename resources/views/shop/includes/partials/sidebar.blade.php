<!-- Page Sidebar Start-->
<div class="page-sidebar">
    <div class="main-header-left d-none d-lg-block">
        <div class="logo-wrapper"><a href="#"><img style="width: 210px; height:35px;"
                                                   src="{{asset('assets/images/endless-logo.png')}}" alt=""></a></div>
    </div>
    <div class="sidebar custom-scrollbar">
        <div class="sidebar-user text-center">
            <div><img class="img-60 rounded-circle" src="{{auth('shop')->user()->getAvatarPath()}}" alt="#"></div>
            <h6 class="mt-3 f-14">{{auth('shop')->user()->owner_name}}</h6>
            <p>{{auth('shop')->user()->zip_code}}</p>
        </div>
        <ul class="sidebar-menu">
            <li><a class="sidebar-header" href="{{route('shopPOSs.index')}}"><i
                        data-feather="grid"></i><span>Dashboard</span></a></li>
            <li><a class="sidebar-header" href="{{route('manageMyShop.index')}}" target=""><i
                        data-feather="home"></i><span>Manage My Shop</span></a></li>
            <li><a class="sidebar-header" href="{{route('shopProducts.index')}}" target=""><i
                        data-feather="home"></i><span>Load Products</span></a></li>
            <li><a class="sidebar-header" href="{{route('manageMyProducts.index')}}" target=""><i
                        data-feather="home"></i><span>Manage My Product</span></a></li>
            {{--      <li><a class="sidebar-header" href="#" target="_blank"><i data-feather="mail"></i><span>Inbox</span></a></li>--}}
            <li><a class="sidebar-header" href="{{ route('orders.loadAllOrdersShop') }} " target="_blank"><i
                        data-feather="package"></i><span>Orders</span></a></li>
            <li>
                <a class="sidebar-header" href="{{ route('advertisements.index') }}">
                    <i data-feather="tag"></i><span>Advertisements</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- Page Sidebar Ends-->

