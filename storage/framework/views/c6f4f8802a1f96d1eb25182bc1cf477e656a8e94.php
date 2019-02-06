<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title>Metronic Admin Theme #1 | Bootstrap Form Wizard</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #1 for bootstrap form wizard demos using Twitter Bootstrap Wizard Plugin" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="assets/css/components-md.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="assets/css/plugins-md.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="assets/css/layout.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
        <!-- END HEAD -->

        <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white page-sidebar-fixed page-md">

            <div class="page-wrapper">

                <!-- BEGIN HEADER -->
                <div class="page-header navbar navbar-fixed-top">
                    <!-- BEGIN HEADER INNER -->
                    <div class="page-header-inner ">
                        <!-- BEGIN LOGO -->
                        <div class="page-logo">
                            <a href="index.html">
                                <img src="/assets/img/logo.png" alt="logo" class="logo-default" /> </a>
                            <div class="menu-toggler sidebar-toggler">
                                <span></span>
                            </div>
                        </div>
                        <!-- END LOGO -->
                        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                            <span></span>
                        </a>
                        <!-- END RESPONSIVE MENU TOGGLER -->
                        <!-- BEGIN TOP NAVIGATION MENU -->
                        <div class="top-menu">
                            <ul class="nav navbar-nav pull-right">
                                <!-- BEGIN NOTIFICATION DROPDOWN -->
                                <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                        <i class="fa fa-bell"></i>
                                        <span class="badge badge-danger"> 7 </span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="external">
                                            <h3>Notifications</h3>
                                            <a href="javascript:;">View all</a>
                                        </li>
                                        <li>
                                            <ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
                                                <li>
                                                    <a href="javascript:;">
                                                        <span class="label label-sm label-icon label-success">
                                                            <i class="fa fa-plus"></i>
                                                        </span>
                                                        <span class="time">just now</span>
                                                        <div class="details">New user registered.</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <span class="label label-sm label-icon label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </span>
                                                        <span class="time">10 mins</span>
                                                        <div class="details">Server #12 overloaded.</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <span class="label label-sm label-icon label-info">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </span>
                                                        <span class="time">50 mins</span>
                                                        <div class="details">Application error.</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <span class="label label-sm label-icon label-warning">
                                                            <i class="fa fa-bell-o"></i>
                                                        </span>
                                                        <span class="time">4 days</span>
                                                        <div class="details" style="display: inline-block;">Storage Server #4 not responding dfdfdfd.</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <span class="label label-sm label-icon label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </span>
                                                        <span class="time">9 days</span>
                                                        <div class="details">Storage server failed.</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <!-- END NOTIFICATION DROPDOWN -->
                                <!-- BEGIN USER LOGIN DROPDOWN -->
                                <li class="dropdown dropdown-user">
                                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                        <img alt="" class="img-circle" src="assets/img/avatar3_small.jpg" />
                                        <span class="username username-hide-on-mobile"> Nick </span>
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-default">
                                        <li>
                                            <a href="page_user_profile_1.html">
                                                <i class="material-icons">person</i>My Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="app_inbox.html">
                                                <i class="material-icons">settings</i>Settings
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                <i class="fa fa-sign-out"></i>
                                                Log out
                                            </a>
                                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                                <?php echo e(csrf_field()); ?>

                                            </form>
                                        </li>
                                    </ul>
                                </li>
                                <!-- END USER LOGIN DROPDOWN -->
                            </ul>
                        </div>
                        <!-- END TOP NAVIGATION MENU -->
                    </div>
                    <!-- END HEADER INNER -->
                </div>
                <!-- END HEADER -->
                <!-- BEGIN HEADER & CONTENT DIVIDER -->
                <div class="clearfix"> </div>
                <!-- END HEADER & CONTENT DIVIDER -->