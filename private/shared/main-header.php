<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    
     <title>RikeSD | <?php echo $page_title ?? '' ?> - Research for Impact, Knowledge-Based Economy, and Sustainable Development</title>
  <meta name="description" content="RikeSD (Research for Impact, Knowledge-Based Economy, and Sustainable Development) is an initiative focused on empowering academia and industry to drive sustainable economic growth through impactful research and knowledge-driven innovation.">
  <meta name="keywords" content="RikeSD, Research for Impact, Knowledge-Based Economy, Sustainable Development, Impactful Research, Knowledge-driven Solutions, Sustainable Growth, Research Empowerment, Economic Development, Sustainable Solutions, Research Collaboration, Empowering Academia, Sustainable Practices, Knowledge Sharing, Research Impact, Innovation for Sustainability, Knowledge-driven Policy, Sustainable Technology, Research-driven Solutions">
  <meta name="author" content="Your Name">

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo url_for_root('assets/img/favicons/apple-touch-icon.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.png">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png') ?>">
    <meta name="theme-color" content="#ffffff">
    <script src="<?php echo url_for_root('vendors/overlayscrollbars/OverlayScrollbars.min.js') ?>"></script>
    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="<?php echo url_for_root('vendors/swiper/swiper-bundle.min.css ') ?>" rel="stylesheet">
    <link href="<?php echo url_for_root('vendors/hamburgers/hamburgers.min.css ') ?>" rel="stylesheet">
    <link href="<?php echo url_for_root('vendors/loaders.css/loaders.min.css ') ?>" rel="stylesheet">
    <link href="<?php echo url_for_root('assets/css/theme.min.css ') ?>" rel="stylesheet" />
    <link href="<?php echo url_for_root('assets/css/user.min.css ') ?>" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&amp;family=Open+Sans:wght@300;400;600;700;800&amp;display=swap" rel="stylesheet">
  
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

  
  </head>
<?php 
// $categories = TeamCategory::find_all();
$categories = TeamCategory::find_by_undeleted(['order' => 'ASC']);

