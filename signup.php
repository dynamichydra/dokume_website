<!doctype html>
<html lang="en">

<head>
  <?php include('websiteNEWASSETS/includes/head.php'); ?>
  <style>
    .h_dark {
      background: #333a54;
    }
  </style>
</head>

<body>

  <div class="body_wrapper">
    <?php include('websiteNEWASSETS/includes/header.php'); ?>

    <section class="login_area">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="login_info">
              <h2 class="f_p f_700 f_size_40 t_color3 mb_20">Registrieren</h2>
              <!--<p class="f_p f_400 f_size_15">Welcome! Please confirm that your are visiting DokuMe </p>-->
              <form id="signupFORM" action="#" class="login-form mt_60">
                <div class="form-group text_box">
                  <label class="f_p text_c f_400">Kategorie</label>
                  <select id="category" class="form-control"></select>
                </div>
                <div class="form-group text_box">
                  <label for="email" class="f_p text_c f_400">Email</label>
                  <input type="email" id="email" placeholder="saasland@gmail.com" required>
                </div>
                <div class="form-group text_box">
                  <label for="firstname" class="f_p text_c f_400">Vorname</label>
                  <input type="text" id="firstname" placeholder="Vorname" required>
                </div>
                <div class="form-group text_box">
                  <label for="lastname" class="f_p text_c f_400">Nachname</label>
                  <input type="text" id="lastname" placeholder="Nachname" required>
                </div>
                <div class="extra">
                  <div class="checkbox remember">
                    <label>
                      <input type="checkbox"> Ich stimme den <a href="agb.php" target="_blank">AGB</a> und <a href="privacy.php" target="_blank">Datenschutzrichtlinien</a> der DokuMe Plattform zu.
                    </label>
                  </div>
                  <!--//check-box-->
                  <!--<div class="forgotten-password">
                    <a href="#">Forgot Password?</a>
                  </div>-->
                </div>
                <button type="submit" class="btn_three">Registrieren</button>
                <div class="alter-login text-center mt_30">
                  Du hast bereits ein Konto? <a class="login-link" href="login.php">Anmelden</a>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-4 d-flex align-items-center">
            <div class="login_img">
              <img src="websiteNEWASSETS/img/login_img2.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php include('websiteNEWASSETS/includes/footer.php'); ?>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/i18next/8.1.0/i18next.min.js" ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-i18next/1.2.0/jquery-i18next.min.js" ></script>

  <script src="websiteNEWASSETS/dokumeCustom/js/translation.js" ></script>
  <script src="websiteNEWASSETS/dokumeCustom/js/signup.js"></script>
</body>

</html>
