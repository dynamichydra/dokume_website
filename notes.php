<!doctype html>
<html lang="en">

<head>
  <?php include('websiteNEWASSETS/includes/head.php'); ?>

  <style>

    .new_startup_banner_area {
      background-color: #000;
    }
  </style>
</head>

<body>
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span data-text-preloader="S" class="letters-loading">
                        S
                    </span>
                    <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
                    <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
                    <span data-text-preloader="S" class="letters-loading">
                        S
                    </span>
                    <span data-text-preloader="L" class="letters-loading">
                        L
                    </span>
                    <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
                    <span data-text-preloader="N" class="letters-loading">
                        N
                    </span>
                    <span data-text-preloader="D" class="letters-loading">
                        D
                    </span>
                </div>
                <p class="text-center">Loading</p>
            </div>
            <div class="loader">
                <div class="row">
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="body_wrapper">
      <?php
      if ($_SERVER['REQUEST_URI'] == '/website/SaasLand/NEW/service/notes.php') {
        include('websiteNEWASSETS/includes/header.php');
      } else {
        echo '
          <header class="header_area header_area_two h_dark">
              <nav class="navbar navbar-expand-lg menu_one menu_four">
                  <div class="container">
                    <a class="navbar-brand sticky_logo" href="home.php">
                      <!--<img src="websiteNEWASSETS/img/dokume_logo/DokuMe-white.png" srcset="img/logo2x-2.png 2x" alt="logo">-->
                      <img src="websiteNEWASSETS/img/dokume_logo/DOKUME_white.png" srcset="img/dokume_logo/DOKUME_white.png" alt="logo">
                      <img src="websiteNEWASSETS/img/dokume_logo/DOKUME_white.png" srcset="img/dokume_logo/DOKUME_white.png" alt="logo">
                      <!--<img src="websiteNEWASSETS/img/dokume_logo/Logo_Black.png" srcset="img/dokume_logo/Logo_Black.png" alt="">-->
                    </a>
                      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="menu_toggle">
                              <span class="hamburger">
                                  <span></span>
                                  <span></span>
                                  <span></span>
                              </span>
                              <span class="hamburger-cross">
                                  <span></span>
                                  <span></span>
                              </span>
                          </span>
                      </button>
                  </div>
              </nav>
          </header>';
      }

      ?>

      <header class="header_area">
            <nav class="navbar navbar-expand-lg menu_one menu_four">
                <div class="container">
                    <a class="navbar-brand sticky_logo" href="#"><img src="websiteNEWASSETS/img/logo2.png" srcset="img/logo2x-2.png 2x" alt="logo"><img src="websiteNEWASSETS/img/logo.png" srcset="img/logo2x.png 2x" alt=""></a>
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu_toggle">
                            <span class="hamburger">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                            <span class="hamburger-cross">
                                <span></span>
                                <span></span>
                            </span>
                        </span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                        <ul class="navbar-nav menu w_menu ml-auto mr-auto">
                            <li class="nav-item dropdown submenu mega_menu mega_menu_two">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Home
                                </a>
                                <div class="mega_menu_inner">
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <ul class="dropdown-menu scroll">
                                                <li class="nav-item">
                                                    <a href="home-support.html" class="item">
                                                        <span class="img">
                                                            <span class="rebon_tap">New</span>
                                                            <img src="websiteNEWASSETS/img/mega-menu-img/support.jpg" alt="Prototyping Tool">
                                                        </span>
                                                        <span class="text">
                                                            Support
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="home-color.html" class="item">
                                                        <span class="img">
                                                            <span class="rebon_tap">New</span>
                                                            <img src="websiteNEWASSETS/img/mega-menu-img/home-animation.jpg" alt="Prototyping Tool">
                                                        </span>
                                                        <span class="text">
                                                            Scroll Animation
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="home_analytics_software.html" class="item">
                                                        <span class="img">
                                                            <span class="rebon_tap">New</span>
                                                            <img src="websiteNEWASSETS/img/mega-menu-img/analytices.jpg" alt="Prototyping Tool">
                                                        </span>
                                                        <span class="text">
                                                            Analytices
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="home-hosting.html" class="item">
                                                        <span class="img">
                                                            <span class="rebon_tap">New</span>
                                                            <img src="websiteNEWASSETS/img/mega-menu-img/hosting.jpg" alt="Prototyping Tool">
                                                        </span>
                                                        <span class="text">
                                                            Hosting
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="home-pos.html" class="item">
                                                        <span class="img">
                                                            <span class="rebon_tap">New</span>
                                                            <img src="websiteNEWASSETS/img/mega-menu-img/pos.jpg" alt="Prototyping Tool">
                                                        </span>
                                                        <span class="text">
                                                            POS
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="home-erp.html" class="item">
                                                        <span class="img">
                                                            <span class="rebon_tap">New</span>
                                                            <img src="websiteNEWASSETS/img/mega-menu-img/erp.jpg" alt="Prototyping Tool">
                                                        </span>
                                                        <span class="text">
                                                            ERP
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="home-prototype-two.html" class="item">
                                                        <span class="img">
                                                            <span class="rebon_tap">New</span>
                                                            <img src="websiteNEWASSETS/img/mega-menu-img/Prototyping_Tool.jpg" alt="Prototyping Tool">
                                                        </span>
                                                        <span class="text">
                                                            Prototyping Tool
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="home-payment-processing.html" class="item">
                                                        <span class="img">
                                                            <img src="websiteNEWASSETS/img/mega-menu-img/home16.jpg">
                                                        </span>
                                                        <span class="text">
                                                            Payment Processing
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="home-mail.html" class="item">
                                                        <span class="img">
                                                            <img src="websiteNEWASSETS/img/mega-menu-img/home9.jpg">
                                                        </span>
                                                        <span class="text">
                                                            Email Client
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="home-startup.html" class="item">
                                                        <span class="img">
                                                            <img src="websiteNEWASSETS/img/mega-menu-img/home15.jpg">
                                                        </span>
                                                        <span class="text">
                                                            Startup
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="home-saas.html" class="item">
                                                        <span class="img">
                                                            <img src="websiteNEWASSETS/img/mega-menu-img/home17.jpg" alt="Classic Saas">
                                                        </span>
                                                        <span class="text">
                                                            Classic Saas
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="home-software-dark.html" class="item">
                                                        <span class="img">
                                                            <img src="websiteNEWASSETS/img/mega-menu-img/home13.jpg" alt="Software (Dark)">
                                                        </span>
                                                        <span class="text">
                                                            Software (Dark)
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="home-app-showcase.html" class="item">
                                                        <span class="img">
                                                            <img src="websiteNEWASSETS/img/mega-menu-img/home14.jpg" alt="App Showcase">
                                                        </span>
                                                        <span class="text">
                                                            App Showcase
                                                        </span>
                                                    </a></li>
                                                <li class="nav-item">
                                                    <a href="home-digital-marketing.html" class="item">
                                                        <span class="img">
                                                            <img src="websiteNEWASSETS/img/mega-menu-img/home11.jpg" alt="Digital Marketing">
                                                        </span>
                                                        <span class="text">
                                                            Digital Marketing
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="home-cloud.html" class="item">
                                                        <span class="img">
                                                            <img src="websiteNEWASSETS/img/mega-menu-img/home12.jpg" alt="Cloud Based Saas">
                                                        </span>
                                                        <span class="text">
                                                            Cloud Based Saas
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="home-startup-two.html" class="item">
                                                        <span class="img">
                                                            <img src="websiteNEWASSETS/img/mega-menu-img/home4.jpg" alt="HR Management">
                                                        </span>
                                                        <span class="text">
                                                            HR Management
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="home-marketing-two.html" class="item">
                                                        <span class="img">
                                                            <img src="websiteNEWASSETS/img/mega-menu-img/home3.jpg" alt="CRM Software">
                                                        </span>
                                                        <span class="text">
                                                            CRM Software
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="home-payment-style2.html" class="item">
                                                        <span class="img">
                                                            <img src="websiteNEWASSETS/img/mega-menu-img/home1.jpg" alt="Accounts &amp; Billing">
                                                        </span>
                                                        <span class="text">
                                                            Accounts &amp; Billing
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="home-digital-marketing-two.html" class="item">
                                                        <span class="img">
                                                            <img src="websiteNEWASSETS/img/mega-menu-img/home5.jpg" alt="Digital Agency">
                                                        </span>
                                                        <span class="text">
                                                            Digital Agency
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="home-project-management.html" class="item">
                                                        <span class="img">
                                                            <img src="websiteNEWASSETS/img/mega-menu-img/home8.jpg" alt="Project Management">
                                                        </span>
                                                        <span class="text">
                                                            Project Management
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="home-saas-two.html" class="item">
                                                        <span class="img">
                                                            <img src="websiteNEWASSETS/img/mega-menu-img/saas2-slider.png" alt="Saas 02 (Slider)">
                                                        </span>
                                                        <span class="text">
                                                            Saas 02 (Slider)
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="home-company.html" class="item">
                                                        <span class="img">
                                                            <img src="websiteNEWASSETS/img/mega-menu-img/home2.jpg" alt="home2">
                                                        </span>
                                                        <span class="text">
                                                            Company
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="dropdown submenu nav-item active"><a title="Pages" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">Pages</a>
                                <ul role="menu" class=" dropdown-menu">
                                    <li class="dropdown submenu nav-item active"><a title="Service" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">Service <span class="arrow_carrot-right"></span> </a>
                                        <ul class=" dropdown-menu">
                                            <li class="nav-item"><a title="Service 01" class="nav-link" href="service-1.html">Service 01</a></li>
                                            <li class="nav-item active"><a title="Service 02" class="nav-link" href="service-2.html">Service 02</a></li>
                                            <li class="nav-item"><a title="Service 03" class="nav-link" href="service-3.html">Service 03</a></li>
                                            <li class="nav-item"><a title="Service Details" class="nav-link" href="service-details.html">Service Details</a></li>
                                        </ul>
                                    </li>

                                    <li class="dropdown submenu nav-item"><a title="Career" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">Career <span class="arrow_carrot-right"></span> </a>
                                        <ul class=" dropdown-menu">
                                            <li class="nav-item"><a title="Job Listing" class="nav-link" href="job-listing.html">Job Listing</a></li>
                                            <li class="nav-item"><a title="Job Details" class="nav-link" href="job-details.html">Job Details</a></li>
                                            <li class="nav-item"><a title="Apply Job" class="nav-link" href="job-apply.html">Apply Job</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a title="About" class="nav-link" href="about.html">About</a></li>
                                    <li class="nav-item"><a title="Process" class="nav-link" href="process.html">Process</a></li>
                                    <li class="nav-item"><a title="Pricing" class="nav-link" href="price.html">Pricing</a></li>
                                    <li class="dropdown submenu nav-item"><a title="Case Study" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">Case Study<span class="arrow_carrot-right"></span> </a>
                                        <ul class=" dropdown-menu">
                                            <li class="nav-item"><a title="Case Study" class="nav-link" href="case-study.html">Case Study</a></li>
                                            <li class="nav-item"><a title="Case study Details" class="nav-link" href="case-study-details.html">Case Study Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a title="Team" class="nav-link" href="team.html">Team</a></li>
                                    <li class="dropdown submenu nav-item"><a title="Sign Up" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">Sign Up <span class="arrow_carrot-right"></span> </a>
                                        <ul class=" dropdown-menu">
                                            <li class="nav-item"><a title="Sign Up 01" class="nav-link" href="sign-up-1.html">Sign Up 01</a></li>
                                            <li class="nav-item"><a title="Sign Up 02" class="nav-link" href="sign-up-2.html">Sign Up 02</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown submenu nav-item"><a title="Login" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">Login<span class="arrow_carrot-right"></span> </a>
                                        <ul class=" dropdown-menu">
                                            <li class="nav-item"><a title="Login 01" class="nav-link" href="login.html">Login 01</a></li>
                                            <li class="nav-item"><a title="Login 02" class="nav-link" href="login-two.html">Login 02</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a title="FAQ" class="nav-link" href="faq.html">FAQ</a></li>
                                    <li class="dropdown submenu nav-item"><a title="Contact" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">Contact <span class="arrow_carrot-right"></span> </a>
                                        <ul role="menu" class="dropdown-menu">
                                            <li class="nav-item"><a title="Contact 01" class="nav-link" href="contact-1.html">Contact 01</a></li>
                                            <li class="nav-item"><a title="Contact  02" class="nav-link" href="contact-2.html">Contact 02</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a title="Thank You" class="nav-link" href="thanks.html">Thank You</a></li>
                                    <li class="nav-item"><a title="Coming Soon" class="nav-link" href="coming-soon.html">Coming Soon</a></li>
                                    <li class="dropdown submenu nav-item"><a title="404" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">404<span class="arrow_carrot-right"></span> </a>
                                        <ul class=" dropdown-menu">
                                            <li class="nav-item"><a title="404 01" class="nav-link" href="404.html">404 01</a></li>
                                            <li class="nav-item"><a title="404 02" class="nav-link" href="404-two.html">404 02</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown submenu mega_menu">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Portfolio
                                </a>
                                <div class="mega_menu_inner">
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="index.html" class="nav-link">Portfolio Grid</a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item"><a href="portfolio-grid-2col.html" class="nav-link">Style 1 (2 columns)</a></li>
                                                <li class="nav-item"><a href="portfolio-grid-3columns.html" class="nav-link">Style 1 (3 columns)</a></li>
                                                <li class="nav-item"><a href="portfolio-grid-4columns.html" class="nav-link">Style 1 (4 columns)</a></li>
                                                <li class="nav-item"><a href="portfolio-grid-2col-2.html" class="nav-link">Style 2 (2 columns)</a></li>
                                                <li class="nav-item"><a href="portfolio-grid-2col-3.html" class="nav-link">Style 2 (3 columns)</a></li>
                                                <li class="nav-item"><a href="portfolio-grid-2col-4.html" class="nav-link">Style 2 (4 columns)</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="index.html" class="nav-link">Portfolio Fluid</a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item"><a href="portfolio-fullwidth-3columns.html" class="nav-link">Style 1 (3 columns)</a></li>
                                                <li class="nav-item"><a href="portfolio-fullwidth-4columns.html" class="nav-link">Style 1 (4 columns)</a></li>
                                                <li class="nav-item"><a href="portfolio-grid-fullwidth1.html" class="nav-link">Style 2 (3 columns)</a></li>
                                                <li class="nav-item"><a href="portfolio-grid-fullwidth2.html" class="nav-link">Style 2 (4 columns)</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="index.html" class="nav-link">Portfolio Masonry</a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item"><a href="portfolio-mas-2col.html" class="nav-link">Style 1 (2 columns)</a></li>
                                                <li class="nav-item"><a href="portfolio-mas-3col.html" class="nav-link">Style 1 (3 columns)</a></li>
                                                <li class="nav-item"><a href="portfolio-mas-4col.html" class="nav-link">Style 1 (4 columns)</a></li>
                                                <li class="nav-item"><a href="portfolio-mas-3col-2.html" class="nav-link">Style 2 (3 columns)</a></li>
                                                <li class="nav-item"><a href="portfolio-mas-4col-2.html" class="nav-link">Style 2 (4 columns)</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="index.html" class="nav-link">Project details</a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item"><a href="portfolio-details-1.html" class="nav-link">Style 1</a></li>
                                                <li class="nav-item"><a href="portfolio-details-2.html" class="nav-link">Style 2</a></li>
                                                <li class="nav-item"><a href="portfolio-details-3.html" class="nav-link">Style 3</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item dropdown submenu">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Shop
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="shop-grid.html" class="nav-link">Shop Grid</a></li>
                                    <li class="nav-item"><a href="shop-list.html" class="nav-link">Shop list</a></li>
                                    <li class="nav-item"><a href="product-details-1.html" class="nav-link">Product detail</a></li>
                                    <li class="nav-item"><a href="shoping-cart.html" class="nav-link">Shopping cart</a></li>
                                    <li class="nav-item"><a href="checkout.html" class="nav-link">Checkout</a></li>
                                    <li class="nav-item"><a href="wishlist.html" class="nav-link">Wishlist</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown submenu">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Blog
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="blog-grid.html" class="nav-link">Blog Grid</a></li>
                                    <li class="nav-item"><a href="blog-grid-two.html" class="nav-link">Blog Grid Two</a></li>
                                    <li class="nav-item"><a href="blog-list.html" class="nav-link">Blog List</a></li>
                                    <li class="nav-item"><a href="blog-right-sidebar.html" class="nav-link">Blog Right Sidebar</a></li>
                                    <li class="nav-item"><a href="blog-masonry.html" class="nav-link">Blog Masonry</a></li>
                                    <li class="nav-item"><a href="blog-masonry-two.html" class="nav-link">Blog Masonry Two</a></li>
                                    <li class="nav-item"><a href="blog-masonry-sidebar.html" class="nav-link">Blog Masonry Sidebar</a></li>
                                    <li class="nav-item"><a href="blog-masonry-sidebar-two.html" class="nav-link">Blog Masonry Sidebar Two</a></li>
                                    <li class="nav-item"><a href="blog-single.html" class="nav-link">Blog Single</a></li>
                                    <li class="nav-item"><a href="blog-single-two.html" class="nav-link">Blog Single Two</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown submenu mega_menu">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Elements
                                </a>
                                <div class="mega_menu_inner">
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a class="nav-link">Elements 01</a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item"><a href="Accordion.html" class="nav-link">Accordions</a></li>
                                                <li class="nav-item"><a href="button.html" class="nav-link">Buttons</a></li>
                                                <li class="nav-item"><a href="team.html" class="nav-link">Team</a></li>
                                                <li class="nav-item"><a href="integration.html" class="nav-link">Integration</a></li>
                                                <li class="nav-item"><a href="client.html" class="nav-link">Clients</a></li>
                                                <li class="nav-item"><a href="subscribe.html" class="nav-link">Subscribe</a></li>
                                                <li class="nav-item"><a href="call-to-action.html" class="nav-link">Call to Action</a></li>
                                                <li class="nav-item"><a href="tab.html" class="nav-link">Tab</a></li>
                                            </ul>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link">Elements 02</a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item"><a href="testimonial.html" class="nav-link">Testimonials</a></li>
                                                <li class="nav-item"><a href="video.html" class="nav-link">Video</a></li>
                                                <li class="nav-item"><a href="carosuel.html" class="nav-link">Carosuel</a></li>
                                                <li class="nav-item"><a href="google-map.html" class="nav-link">Google Map</a></li>
                                                <li class="nav-item"><a href="contact-form.html" class="nav-link">Contact Form</a></li>
                                                <li class="nav-item"><a href="process.html" class="nav-link">Process</a></li>
                                                <li class="nav-item"><a href="getapp.html" class="nav-link">Get App</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link">Elements 03</a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item"><a href="heading.html" class="nav-link">Heading</a></li>
                                                <li class="nav-item"><a href="blockquote.html" class="nav-link">Blockquote</a></li>
                                                <li class="nav-item"><a href="price.html" class="nav-link">Pricing Table</a></li>
                                                <li class="nav-item"><a href="fun-fact.html" class="nav-link">Fun Fact</a></li>
                                                <li class="nav-item"><a href="coming-soon.html" class="nav-link">Countdown Timer</a></li>
                                                <li class="nav-item"><a href="pagination.html" class="nav-link">Pagination</a></li>
                                                <li class="nav-item"><a href="heading-style.html" class="nav-link">Heading Elements</a></li>
                                                <li class="nav-item"><a href="alart.html" class="nav-link">Alart</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link">
                                            Headers
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item"><a href="header-dark.html" class="nav-link">Header Dark</a></li>
                                                <li class="nav-item"><a href="header-style2.html" class="nav-link">Header Style 2</a></li>
                                                <li class="nav-item"><a href="header-style3.html" class="nav-link">Header Style 3</a></li>
                                                <li class="nav-item"><a href="header-style4.html" class="nav-link">Header Style 4</a></li>
                                                <li class="nav-item"><a href="header-style5.html" class="nav-link">Header Style 5</a></li>
                                                <li class="nav-item"><a href="header-style6.html" class="nav-link">Header Style 6</a></li>
                                                <li class="nav-item"><a href="header-style7.html" class="nav-link">Header Style 7</a></li>
                                                <li class="nav-item"><a href="header-style8.html" class="nav-link">Header Style 8</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                        <a class="btn_get btn_hover hidden-sm hidden-xs" href="#get-app">Sign In</a>
                    </div>
                </div>
            </nav>
        </header>

        <section class="breadcrumb_area">
            <img class="breadcrumb_shap" src="websiteNEWASSETS/img/breadcrumb/banner_bg.png" alt="">
            <div class="container">
                <div class="breadcrumb_content text-center">
                    <h1 class="f_p f_700 f_size_50 w_color l_height50 mb_20">What we Offer</h1>
                    <p class="f_400 w_color f_size_16 l_height26">Why I say old chap that is spiffing off his nut arse pear shaped plastered<br> Jeffrey bodge barney some dodgy.!!</p>
                </div>
            </div>
        </section>
        <section class="software_featured_area_three sec_pad">
            <div class="container">
                <h2 class="f_600 f_size_30 t_color3 text-center l_height40 mb_70">Rapidly provision one to thousands of<br> Droplets in seconds</h2>
                <div class="row software_featured_info">
                    <div class="col-lg-4 col-sm-6">
                        <div class="software_featured_item text-center mb_20">
                            <div class="s_icon">
                                <img src="websiteNEWASSETS/img/home5/icon_shape.png" alt="">
                                <img class="icon" src="websiteNEWASSETS/img/home5/icon1.png" alt="">
                            </div>
                            <h3 class="f_600 t_color3">Build better apps faster</h3>
                            <p class="f_400 f_size_15 mb-30">Crikey blow off chap knackered gosh bobby geeza gormless well, Charles cheeky bugger I cor blimey guvnor hanky panky jolly good.</p>
                            <a href="#" class="learn_btn">Learn More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="software_featured_item text-center mb_20">
                            <div class="s_icon">
                                <img src="websiteNEWASSETS/img/home5/icon_shape.png" alt="">
                                <img class="icon" src="websiteNEWASSETS/img/home5/icon2.png" alt="">
                            </div>
                            <h3 class="f_600 t_color3">Predictable pricing</h3>
                            <p class="f_400 f_size_15 mb-30">Crikey blow off chap knackered gosh bobby geeza gormless well, Charles cheeky bugger I cor blimey guvnor hanky panky jolly good.</p>
                            <a href="#" class="learn_btn">Learn More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="software_featured_item text-center mb_20">
                            <div class="s_icon">
                                <img src="websiteNEWASSETS/img/home5/icon_shape.png" alt="">
                                <img class="icon" src="websiteNEWASSETS/img/home5/icon3.png" alt="">
                            </div>
                            <h3 class="f_600 t_color3">Secure and reliable</h3>
                            <p class="f_400 f_size_15 mb-30">Crikey blow off chap knackered gosh bobby geeza gormless well, Charles cheeky bugger I cor blimey guvnor hanky panky jolly good.</p>
                            <a href="#" class="learn_btn">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="developer_product_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 d-flex align-items-center">
                        <div class="developer_product_content d_product_content_two">
                            <h2 class="f_600 f_size_30 l_height30 t_color3 mb_50">What we are Offering?</h2>
                            <ul class="nav nav-tabs develor_tab mb-30" id="myTab2" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="ruby-tab" data-toggle="tab" href="#ruby" role="tab" aria-controls="ruby" aria-selected="true">Ruby </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="curl-tab" data-toggle="tab" href="#curl" role="tab" aria-controls="curl" aria-selected="false"> Curl</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="resize-tab" data-toggle="tab" href="#resize" role="tab" aria-controls="resize" aria-selected="true">Resize</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="doctl-tab" data-toggle="tab" href="#doctl" role="tab" aria-controls="doctl" aria-selected="false">Doctl</a>
                                </li>
                            </ul>
                            <div class="tab-content developer_tab_content">
                                <div class="tab-pane fade show active" id="ruby" role="tabpanel" aria-labelledby="ruby-tab">
                                    <p class="mb_40">Tickety-boo cheers plastered twit chimney pot off his nut hotpot spend a penny have it, so I said squiffy A bit of how's your father mufty pukka knees up absolutely bladdered brown bread, James Bond boot spiffing ummm I'm telling vagabond arse over tit burke. He lost his bottle mush old spend a penny wellies gormless bite.!</p>
                                    <a href="#" class="learn_btn_two c_violet">Learn More <i class="ti-arrow-right"></i></a>
                                </div>
                                <div class="tab-pane fade" id="curl" role="tabpanel" aria-labelledby="curl-tab">
                                    <p class="mb_40">Cheers plastered twit chimney pot off his nut hotpot spend a penny have it, so I said squiffy A bit of how's your father mufty pukka knees up absolutely bladdered brown bread, James Bond boot spiffing ummm I'm telling vagabond arse over tit burke. He lost his bottle mush old spend a penny wellies gormless bite.!</p>
                                    <a href="#" class="learn_btn_two c_violet">Learn More <i class="ti-arrow-right"></i></a>
                                </div>
                                <div class="tab-pane fade" id="resize" role="tabpanel" aria-labelledby="resize-tab">
                                    <p class="mb_40">Tickety-boo cheers plastered twit chimney pot off his nut hotpot spend a penny have it, so I said squiffy A bit of how's your father mufty pukka knees up absolutely bladdered brown bread, James Bond boot spiffing ummm I'm telling vagabond arse over tit burke. He lost his bottle mush old spend a penny wellies gormless bite.!</p>
                                    <a href="#" class="learn_btn_two c_violet">Learn More <i class="ti-arrow-right"></i></a>
                                </div>
                                <div class="tab-pane fade" id="doctl" role="tabpanel" aria-labelledby="doctl-tab">
                                    <p class="mb_40">Tickety-boo cheers plastered twit chimney pot off his nut hotpot spend a penny have it, so I said squiffy A bit of how's your father mufty pukka knees up absolutely bladdered brown bread, James Bond boot spiffing ummm I'm telling vagabond arse over tit burke. He lost his bottle mush old spend a penny wellies gormless bite.!</p>
                                    <a href="#" class="learn_btn_two c_violet">Learn More <i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img class="service_tab_img" src="websiteNEWASSETS/img/breadcrumb/service.png" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="service_details_area sec_pad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="service_details_img">
                            <img src="websiteNEWASSETS/img/breadcrumb/service_details.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="service_details">
                            <h2 class="f_p f_600 f_size_30 t_color3 l_height40 mb-30">Social intranet software that drives employee engagement and productivity.</h2>
                            <p class="f_400 mb_50">Why I say old chap that is spiffing pukka, bamboozled wind up bugger buggered zonked hanky panky a blinding shot the little rotter, bubble and squeak vagabond cheeky.!</p>
                            <ul class="list-unstyled mb-30">
                                <li><i class="ti-arrow-circle-right"></i>Research</li>
                                <li><i class="ti-arrow-circle-right"></i>Opportunity Analysis</li>
                                <li><i class="ti-arrow-circle-right"></i>Consulting</li>
                                <li><i class="ti-arrow-circle-right"></i>Brand Planning</li>
                            </ul>
                            <a href="#" class="learn_btn_two c_violet">View More About <i class="ti-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer_area footer_area_four f_bg">
            <div class="footer_top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="f_widget company_widget">
                                <a href="index.html" class="f-logo"><img src="websiteNEWASSETS/img/logo.png" srcset="img/logo2x.png 2x" alt=""></a>
                                <div class="widget-wrap">
                                    <p class="f_400 f_p f_size_15 mb-0 l_height34"><span>Email:</span> <a href="mailto:saasland@gmail.com" class="f_400">saasland@gmail.com</a></p>
                                    <p class="f_400 f_p f_size_15 mb-0 l_height34"><span>Phone:</span> <a href="tel:948256347968" class="f_400">+948 256 347 968</a></p>
                                </div>
                                <form action="#" class="f_subscribe mailchimp" method="post">
                                    <input type="text" name="EMAIL" class="form-control memail" placeholder="Email">
                                    <button class="btn btn-submit" type="submit"><i class="ti-arrow-right"></i></button>
                                    <p class="mchimp-errmessage" style="display: none;"></p>
                                    <p class="mchimp-sucmessage" style="display: none;"></p>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="f_widget about-widget pl_40">
                                <h3 class="f-title f_600 t_color f_size_18 mb_40">About Us</h3>
                                <ul class="list-unstyled f_list">
                                    <li><a href="#">Company</a></li>
                                    <li><a href="#">Leadership</a></li>
                                    <li><a href="#">Diversity</a></li>
                                    <li><a href="#">Jobs</a></li>
                                    <li><a href="#">Press</a></li>
                                    <li><a href="#">Wavelength</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="f_widget about-widget">
                                <h3 class="f-title f_600 t_color f_size_18 mb_40">Workflow Solutions</h3>
                                <ul class="list-unstyled f_list">
                                    <li><a href="#">Project Management</a></li>
                                    <li><a href="#">Agile</a></li>
                                    <li><a href="#">Task Management</a></li>
                                    <li><a href="#">Reporting</a></li>
                                    <li><a href="#">Work Tracking</a></li>
                                    <li><a href="#">See All Uses</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="f_widget about-widget">
                                <h3 class="f-title f_600 t_color f_size_18 mb_40">Team Solutions</h3>
                                <ul class="list-unstyled f_list">
                                    <li><a href="#">Engineering</a></li>
                                    <li><a href="#">Designers</a></li>
                                    <li><a href="#">Sales</a></li>
                                    <li><a href="#">Developers</a></li>
                                    <li><a href="#">Marketing</a></li>
                                    <li><a href="#">See All Teams</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-5 col-sm-6">
                            <p class="mb-0 f_400">Copyright © 2018 Desing by <a href="#">DroitThemes</a></p>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-6">
                            <div class="f_social_icon_two text-center">
                                <a href="#"><i class="ti-facebook"></i></a>
                                <a href="#"><i class="ti-twitter-alt"></i></a>
                                <a href="#"><i class="ti-vimeo-alt"></i></a>
                                <a href="#"><i class="ti-pinterest"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <ul class="list-unstyled f_menu text-right">
                                <li><a href="#">Terms of Use</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="websiteNEWASSETS/js/jquery-3.2.1.min.js"></script>
    <script src="websiteNEWASSETS/js/propper.js"></script>
    <script src="websiteNEWASSETS/js/bootstrap.min.js"></script>
    <script src="websiteNEWASSETS/vendors/wow/wow.min.js"></script>
    <script src="websiteNEWASSETS/vendors/sckroller/jquery.parallax-scroll.js"></script>
    <script src="websiteNEWASSETS/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="websiteNEWASSETS/vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="websiteNEWASSETS/vendors/isotope/isotope-min.js"></script>
    <script src="websiteNEWASSETS/vendors/magnify-pop/jquery.magnific-popup.min.js"></script>
    <script src="websiteNEWASSETS/vendors/scroll/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="websiteNEWASSETS/js/plugins.js"></script>
    <script src="websiteNEWASSETS/js/main.js"></script>
</body>

</html>
