<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="websiteNEWASSETS/js/jquery-3.2.1.min.js"></script>
<script src="websiteNEWASSETS/dokumeCustom/js/cookie/cookieconsent.min.js" data-cfasync="false"></script>


<script src="websiteNEWASSETS/js/propper.js"></script>
<script src="websiteNEWASSETS/js/bootstrap.min.js"></script>
<script src="websiteNEWASSETS/vendors/bootstrap-selector/js/bootstrap-select.min.js"></script>
<script src="websiteNEWASSETS/vendors/wow/wow.min.js"></script>
<script src="websiteNEWASSETS/vendors/sckroller/jquery.parallax-scroll.js"></script>

<script src="websiteNEWASSETS/vendors/stellar/jquery.stellar.js"></script>
<script src="websiteNEWASSETS/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="websiteNEWASSETS/vendors/nice-select/jquery.nice-select.min.js"></script>
<script src="websiteNEWASSETS/vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="websiteNEWASSETS/vendors/isotope/isotope-min.js"></script>
<script src="websiteNEWASSETS/vendors/magnify-pop/jquery.magnific-popup.min.js"></script>
<script src="websiteNEWASSETS/vendors/scroll/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="websiteNEWASSETS/js/plugins.js"></script>
<script src="websiteNEWASSETS/vendors/multiscroll/jquery.easings.min.js"></script>
<script src="websiteNEWASSETS/vendors/multiscroll/multiscroll.responsiveExpand.limited.min.js"></script>
<script src="websiteNEWASSETS/vendors/multiscroll/jquery.multiscroll.extensions.min.js"></script>
<script src="websiteNEWASSETS/js/plugins.js"></script>
<script src="websiteNEWASSETS/js/main.js"></script>

<?php
$currentPath = $_SERVER['PHP_SELF']; 

if (basename($currentPath) == 'company.php') {
  echo '<script src="websiteNEWASSETS/play/particles.min.js"></script>
  <script src="websiteNEWASSETS/play/js/app.js"></script>';
}

?>

<script src="websiteNEWASSETS/dokumeCustom/js/i18n/i18next.min.js" ></script>
<script src="websiteNEWASSETS/dokumeCustom/js/i18n/jquery-i18next.min.js" ></script>

<script src="websiteNEWASSETS/dokumeCustom/js/translation.js" ></script>
<script>
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#252e39"
    },
    "button": {
      "background": "#14a7d0"
    }
  },
  "theme": "classic",
  "position": "bottom-right",
  "content": {
    "message": "Diese Website verwendet Cookies, um dir die bestmögliche Nutzung zu gewährleisten. Durch die weitere Nutzung dieser Webseite erklärst du dich mit unserer Cookie-Richtlinie einverstanden.",
    "dismiss": "Verstanden!",
    "link": "Mehr erfahren"
  }
});
</script>
