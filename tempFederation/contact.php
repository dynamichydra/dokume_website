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
      background: #333a54;
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


    <section class="contact_info_area sec_pad bg_color">
      <div class="container">

        <div class="row">
          <div class="col-lg-3 pr-0">
            <div class="contact_info_item">
              <h6 class="f_p f_size_20 t_color3 f_500 mb_20">Postadresse</h6>
              <p class="f_400 f_size_15">Fritz-Figge-Str. 13, D-50823 Köln</p>
            </div>
            <div class="contact_info_item">
              <h6 class="f_p f_size_20 t_color3 f_500 mb_20">Kontaktinformationen</h6>
              <p class="f_400 f_size_15"><span class="f_400 t_color3">Telefon:</span> <a href="tel:00491704978632">+49 170 49 78 632</a></p>
              <p class="f_400 f_size_15"><span class="f_400 t_color3">Email:</span> <a href="mailto:info@dokume.net">info@dokume.net</a></p>
            </div>
          </div>
          <div class="col-lg-8 offset-lg-1">
            <div class="contact_form">


              <style>
                /* space for own styles */
              </style>

              <div class="dm-forms-widget" data-view="forms" data-formid="16" data-profileid="2900" data-getfields="false" data-bootstrap="false" data-askemail="true" data-apikey="tDYRJHjq5kZMD88g3VqLKysBGPmDVpGfSvXs26IYhyALwyRpk81Uxjl3YyxKN3Qw"></div>

              <script>
                !function(){var e,t,r,i,s,n;e=document,t="script",r="dokume_formswidget",i="https://dokume.net/public/plugin/forms/plugin.js",n=e.getElementsByTagName("script")[0],e.getElementById(r)||((s=e.createElement(t)).id=r,"script"===t?(s.src=i,s.defer="defer",s.async=!1):(s.href=i,s.rel="stylesheet"),n.parentNode.insertBefore(s,n))}();
              </script>

              <div class="contact_form_box">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group text_box">
                      <input type="text" id="name" name="name" placeholder="Dein Name" data-fieldid="300">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group text_box">
                      <input type="text" name="email" id="DM_EMAIL_INPUT" placeholder="Deine Email">
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group text_box">
                      <input type="text" id="subject" name="subject" placeholder="Betreff" data-fieldid="302">
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group text_box">
                      <textarea name="message" id="message" cols="30" rows="10" placeholder="Wie lautet deine Nachricht?" data-fieldid="303"></textarea>
                    </div>
                  </div>
                </div>
                <button id="saveMemberBTN" class="btn_three">Nachricht senden</button>
              </div>
              <div id="success">Your message succesfully sent!</div>
              <div id="error">Opps! There is something wrong. Please try again</div>
            </div>
          </div>
        </div>

              <div class="support_home_img">
                  <img src="http://droitthemes.com/html/saasland/img/new-home/banner.png" alt="">
              </div>
      </div>
    </section>

    <!-- <section class="mapbox2">
            <div id="mapBox" class="row m0" data-lat="40.701083" data-lon="-74.1522848" data-zoom="10" data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia." data-marker="img/map.png" data-mlat="40.701083" data-mlon="-74.1522848">
            </div>
        </section>-->


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
</body>

</html>
