<?php  require_login(); ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>ToNote Admin | <?php echo $page_title ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Tonote is a legally binding and fully remote way to sign" name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo url_for('assets/images/fav.png') ?>">


        <!-- App css -->
        <link href="<?php echo url_for('assets/css/icons.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo url_for('assets/css/app-creative.min.css') ?>" rel="stylesheet" type="text/css" id="light-style" />
        <link href="<?php echo url_for('assets/css/app-creative-dark.min.css') ?>" rel="stylesheet" type="text/css" id="dark-style" />

    </head>
    <style type="text/css">
        .analytic .active{
            background-color: #063bb3;
            
        }
        .analytic .active .text-dark{
            color: white !important;
        }
        .analytic .card:hover{
            background-color: #b2c4d7;
            color: red;
        }
        .analytic .card:hover h5{
            color: #FFF !important;
        }
        .rowBg{
            background-color: #011d5a;
            color: white;
        }
    </style> 
    <body class="loading" data-layout="topnav" data-layout-config='{"layoutBoxed":false,"darkMode":false,"showRightSidebarOnStart": true}'>

        <!-- Begin page -->
        <div class="wrapper">

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    <!-- Topbar Start -->
                    <div class="navbar-custom topnav-navbar">
                        <div class="container-fluid">

                            <!-- LOGO -->
                            <a href="<?php echo url_for('public/dashboard/') ?>" class="topnav-logo">
                                <span class="topnav-logo-lg">
                                    <img src="<?php echo url_for('assets/images/logo-dark.png') ?>" alt="" height="26">
                                </span>
                                <span class="topnav-logo-sm">
                                    <img src="<?php echo url_for('assets/images/logo_sm.png') ?>" alt="" height="26">
                                </span>
                            </a>

                            <ul class="list-unstyled topbar-menu float-end mb-0">

                               <!--  <li class="dropdown notification-list d-xl-none">
                                    <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                        <i class="dripicons-search noti-icon"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                                        <form class="p-3">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                        </form>
                                    </div>
                                </li> -->
                        
                               
                
                                <li class="dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" id="topbar-notifydrop" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="dripicons-bell noti-icon"></i>
                                        <span class="noti-icon-badge"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg" aria-labelledby="topbar-notifydrop">
                
                                        <!-- item-->
                                        <div class="dropdown-item noti-title">
                                            <h5 class="m-0">
                                                <span class="float-end">
                                                    <a href="javascript: void(0);" class="text-dark">
                                                        <small>Clear All</small>
                                                    </a>
                                                </span>Notification
                                            </h5>
                                        </div>
                
                                        <div style="max-height: 230px;" data-simplebar>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="notify-icon bg-primary">
                                                    <i class="mdi mdi-comment-account-outline"></i>
                                                </div>
                                                <p class="notify-details">Caleb Flakelar commented on Admin
                                                    <small class="text-muted">1 min ago</small>
                                                </p>
                                            </a>
                
                                            
                                        </div>
                
                                        <!-- All-->
                                        <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                            View All
                                        </a>
                
                                    </div>
                                </li>

                               

                                
                                <li class="dropdown notification-list">
                                    <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" id="topbar-userdrop" href="#" role="button" aria-haspopup="true"
                                        aria-expanded="false">
                                        <span class="account-user-avatar"> 
                                            <img src="<?php echo url_for('assets/images/users/avatar-1.jpg') ?>" alt="user-image" class="rounded-circle">
                                        </span>
                                        <span>
                                            <span class="account-user-name"><?php echo $loggedInAdmin->full_name() ?></span>
                                            <span class="account-position"><?php echo Admin::ADMIN_LEVEL[$loggedInAdmin->admin_level] ?></span>
                                        </span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown" aria-labelledby="topbar-userdrop">
                                        <!-- item-->
                                        <div class=" dropdown-header noti-title">
                                            <h6 class="text-overflow m-0">Welcome !</h6>
                                        </div>
                
                                        <!-- item-->
                                        <!-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="mdi mdi-account-circle me-1"></i>
                                            <span>My Account</span>
                                        </a> -->
                
                                        <!-- item-->
                                        <!-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="mdi mdi-account-edit me-1"></i>
                                            <span>Settings</span>
                                        </a> -->
                
                                        <!-- item-->
                                        <!-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="mdi mdi-lifebuoy me-1"></i>
                                            <span>Support</span>
                                        </a> -->
                
                                        <!-- item-->
                                        <!-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="mdi mdi-lock-outline me-1"></i>
                                            <span>Lock Screen</span>
                                        </a> -->
                
                                        <!-- item-->
                                        <a href="<?php echo url_for('logout.php') ?>" class="dropdown-item notify-item">
                                            <i class="mdi mdi-logout me-1"></i>
                                            <span>Logout</span>
                                        </a>
                
                                    </div>
                                </li>

                            </ul>
                            <a class="button-menu-mobile disable-btn">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <div class="app-search dropdown d-none">
                                <form>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search..." id="top-search">
                                        <span class="mdi mdi-magnify search-icon"></span>
                                        <button class="input-group-text btn-primary" type="submit">Search</button>
                                    </div>
                                </form>
                                <div class="dropdown-menu dropdown-menu-animated dropdown-lg" id="search-dropdown">
                                    <!-- item-->
                                    <div class="dropdown-header noti-title">
                                        <h5 class="text-overflow mb-2">Found <span class="text-danger">17</span> results</h5>
                                    </div>
                
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="uil-notes font-16 me-1"></i>
                                        <span>Analytics Report</span>
                                    </a>
                
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="uil-life-ring font-16 me-1"></i>
                                        <span>How can I help you?</span>
                                    </a>
                
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="uil-cog font-16 me-1"></i>
                                        <span>User profile settings</span>
                                    </a>
                
                                    <!-- item-->
                                    <div class="dropdown-header noti-title">
                                        <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
                                    </div>
                
                                    <div class="notification-list">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="d-flex">
                                                <img class="d-flex me-2 rounded-circle" src="assets/images/users/avatar-2.jpg" alt="Generic placeholder image" height="32">
                                                <div class="w-100">
                                                    <h5 class="m-0 font-14">Erwin Brown</h5>
                                                    <span class="font-12 mb-0">UI Designer</span>
                                                </div>
                                            </div>
                                        </a>
                
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="d-flex">
                                                <img class="d-flex me-2 rounded-circle" src="assets/images/users/avatar-5.jpg" alt="Generic placeholder image" height="32">
                                                <div class="w-100">
                                                    <h5 class="m-0 font-14">Jacob Deo</h5>
                                                    <span class="font-12 mb-0">Developer</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <!-- end Topbar -->

                    <div class="topnav shadow-sm">
                        <div class="container-fluid">
                            <nav class="navbar navbar-light navbar-expand-lg topnav-menu">
        
                                <div class="collapse navbar-collapse" id="topnav-menu-content">
                                    <ul class="navbar-nav">
                                        
                                            
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-dashboards" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="uil-dashboard me-1"></i>Dashboards <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-dashboards">
                                                <!-- <a href="dashboard-analytics.html" class="dropdown-item">Analytics</a> -->
                                                <a href="<?php echo url_for('public/dashboard/') ?>" class="dropdown-item">CRM</a>
                                                <!-- <a href="index.html" class="dropdown-item">Ecommerce</a> -->
                                                <!-- <a href="dashboard-projects.html" class="dropdown-item">Projects</a> -->
                                            </div>
                                        </li>
                                       <?php if (!in_array($loggedInAdmin->admin_level , [3])) { ?>
                                           
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-apps" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="uil-apps me-1"></i>Apps <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-apps">
                                                <a href="<?php echo url_for('public/users/') ?>" class="dropdown-item">Users</a>
                                                <!-- <a href="apps-chat.html" class="dropdown-item">Tickets</a> -->
                                                
                                            </div>
                                        </li>
                                        <?php } ?>
                                        <li class="nav-item dropdown">
                                             <a href="<?php echo url_for('public/support/') ?>" class="nav-link"><i class="uil-apps me-1"></i> My Task</a>
                                        </li>


                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-apps" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="uil-apps me-1"></i>Blog <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-apps">
                                                <a href="<?php echo url_for('public/blog_post/') ?>" class="dropdown-item">List Post</a>
                                                <a href="<?php echo url_for('public/blog_post/create.php') ?>" class="dropdown-item">Create New Post</a>
                                                <a href="<?php echo url_for('public/blog_post/category/') ?>" class="dropdown-item">List Category</a>
                                                
                                            </div>
                                        </li>
                                        
                                       
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>

                    <!-- Start Content-->
                <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <!-- <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li> -->
                                    <li class="breadcrumb-item">
                                        <a href="<?php echo isset($_SERVER['PHP_SELF']) ? $_SERVER['PHP_SELF'] : "" ; ?>"><?php echo $page ?? '' ?></a>

                                    </li>
                                    <li class="breadcrumb-item active"><?php echo $page_title ?? '' ?></li>
                                </ol>
                            </div>
                            <h4 class="page-title"><?php echo $page_title ?? '' ?></h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title --> 
