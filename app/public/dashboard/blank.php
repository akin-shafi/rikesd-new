<?php 
	require_once('../../private/initialize.php');

$page = 'Dashboard';
$page_title = 'Home';
include(SHARED_PATH . '/admin_header.php'); 

?>

        <!-- Begin page -->
        <div class="wrapper">

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    <!-- Topbar Start -->
                    <div class="navbar-custom topnav-navbar topnav-navbar-dark">
                        <div class="container-fluid">

                            <!-- LOGO -->
                            <a href="" class="topnav-logo">
                                <span class="topnav-logo-lg">
                                    <img src="assets/images/logo-light.png" alt="" height="16">
                                </span>
                                <span class="topnav-logo-sm">
                                    <img src="assets/images/logo_sm_dark.png" alt="" height="16">
                                </span>
                            </a>

                            <ul class="list-unstyled topbar-menu float-end mb-0">

                                <li class="dropdown notification-list d-xl-none">
                                    <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                        <i class="dripicons-search noti-icon"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                                        <form class="p-3">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                        </form>
                                    </div>
                                </li>
            
                                <li class="dropdown notification-list topbar-dropdown d-none d-lg-block">
                                    <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" id="topbar-languagedrop" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                        <img src="assets/images/flags/us.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">English</span> <i class="mdi mdi-chevron-down align-middle"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu" aria-labelledby="topbar-languagedrop">
    
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <img src="assets/images/flags/germany.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
                                        </a>
    
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <img src="assets/images/flags/italy.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
                                        </a>
                    
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <img src="assets/images/flags/spain.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                                        </a>
    
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <img src="assets/images/flags/russia.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                                        </a>
    
                                    </div>
                                </li>
    
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
    
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="notify-icon bg-info">
                                                    <i class="mdi mdi-account-plus"></i>
                                                </div>
                                                <p class="notify-details">New user registered.
                                                    <small class="text-muted">5 hours ago</small>
                                                </p>
                                            </a>
    
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="notify-icon">
                                                    <img src="assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                                <p class="notify-details">Cristina Pride</p>
                                                <p class="text-muted mb-0 user-msg">
                                                    <small>Hi, How are you? What about our next meeting</small>
                                                </p>
                                            </a>
    
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="notify-icon bg-primary">
                                                    <i class="mdi mdi-comment-account-outline"></i>
                                                </div>
                                                <p class="notify-details">Caleb Flakelar commented on Admin
                                                    <small class="text-muted">4 days ago</small>
                                                </p>
                                            </a>
    
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="notify-icon">
                                                    <img src="assets/images/users/avatar-4.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                                <p class="notify-details">Karen Robinson</p>
                                                <p class="text-muted mb-0 user-msg">
                                                    <small>Wow ! this admin looks good and awesome design</small>
                                                </p>
                                            </a>
    
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="notify-icon bg-info">
                                                    <i class="mdi mdi-heart"></i>
                                                </div>
                                                <p class="notify-details">Carlos Crouch liked
                                                    <b>Admin</b>
                                                    <small class="text-muted">13 days ago</small>
                                                </p>
                                            </a>
                                        </div>
    
                                        <!-- All-->
                                        <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                            View All
                                        </a>
    
                                    </div>
                                </li>

                                <li class="dropdown notification-list d-none d-sm-inline-block">
                                    <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                        <i class="dripicons-view-apps noti-icon"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg p-0">
    
                                        <div class="p-2">
                                            <div class="row g-0">
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="#">
                                                        <img src="assets/images/brands/slack.png" alt="slack">
                                                        <span>Slack</span>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="#">
                                                        <img src="assets/images/brands/github.png" alt="Github">
                                                        <span>GitHub</span>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="#">
                                                        <img src="assets/images/brands/dribbble.png" alt="dribbble">
                                                        <span>Dribbble</span>
                                                    </a>
                                                </div>
                                            </div>
    
                                            <div class="row g-0">
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="#">
                                                        <img src="assets/images/brands/bitbucket.png" alt="bitbucket">
                                                        <span>Bitbucket</span>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="#">
                                                        <img src="assets/images/brands/dropbox.png" alt="dropbox">
                                                        <span>Dropbox</span>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="#">
                                                        <img src="assets/images/brands/g-suite.png" alt="G Suite">
                                                        <span>G Suite</span>
                                                    </a>
                                                </div>
                
                                            </div>
                                        </div>
    
                                    </div>
                                </li>

                                <li class="notification-list">
                                    <a class="nav-link end-bar-toggle" href="javascript: void(0);">
                                        <i class="dripicons-gear noti-icon"></i>
                                    </a>
                                </li>
    
                                <li class="dropdown notification-list">
                                    <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" id="topbar-userdrop" href="#" role="button" aria-haspopup="true"
                                        aria-expanded="false">
                                        <span class="account-user-avatar"> 
                                            <img src="assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                                        </span>
                                        <span>
                                            <span class="account-user-name">Dominic Keller</span>
                                            <span class="account-position">Founder</span>
                                        </span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown" aria-labelledby="topbar-userdrop">
                                        <!-- item-->
                                        <div class=" dropdown-header noti-title">
                                            <h6 class="text-overflow m-0">Welcome !</h6>
                                        </div>
    
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="mdi mdi-account-circle me-1"></i>
                                            <span>My Account</span>
                                        </a>
    
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="mdi mdi-account-edit me-1"></i>
                                            <span>Settings</span>
                                        </a>
    
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="mdi mdi-lifebuoy me-1"></i>
                                            <span>Support</span>
                                        </a>
    
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="mdi mdi-lock-outline me-1"></i>
                                            <span>Lock Screen</span>
                                        </a>
    
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="mdi mdi-logout me-1"></i>
                                            <span>Logout</span>
                                        </a>
    
                                    </div>
                                </li>

                            </ul>
                            <a class="navbar-toggle"  data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <div class="app-search dropdown">
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
                                                <a href="dashboard-analytics" class="dropdown-item">Analytics</a>
                                                <a href="dashboard-crm" class="dropdown-item">CRM</a>
                                                <a href="index" class="dropdown-item">Ecommerce</a>
                                                <a href="dashboard-projects" class="dropdown-item">Projects</a>
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-apps" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="uil-apps me-1"></i>Apps <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-apps">
                                                <a href="apps-calendar" class="dropdown-item">Calendar</a>
                                                <a href="apps-chat" class="dropdown-item">Chat</a>
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-ecommerce" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Ecommerce <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-ecommerce">
                                                        <a href="apps-ecommerce-products" class="dropdown-item">Products</a>
                                                        <a href="apps-ecommerce-products-details" class="dropdown-item">Products Details</a>
                                                        <a href="apps-ecommerce-orders" class="dropdown-item">Orders</a>
                                                        <a href="apps-ecommerce-orders-details" class="dropdown-item">Order Details</a>
                                                        <a href="apps-ecommerce-customers" class="dropdown-item">Customers</a>
                                                        <a href="apps-ecommerce-shopping-cart" class="dropdown-item">Shopping Cart</a>
                                                        <a href="apps-ecommerce-checkout" class="dropdown-item">Checkout</a>
                                                        <a href="apps-ecommerce-sellers" class="dropdown-item">Sellers</a>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-email" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Email <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-email">
                                                        <a href="apps-email-inbox" class="dropdown-item">Inbox</a>
                                                        <a href="apps-email-read" class="dropdown-item">Read Email</a>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-project" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Projects <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-project">
                                                        <a href="apps-projects-list" class="dropdown-item">List</a>
                                                        <a href="apps-projects-details" class="dropdown-item">Details</a>
                                                        <a href="apps-projects-gantt" class="dropdown-item">Gantt</a>
                                                        <a href="apps-projects-add" class="dropdown-item">Create Project</a>
                                                    </div>
                                                </div>
                                                <a href="apps-social-feed" class="dropdown-item">Social Feed</a>
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-tasks" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Tasks <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-tasks">
                                                        <a href="apps-tasks" class="dropdown-item">List</a>
                                                        <a href="apps-tasks-details" class="dropdown-item">Details</a>
                                                        <a href="apps-kanban" class="dropdown-item">Kanban Board</a>
                                                    </div>
                                                </div>
                                                <a href="apps-file-manager" class="dropdown-item">File Manager</a>
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="uil-copy-alt me-1"></i>Pages <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-pages">
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-auth" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Authenitication <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-auth">
                                                        <a href="pages-login" class="dropdown-item">Login</a>
                                                        <a href="pages-login-2" class="dropdown-item">Login 2</a>
                                                        <a href="pages-register" class="dropdown-item">Register</a>
                                                        <a href="pages-register-2" class="dropdown-item">Register 2</a>
                                                        <a href="pages-logout" class="dropdown-item">Logout</a>
                                                        <a href="pages-logout-2" class="dropdown-item">Logout 2</a>
                                                        <a href="pages-recoverpw" class="dropdown-item">Recover Password</a>
                                                        <a href="pages-recoverpw-2" class="dropdown-item">Recover Password 2</a>
                                                        <a href="pages-lock-screen" class="dropdown-item">Lock Screen</a>
                                                        <a href="pages-lock-screen-2" class="dropdown-item">Lock Screen 2</a>
                                                        <a href="pages-confirm-mail" class="dropdown-item">Confirm Mail</a>
                                                        <a href="pages-confirm-mail-2" class="dropdown-item">Confirm Mail 2</a>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-error" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Error <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-error">
                                                        <a href="pages-404" class="dropdown-item">Error 404</a>
                                                        <a href="pages-404-alt" class="dropdown-item">Error 404-alt</a>
                                                        <a href="pages-500" class="dropdown-item">Error 500</a>
                                                    </div>
                                                </div>
                                                <a href="pages-starter" class="dropdown-item">Starter Page</a>
                                                <a href="pages-preloader" class="dropdown-item">With Preloader</a>
                                                <a href="pages-profile" class="dropdown-item">Profile</a>
                                                <a href="pages-profile-2" class="dropdown-item">Profile 2</a>
                                                <a href="pages-invoice" class="dropdown-item">Invoice</a>
                                                <a href="pages-faq" class="dropdown-item">FAQ</a>
                                                <a href="pages-pricing" class="dropdown-item">Pricing</a>
                                                <a href="pages-maintenance" class="dropdown-item">Maintenance</a>
                                                <a href="pages-timeline" class="dropdown-item">Timeline</a>
                                                <a href="landing" class="dropdown-item">Landing</a>
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-components" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="uil-package me-1"></i>Components <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-components">
                                                <a href="widgets" class="dropdown-item">Widgets</a>
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-ui-kit" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Base UI 1 <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-ui-kit">
                                                        <a href="ui-accordions" class="dropdown-item">Accordions</a>
                                                        <a href="ui-alerts" class="dropdown-item">Alerts</a>
                                                        <a href="ui-avatars" class="dropdown-item">Avatars</a>
                                                        <a href="ui-badges" class="dropdown-item">Badges</a>
                                                        <a href="ui-breadcrumb" class="dropdown-item">Breadcrumb</a>
                                                        <a href="ui-buttons" class="dropdown-item">Buttons</a>
                                                        <a href="ui-cards" class="dropdown-item">Cards</a>
                                                        <a href="ui-carousel" class="dropdown-item">Carousel</a>
                                                        <a href="ui-dropdowns" class="dropdown-item">Dropdowns</a>
                                                        <a href="ui-embed-video" class="dropdown-item">Embed Video</a>
                                                        <a href="ui-grid" class="dropdown-item">Grid</a>
                                                        <a href="ui-list-group" class="dropdown-item">List Group</a>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-ui-kit2" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Base UI 2 <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-ui-kit2">
                                                        <a href="ui-modals" class="dropdown-item">Modals</a>
                                                        <a href="ui-notifications" class="dropdown-item">Notifications</a>
                                                        <a href="ui-offcanvas" class="dropdown-item">Offcanvas</a>
                                                        <a href="ui-placeholders" class="dropdown-item">Placeholders</a>
                                                        <a href="ui-pagination" class="dropdown-item">Pagination</a>
                                                        <a href="ui-popovers" class="dropdown-item">Popovers</a>
                                                        <a href="ui-progress" class="dropdown-item">Progress</a>
                                                        <a href="ui-ribbons" class="dropdown-item">Ribbons</a>
                                                        <a href="ui-spinners" class="dropdown-item">Spinners</a>
                                                        <a href="ui-tabs" class="dropdown-item">Tabs</a>
                                                        <a href="ui-tooltips" class="dropdown-item">Tooltips</a>
                                                        <a href="ui-typography" class="dropdown-item">Typography</a>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-extended-ui" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Extended UI <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-extended-ui">
                                                        <a href="extended-dragula" class="dropdown-item">Dragula</a>
                                                        <a href="extended-range-slider" class="dropdown-item">Range Slider</a>
                                                        <a href="extended-ratings" class="dropdown-item">Ratings</a>
                                                        <a href="extended-scrollbar" class="dropdown-item">Scrollbar</a>
                                                        <a href="extended-scrollspy" class="dropdown-item">Scrollspy</a>
                                                        <a href="extended-treeview" class="dropdown-item">Treeview</a>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-charts" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Charts <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-charts">
                                                        <div class="dropdown">
                                                            <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-apex-charts" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Apex Charts <div class="arrow-down"></div>
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="topnav-apex-charts">
                                                                <a href="charts-apex-area" class="dropdown-item">Area</a>
                                                                <a href="charts-apex-bar" class="dropdown-item">Bar</a>
                                                                <a href="charts-apex-bubble" class="dropdown-item">Bubble</a>
                                                                <a href="charts-apex-candlestick" class="dropdown-item">Candlestick</a>
                                                                <a href="charts-apex-column" class="dropdown-item">Column</a>
                                                                <a href="charts-apex-heatmap" class="dropdown-item">Heatmap</a>
                                                                <a href="charts-apex-line" class="dropdown-item">Line</a>
                                                                <a href="charts-apex-mixed" class="dropdown-item">Mixed</a>
                                                                <a href="charts-apex-pie" class="dropdown-item">Pie</a>
                                                                <a href="charts-apex-radar" class="dropdown-item">Radar</a>
                                                                <a href="charts-apex-radialbar" class="dropdown-item">RadialBar</a>
                                                                <a href="charts-apex-scatter" class="dropdown-item">Scatter</a>
                                                                <a href="charts-apex-sparklines" class="dropdown-item">Sparklines</a>
                                                            </div>
                                                        </div>
                                                        <a href="charts-chartjs" class="dropdown-item">Chartjs</a>
                                                        <a href="charts-brite" class="dropdown-item">Britecharts</a>
                                                        <a href="charts-sparkline" class="dropdown-item">Sparklines</a>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-forms" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Forms <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-forms">
                                                        <a href="form-elements" class="dropdown-item">Basic Elements</a>
                                                        <a href="form-advanced" class="dropdown-item">Form Advanced</a>
                                                        <a href="form-validation" class="dropdown-item">Validation</a>
                                                        <a href="form-wizard" class="dropdown-item">Wizard</a>
                                                        <a href="form-fileuploads" class="dropdown-item">File Uploads</a>
                                                        <a href="form-editors" class="dropdown-item">Editors</a>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-tables" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Tables <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-tables">
                                                        <a href="tables-basic" class="dropdown-item">Basic Tables</a>
                                                        <a href="tables-datatable" class="dropdown-item">Data Tables</a>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-icons" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Icons <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-icons">
                                                        <a href="icons-dripicons" class="dropdown-item">Dripicons</a>
                                                        <a href="icons-mdi" class="dropdown-item">Material Design</a>
                                                        <a href="icons-unicons" class="dropdown-item">Unicons</a>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-maps" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Maps <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-maps">
                                                        <a href="maps-google" class="dropdown-item">Google Maps</a>
                                                        <a href="maps-vector" class="dropdown-item">Vector Maps</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-layouts" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="uil-window me-1"></i>Layouts <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-layouts">
                                                <a href="layouts-vertical" class="dropdown-item">Vertical</a>
                                                <a href="layouts-detached" class="dropdown-item">Detached</a>
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                            <li class="breadcrumb-item active">CRM</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">CRM</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-lg-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <h5 class="text-muted fw-normal mt-0 text-truncate" title="Campaign Sent">Campaign Sent</h5>
                                                <h3 class="my-2 py-1">9,184</h3>
                                                <p class="mb-0 text-muted">
                                                    <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 3.27%</span>
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                    <div id="campaign-sent-chart" data-colors="#3688fc"></div>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->
        
                            <div class="col-lg-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <h5 class="text-muted fw-normal mt-0 text-truncate" title="New Leads">New Leads</h5>
                                                <h3 class="my-2 py-1">3,254</h3>
                                                <p class="mb-0 text-muted">
                                                    <span class="text-danger me-2"><i class="mdi mdi-arrow-down-bold"></i> 5.38%</span>
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                    <div id="new-leads-chart" data-colors="#42d29d"></div>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->

                            <div class="col-lg-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <h5 class="text-muted fw-normal mt-0 text-truncate" title="Deals">Deals</h5>
                                                <h3 class="my-2 py-1">861</h3>
                                                <p class="mb-0 text-muted">
                                                    <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 4.87%</span>
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                    <div id="deals-chart" data-colors="#3688fc"></div>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->

                            <div class="col-lg-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <h5 class="text-muted fw-normal mt-0 text-truncate" title="Booked Revenue">Booked Revenue</h5>
                                                <h3 class="my-2 py-1">$253k</h3>
                                                <p class="mb-0 text-muted">
                                                    <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 11.7%</span>
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                    <div id="booked-revenue-chart" data-colors="#42d29d"></div>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-5">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown float-end">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Today</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Yesterday</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Last Week</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Last Month</a>
                                            </div>
                                        </div>

                                        <h4 class="header-title mb-1">Campaigns</h4>

                                        <div id="dash-campaigns-chart" class="apex-charts" data-colors="#42d29d,#ffa866,#44badc"></div>

                                        <div class="row text-center mt-2">
                                            <div class="col-md-4">
                                                <i class="mdi mdi-send widget-icon rounded-circle bg-light-lighten text-muted"></i>
                                                <h3 class="fw-normal mt-3">
                                                    <span>6,510</span>
                                                </h3>
                                                <p class="text-muted mb-0 mb-2"><i class="mdi mdi-checkbox-blank-circle text-warning"></i> Total Sent</p>
                                            </div>
                                            <div class="col-md-4">
                                                <i class="mdi mdi-flag-variant widget-icon rounded-circle bg-light-lighten text-muted"></i>
                                                <h3 class="fw-normal mt-3">
                                                    <span>3,487</span>
                                                </h3>
                                                <p class="text-muted mb-0 mb-2"><i class="mdi mdi-checkbox-blank-circle text-primary"></i> Reached</p>
                                            </div>
                                            <div class="col-md-4">
                                                <i class="mdi mdi-email-open widget-icon rounded-circle bg-light-lighten text-muted"></i>
                                                <h3 class="fw-normal mt-3">
                                                    <span>1,568</span>
                                                </h3>
                                                <p class="text-muted mb-0 mb-2"><i class="mdi mdi-checkbox-blank-circle text-success"></i> Opened</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card body-->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col-->
    
                            <div class="col-lg-7">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown float-end">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Today</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Yesterday</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Last Week</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Last Month</a>
                                            </div>
                                        </div>
                                        
                                        <h4 class="header-title mb-3">Revenue</h4>

                                        <div class="chart-content-bg">
                                            <div class="row text-center">
                                                <div class="col-md-6">
                                                    <p class="text-muted mb-0 mt-3">Current Month</p>
                                                    <h2 class="fw-normal mb-3">
                                                        <span>$42,025</span>
                                                    </h2>
                                                </div>
                                                <div class="col-md-6">
                                                    <p class="text-muted mb-0 mt-3">Previous Month</p>
                                                    <h2 class="fw-normal mb-3">
                                                        <span>$74,651</span>
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>

                                        <div dir="ltr">
                                            <div id="dash-revenue-chart" class="apex-charts" data-colors="#42d29d,#44badc"></div>
                                        </div>

                                    </div>
                                    <!-- end card body-->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col-->
                        </div>
                        <!-- end row-->


                        <div class="row">
                            <div class="col-xl-4 col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown float-end">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            </div>
                                        </div>
                                        <h4 class="header-title mb-3">Top Performing</h4>

                                        <div class="table-responsive">
                                            <table class="table table-striped table-sm table-nowrap table-centered mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>User</th>
                                                        <th>Leads</th>
                                                        <th>Deals</th>
                                                        <th>Tasks</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-15 mb-1 fw-normal">Jeremy Young</h5>
                                                            <span class="text-muted font-13">Senior Sales Executive</span>
                                                        </td>
                                                        <td>187</td>
                                                        <td>154</td>
                                                        <td>49</td>
                                                        <td class="table-action">
                                                            <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-15 mb-1 fw-normal">Thomas Krueger</h5>
                                                            <span class="text-muted font-13">Senior Sales Executive</span>
                                                        </td>
                                                        <td>235</td>
                                                        <td>127</td>
                                                        <td>83</td>
                                                        <td class="table-action">
                                                            <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-15 mb-1 fw-normal">Pete Burdine</h5>
                                                            <span class="text-muted font-13">Senior Sales Executive</span>
                                                        </td>
                                                        <td>365</td>
                                                        <td>148</td>
                                                        <td>62</td>
                                                        <td class="table-action">
                                                            <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-15 mb-1 fw-normal">Mary Nelson</h5>
                                                            <span class="text-muted font-13">Senior Sales Executive</span>
                                                        </td>
                                                        <td>753</td>
                                                        <td>159</td>
                                                        <td>258</td>
                                                        <td class="table-action">
                                                            <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-15 mb-1 fw-normal">Kevin Grove</h5>
                                                            <span class="text-muted font-13">Senior Sales Executive</span>
                                                        </td>
                                                        <td>458</td>
                                                        <td>126</td>
                                                        <td>73</td>
                                                        <td class="table-action">
                                                            <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div> <!-- end table-responsive-->

                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div>
                            <!-- end col-->

                            <div class="col-xl-4 col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown float-end">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            </div>
                                        </div>
                                        <h4 class="header-title mb-4">Recent Leads</h4>

                                        <div class="d-flex align-items-start">
                                            <img class="me-3 rounded-circle" src="assets/images/users/avatar-2.jpg" width="40" alt="Generic placeholder image">
                                            <div class="w-100 overflow-hidden">
                                                <span class="badge badge-warning-lighten float-end">Cold lead</span>
                                                <h5 class="mt-0 mb-1">Risa Pearson</h5>
                                                <span class="font-13">richard.john@mail.com</span>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-start mt-3">
                                            <img class="me-3 rounded-circle" src="assets/images/users/avatar-3.jpg" width="40" alt="Generic placeholder image">
                                            <div class="w-100 overflow-hidden">
                                                <span class="badge badge-danger-lighten float-end">Lost lead</span>
                                                <h5 class="mt-0 mb-1">Margaret D. Evans</h5>
                                                <span class="font-13">margaret.evans@rhyta.com</span>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-start mt-3">
                                            <img class="me-3 rounded-circle" src="assets/images/users/avatar-4.jpg" width="40" alt="Generic placeholder image">
                                            <div class="w-100 overflow-hidden">
                                                <span class="badge badge-success-lighten float-end">Won lead</span>
                                                <h5 class="mt-0 mb-1">Bryan J. Luellen</h5>
                                                <span class="font-13">bryuellen@dayrep.com</span>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-start mt-3">
                                            <img class="me-3 rounded-circle" src="assets/images/users/avatar-5.jpg" width="40" alt="Generic placeholder image">
                                            <div class="w-100 overflow-hidden">
                                                <span class="badge badge-warning-lighten float-end">Cold lead</span>
                                                <h5 class="mt-0 mb-1">Kathryn S. Collier</h5>
                                                <span class="font-13">collier@jourrapide.com</span>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-start mt-3">
                                            <img class="me-3 rounded-circle" src="assets/images/users/avatar-1.jpg" width="40" alt="Generic placeholder image">
                                            <div class="w-100 overflow-hidden">
                                                <span class="badge badge-warning-lighten float-end">Cold lead</span>
                                                <h5 class="mt-0 mb-1">Timothy Kauper</h5>
                                                <span class="font-13">thykauper@rhyta.com</span>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-start mt-3">
                                            <img class="me-3 rounded-circle" src="assets/images/users/avatar-6.jpg" width="40" alt="Generic placeholder image">
                                            <div class="w-100 overflow-hidden">
                                                <span class="badge badge-success-lighten float-end">Won lead</span>
                                                <h5 class="mt-0 mb-1">Zara Raws</h5>
                                                <span class="font-13">austin@dayrep.com</span>
                                            </div>
                                        </div>
                                           
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card-->
                            </div>
                            <!-- end col -->  
                            
                            <div class="col-xl-4 col-lg-6">
                                <div class="card cta-box bg-success text-white">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start align-items-center">
                                            <div class="w-100 overflow-hidden">
                                                <h2 class="mt-0"><i class="mdi mdi-bullhorn-outline"></i>&nbsp;</h2>
                                                <h3 class="m-0 fw-normal cta-box-title">Enhance your <b>Campaign</b> for better outreach <i class="mdi mdi-arrow-right"></i></h3>
                                            </div>
                                            <img class="ms-3" src="assets/images/email-campaign.svg" width="120" alt="Generic placeholder image">
                                        </div>
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card-->

                                <!-- Todo-->
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown float-end">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            </div>
                                        </div>
                                        <h4 class="header-title mb-2">Todo</h4>

                                        <div class="todoapp">
                                            <div data-simplebar style="max-height: 224px">
                                                <ul class="list-group list-group-flush todo-list" id="todo-list"></ul>
                                            </div>
                                        </div> <!-- end .todoapp-->

                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->

                            </div>
                            <!-- end col -->  
                        </div>
                        <!-- end row-->

                    </div>
                    <!-- container -->

                </div>
                <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>document.write(new Date().getFullYear())</script> © Hyper - Coderthemes.com
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-end footer-links d-none d-md-block">
                                    <a href="javascript: void(0);">About</a>
                                    <a href="javascript: void(0);">Support</a>
                                    <a href="javascript: void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        



<?php include(SHARED_PATH . '/admin_footer.php');?>
