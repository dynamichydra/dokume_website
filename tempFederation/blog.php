<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="https://dokume.net/website/SaasLand/NEW/img/dokume_logo/DokuMe-pencil.png" type="image/x-icon">
  <title>DokuMe</title>
  <meta name="theme-color" content="#333a54">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://dokume.net/website/SaasLand/NEW/css/bootstrap.min.css">
  <!--icon font css-->
  <link rel="stylesheet" href="https://dokume.net/website/SaasLand/NEW/vendors/themify-icon/themify-icons.css">
  <link rel="stylesheet" href="https://dokume.net/website/SaasLand/NEW/vendors/font-awesome/css/all.css">
  <link rel="stylesheet" href="https://dokume.net/website/SaasLand/NEW/vendors/flaticon/flaticon.css">
  <link rel="stylesheet" href="https://dokume.net/website/SaasLand/NEW/vendors/animation/animate.css">
  <link rel="stylesheet" href="https://dokume.net/website/SaasLand/NEW/vendors/owl-carousel/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://dokume.net/website/SaasLand/NEW/vendors/animation/animate.css">
  <link rel="stylesheet" href="https://dokume.net/website/SaasLand/NEW/vendors/magnify-pop/magnific-popup.css">
  <link rel="stylesheet" href="https://dokume.net/website/SaasLand/NEW/vendors/elagent/style.css">
  <link rel="stylesheet" href="https://dokume.net/website/SaasLand/NEW/vendors/scroll/jquery.mCustomScrollbar.min.css">
  <link rel="stylesheet" href="https://dokume.net/website/SaasLand/NEW/css/style.css">
  <link rel="stylesheet" href="https://dokume.net/website/SaasLand/NEW/css/responsive.css">
  <link rel="stylesheet" href="https://dokume.net/website/SaasLand/NEW/css/dokume_style.css">

  <style>
    .slider_area {
      background: none;
      background-color: #9FC1E9;
      /*background-image: -webkit-linear-gradient(81deg, #a71658 0%, #00aff0 100%);*/
      background: #333954;
      background: -moz-linear-gradient(top, #333954 0%, #9FC1E9 100%);
      background: -webkit-linear-gradient(top, #333954 0%, #9FC1E9 100%);
      background: linear-gradient(to bottom, #333954 0%, #9FC1E9 100%);
    }

    .h_dark {
      background: transparent;
    }

    .header_area.navbar_fixed {
      background-color: #333a54;
    }

    .service_item img {
      width: 170px;
    }

    .new_startup_banner_area {
      background-color: #000;
    }
    .logo_item_color {
      width: calc(100% / 5);
margin: 60px;
    }

      .blog_area {
        text-align: center;
        max-width: 800px;
      }
  </style>

</head>

<body>
    <div class="body_wrapper">

      <?php
      if ($_SERVER['REQUEST_URI'] == '/website/SaasLand/NEW/pushapp.php') {
        include('websiteNEWASSETS/includes/header.php');
      } else {
        echo '
          <header class="header_area header_area_two h_dark">
              <nav class="navbar navbar-expand-lg menu_one menu_four">
                  <div class="container">
                    <a class="navbar-brand sticky_logo" href="home.php">
                      <!--<img src="https://dokume.net/website/SaasLand/NEW/img/dokume_logo/DokuMe-white.png" srcset="img/logo2x-2.png 2x" alt="logo">-->
                      <img src="https://dokume.net/website/SaasLand/NEW/img/dokume_logo/DOKUME_white.png" srcset="https://dokume.net/website/SaasLand/NEW/img/dokume_logo/DOKUME_white.png" alt="logo">
                      <img src="https://dokume.net/website/SaasLand/NEW/img/dokume_logo/DOKUME_white.png" srcset="https://dokume.net/website/SaasLand/NEW/img/dokume_logo/DOKUME_white.png" alt="logo">
                      <!--<img src="https://dokume.net/website/SaasLand/NEW/img/dokume_logo/Logo_Black.png" srcset="img/dokume_logo/Logo_Black.png" alt="">-->
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
                      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                          <ul class="navbar-nav menu w_menu">
                              <li class=nav-item>
                                  <a class="nav-link" href="index.php" role="button" aria-haspopup="true" aria-expanded="false">
                                      Startseite
                                  </a>
                              </li>
                              <li class=nav-item>
                                  <a class="nav-link" href="blog.php" role="button" aria-haspopup="true" aria-expanded="false">
                                      Blog
                                  </a>
                              </li>
                              <li class=nav-item>
                                  <a class="nav-link" href="contact.php" role="button" aria-haspopup="true" aria-expanded="false">
                                      Kontakt
                                  </a>
                              </li>
                          </ul>
                          <a class="btn_get btn_hover hidden-sm hidden-xs" href="https://platform.dokume.net">Anmelden</a>
                      </div>
                  </div>
              </nav>
          </header>';
      }

      ?>

        <section class="breadcrumb_area">
            <img class="breadcrumb_shap" src="https://dokume.net/website/SaasLand/NEW/img/breadcrumb/banner_bg.png" alt="">
            <div class="container">
                <div class="breadcrumb_content text-center">
                    <h1 class="f_p f_700 f_size_50 w_color l_height50 mb_20">Was gibt's neues?</h1>
                    <p class="f_400 w_color f_size_16 l_height26">Bleibt auf dem laufenden und abboniert unsere Social Media Kanäle.</p>
                </div>
            </div>
        </section>

        <center>
        <section class="blog_area sec_pad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div id="feedDIV" class="row">
                            <ul class="col-lg-12 list-unstyled page-numbers shop_page_number text-left mt_30">
                                <li><span aria-current="page" class="page-numbers current">1</span></li>
                                <li><a class="page-numbers" href="#">2</a></li>
                                <li><a class="next page-numbers" href="#"><i class="ti-arrow-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--
                    <div class="col-lg-4">
                        <div class="blog-sidebar">
                            <div class="widget sidebar_widget widget_search">
                                <form action="#" class="search-form input-group">
                                    <input type="search" class="form-control widget_input" placeholder="Search">
                                    <button type="submit"><i class="ti-search"></i></button>
                                </form>
                            </div>
                            <div class="widget sidebar_widget widget_recent_post mt_60">
                                <div class="widget_title">
                                    <h3 class="f_p f_size_20 t_color3">Recent posts</h3>
                                    <div class="border_bottom"></div>
                                </div>
                                <div class="media post_item">
                                    <img src="websiteNEWASSETS/img/blog-grid/post_1.jpg" alt="">
                                    <div class="media-body">
                                        <a href="#">
                                            <h3 class="f_size_16 f_p f_400">Proin gravi nibh velit auctor aliquet aenean.</h3>
                                        </a>
                                        <div class="entry_post_info">
                                            By: <a href="#">Admin</a>
                                            <a href="#">March 14, 2018</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="websiteNEWASSETS/img/blog-grid/post_2.jpg" alt="">
                                    <div class="media-body">
                                        <a href="#">
                                            <h3 class="f_size_16 f_p f_400">Proin gravi nibh velit auctor aliquet aenean.</h3>
                                        </a>
                                        <div class="entry_post_info">
                                            By: <a href="#">Admin</a>
                                            <a href="#">March 14, 2018</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="websiteNEWASSETS/img/blog-grid/post_3.jpg" alt="">
                                    <div class="media-body">
                                        <a href="#">
                                            <h3 class="f_size_16 f_p f_400">Proin gravi nibh velit auctor aliquet aenean.</h3>
                                        </a>
                                        <div class="entry_post_info">
                                            By: <a href="#">Admin</a>
                                            <a href="#">March 14, 2018</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="websiteNEWASSETS/img/blog-grid/post_4.jpg" alt="">
                                    <div class="media-body">
                                        <a href="#">
                                            <h3 class="f_size_16 f_p f_400">Proin gravi nibh velit auctor aliquet aenean.</h3>
                                        </a>
                                        <div class="entry_post_info">
                                            By: <a href="#">Admin</a>
                                            <a href="#">March 14, 2018</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget sidebar_widget widget_categorie mt_60">
                                <div class="widget_title">
                                    <h3 class="f_p f_size_20 t_color3">Categories</h3>
                                    <div class="border_bottom"></div>
                                </div>
                                <ul class="list-unstyled">
                                    <li> <a href="#"><span>Fashion</span><em>(54)</em></a> </li>
                                    <li> <a href="#"><span>Food for thought</span><em>(83)</em></a> </li>
                                    <li> <a href="#"><span>Gaming</span><em>(96)</em></a> </li>
                                    <li> <a href="#"><span>Music</span><em>(38)</em></a> </li>
                                    <li> <a href="#"><span>Uncategorized</span><em>(44)</em></a> </li>
                                    <li> <a href="#"><span>SaasLand</span><em>(44)</em></a> </li>
                                    <li> <a href="#"><span>Project Management</span><em>(44)</em></a> </li>
                                    <li> <a href="#"><span>Wireframing</span><em>(44)</em></a> </li>
                                </ul>
                            </div>
                            <div class="widget sidebar_widget widget_tag_cloud mt_60">
                                <div class="widget_title">
                                    <h3 class="f_p f_size_20 t_color3">Tags</h3>
                                    <div class="border_bottom"></div>
                                </div>
                                <div class="post-tags">
                                    <a href="#">SaasLand</a>
                                    <a href="#">Web Design</a>
                                    <a href="#">Saas</a>
                                    <a href="#">Cooling System</a>
                                    <a href="#">Corporate</a>
                                    <a href="#">Software</a>
                                    <a href="#">Landing</a>
                                    <a href="#">Wheels</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    -->
                </div>
            </div>
        </section>
      </center>

      <footer class="footer_area footer_three">
          <div class="footer_top">
              <div class="container">
                  <div class="row">
                      <div class="col-lg-3">
                          <div class="f_widget company_widget">
                              <!--<a href="index.html" class="f-logo"><img src="websiteNEWASSETS/img/logo3.png" srcset="img/logo-3-2x.png 2x" alt="logo"></a>-->
                              <a href="index.php" class="f-logo"><img src="https://dokume.net/website/SaasLand/NEW/img/dokume_logo/DOKUME_white.png" srcset="https://dokume.net/website/SaasLand/NEW/img/dokume_logo/DOKUME_white.png" style="width:200px;" alt="logo"></a>
                              <!--<p class="f_400 f_p f_size_15 mb-0 l_height28 mt_30">Performance is a matter of planning!</p>-->
                              <div class="social_icon">
                                  <a href="https://www.facebook.com/dokume.net" target="_blank" class="ti-facebook"></a>
                                  <a href="https://twitter.com/DokuMenet" target="_blank" class="ti-twitter"></a>
                                  <a href="https://www.instagram.com/dokume/" target="_blank" class="ti-instagram"></a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="footer_bottom">
              <div class="container">
                  <div class="row">
                      <div class="col-md-6">
                          <p class="mb-0 f_400">Copyright © <? echo date("Y"); ?> <a href="https://dokume.net">DokuMe</a></p>
                      </div>
                      <div class="col-md-6">
                          <ul class="f_menu text-right list-unstyled">
                              <li><a href="https://dokume.net/privacy.html">Datenschutzrichtlinien</a></li>
                              <li><a href="http://dokume.net/terms.html">AGB</a></li>
                              <li><a href="https://dokume.net/impress.html">Impressum</a></li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </footer>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://dokume.net/website/SaasLand/NEW/js/jquery-3.2.1.min.js"></script>
    <script src="https://dokume.net/website/SaasLand/NEW/js/propper.js"></script>
    <script src="https://dokume.net/website/SaasLand/NEW/js/bootstrap.min.js"></script>
    <script src="https://dokume.net/website/SaasLand/NEW/vendors/wow/wow.min.js"></script>
    <script src="https://dokume.net/website/SaasLand/NEW/vendors/sckroller/jquery.parallax-scroll.js"></script>
    <script src="https://dokume.net/website/SaasLand/NEW/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="https://dokume.net/website/SaasLand/NEW/vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="https://dokume.net/website/SaasLand/NEW/vendors/isotope/isotope-min.js"></script>
    <script src="https://dokume.net/website/SaasLand/NEW/vendors/magnify-pop/jquery.magnific-popup.min.js"></script>
    <script src="https://dokume.net/website/SaasLand/NEW/vendors/counterup/jquery.counterup.min.js"></script>
    <script src="https://dokume.net/website/SaasLand/NEW/vendors/counterup/jquery.waypoints.min.js"></script>
    <script src="https://dokume.net/website/SaasLand/NEW/vendors/counterup/appear.js"></script>
    <script src="https://dokume.net/website/SaasLand/NEW/vendors/circle-progress/circle-progress.js"></script>
    <script src="https://dokume.net/website/SaasLand/NEW/vendors/scroll/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="https://dokume.net/website/SaasLand/NEW/js/plugins.js"></script>
    <script src="https://dokume.net/website/SaasLand/NEW/js/main.js"></script>

    <link rel="stylesheet" href="https://test.dokume.net/public/pushapp/bsd/js/fotorama/fotorama.css">
    <script src="https://test.dokume.net/public/pushapp/bsd/js/fotorama/fotorama.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js" integrity="sha256-4iQZ6BVL4qNKlQ27TExEhBN1HFPvAvAMbFavKKosSWQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/locale/de.js" integrity="sha256-wUoStqxFxc33Uz7o+njPIobHc4HJjMQqMXNRDy7X3ps=" crossorigin="anonymous"></script>
    <script src="https://dokume.net/website/SaasLand/NEW/dokumeCustom/js/fb.js"></script>

    <!--<script>
      window.fbAsyncInit = function() {
        FB.init({
          appId            : '360166667671627',
          autoLogAppEvents : true,
          xfbml            : true,
          version          : 'v5.0'
        });

        FB.api(
  '/dokume.net',
  'GET',
  {"fields":"posts.limit(20){full_picture,message,attachments{subattachments},created_time,updated_time},link"},
  function(response) {
      // Insert your code here
  }
);
      };
    </script>
    <script async defer src="https://connect.facebook.net/en_US/sdk.js"></script>-->
</body>

</html>
