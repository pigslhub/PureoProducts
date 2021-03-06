<!-- Page Sidebar Start-->
<div class="page-sidebar">
    <div class="main-header-left d-none d-lg-block">
        <h4 style="color: white; margin-top: 15px" class="text-center">Insaf Gift Center</h4>
{{--        <div class="logo-wrapper"><a href="#"><img style="width: 210px; height:35px;"--}}
{{--                                                   src="{{asset('assets/images/endless-logo.png')}}" alt=""></a></div>--}}
    </div>
    <div class="sidebar custom-scrollbar">
        <div class="sidebar-user text-center">
            <div><img class="img-60 rounded-circle" src="{{auth('admin')->user()->getAvatarPath()}}" alt="#"></div>
            <h6 class="mt-3 f-14">{{auth('admin')->user()->name}}</h6>
        </div>
        <ul class="sidebar-menu">
            <li><a class="sidebar-header" href="{{route('admin.dashboardPos')}}"><i data-feather="grid"></i><span>Dashboard</span></a></li>
{{--            <li><a class="sidebar-header" href="{{route('adminCategories.index')}}"><i--}}
{{--                        data-feather="bar-chart-2"></i><span>Categories</span></a></li>--}}
{{--            <li><a class="sidebar-header" href="{{route('adminSubCategories.index')}}"><i data-feather="server"></i><span>Sub Categories</span></a>--}}
{{--            </li>--}}
            <li><a class="sidebar-header" href="{{route('products.index')}}"><i data-feather="server"></i><span>Products</span></a>
            </li>
            <!-- <li><a class="sidebar-header" href="{{route('adminShops.index')}}"><i data-feather="home"></i><span>Shop Management</span></a>
            </li> -->
            <li><a class="sidebar-header" href="{{route('orders.index')}}"><i data-feather="package"></i><span>Order</span></a>
            </li>
            <li><a class="sidebar-header" href="{{route('earnings.viewTotalEarning')}}"><i data-feather="dollar-sign"></i><span>Revenue</span></a>
            </li>
            <li><a class="sidebar-header" href="{{route('sales_return.index')}}"><i data-feather="folder-minus"></i><span>Sales Return</span></a>
            </li>
{{--            <li><a class="sidebar-header" href="{{route('adminCustomers.index')}}"><i data-feather="users"></i><span>Customers Management</span></a>--}}
{{--            </li>--}}
        </ul>
    </div>
</div>
<!-- Page Sidebar Ends-->

