<script type="text/javascript">
  //window.location = 'UPDATE_INFO';
  var authConfig = localStorage.getItem('authConfig');
  if (authConfig && authConfig.token !== '' && authConfig.refresh !== '') {
    //window.location = 'https://dokume.net/platform';
  }
</script>

<!doctype html>
<html lang="en">

<head>
  <?php include('websiteNEWASSETS/includes/head.php'); ?>
  <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" integrity="sha256-PHcOkPmOshsMBC+vtJdVr5Mwb7r0LkSVJPlPrp/IMpU=" crossorigin="anonymous" />-->
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
            <div id="loginDIV" class="login_info">
              <h2 class="f_p f_700 f_size_40 t_color3 mb_20">Anmelden</h2>


              <!--<p class="f_p f_400 f_size_15">Welcome! Please confirm that your are visiting <br><a href="#">https://www.saasland.com</a></p>-->
              <form id="loginFORM" action="#" class="login-form mt_60">

                <div id="errorMsg" class="alert alert-danger" style="display:none">
                  Benutzername oder Passwort falsch.
                </div>
                <div class="form-group text_box">
                  <label class="f_p text_c f_400">Email</label>
                  <input id="email" type="text" placeholder="z.B. mustermann@dokume.net">
                </div>
                <div class="form-group text_box">
                  <label class="f_p text_c f_400">Passwort</label>
                  <input id="pass" type="password" placeholder="******">
                </div>
                <div class="extra">
                  <div class="checkbox remember">
                    <label>
                      <input type="checkbox"> Angemeldet bleiben
                    </label>
                  </div>
                  <!--//check-box-->
                  <div class="forgotten-password">
                    <a href="passwordReset.php">Passwort vergessen?</a>
                  </div>
                </div>
                <button type="submit" class="btn_three">Anmelden</button>
                <div class="alter-login text-center mt_30">
                  Noch kein Konto? <a class="login-link" href="signup.php">Registrieren</a>
                </div>
              </form>
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

  <script src="https://dokume.net/platform/js/class/auth.js"></script>

  <script src="websiteNEWASSETS/dokumeCustom/js/login.js"></script>
</body>

</html>
