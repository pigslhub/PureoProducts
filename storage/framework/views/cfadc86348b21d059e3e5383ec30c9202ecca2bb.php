<!-- Page Header Start-->
<div class="page-main-header">
    <div class="main-header-right row">
        <div class="main-header-left d-lg-none">
            <div class="logo-wrapper"><a href="#"><img src="<?php echo e(asset('assets/images/endless-logo.png')); ?>" alt=""></a>
            </div>
        </div>
        <div class="mobile-sidebar">
            <div class="media-body text-right switch-sm">
                <label class="switch"><a href="#"><i id="sidebar-toggle" data-feather="align-left"></i></a></label>
            </div>
        </div>
        <div class="nav-right col p-0">
            <ul class="nav-menus">
                <li>

                </li>
                <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i
                            data-feather="maximize"></i></a></li>


                <li class="onhover-dropdown">
                    <div class="media align-items-center"><img
                            class="align-self-center pull-right img-50 rounded-circle"
                            src="<?php echo e(auth('admin')->user()->getAvatarPath()); ?>" alt="header-user">
                        <div class="dotted-animation"><span class="animate-circle"></span><span
                                class="main-circle"></span></div>
                    </div>
                    <ul class="profile-dropdown onhover-show-div p-20">
                        <li><a href="<?php echo e(route('admin.profile')); ?>"><i data-feather="user"></i>Edit Profile</a></li>
                        <li>
                            <a href="<?php echo e(route('admin.logout')); ?>"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i data-feather="log-out"></i> Logout</a>
                        </li>
                        <form id="logout-form" action="<?php echo e(route('admin.logout')); ?>" method="POST"
                              style="display: none;">
                            <?php echo csrf_field(); ?>
                        </form>
                    </ul>
                </li>
            </ul>
            <div class="d-lg-none mobile-toggle pull-right"><i data-feather="more-horizontal"></i></div>
        </div>
        <script id="result-template" type="text/x-handlebars-template">
            <div class="ProfileCard u-cf">

                <div class="ProfileCard-avatar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-airplay m-0">
                        <path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path>
                        <polygon points="12 15 17 21 7 21 12 15"></polygon>
                    </svg>
                </div>
                <div class="ProfileCard-details">
                    <div class="ProfileCard-realName">{{name}}</div>
                </div>
            </div>
        </script>

    </div>
</div>
<!-- Page Header Ends -->
<?php /**PATH C:\Users\shiza\Desktop\SirImran\PureoProducts\resources\views/admin/includes/partials/header.blade.php ENDPATH**/ ?>