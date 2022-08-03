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
              <div id="resetDIV">

                <h2 class="f_p f_700 f_size_40 t_color3 mb_20">Doku<span style="color: #e35138;">Me </span><span data-i18n="actionW.passReset">Passwort zurücksetzen</span></h2>

                <p class="f_p f_400 f_size_15" data-i18n="actionW.resetPassText">Hast du dein Passwort vergessen? Kein Problem, wir schicken dir ein neues zu. Gib dafür bitte deine Email Adresse, mit der du dich auf DokuMe registriert hast, an.</p>
                <form id="resetFORM" action="#" class="login-form mt_60">
                  <div class="form-group text_box">
                    <label class="f_p text_c f_400">Email</label>
                    <input id="email" type="email" placeholder="z.B. mustermann@dokume.net" data-i18n="[placeholder]registerW.mail">
                  </div>
                  <button type="submit" class="btn_three" data-i18n="actionW.resetPass">Passwort zurücksetzen</button>
                  <div class="alter-login text-center mt_30" data-i18n="actionW.resetPassText2">
                    Ohje, du hast auch die Email Adresse vergessen? Setze dich bitte mit uns in <a href="contact.php">Kontakt</a>
                  </div>
                </form>
                
              </div>
            </div>
          </div>
          <div class="col-lg-4 d-flex align-items-center">
            <div class="login_img">
              <img src="websiteNEWASSETS/img/login_img.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>


    <?php include('websiteNEWASSETS/includes/dokumeAppDownload.php'); ?>
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
  <script src="websiteNEWASSETS/dokumeCustom/js/passwordReset.js"></script>
</body>

</html>
