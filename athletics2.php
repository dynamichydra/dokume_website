<!--https://drive.google.com/drive/folders/1TX3cfLM4UYWLi5Dk0VQ8-30HB0jyJxFc?usp=sharing-->
<!doctype html>
<html lang="en">

<head>
    <?php include('websiteNEWASSETS/includes/head.php'); ?>
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

        .call_action_area {
          min-height: auto;
          padding-bottom: 100px;
        }

        .digital_banner_area .owl-carousel.owl-drag .owl-item {
          border: 7px solid #fff;
          border-radius: 5px;
        }

        .digital_banner_area {
          background-image: url(websiteNEWASSETS/img/athletics/runnersBG.jpg);
          background-size:cover;
        }
    </style>
</head>

<body>
    <div class="body_wrapper">
        <?php
        if ($_SERVER['REQUEST_URI'] == '/website/SaasLand/NEW/athletics2.php') {
          include('websiteNEWASSETS/includes/header.php');
        } else {
          echo '
            <header class="header_area header_area_two h_dark">
                <nav class="navbar navbar-expand-lg menu_one menu_four">
                    <div class="container">
                      <a class="navbar-brand sticky_logo" href="home.php">
                        <!--<img src="http://droitthemes.com/html/saasland/img/dokume_logo/DokuMe-white.png" srcset="img/logo2x-2.png 2x" alt="logo">-->
                        <img src="http://droitthemes.com/html/saasland/img/dokume_logo/DOKUME_white.png" srcset="img/dokume_logo/DOKUME_white.png" alt="logo">
                        <img src="http://droitthemes.com/html/saasland/img/dokume_logo/DOKUME_white.png" srcset="img/dokume_logo/DOKUME_white.png" alt="logo">
                        <!--<img src="http://droitthemes.com/html/saasland/img/dokume_logo/Logo_Black.png" srcset="img/dokume_logo/Logo_Black.png" alt="">-->
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

        <section class="digital_banner_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-8">
                        <div class="digital_content">
                            <h2>Zeitmessung bei Sportevents</h2>
                            <p>bei deinem professionellen Zeitnehmer. Wir betreuen deine Veranstaltung von der Planung bis nach der Siegerehrung.</p>
                            <a href="#" class="btn_six slider_btn">Kontaktiere uns</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="digital_video_slider owl-carousel">
                <div class="video_item">
                    <img src="websiteNEWASSETS/img/athletics/feuerwehr.png" alt="">
                    <!--<a class="popup-youtube video_icon" href="https://www.youtube.com/watch?v=sU3FkzUKHXU"><i class="arrow_triangle-right"></i></a>-->
                </div>
                <div class="video_item">
                    <img src="websiteNEWASSETS/img/athletics/fahrrad.png" alt="">
                    <!--<a class="popup-youtube video_icon" href="https://www.youtube.com/watch?v=sU3FkzUKHXU"><i class="arrow_triangle-right"></i></a>-->
                </div>
                <div class="video_item">
                    <img src="websiteNEWASSETS/img/athletics/team.png" alt="">
                    <!--<a class="popup-youtube video_icon" href="https://www.youtube.com/watch?v=sU3FkzUKHXU"><i class="arrow_triangle-right"></i></a>-->
                </div>
                <div class="video_item">
                    <img src="websiteNEWASSETS/img/athletics/inklusion.png" alt="">
                    <!--<a class="popup-youtube video_icon" href="https://www.youtube.com/watch?v=sU3FkzUKHXU"><i class="arrow_triangle-right"></i></a>-->
                </div>
                <div class="video_item">
                    <img src="websiteNEWASSETS/img/athletics/autobahn.png" alt="">
                    <!--<a class="popup-youtube video_icon" href="https://www.youtube.com/watch?v=sU3FkzUKHXU"><i class="arrow_triangle-right"></i></a>-->
                </div>
            </div>
            <!--<div class="digital_banner_shap"></div>
            <div class="round_shap one"></div>
            <div class="round_shap two"></div>
            <div class="round_shap three"></div>-->
        </section>
        <section class="partner_logo_area_six bg_color">
            <div class="container">
                <div class="row partner_info">
                    <div class="logo_item wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                        <a href="#"><img src="http://droitthemes.com/html/saasland/img/home6/logo_01.png" alt=""></a>
                    </div>
                    <div class="logo_item wow fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                        <a href="#"><img src="http://droitthemes.com/html/saasland/img/home6/logo_02.png" alt=""></a>
                    </div>
                    <div class="logo_item wow fadeInLeft" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft;">
                        <a href="#"><img src="http://droitthemes.com/html/saasland/img/home6/logo_03.png" alt=""></a>
                    </div>
                    <div class="logo_item wow fadeInLeft" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInLeft;">
                        <a href="#"><img src="http://droitthemes.com/html/saasland/img/home6/logo_04.png" alt=""></a>
                    </div>
                    <div class="logo_item wow fadeInLeft" data-wow-delay="0.9s" style="visibility: visible; animation-delay: 0.9s; animation-name: fadeInLeft;">
                        <a href="#"><img src="http://droitthemes.com/html/saasland/img/home6/logo_05.png" alt=""></a>
                    </div>
                </div>
            </div>
        </section>
        <section class="startup_fuatures_area_two sec_pad">
            <div class="container">
                <div class="sec_title mb_70 wow fadeInUp" data-wow-delay="0.4s">
                    <h2 class="f_p f_size_30 l_height40 f_600 t_color text-center">Folgende Dinge bietet<br> unser Service für dich</h2>
                </div>
                <ul class="nav nav-tabs startup_tab">
                    <li class="nav-item">
                        <a class="nav-link" href="#market">
                            <span class="icon"><i class="icon-cloud-upload"></i></span>
                            <h3>Vorbereitung der Veranstaltung</h3>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#app">
                            <span class="icon"><i class="icon-screen-tablet"></i></span>
                            <h3>Online - <br>Anmeldung</h3>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#hubstaff">
                            <span class="icon"><i class="icon-graduation"></i></span>
                            <h3>Zeitnahme & Auswertung</h3>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#engine">
                            <span class="icon"><i class="icon-refresh"></i></span>
                            <h3>Ergebnisse & Urkunden</h3>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#business">
                            <span class="icon"><i class="icon-bulb"></i></span>
                            <h3>Veranstaltungs- statistik<br></h3>
                        </a>
                    </li>
                </ul>
            </div>
        </section>

        <section class="saas_service_area sec_pad">
            <div class="container">
                <div class="sec_title text-center mb_70 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <h2 class="f_p f_size_30 l_height50 f_600 t_color">Wir unterstützen Sie bei der...</h2>
                    <p class="f_400 f_size_16">Well at public school cheeky bugger grub burke codswallop smashing only a quid<br> pardon you lavatory chip shop, geeza loo horse play.</p>
                </div>
                <div class="row saas_service_item">
                    <div class="col-lg-6">
                        <div class="saas_service_img wow fadeInLeft" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                            <img src="websiteNEWASSETS/img/athletics/team2.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center">
                        <div class="saas_service_content pr_100 wow fadeInRight" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInRight;">
                            <div class="icon icon_one"><i class="ti-control-shuffle"></i></div>
                            <h4 class="f_500 f_p t_color">Vorbereitung deiner Veranstanlung</h4>
                            <ul class="f_p f_400">
                              <li>Beratung in der Vorbereitungsphase</li>
                              <li>Bereitstellung der Online-Anmeldung</li>
                              <li>Materialbeschaffung von Startnummern, Sicherheitsnadeln und Urkunden</li>
                              <li>Konfektionierung der Startunterlagen für die Teilnehmer</li>
                            </ul>
                            <a href="#" class="gr_btn"><span class="text">Mehr erfahren</span></a>
                        </div>
                    </div>
                </div>
                <div class="row flex-row-reverse saas_service_item">
                    <div class="col-lg-6">
                        <div class="saas_service_img wow fadeInRight" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
                            <img src="websiteNEWASSETS/img/athletics/raceresultBox.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center">
                        <div class="saas_service_content pl_100 wow fadeInLeft" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft;">
                            <div class="icon icon_two"><i class="ti-split-v-alt"></i></div>
                            <h4 class="f_500 f_p t_color">Durchführung deiner Veranstanlung</h4>
                            <ul class="f_p f_400">
                              <li>Zeitmessung mit modernsten Transpondersystemen</li>
                              <li>Brutto- und/oder Nettozeit - Zwischenzeiten</li>
                              <li>Erfassung von Nachmeldungen</li>
                              <li>Auswertungen (unter Beachtung der Regelments - DLV, UCI, DTU, DRIV, FIS)</li>
                              <li>Altersklassenwertungen - Mannschaftswertungen - Sonderwertungen</li>
                              <li>Aufbereitung und Druck der Ergebnislisten</li>
                              <li>Druck von Urkunden für Siegerehrungen </li>
                            </ul>
                            <a href="#" class="gr_btn"><span class="text">Mehr erfahren</span></a>
                        </div>
                    </div>
                </div>
                <div class="row saas_service_item">
                    <div class="col-lg-6">
                        <div class="saas_service_img wow fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                            <img src="websiteNEWASSETS/img/athletics/ziel.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center">
                        <div class="saas_service_content pr_100 wow fadeInRight" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInRight;">
                            <div class="icon icon_three"><i class="ti-bar-chart-alt"></i></div>
                            <h4 class="f_500 f_p t_color">beim Abschluss deiner Veranstanlung</h4>
                            <ul class="f_p f_400">
                              <li>Bereitstellung der Ergebnisse im Internet</li>
                              <li>Bereitstellung der individuellen Urkunden zum Download</li>
                              <li>Aufbereitung von Daten/Ergebnissen/Statistiken für den Veranstalter und die Presse</li>
                            </ul>
                            <a href="#" class="gr_btn"><span class="text">Mehr erfahren</span></a>
                        </div>
                    </div>
                </div>
                <!--<div class="row flex-row-reverse saas_service_item">
                    <div class="col-lg-6">
                        <div class="saas_service_img wow fadeInRight" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
                            <img src="http://droitthemes.com/html/saasland/img/home-10/Development.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center">
                        <div class="saas_service_content pl_100 wow fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                            <div class="icon icon_four"><i class="ti-settings"></i></div>
                            <h4 class="f_500 f_p t_color">For Bare metal Servers</h4>
                            <p class="f_p f_400">Harry don't get shirty with me loo hanky panky in my flat bog jolly good blag bamboozled the BBC well fantastic, excuse my French crikey geeza spiffing lost the plot codswallop brilliant blower pardon.!</p>
                            <a href="#" class="gr_btn"><span class="text">Mehr erfahren</span></a>
                        </div>
                    </div>
                </div>-->
            </div>
        </section>


                <section class="saas_service_area ">
                    <div class="container">

                          <div class="sec_title mb_70 wow fadeInUp" data-wow-delay="0.4s">
                              <h2 class="f_p f_size_30 l_height40 f_600 t_color text-center">Unsere Veranstaltungen</h2>
                          </div>

                        <link rel="stylesheet" type="text/css" href="https://my.raceresult.com/RREvents/style.css">
                        <div class="EventTable" id="tEventTable">
                            <div>
                                <div>&nbsp;</div>
                                <div>&nbsp;</div>
                                <div>Stadt</div>
                                <div>Veranstaltung</div>
                                <div>Datum</div>
                            </div>
                        </div>
                        <!--<script type="text/javascript" src="https://my.raceresult.com/RREvents/jquery-latest.min.js"></script>-->
                        <script type="text/javascript" src="https://my.raceresult.com/RREvents/RREvents.js"></script>
                        <script type="text/javascript">
                            <!--
                            var options = {
                                dateFormat: 'dd.mm.yyyy'
                            };
                            var rre = new RREvents(document.getElementById("tEventTable"), null, 'de', options);
                            rre.server = "https://my.raceresult.com";
                            rre.user = 25689;
                            //rre.year=2017;
                            //rre.group=1234;
                            //rre.eventlink="http://your.webseite.com/events/show?eventid=[eventid]";
                            //rre.openInNewWindow=false;
                            rre.loadEvents(function(resultSize) {
                                return true;
                            });

                            -->
                        </script>
                    </div>
                </section>
        <!--<section class="video_area bg_color sec_pad">
            <div class="container">
                <div class="sec_title text-center mb_70">
                    <h2 class="f_p f_size_30 l_height45 f_600 t_color3">The SaasLand platform</h2>
                    <p class="f_400 f_size_16 mb-0">Samsa will only charge a fee if you make a profit</p>
                </div>
                <div class="video_content">
                    <div class="video_info">
                        <div class="ovarlay_color"></div>
                        <a class="popup-youtube video_icon" href="https://www.youtube.com/watch?v=sU3FkzUKHXU"><i class="arrow_triangle-right"></i></a>
                        <h2>SaasLand</h2>
                    </div>
                    <img class="video_leaf" src="http://droitthemes.com/html/saasland/img/new/leaf.png" alt="">
                    <img class="cup" src="http://droitthemes.com/html/saasland/img/new/cup.png" alt="">
                </div>
            </div>
        </section>
        <section class="portfolio_area sec_pad">
            <div class="container">
                <div class="sec_title mb_70 wow fadeInUp" data-wow-delay="0.4s">
                    <h2 class="f_p f_size_30 l_height40 f_600 t_color text-center">take a look around<br>our portfolio</h2>
                </div>
                <div id="portfolio_filter" class="portfolio_filter portfolio_filter_blue mb_50">
                    <div data-filter="*" class="work_portfolio_item active">See All</div>
                    <div data-filter=".br" class="work_portfolio_item">Branding</div>
                    <div data-filter=".web" class="work_portfolio_item">Web Design</div>
                    <div data-filter=".fashion" class="work_portfolio_item">Fashion</div>
                    <div data-filter=".ux" class="work_portfolio_item">UI/UX</div>
                    <div data-filter=".product" class="work_portfolio_item">Product</div>
                </div>
                <div class="row portfolio_gallery mb_30" id="work-portfolio">
                    <div class="col-lg-4 col-sm-6 portfolio_item br ux mb-30">
                        <div class="portfolio_img">
                            <img src="http://droitthemes.com/html/saasland/img/portfolio/3-columns/3_col_1.jpg" alt="">
                            <div class="hover_content h_content_two">
                                <a href="img/portfolio/3-columns/3_col_1.jpg" class="img_popup leaf"><i class="ti-plus"></i></a>
                                <div class="portfolio-description leaf">
                                    <a href="work-default.html" class="portfolio-title">
                                        <h3 class="f_500 f_size_20 f_p">Apple Mobile Mockup</h3>
                                    </a>
                                    <div class="links"><a href="#">Branding,</a><a href="#">Fashion</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 portfolio_item fashion web mb-30">
                        <div class="portfolio_img">
                            <img src="http://droitthemes.com/html/saasland/img/portfolio/3-columns/3_col_2.jpg" alt="">
                            <div class="hover_content h_content_two">
                                <a href="img/portfolio/3-columns/3_col_2.jpg" class="img_popup leaf"><i class="ti-plus"></i></a>
                                <div class="portfolio-description leaf">
                                    <a href="work-default.html" class="portfolio-title">
                                        <h3 class="f_500 f_size_20 f_p">Interior Design</h3>
                                    </a>
                                    <div class="links"><a href="#">Branding,</a><a href="#">Fashion</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 portfolio_item product br mb-30">
                        <div class="portfolio_img">
                            <img src="http://droitthemes.com/html/saasland/img/portfolio/3-columns/3_col_4.jpg" alt="">
                            <div class="hover_content h_content_two">
                                <a href="img/portfolio/3-columns/3_col_4.jpg" class="img_popup leaf"><i class="ti-plus"></i></a>
                                <div class="portfolio-description leaf">
                                    <a href="work-default.html" class="portfolio-title">
                                        <h3 class="f_500 f_size_20 f_p">Portfolio Center Slider</h3>
                                    </a>
                                    <div class="links"><a href="#">Branding,</a><a href="#">Fashion</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 portfolio_item ux web mb-30">
                        <div class="portfolio_img">
                            <img src="http://droitthemes.com/html/saasland/img/portfolio/3-columns/3_col_5.jpg" alt="">
                            <div class="hover_content h_content_two">
                                <a href="img/portfolio/3-columns/3_col_5.jpg" class="img_popup leaf"><i class="ti-plus"></i></a>
                                <div class="portfolio-description leaf">
                                    <a href="work-default.html" class="portfolio-title">
                                        <h3 class="f_500 f_size_20 f_p">Portfolio Masonry</h3>
                                    </a>
                                    <div class="links"><a href="#">Branding,</a><a href="#">Fashion</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 portfolio_item br ux mb-30">
                        <div class="portfolio_img">
                            <img src="http://droitthemes.com/html/saasland/img/portfolio/3-columns/3_col_6.jpg" alt="">
                            <div class="hover_content h_content_two">
                                <a href="img/portfolio/3-columns/3_col_6.jpg" class="img_popup leaf"><i class="ti-plus"></i></a>
                                <div class="portfolio-description leaf">
                                    <a href="work-default.html" class="portfolio-title">
                                        <h3 class="f_500 f_size_20 f_p">Double Exposure</h3>
                                    </a>
                                    <div class="links"><a href="#">Branding,</a><a href="#">Fashion</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 portfolio_item fashion web mb-30">
                        <div class="portfolio_img">
                            <img src="http://droitthemes.com/html/saasland/img/portfolio/3-columns/3_col_7.jpg" alt="">
                            <div class="hover_content h_content_two">
                                <a href="img/portfolio/3-columns/3_col_7.jpg" class="img_popup leaf"><i class="ti-plus"></i></a>
                                <div class="portfolio-description leaf">
                                    <a href="work-default.html" class="portfolio-title">
                                        <h3 class="f_500 f_size_20 f_p">American Burger</h3>
                                    </a>
                                    <div class="links"><a href="#">Branding,</a><a href="#">Fashion</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a href="#" class="btn_six slider_btn pr_btn">View All Work</a>
                </div>
            </div>
        </section>-->
        <section class="testimonial_area_five sec_pad bg_color">
            <div class="testimonial_shap_img" style="background: url(websiteNEWASSETS/img/new/testimonial_bg_shap.png) no-repeat bottom left;"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 d-flex align-items-center">
                        <div class="testimonial_title">
                            <h2 class="f_p f_size_30 l_height45 f_600 t_color">Loved by businesses,<br>and individuals across<br>the globe.</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-2">
                        <div class="stratup_testimonial_info d-flex align-items-center">
                            <div class="testimonial_slider_four owl-carousel">
                                <div class="item">
                                    <div class="author_img">
                                        <img src="http://droitthemes.com/html/saasland/img/new/member_01.jpg" alt="">
                                    </div>
                                    <p>He nicked it hanky panky Eaton naff it's your round quaint cheeky cheers, tomfoolery bonnet posh blimey what a plonker vagabond, zonked Elizabeth give us a bell.?</p>
                                    <h5>Phillip Anthropy</h5>
                                    <h6>UI/UX designer</h6>
                                </div>
                                <div class="item">
                                    <div class="author_img">
                                        <img src="http://droitthemes.com/html/saasland/img/new/member_01.jpg" alt="">
                                    </div>
                                    <p>He nicked it hanky panky Eaton naff it's your round quaint cheeky cheers, tomfoolery bonnet posh blimey what a plonker vagabond, zonked Elizabeth give us a bell.?</p>
                                    <h5>Phillip Anthropy</h5>
                                    <h6>UI/UX designer</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="contact_info_area sec_pad bg_color" id="contact">
            <div class="container">
                <div class="contact_form">
                    <h2 class="f_p f_size_22 t_color3 f_600 l_height28 mb_40">Auf der Suche nach Zeitnehmern?</h2>
                    <p>Kontaktiere uns für weitere Informationen und erzähle uns von deinem Vorhaben.
                        Wir freuen uns auf spannende Projekte und tolle Veranstaltungen!</p>
                    <form action="contact_process.php" class="contact_form_box" method="post" id="contactForm" novalidate="novalidate">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group text_box">
                                    <input type="text" id="name" name="name" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group text_box">
                                    <input type="text" name="email" id="email" placeholder="Email Adresse">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group text_box">
                                    <input type="text" id="subject" name="subject" placeholder="Betreff">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group text_box">
                                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Deine Nachricht . . ."></textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn_three">Nachricht senden</button>
                    </form>
                    <div id="success">Your message succesfully sent!</div>
                    <div id="error">Opps! There is something wrong. Please try again</div>
                </div>
            </div>
        </section>

        <?php
        if ($_SERVER['REQUEST_URI'] == '/website/SaasLand/NEW/athletics2.php') {
          include('websiteNEWASSETS/includes/footer.php');
        }
        ?>
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
    <script src="websiteNEWASSETS/vendors/counterup/jquery.counterup.min.js"></script>
    <script src="websiteNEWASSETS/vendors/counterup/jquery.waypoints.min.js"></script>
    <script src="websiteNEWASSETS/vendors/counterup/appear.js"></script>
    <script src="websiteNEWASSETS/vendors/circle-progress/circle-progress.js"></script>
    <script src="websiteNEWASSETS/vendors/scroll/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="websiteNEWASSETS/js/plugins.js"></script>
    <script src="websiteNEWASSETS/js/main.js"></script>
</body>

</html>
