<footer class="footer_area footer_three">
    <!--<div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="f_widget company_widget">
                        <!--<a href="index.html" class="f-logo"><img src="websiteNEWASSETS/img/logo3.png" srcset="img/logo-3-2x.png 2x" alt="logo"></a>--
                        <a href="index.php" class="f-logo"><img src="websiteNEWASSETS/img/dokume_logo/DOKUME_white.png" srcset="img/dokume_logo/DOKUME_white.png" style="width:200px;" alt="logo"></a>
                        <!--<p class="f_400 f_p f_size_15 mb-0 l_height28 mt_30">Performance is a matter of planning!</p>--
                        <div class="social_icon">
                            <a href="https://www.facebook.com/dokume.net" target="_blank" class="ti-facebook"></a>
                            <a href="https://twitter.com/DokuMenet" target="_blank" class="ti-twitter"></a>
                            <a href="https://www.instagram.com/dokume/" target="_blank" class="ti-instagram"></a>
                        </div>
                    </div>
                    <div class="nav-wrapper">
                      <div class="sl-nav">
                        Sprache:
                        <ul >
                          <li><b class="display-lang" data-i18n="">Deutsch</b> <i class="fa fa-angle-down" aria-hidden="true"></i>
                            <div class="triangle"></div>
                            <ul class="language_select">
                              <li data-lang="de"><i class="sl-flag flag-de"></i> <span class="active">Deutsch</span></li>
                              <li data-lang="en"><i class="sl-flag flag-usa"></i> <span>English</span></li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="f_widget about-widget pl-30">
                        <h3 class="f-title f_600 f_size_18 mb_40">Über uns</h3>
                        <ul class="list-unstyled f_list">
                            <li><a href="#">Unternehmen</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Programmierung</a></li>
                            <li><a href="#">Jobs</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="https://developers.dokume.net">API Dokumentation</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="f_widget about-widget">
                        <h3 class="f-title f_600 f_size_18 mb_40">Produkte</h3>
                        <ul class="list-unstyled f_list">
                            <li><a href="#">Projektmanagement</a></li>
                            <li><a href="#">Kuden & Mitgliederverwaltung</a></li>
                            <li><a href="#">Laufveranstaltungen</a></li>
                            <li><a href="#">Termine</a></li>
                            <li><a href="#">Formulare</a></li>
                            <li><a href="#">Dokumentation</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="f_widget about-widget">
                        <h3 class="f-title f_600 f_size_18 mb_40">Teamlösungen</h3>
                        <ul class="list-unstyled f_list">
                            <li><a href="#">Engineering</a></li>
                            <li><a href="#">Designer</a></li>
                            <li><a href="#">Vertrieb</a></li>
                            <li><a href="#">Entwickler</a></li>
                            <li><a href="#">Marketing</a></li>
                            <li><a href="#">Alle Teams sehen</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <div class="footer_bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-0 f_400">Copyright © <? echo date("Y"); ?> <a href="https://dokume.in">DokuMe</a></p>
                </div>
                <div class="col-md-6">
                    <ul class="f_menu text-right list-unstyled">
                        <li><a href="privacy.php<?php isset($_GET['t']) && $_GET['t'] == 2 ? $temp = '?t=2' : $temp = ''; echo $temp; ?>" data-i18n="menu.privacy">Privacy Policy</a></li>
                        <li><a href="conditions.php<?php isset($_GET['t']) && $_GET['t'] == 2 ? $temp = '?t=2' : $temp = ''; echo $temp; ?>" data-i18n="menu.terms">Conditions</a></li>
                        <!--<li><a href="cookiepolicy.php<?php isset($_GET['t']) && $_GET['t'] == 2 ? $temp = '?t=2' : $temp = ''; echo $temp; ?>" data-i18n="menu.cookiepolicy">Cookie Richtlinie</a></li>-->
                        <li><a href="impress.php<?php isset($_GET['t']) && $_GET['t'] == 2 ? $temp = '?t=2' : $temp = ''; echo $temp; ?>" data-i18n="menu.impress">imprint</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
