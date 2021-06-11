<!-- Page Sidebar Start-->
<div class="page-sidebar">
    <div class="main-header-left d-none d-lg-block">
        <h4 style="color: white; margin-top: 15px" class="text-center">Insaf Gift Center</h4>


    </div>
    <div class="sidebar custom-scrollbar">
        <div class="sidebar-user text-center">
            <div><img class="img-60 rounded-circle" src="<?php echo e(auth('admin')->user()->getAvatarPath()); ?>" alt="#"></div>
            <h6 class="mt-3 f-14"><?php echo e(auth('admin')->user()->name); ?></h6>
        </div>
        <ul class="sidebar-menu">
            <li><a class="sidebar-header" href="<?php echo e(route('admin.dashboardPos')); ?>"><i data-feather="grid"></i><span>Dashboard</span></a></li>




            <li><a class="sidebar-header" href="<?php echo e(route('products.index')); ?>"><i data-feather="server"></i><span>Products</span></a>
            </li>
            <!-- <li><a class="sidebar-header" href="<?php echo e(route('adminShops.index')); ?>"><i data-feather="home"></i><span>Shop Management</span></a>
            </li> -->
            <li><a class="sidebar-header" href="<?php echo e(route('orders.index')); ?>"><i data-feather="package"></i><span>Order</span></a>
            </li>
            <li><a class="sidebar-header" href="<?php echo e(route('earnings.viewTotalEarning')); ?>"><i data-feather="dollar-sign"></i><span>Revenue</span></a>
            </li>




        </ul>
    </div>
</div>
<!-- Page Sidebar Ends-->

<?php /**PATH C:\Users\shiza\Desktop\SirImran\PureoProducts\resources\views/admin/includes/partials/sidebar.blade.php ENDPATH**/ ?>