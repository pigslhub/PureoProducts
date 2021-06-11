<!-- Page Sidebar Start-->
<div class="page-sidebar">
    <div class="main-header-left d-none d-lg-block">
        <h4 style="color: white" class="text-center">PureO Natural Products</h4>


    </div>
    <div class="sidebar custom-scrollbar">
        <div class="sidebar-user text-center">
            <div><img class="img-60 rounded-circle" src="<?php echo e(auth('admin')->user()->getAvatarPath()); ?>" alt="#"></div>
            <h6 class="mt-3 f-14"><?php echo e(auth('admin')->user()->name); ?></h6>
            <p><?php echo e(auth('admin')->user()->zip_code); ?></p>
        </div>
        <ul class="sidebar-menu">
            <li><a class="sidebar-header" href="<?php echo e(route('admin.dashboardPos')); ?>"><i data-feather="grid"></i><span>Dashboard</span></a></li>
            <li><a class="sidebar-header" href="<?php echo e(route('adminCategories.index')); ?>"><i
                        data-feather="bar-chart-2"></i><span>Categories</span></a></li>
            <li><a class="sidebar-header" href="<?php echo e(route('adminSubCategories.index')); ?>"><i data-feather="server"></i><span>Sub Categories</span></a>
            </li>
            <li><a class="sidebar-header" href="<?php echo e(route('adminProducts.index')); ?>"><i data-feather="server"></i><span>Products</span></a>
            </li>
            <!-- <li><a class="sidebar-header" href="<?php echo e(route('adminShops.index')); ?>"><i data-feather="home"></i><span>Shop Management</span></a>
            </li> -->
            <li><a class="sidebar-header" href="<?php echo e(route('orders.loadAllOrders')); ?>"><i data-feather="package"></i><span>Order</span></a>
            </li>




        </ul>
    </div>
</div>
<!-- Page Sidebar Ends-->

<?php /**PATH /home/pigstuhq/pureoproducts.pigslhub.com/resources/views/admin/includes/partials/sidebar.blade.php ENDPATH**/ ?>