// pre_r($categories);
?>

  <body>
    <div class="bg-primary py-3 d-none d-sm-block text-white fw-bold ">
      <div class="container">
        <div class="row align-items-center gx-4">
          <!-- <div>
            <h1>RIKESD Official Launch Countdown</h1>
            <div id="countdown"></div>
          </div> -->
          <div class="col-auto text-light fs--1">
            <span class="fas fa-map-marker-alt text-success me-2" data-fa-transform="grow-3"></span>
            RIKESD Official Launch Countdown 
          </div>
          <div class="col-auto ms-md-auto order-md-2 d-none d-sm-flex fs--1 align-items-center">
            <span class="fas fa-clock text-success me-2" data-fa-transform="grow-3"></span>
            <span class="countdown"></span>
          </div>
          <!-- <div class="col-auto d-none d-lg-block fs--1"><span class="fas fa-map-marker-alt text-success me-2" data-fa-transform="grow-3"></span>10, Lord Lugard street, Asokoro Abuja Nigeria. </div>
          <div class="col-auto ms-md-auto order-md-2 d-none d-sm-flex fs--1 align-items-center"><span class="fas fa-clock text-success me-2" data-fa-transform="grow-3"></span>Mon-Sat, 8.00-18.00. Sunday CLOSED</div>
          <div class="col-auto"><span class="fas fa-phone-alt text-success" data-fa-transform="shrink-3"></span><a class="ms-2 fs--1 d-inline text-white fw-bold" href="tel:2123865575">+234 703 938 8978, +234 708 201 6126</a></div> -->
        </div>
      </div>
    </div>
    <?php if($page_title != '404'):?>
    <div class="sticky-top navbar-RikeSD">
      <div class="container">
        <nav class="navbar navbar-expand-lg"> 
            <a class="navbar-brand" href="<?php echo url_for_root('/home') ?>">
              <img src="<?php echo url_for_root('assets/img/logo-dark.png') ?>" width="150" width="150" alt="logo" />
            </a>

            <button class="navbar-toggler p-0" type="button" data-bs-toggle="collapse" data-bs-target="#primaryNavbarCollapse" aria-controls="primaryNavbarCollapse" aria-expanded="false" aria-label="Toggle navigation"><span class="hamburger hamburger--emphatic"><span class="hamburger-box"><span class="hamburger-inner"></span></span></span></button>
            <div class="collapse navbar-collapse" id="primaryNavbarCollapse">
              <ul class="navbar-nav py-3 py-lg-0 mt-1 mb-2 my-lg-0 ms-lg-n1">
                <li class="nav-item dropdown">
                  <a class="nav-link" href="<?php echo url_for_root('/home') ?>">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo url_for_root('/about') ?>">About</a>
                </li>
                <li class="nav-item dropdown d-none"><a class="nav-link dropdown-toggle dropdown-indicator" href="JavaScript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">News</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?php echo url_for_root('/news/newsroom') ?>">Newsroom</a></li>
                    <li><a class="dropdown-item" href="<?php echo url_for_root('/news/news') ?>">Latest News</a></li>
                  </ul>
                </li>

                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle dropdown-indicator" href="JavaScript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">Global Leaders</a>
                  <ul class="dropdown-menu">
                    <?php foreach ($categories as $key => $val): ?>
                    <li class="">
                  
                    <a class="dropdown-item" href="<?php echo url_for_root('/team/index?tab='. $val->id) ?>"><?= $val->name ?></a></li>
                    <?php endforeach; ?>
                  </ul>
                </li>

                <li class="nav-item dropdown d-none"><a class="nav-link dropdown-toggle dropdown-indicator" href="JavaScript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">Research for Impact</a>
                  <ul class="dropdown-menu">
                    <!-- <li><a class="dropdown-item" href="<?php // echo url_for_root('/community/') ?>">Join Community</a></li> -->
                    <li><a class="dropdown-item" href="<?php echo url_for_root('registration') ?>">Knowledge Marketplace</a></li>
                    <li><a class="dropdown-item" href="<?php echo url_for_root('registration') ?>">Mentorship</a></li>
                    <!-- <li><a class="dropdown-item" href="<?php //echo url_for_root('registration') ?>">Collaboration</a></li> -->
                    <li><a class="dropdown-item" href="<?php echo url_for_root('registration') ?>">RDI Infrastructure</a></li>
                    <li><a class="dropdown-item" href="<?php echo url_for_root('registration') ?>">RDI Institutes and Centers</a></li>
                  </ul>
                </li>

                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle dropdown-indicator" href="JavaScript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">Opportunities</a>
                  <ul class="dropdown-menu">
                    <?php foreach (Services::find_by_category(['category' => '1']) as $key => $value): ?>
                      <li><a class="dropdown-item" href="<?php echo url_for_root('services/'.$value->page.'?tab='. $value->id) ?>"><?php echo $value->item; ?></a></li>
                    <?php endforeach ?>
                  </ul>
                </li>


              
                <li class="nav-item dropdown d-none"><a class="nav-link" href="<?php echo url_for_root('/contact') ?>" role="button">Contact us</a></li>
              </ul><a class="btn btn-outline-primary rounded-pill btn-sm border-2 d-block d-lg-inline-block ms-auto my-3 my-lg-0" href="<?php echo url_for_root('/') ?>" target="_blank">Join Our Expert Community</a>
            </div>
        </nav>
        

        
      </div>
      

      <div class="container-fluid bg-light">
        <div class="container ">
            <nav class="navbar navbar-expand-lg navbar-light">
              <div class="container">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                      <ul class="navbar-nav">
                          <li class="nav-item">
                              <a class="nav-link" href="<?= url_for_root('/services/?tab=1') ?>">Start a project
                                  <span class="fas fa-chevron-right ms-2"></span></a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="<?= url_for_root('/pages/discover') ?>">Discover
                                  <span class="fas fa-chevron-right ms-2"></span></a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="
                              <?php echo url_for_root('pages/marketplace?tab=8') ?>">MarketPlace
                                  <span class="fas fa-chevron-right ms-2"></span></a>
                          </li>
                          <li class="nav-item d-none">
                              <a class="nav-link" href="<?= url_for_root('/comingsoon?tab=4') ?>">Collaborate
                                  <span class="fas fa-chevron-right ms-2"></span></a>
                          </li>
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                  data-bs-toggle="dropdown" aria-expanded="false">
                                  Research Funding
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <li><a class="dropdown-item" href="<?= url_for_root('/pages/available-funding-opportunities?tab=10') ?>">Available funding Opportunities</a></li>
                                  <li><a class="dropdown-item" href="<?= url_for_root('/pages/fund-research?tab=11') ?>">Fund a Research</a></li>
                              </ul>
                          </li>
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownRDI" role="button"
                                  data-bs-toggle="dropdown" aria-expanded="false">
                                  RDI Infrastructure
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="navbarDropdownRDI">
                                  <?php foreach (Services::find_by_category(['category' => '3', 'sub_category' => '12']) as $key => $value): ?>
                                    <li><a class="dropdown-item" href="<?php echo url_for_root('RDI/'.$value->page.'?tab='. $value->id) ?>"><?php echo $value->item; ?></a></li>
                                  <?php endforeach ?>
                                 
                              </ul>
                          </li>
                          
                      </ul>
                  </div>
              </div>
          </nav>
        </div>
      </div>







    </div>
    <?php endif ?>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <div class="preloader" id="preloader">
        <div class="loader">
          <div class="line-scale">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
          </div>
        </div>
      </div>


