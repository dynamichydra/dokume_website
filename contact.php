<!doctype html>
<html lang="en">

<head>
  <?php include('websiteNEWASSETS/includes/head.php'); ?>
<style>

.contact_form_box .btn_three {
    background: #E45038;
    border-color: #ffffff;
}

.contact_form_box .btn_three:hover {
    background: transparent;
    color: #E45038;
}
#formInfo h1 {
  display: none;
}

.DM_PRIVACY_INFO {
  display: none!important;
}

</style>


</head>

<body>
  <div class="body_wrapper">

    <?php include('websiteNEWASSETS/includes/header.php'); ?>

    <!--<section class="breadcrumb_area" style="background-image: url('http://droitthemes.com/html/saasland/img/new-home/banner.png'); background-position:  center center; background-repeat: no-repeat; background-size: cover;">
        <div class="container">
            <div class="breadcrumb_content text-center">
                <h1 class="f_p f_700 f_size_50 b_color l_height50 mb_20">Call the Crew</h1>
                <p class="f_400 b_color f_size_16 l_height26">Why I say old chap that is spiffing off his nut arse pear shaped plastered<br> Jeffrey bodge barney some dodgy.!!</p>
            </div>
        </div>
    </section>-->

    <section class="breadcrumb_area" style="background-image: url(websiteNEWASSETS/img/contact/whyus_1.jpg); background-size: 100%; background-position: top;background-size:cover;" alt="">
      <img class="breadcrumb_shap" src="websiteNEWASSETS/img/breadcrumb/banner_bg.png" alt="">
      <div class="container">
        <div class="breadcrumb_content text-fadeInLeft">
          <h1 class="f_p f_700 f_size_50 w_color l_height50 mb_20">CONTACT.<br>Let's take off together.</h1>
        </div>
      </div>
    </section>


    <section class="contact_info_area sec_pad bg_color" style="padding-top:70px;">
      <div class="container">
      <!--  <div class="sec_title mb_70">
          <h2 class="f_p f_size_24 l_height28 f_700 t_color3 mb_20">Willst Du DokuMe testen?</h2>
          <p class="f_400 f_size_15">Unsere Produktexpert*innen führen Dich unverbindlich durch das DokuMe-Tool und arbeiten die Potenziale für Dein Unternehmen heraus.
            <ul>
              <li>Einblick in alle Produktfunktionen</li>
              <li>Maßgeschneidert auf Deine Schwerpunkte</li>
              <li>Individuelle Beratung für Dich und Dein Team</li>
            </ul>
          </p>
        </div>-->
        <div class="row">
          <div class="col-lg-3 pr-0">
            <div class="contact_info_item">
              <h6 class="f_p f_size_20 t_color3 f_500 mb_20">postal address</h6>
              <p class="f_400 f_size_15">Fritz-Figge-Str. 13, D-50823 Köln</p>
            </div>
            <div class="contact_info_item">
              <h6 class="f_p f_size_20 t_color3 f_500 mb_20">contact information</h6>
              <p class="f_400 f_size_15"><span class="f_400 t_color3">Phone:</span> <a href="tel:00919230062065">+91 92300 62065</a></p>
              <p class="f_400 f_size_15"><span class="f_400 t_color3">Email:</span> <a href="mailto:info@dokume.net">info@dokume.in</a></p>
            </div>
          </div>
          <div class="col-lg-8 offset-lg-1">
            <div class="contact_form">


              <style>
                /* space for own styles */
              </style>

              <div class="dm-forms-widget" data-view="forms" data-formid="16" data-profileid="2900" data-getfields="false" data-bootstrap="false" data-askemail="true" data-apikey="tDYRJHjq5kZMD88g3VqLKysBGPmDVpGfSvXs26IYhyALwyRpk81Uxjl3YyxKN3Qw">
              </div>

              <script>
                ! function() {
                  var e, t, r, i, s, n;
                  e = document, t = "script", r = "dokume_formswidget", i = "https://dokume.net/public/plugin/forms/plugin.js", n = e.getElementsByTagName("script")[0], e.getElementById(r) || ((s = e.createElement(t)).id = r, "script" === t ? (s
                    .src = i, s.defer = "defer", s.async = !1) : (s.href = i, s.rel = "stylesheet"), n.parentNode.insertBefore(s, n))
                }();
              </script>

              <div class="contact_form_box">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group text_box">
                      <input type="text" id="name" name="name" placeholder="Your Name" data-fieldid="300">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group text_box">
                      <input type="text" name="email" id="DM_EMAIL_INPUT" placeholder="Your Email">
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group text_box">
                      <input type="text" id="subject" name="subject" placeholder="Subject" data-fieldid="302">
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group text_box">
                      <textarea name="message" id="message" cols="30" rows="10" placeholder="What's your message?" data-fieldid="303"></textarea>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group text_box">
                      <p class="f_400 t_color3">* Information on the processing of your data can be found in our <a href="https://dokume.net/privacy.php">data protection declaration</a>.</p>
                    </div>
                  </div>
                </div>
                <button id="saveMemberBTN" class="btn_three">Send Message</button>
              </div>
              <div id="success">Your message succesfully sent!</div>
              <div id="error">Opps! There is something wrong. Please try again</div>
            </div>
          </div>
        </div>

        <!--<div class="support_home_img">
                  <img src="http://droitthemes.com/html/saasland/img/new-home/banner.png" alt="">
              </div>-->
      </div>
    </section>

    <!-- <section class="mapbox2">
            <div id="mapBox" class="row m0" data-lat="40.701083" data-lon="-74.1522848" data-zoom="10" data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia." data-marker="img/map.png" data-mlat="40.701083" data-mlon="-74.1522848">
            </div>
        </section>-->

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
  <!--gmaps Js--
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB13ZAvCezMx5TETYIiGlzVIq65Mc2FG5g"></script>
  <script src="websiteNEWASSETS/js/gmaps.min.js"></script>
  <script src="websiteNEWASSETS/js/plugins.js"></script>
  <!-- contact js --
  <script src="websiteNEWASSETS/js/jquery.form.js"></script>
  <script src="websiteNEWASSETS/js/jquery.validate.min.js"></script>
  <script src="websiteNEWASSETS/js/contact.js"></script>-->
  <script src="websiteNEWASSETS/js/main.js"></script>
</body>

</html>
