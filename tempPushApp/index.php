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

        .call_action_area {
          min-height: auto;
          padding-bottom: 100px;
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
                    </div>
                </nav>
            </header>';
        }

        ?>

        <section class="slider_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 d-flex align-items-center">
                        <div class="slider_content">
                            <!-- <h2 class="f_p f_700 f_size_40 l_height60">Best way to chat to your customers using slack.</h2>-->
                            <h2 class="f_p f_700 f_size_40 l_height60">Gemeinsam informiert. <br><i><small>Ma??geschneidert auf dein Unternehmen, deinen Verband, Club, Heimatort.</small></i></h2>
                            <p class="f_400 l_height28 mt_30">Mit der Push App von DokuMe war Nachrichtenverteilung noch nie so einfach! Alles auf einen Blick und wirklich nur das, was relevant ist. Dein Design, dein Inhalt ??? in nur wenigen Schritten zu deiner benutzerdefinierten Push-App.</p>
                            <a href="#getStarted" class="slider_btn btn_hover mt_30">Get Started</a>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="mobile_img">
                            <div class="img"><img class="women_img leaf wow fadeInDown" data-wow-delay="0.4s" src="https://dokume.net/website/SaasLand/NEW/img/dokume/pushapp/womanpushapp1.png" alt=""></div>
                            <img class="mobile wow fadeInRight" data-wow-delay="0.1s" src="https://dokume.net/website/SaasLand/NEW/img/dokume/pushapp/pushapp1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <img class="leaf l_left" src="https://dokume.net/website/SaasLand/NEW/img/home2/shape_02.png" alt="">
            <img class="leaf l_right" src="https://dokume.net/website/SaasLand/NEW/img/home2/shape_03.png" alt="">
            <img class="middle_shape" src="https://dokume.net/website/SaasLand/NEW/img/home2/shape_01.png" alt="">
            <img class="bottom_shoape" src="https://dokume.net/website/SaasLand/NEW/img/home2/shape.png" alt="">
        </section>

        <section class="features_area sec_pad">
            <div class="container">
                <div class="row feature_info">
                    <div class="col-lg-7">
                        <div class="feature_img f_img_one">
                            <img class="leaf one wow fadeIn" data-wow-delay="0.3s" src="https://dokume.net/website/SaasLand/NEW/img/dokume/pushapp/1_1.png" alt="">
                            <img class="wow fadeInRight" data-wow-delay="0.1s" src="https://dokume.net/website/SaasLand/NEW/img/dokume/pushapp/1_2.png" alt="">
                            <img class="leaf three wow fadeInLeft" data-wow-delay="0.7s" src="https://dokume.net/website/SaasLand/NEW/img/dokume/pushapp/1_3.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="f_content">
                            <div class="icon">
                                <img src="https://dokume.net/website/SaasLand/NEW/img/home2/f_icon_shape1.png" alt="">
                                <i class="ti-comments"></i>
                            </div>
                            <h2 class="f_600 f_size_30">
                              Schluss mit dem endlosen Informations??berfluss.
                            </h2>
                            <p class="f_400">
                              <i>Erhalte nur die Nachrichten, die du auch wirklich m??chtest.
                              <br>
                              Und erreiche ausschlie??lich die Menschen, die deinem Zielpublikum entsprechen.</i>
                              <br><br>
                              Auf das Wesentliche konzentrieren: Mit der Push App bestimmst du, welche Nachrichten f??r dich in Frage kommen. Du entscheidest, welche Themen f??r dich relevant sind und nur diese Nachrichten erh??ltst du auch. Somit verpasst du keine News und du musst dich nicht mehr durch eine endlose Anzahl an Nachrichten durchk??mpfen.
                              <br><br>
                              Oder umgekehrt: Als Nachrichtenversender erreichst du zu 100% dein Zielpublikum. Gezielte Nachrichtenverteilung war noch nie einfacher.

                            </p>
                        </div>
                    </div>
                </div>
                <div class="row feature_info flex-row-reverse mt_130">
                    <div class="col-lg-5 offset-lg-2">
                        <div class="feature_img f_img_two">
                            <img class="leaf one wow fadeInUp" data-wow-delay="0.2s" src="https://dokume.net/website/SaasLand/NEW/img/dokume/pushapp/2_1.png" alt="">
                            <img class="wow fadeInRight" data-wow-delay="0.1s" src="https://dokume.net/website/SaasLand/NEW/img/dokume/pushapp/2_2.png" alt="">
                            <img class="leaf three wow fadeInDown" data-wow-delay="0.7s" src="https://dokume.net/website/SaasLand/NEW/img/dokume/pushapp/2_3.png" alt="">
                            <img class="leaf four wow fadeInRight" data-wow-delay="0.7s" src="https://dokume.net/website/SaasLand/NEW/img/dokume/pushapp/2_4.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="f_content">
                            <div class="icon">
                                <img src="https://dokume.net/website/SaasLand/NEW/img/home2/f_icon_shape2.png" alt="">
                                <i class="ti-location-arrow"></i>
                            </div>
                            <h2 class="f_600 f_size_30">Kein Instagram? Kein Problem.</h2>
                            <p class="f_400">
                              Auch als Nicht-Social Media Nutzer bleiben dir mit der Push App keine Nachrichten mehr verwehrt.
                              Du erh??ltst ganz einfach den von dir ausgew??hlten Feed direkt auf dein Handy und bleibst somit immer aktuell informiert.
                              Und auch f??r einen Social-Media Addict praktisch, denn: Du musst dich nicht mehr darum sorgen, dass die Nachricht von deinem Lieblings-Account im Feed verloren geht. Mit der PushApp erh??ltst du sie n??mlich direkt auf deine App.

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="service_area sec_pad">
            <div class="container custom_container p0">
                <div class="sec_title text-center">
                    <h2 class="f_p f_size_30 l_height50 f_700 t_color2">Eine App. Zahlreiche M??glichkeiten.</h2>
                    <p class="f_400 f_size_16 l_height30">
                      Lasse dir f??r dein Unternehmen, deinen Verband, Club oder Ort eine eigene PushApp gestalten. Nach deinen Vorstellungen - f??r eine geregelte Nachrichtenverteilung mit System.
                      <br><br>
                      Alle Funktionen auf einen Blick:
                    </p>
                </div>
                <div class="row service_info mt_70 mb_30">
                    <div class="col-lg-3 col-sm-6 mb-30">
                        <div class="service_item">
                            <div class="icon s_icon_one"><i class="ti-check"></i></div>
                            <h4 class="f_600 f_size_20 l_height28 t_color2 mb_20">Termin<br> Planung</h4>
                            <p>Somit verlierst du nie wieder den ??berblick: Die Push App zeigt dir alle Termine mit nur einem Klick an.</p>
                            <img class="float-right" src="https://dokume.net/website/SaasLand/NEW/img/dokume/pushapp/3_1.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-30">
                        <div class="service_item">
                            <div class="icon s_icon_two"><i class="ti-location-arrow"></i></div>
                            <h4 class="f_600 f_size_20 l_height28 t_color2 mb_20">Nachrichten<br>filtern</h4>
                            <p>Bestimme selbst, welche Nachrichten du erhalten beziehungsweise versenden m??chtest. 100% Interesse, <br>100% Erhalt der Nachrichten.</p>
                            <img class="float-right" src="https://dokume.net/website/SaasLand/NEW/img/dokume/pushapp/3_2.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-30">
                        <div class="service_item">
                            <div class="icon s_icon_three"><i class="ti-search"></i></div>
                            <h4 class="f_600 f_size_20 l_height28 t_color2 mb_20">Plattform<br>??bergreifender<br>Nachrichtenfeed</h4>
                            <p>Bestimme, welche Facebook oder Instagram Accounts f??r dich relevant sind und erhalte deren Nachrichten-Feed automatisch auf deine App. Daf??r musst du nicht einmal Mitglied der Social Media Plattform sein. </p>
                            <img class="float-right" src="https://dokume.net/website/SaasLand/NEW/img/dokume/pushapp/3_3.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-30">
                        <div class="service_item">
                            <div class="icon s_icon_four"><i class="ti-stats-up"></i></div>
                            <h4 class="f_600 f_size_20 l_height28 t_color2 mb_20">Eigenes<br>Design</h4>
                            <p>Bestimme, wie deine Push-App aussehen soll. F??r ein einheitliches Corporate Design, welches sich durch die ganze App durchzieht.</p>
                            <img class="float-right" src="https://dokume.net/website/SaasLand/NEW/img/dokume/pushapp/3_4.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="call_action_area">
            <!--<img class="leaf action_one" data-parallax='{"x": -50, "y": 0}' src="https://dokume.net/website/SaasLand/NEW/img/dokume/pushapp/bg_app.png" alt="">-->
            <img class="leaf action_two" data-parallax='{"x": 40, "y": 0}' src="https://dokume.net/website/SaasLand/NEW/img/home2/bg_shape.png" alt="">
            <div class="container">
                <div class="action_content text-center">
                    <h2 class="f_p f_size_40 l_height50 f_700">
                      Interessiert?
                    </h2>
                    <p>Bilder sind bekanntlich immer besser als Worte??? Darum klicke ???Get started??? und sieh selbst, wie deine benutzerdefinierte App von DokuMe aussehen k??nnte! </p>
                    <a href="https://test.dokume.net/public/pushapp/demos/UniSalzburg_PushAppDemo/#/pushmessages" target="_blank" class="action_btn btn_hover mt_40">Get Started</a>
                </div>
            </div>
        </section>

        <section class="contact_info_area sec_pad bg_color">
          <a name="getStarted"></a>
            <div class="container">
                <div class="contact_form">
                    <h2 class="f_p f_size_22 t_color3 f_600 l_height28 mb_40">Lust auf eine eigene App bekommen?</h2>
                    <p>Kontaktiere uns f??r weitere Informationen und erz??hle uns von deinem Vorhaben.
                    Wir freuen uns auf spannende Projekte und neue benutzerdefinierte Apps!</p>

                    <style>
                      /* space for own styles */
                    </style>

                    <div class="dm-forms-widget" data-view="forms" data-formid="24" data-profileid="2900" data-getfields="false" data-bootstrap="false" data-askemail="true" data-apikey="tDYRJHjq5kZMD88g3VqLKysBGPmDVpGfSvXs26IYhyALwyRpk81Uxjl3YyxKN3Qw"></div>

                    <script>
                      !function(){var e,t,r,i,s,n;e=document,t="script",r="dokume_formswidget",i="https://dokume.net/public/plugin/forms/plugin.js",n=e.getElementsByTagName("script")[0],e.getElementById(r)||((s=e.createElement(t)).id=r,"script"===t?(s.src=i,s.defer="defer",s.async=!1):(s.href=i,s.rel="stylesheet"),n.parentNode.insertBefore(s,n))}();
                    </script>

                    <div class="contact_form_box">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group text_box">
                                    <input type="text" id="name" name="name" placeholder="Name" data-fieldid="376" data-isrequired="true">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group text_box">
                                    <input type="text" name="email" id="DM_EMAIL_INPUT" placeholder="Email Adresse">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group text_box">
                                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Deine Nachricht . . ." data-fieldid="377" data-isrequired="true"></textarea>
                                </div>
                            </div>
                        </div>
                        <button id="saveMemberBTN" class="btn_three">Nachricht senden</button>
                    </div>
                </div>
            </div>
        </section>

        <!--<section class="pricing_area sec_pad">
            <div class="container custom_container p0">
                <div class="sec_title text-center">
                    <h2 class="f_p f_size_30 l_height50 f_700 t_color2">Simple Pricing for Your Team</h2>
                    <p class="f_400 f_size_16 l_height30 mb-0">Why I say old chap that is spiffing lavatory chip shop gosh off his nut,<br> smashing boot are you taking the piss posh.!</p>
                </div>
                <ul class="nav nav-tabs price_tab mt_70" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active active_hover" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Billed monthly</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Billed annually</a>
                    </li>
                </ul>
                <div class="tab-content price_content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <div class="price_item">
                                    <img src="https://dokume.net/website/SaasLand/NEW/img/dokume/pushapp/4_1.png" alt="">
                                    <h5 class="f_p f_size_20 f_600 t_color2 mt_30">Education</h5>
                                    <p>Create your first online course</p>
                                    <div class="price f_700 f_size_40 t_color2">$25.00<sub class="f_size_16 f_400">/ mo</sub></div>
                                    <ul class="list-unstyled p_list">
                                        <li><i class="ti-check"></i>Only 2 Operators</li>
                                        <li><i class="ti-check"></i>Abandoned Cart</li>
                                        <li><i class="ti-check"></i>Facebook & Instagram Ads</li>
                                        <li><i class="ti-close"></i>Order Notifications</li>
                                        <li><i class="ti-close"></i>Landing Pages</li>
                                    </ul>
                                    <a href="#" class="price_btn btn_hover">Start Today</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="price_item">
                                    <div class="tag"><span>Popular</span></div>
                                    <img src="https://dokume.net/website/SaasLand/NEW/img/dokume/pushapp/4_2.png" alt="">
                                    <h5 class="f_p f_size_20 f_600 t_color2 mt_30">Professional</h5>
                                    <p>Our most popular plan</p>
                                    <div class="price f_700 f_size_40 t_color2">$25.00<sub class="f_size_16 f_400">/ mo</sub></div>
                                    <ul class="list-unstyled p_list">
                                        <li><i class="ti-check"></i>Only 2 Operators</li>
                                        <li><i class="ti-check"></i>Abandoned Cart</li>
                                        <li><i class="ti-check"></i>Facebook & Instagram Ads</li>
                                        <li><i class="ti-close"></i>Order Notifications</li>
                                        <li><i class="ti-close"></i>Landing Pages</li>
                                    </ul>
                                    <a href="#" class="price_btn btn_hover">Start Today</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="price_item">
                                    <img src="https://dokume.net/website/SaasLand/NEW/img/dokume/pushapp/4_3.png" alt="">
                                    <h5 class="f_p f_size_20 f_600 t_color2 mt_30">Business</h5>
                                    <p>Experience thebest of lorem</p>
                                    <div class="price f_700 f_size_40 t_color2">$25.00<sub class="f_size_16 f_400">/ mo</sub></div>
                                    <ul class="list-unstyled p_list">
                                        <li><i class="ti-check"></i>Only 2 Operators</li>
                                        <li><i class="ti-check"></i>Abandoned Cart</li>
                                        <li><i class="ti-check"></i>Facebook & Instagram Ads</li>
                                        <li><i class="ti-close"></i>Order Notifications</li>
                                        <li><i class="ti-close"></i>Landing Pages</li>
                                    </ul>
                                    <a href="#" class="price_btn btn_hover">Start Today</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <div class="price_item">
                                    <img src="https://dokume.net/website/SaasLand/NEW/img/dokume/pushapp/4_1.png" alt="">
                                    <h5 class="f_p f_size_20 f_600 t_color2 mt_30">Education</h5>
                                    <p>Create your first online course</p>
                                    <div class="price f_700 f_size_40 t_color2">$25.00<sub class="f_size_16 f_400">/ mo</sub></div>
                                    <ul class="list-unstyled p_list">
                                        <li><i class="ti-check"></i>Only 2 Operators</li>
                                        <li><i class="ti-check"></i>Abandoned Cart</li>
                                        <li><i class="ti-check"></i>Facebook & Instagram Ads</li>
                                        <li><i class="ti-close"></i>Order Notifications</li>
                                        <li><i class="ti-close"></i>Landing Pages</li>
                                    </ul>
                                    <a href="#" class="price_btn btn_hover">Start Today</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="price_item">
                                    <div class="tag"><span>Popular</span></div>
                                    <img src="https://dokume.net/website/SaasLand/NEW/img/dokume/pushapp/4_2.png" alt="">
                                    <h5 class="f_p f_size_20 f_600 t_color2 mt_30">Professional</h5>
                                    <p>Our most popular plan</p>
                                    <div class="price f_700 f_size_40 t_color2">$25.00<sub class="f_size_16 f_400">/ mo</sub></div>
                                    <ul class="list-unstyled p_list">
                                        <li><i class="ti-check"></i>Only 2 Operators</li>
                                        <li><i class="ti-check"></i>Abandoned Cart</li>
                                        <li><i class="ti-check"></i>Facebook & Instagram Ads</li>
                                        <li><i class="ti-close"></i>Order Notifications</li>
                                        <li><i class="ti-close"></i>Landing Pages</li>
                                    </ul>
                                    <a href="#" class="price_btn btn_hover">Start Today</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="price_item">
                                    <img src="https://dokume.net/website/SaasLand/NEW/img/dokume/pushapp/4_3.png" alt="">
                                    <h5 class="f_p f_size_20 f_600 t_color2 mt_30">Business</h5>
                                    <p>Experience thebest of lorem</p>
                                    <div class="price f_700 f_size_40 t_color2">$25.00<sub class="f_size_16 f_400">/ mo</sub></div>
                                    <ul class="list-unstyled p_list">
                                        <li><i class="ti-check"></i>Only 2 Operators</li>
                                        <li><i class="ti-check"></i>Abandoned Cart</li>
                                        <li><i class="ti-check"></i>Facebook & Instagram Ads</li>
                                        <li><i class="ti-close"></i>Order Notifications</li>
                                        <li><i class="ti-close"></i>Landing Pages</li>
                                    </ul>
                                    <a href="#" class="price_btn btn_hover">Start Today</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                            <p class="mb-0 f_400">Copyright ?? <? echo date("Y"); ?> <a href="https://dokume.net">DokuMe</a></p>
                        </div>
                        <div class="col-md-6">
                            <ul class="f_menu text-right list-unstyled">
                                <li><a href="https://dokume.net/privacy.php">Datenschutzrichtlinien</a></li>
                                <li><a href="https://dokume.net/terms.php">AGB</a></li>
                                <li><a href="https://dokume.net/impress.php">Impressum</a></li>
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
    <script src="https://dokume.net/website/SaasLand/NEW/vendors/bootstrap-selector/js/bootstrap-select.min.js"></script>
    <script src="https://dokume.net/website/SaasLand/NEW/vendors/wow/wow.min.js"></script>
    <script src="https://dokume.net/website/SaasLand/NEW/vendors/sckroller/jquery.parallax-scroll.js"></script>
    <script src="https://dokume.net/website/SaasLand/NEW/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="https://dokume.net/website/SaasLand/NEW/vendors/nice-select/jquery.nice-select.min.js"></script>
    <script src="https://dokume.net/website/SaasLand/NEW/vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="https://dokume.net/website/SaasLand/NEW/vendors/isotope/isotope-min.js"></script>
    <script src="https://dokume.net/website/SaasLand/NEW/vendors/magnify-pop/jquery.magnific-popup.min.js"></script>
    <script src="https://dokume.net/website/SaasLand/NEW/vendors/scroll/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="https://dokume.net/website/SaasLand/NEW/js/main.js"></script>
</body>

</html>
