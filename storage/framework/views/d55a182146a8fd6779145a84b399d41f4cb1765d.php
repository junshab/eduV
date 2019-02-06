<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
            <li class="sidebar-toggler-wrapper hide">
                <div class="sidebar-toggler">
                    <span></span>
                </div>
            </li>
            <!-- END SIDEBAR TOGGLER BUTTON -->
            <li class="nav-item start <?php echo e(Request::is('dashboard') ? 'active' : ''); ?>">
                <a href="<?php echo e(url('dashboard')); ?>" class="nav-link nav-toggle">
                    <i class="fa fa-home"></i>
                    <span class="title">Dashboard</span>
                    <span class="arrow"></span>
                </a>
            </li>
            <li class="heading">
                <h3 class="uppercase">Students</h3>
            </li>
            <li class="nav-item <?php echo e(Request::is('admission') ? 'active open' : ''); ?>">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-user"></i>
                    <span class="title">Students</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item <?php echo e(Request::is('admission') ? 'active' : ''); ?>">
                        <a href="<?php echo e(url('admission')); ?>" class="nav-link ">
                            <span class="title">Student Admission</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="ui_colors.html" class="nav-link ">
                            <span class="title">Students</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
<!-- END SIDEBAR -->