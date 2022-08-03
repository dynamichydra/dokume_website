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

    <section class="new_startup_banner_area">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.4s">
            <div class="new_startup_img">
              <div class="line line_one"><img src="https://dokume.net/website/SaasLand/NEW/img/new/line_01.png" alt=""></div>
              <div class="line line_two"><img src="https://dokume.net/website/SaasLand/NEW/img/new/line_02.png" alt=""></div>
              <div class="line line_three"><img src="https://dokume.net/website/SaasLand/NEW/img/new/line_03.png" alt=""></div>
              <!--<img src="websiteNEWASSETS/img/new/startup_banner_img.png" alt="">-->
              <img src="https://dokume.net/website/SaasLand/NEW/dokumeCustom/img/dashboard.png" alt="">
              <!--<img src="http://droitthemes.com/html/saasland/img/new/startup_banner_img.png" alt="">-->
            </div>
          </div>
          <div class="col-lg-6 d-flex align-items-center">
            <div class="new_startup_content">
              <h2 class="f_700 f_size_40 l_height50 w_color mb_20 wow fadeInRight" data-wow-delay="0.3s">Staubige Ordner und Überweisungsträger? <br><span>Digitalisiere</span><br>  deine Geschäftsstelle.</h2>
              <p class="f_400 w_color l_height28 wow fadeInRight" data-wow-delay="0.4s">Du hast keine Lust mehr Papier und Stift in die Hand zu nehmen um deine Mitgliedsdaten aktuell zu halten, sondern willst lieber deine Zeit für wichtigere Dinge verwenden? Dann nutze jetzt DokuMe, um die digitale Geschäftsstelle deines Vereins oder Verbandes zu eröffnen!
              </p>
              <div class="action_btn d-flex align-items-center mt_40 wow fadeInRight" data-wow-delay="0.6s">
                <a href="contact.php" class="btn_hover app_btn">Demo anfragen <i class="ti-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="service_area sec_pad">
      <div class="container custom_container p0">
        <div class="sec_title text-center">
          <h2 class="f_p f_size_30 l_height50 f_700 t_color2">Eine Plattform. Zahlreiche Möglichkeiten.</h2>
          <p class="f_400 f_size_16 l_height30">
            Ob Mitgliederverwaltung, Jahresplanung, Veranstaltungsmanagement oder Aufgabenverwaltung, mit DokuMe hast du deine Geschäftsstelle jetzt immer in der Hosentasche. Kommuniziere direkt mit Funktionären, Vorstand oder Mitgliedern von überall auf der Welt. Einfach herunterladen, registrieren und das DokuMe – Universum entdecken
            <br><br>
            Alle Funktionen auf einen Blick:
          </p>
        </div>
        <div class="row service_info mt_70 mb_30">
          <div class="col-lg-6 col-sm-6 mb-30">
            <div class="service_item">
              <div class="icon s_icon_two"><i class="ti-location-arrow"></i></div>
              <h4 class="f_600 f_size_20 l_height28 t_color2 mb_20">Mitgliederverwaltung</h4>
              <p>Hat ein Mitglied nicht bezahlt und du kannst niemand erreichen, weil die Telefonnummer nicht mehr aktuell ist? Da hilft die DokuMe Mitgliederverwaltung. Gib vor welche Daten du von deinen Vereinsmitgliedern benötigst und lasse diese direkt von Ihnen ausfüllen – immer aktuell und auf dem neuesten Stand mit regelmäßigen Erinnerungen um die Daten zu aktualisieren. Wenn du willst, können die Mitgliedsbeiträge direkt online gezahlt oder eingezogen werden - schnell und unkompliziert und ohne lästige Überweisungsträger.</p>
              <img class="float-right" src="https://dokume.net/website/SaasLand/NEW/img/dokume/pushapp/3_2.png" alt="">
            </div>
          </div>
          <div class="col-lg-6 col-sm-6 mb-30">
            <div class="service_item">
              <div class="icon s_icon_four"><i class="ti-stats-up"></i></div>
              <h4 class="f_600 f_size_20 l_height28 t_color2 mb_20">Verbandsverwaltung</h4>
              <p>Jetzt neu - Die optimale Lösung um einen Überblick über alle deine Verbandsmitglieder zu behalten! Nutze die bereits etablierten Funktionen der Mitgliederverwaltung jetzt auch für die die Mitgliedsvereine deines Verbandes. Egal ob es um die Pflege von Kontaktdaten geht oder um einen Überblick über die Beiträge zu bekommen – sammle die Daten zentral auf der DokuMe Platform.</p>
              <img class="float-right" src="https://dokume.net/website/SaasLand/NEW/img/dokume/pushapp/3_4.png" alt="">
            </div>
          </div>
          <div class="col-lg-6 col-sm-6 mb-30">
            <div class="service_item">
              <div class="icon s_icon_four"><i class="ti-stats-up"></i></div>
              <h4 class="f_600 f_size_20 l_height28 t_color2 mb_20">Stuktur</h4>
              <p>Du möchtest nicht nur in Kontakt mit den Vorständen deiner Mitgliedsvereine stehen, sondern auch einen direkten Draht zu allen Mitgliedern haben? Dann verschaffe dir einen Überblick über die Mitglieder deiner Vereine und schicke News direkt auf das Smartphone oder das Email Postfach deiner Mitglieder – ganz einfach möglich mithilfe der Verbandsstrukturübersicht in Kombination mit der DokuMe PushApp</p>
              <img class="float-right" src="https://dokume.net/website/SaasLand/NEW/img/dokume/pushapp/3_4.png" alt="">
            </div>
          </div>
          <div class="col-lg-6 col-sm-6 mb-30">
            <div class="service_item">
              <div class="icon s_icon_four"><i class="ti-stats-up"></i></div>
              <h4 class="f_600 f_size_20 l_height28 t_color2 mb_20">Veranstaltungsmanagement</h4>
              <p>Erstelle alle deine Veranstaltungen mithilfe der DokuMe Eventverwaltung und behalte den Überblick. Lade Gäste ein, verkaufe Tickets und überprüfe diese mithilfe der DokuMe Ticket-App beim Einlass. So weißt du jederzeit wie viele Gäste kommen und erhältst genaue und topaktuelle Auswertungen deiner Veranstaltung. Am besten koordinierst du die Vorbereitung mithilfe der DokuMe Notizen, so wird jede Aufgabe erledigt und die Veranstaltung ein voller Erfolg.</p>
              <img class="float-right" src="https://dokume.net/website/SaasLand/NEW/img/dokume/pushapp/3_4.png" alt="">
            </div>
          </div>
          <div class="col-lg-6 col-sm-6 mb-30">
            <div class="service_item">
              <div class="icon s_icon_four"><i class="ti-stats-up"></i></div>
              <h4 class="f_600 f_size_20 l_height28 t_color2 mb_20">Notizen</h4>
              <p>Verwalte alle anstehenden Aufgabe deines Verbandes oder Vereins an einer zentralen Stelle. Verfolge den Status auf einem Kanban Board oder lass dir anzeigen, welche Aufgaben heute erledigt werden sollen – alles ganz einfach mithilfe der DokuMe Notizen. Soll die Aufgabe jemand anders erledigen oder benötigst du Unterstützung? Kein Problem, trag die Person als Verantwortlichen mit ein und tauscht euch über den Fortschritt aus.</p>
              <img class="float-right" src="https://dokume.net/website/SaasLand/NEW/img/dokume/pushapp/3_4.png" alt="">
            </div>
          </div>
          <div class="col-lg-6 col-sm-6 mb-30">
            <div class="service_item">
              <div class="icon s_icon_four"><i class="ti-stats-up"></i></div>
              <h4 class="f_600 f_size_20 l_height28 t_color2 mb_20">Ablage</h4>
              <p>Jede Geschäftsstelle hat Ordner – das gehört einfach dazu! Deshalb haben wir die digitale Ablage entwickelt. Hier können alle wichtigen Dokumente hochgeladen werden. Damit du sie schnell wiederfindest, kannst du alles so kategorisieren, wie es für dich am besten passt. Und das Beste daran ist, du hast alle deine Ordner jederzeit griffbereit!</p>
              <img class="float-right" src="https://dokume.net/website/SaasLand/NEW/img/dokume/pushapp/3_4.png" alt="">
            </div>
          </div>
            <div class="col-lg-6 col-sm-6 mb-30">
              <div class="service_item">
                <div class="icon s_icon_one"><i class="ti-check"></i></div>
                <h4 class="f_600 f_size_20 l_height28 t_color2 mb_20">Kalender<br> </h4>
                <p>Mit dem übersichtlichen Kalender können Trainer und Athlet gemeinsam Training planen und dokumentieren. Stehe immer in Verbindung mit allen deinen Betreuern und Trainingsgruppen und koordiniert gemeinsam eure Pläne.</p>
                <img class="float-right" src="https://dokume.net/website/SaasLand/NEW/img/dokume/pushapp/3_1.png" alt="">
              </div>
            </div>
            <div class="col-lg-6 col-sm-6 mb-30">
              <div class="service_item">
                <div class="icon s_icon_three"><i class="ti-search"></i></div>
                <h4 class="f_600 f_size_20 l_height28 t_color2 mb_20">Jahresplanung</h4>
                <p>Auf einem Blick das ganze Jahr. Mit der Jahresplanung bekommst du schnell einen Überblick über die verschiedenen Trainingsetappen des laufenden Trainingsjahres.</p>
                <img class="float-right" src="https://dokume.net/website/SaasLand/NEW/img/dokume/pushapp/3_3.png" alt="">
              </div>
            </div>
            <div class="col-lg-6 col-sm-6 mb-30">
              <div class="service_item">
                <div class="icon s_icon_four"><i class="ti-stats-up"></i></div>
                <h4 class="f_600 f_size_20 l_height28 t_color2 mb_20">Abwesenheitsmanager</h4>
                <p>Krank? Verletzt? oder beruflich verhindert? Mit einem Klick deinen Betreuern und Verein mitteilen was los ist. Trainer bekommen einen schnellen Überblick wer heute verhindert ist. Nie mehr mühsam hinterher telefonieren. </p>
                <img class="float-right" src="https://dokume.net/website/SaasLand/NEW/img/dokume/pushapp/3_4.png" alt="">
              </div>
            </div>
        </div>
      </div>
    </section>

    <!--<section class="prototype_service_area_three bg_color">
        <div class="container">
            <div class="prototype_service_info">
                <div class="symbols-pulse active">
                    <div class="pulse-1"></div>
                    <div class="pulse-2"></div>
                    <div class="pulse-3"></div>
                    <div class="pulse-4"></div>
                    <div class="pulse-x"></div>
                </div>

                <div class="sec_title text-center mb_70 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                  <h2 class="f_size_30 f_600 t_color3 l_height45 text-center wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">Eine Plattform - unzählige Aktivitäten </h2>
                  <p class="f_400 f_size_16 mb-0">Auf unserer Plattform bieten wir eine Vielzahl an Funktionen, die je nach Wunsch aktiviert und deaktiviert werden können.</p>
                </div>

                <div class="row p_service_info">
                    <div class="col-lg-4 col-sm-6">
                        <div class="p_service_item pr_70 wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                            <div class="icon icon_one"><i class="ti-panel"></i></div>
                            <h5 class="f_600 f_p t_color3">Kundenverwaltung</h5>
                            <p class="f_400">Mit dem übersichtlichen Kalender können Trainer und Athlet gemeinsam Training planen und dokumentieren. Stehe immer in Verbindung mit allen deinen Betreuern und Trainingsgruppen und koordiniert gemeinsam eure Pläne.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="p_service_item pl_50 pr_20 wow fadeInLeft" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                            <div class="icon icon_two"><i class="ti-layout-grid2"></i></div>
                            <h5 class="f_600 f_p t_color3">Termine</h5>
                            <p class="f_400">Hat ein Mitglied nicht bezahlt und du kannst niemand erreichen, weil die Telefonnummer nicht mehr aktuell ist? Da hilft die DokuMe Mitgliederverwaltung. Gib vor welche Daten du von deinen Vereinsmitgliedern benötigst und lasse diese direkt von Ihnen ausfüllen – immer aktuell und auf dem neuesten Stand mit regelmäßigen Erinnerungen um die Daten zu aktualisieren. Wenn du willst, können die Mitgliedsbeiträge direkt online gezahlt oder eingezogen werden - schnell und unkompliziert und ohne lästige Überweisungsträger.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="p_service_item pl_70 wow fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                            <div class="icon icon_three"><i class="ti-fullscreen"></i></div>
                            <h5 class="f_600 f_p t_color3">Veranstaltungen</h5>
                            <p class="f_400">Auf einem Blick das ganze Jahr. Mit der Jahresplanung bekommst du schnell einen Überblick über die verschiedenen Trainingsetappen des laufenden Trainingsjahres.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="p_service_item pr_70 wow fadeInLeft" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInLeft;">
                            <div class="icon icon_four"><i class="ti-vector"></i></div>
                            <h5 class="f_600 f_p t_color3">Nachrichten</h5>
                            <p class="f_400">Jetzt neu - Die optimale Lösung um einen Überblick über alle deine Verbandsmitglieder zu behalten! Nutze die bereits etablierten Funktionen der Mitgliederverwaltung jetzt auch für die die Mitgliedsvereine deines Verbandes. Egal ob es um die Pflege von Kontaktdaten geht oder um einen Überblick über die Beiträge zu bekommen – sammle die Daten zentral auf der DokuMe Platform.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="p_service_item pl_50 pr_20 wow fadeInLeft" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                            <div class="icon icon_five"><i class="ti-cloud-down"></i></div>
                            <h5 class="f_600 f_p t_color3">Projektmanagement</h5>
                            <p class="f_400">Krank? Verletzt? oder beruflich verhindert? Mit einem Klick deinen Betreuern und Verein mitteilen was los ist. Trainer bekommen einen schnellen Überblick wer heute verhindert ist. Nie mehr mühsam hinterher telefonieren.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="p_service_item pl_70 wow fadeInLeft" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInLeft;">
                            <div class="icon icon_six"><i class="ti-bolt"></i></div>
                            <h5 class="f_600 f_p t_color3">Diagnostik</h5>
                            <p class="f_400">Du möchtest nicht nur in Kontakt mit den Vorständen deiner Mitgliedsvereine stehen, sondern auch einen direkten Draht zu allen Mitgliedern haben? Dann verschaffe dir einen Überblick über die Mitglieder deiner Vereine und schicke News direkt auf das Smartphone oder das Email Postfach deiner Mitglieder – ganz einfach möglich mithilfe der Verbandsstrukturübersicht in Kombination mit der DokuMe PushApp</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="p_service_item pl_70 wow fadeInLeft" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInLeft;">
                            <div class="icon icon_six"><i class="ti-bolt"></i></div>
                            <h5 class="f_600 f_p t_color3">Diagnostik</h5>
                            <p class="f_400">Erstelle alle deine Veranstaltungen mithilfe der DokuMe Eventverwaltung und behalte den Überblick. Lade Gäste ein, verkaufe Tickets und überprüfe diese mithilfe der DokuMe Ticket-App beim Einlass. So weißt du jederzeit wie viele Gäste kommen und erhältst genaue und topaktuelle Auswertungen deiner Veranstaltung. Am besten koordinierst du die Vorbereitung mithilfe der DokuMe Notizen, so wird jede Aufgabe erledigt und die Veranstaltung ein voller Erfolg.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="p_service_item pl_70 wow fadeInLeft" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInLeft;">
                            <div class="icon icon_six"><i class="ti-bolt"></i></div>
                            <h5 class="f_600 f_p t_color3">Diagnostik</h5>
                            <p class="f_400">Verwalte alle anstehenden Aufgabe deines Verbandes oder Vereins an einer zentralen Stelle. Verfolge den Status auf einem Kanban Board oder lass dir anzeigen, welche Aufgaben heute erledigt werden sollen – alles ganz einfach mithilfe der DokuMe Notizen. Soll die Aufgabe jemand anders erledigen oder benötigst du Unterstützung? Kein Problem, trag die Person als Verantwortlichen mit ein und tauscht euch über den Fortschritt aus.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="p_service_item pl_70 wow fadeInLeft" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInLeft;">
                            <div class="icon icon_six"><i class="ti-bolt"></i></div>
                            <h5 class="f_600 f_p t_color3">Diagnostik</h5>
                            <p class="f_400">Jede Geschäftsstelle hat Ordner – das gehört einfach dazu! Deshalb haben wir die digitale Ablage entwickelt. Hier können alle wichtigen Dokumente hochgeladen werden. Damit du sie schnell wiederfindest, kannst du alles so kategorisieren, wie es für dich am besten passt. Und das Beste daran ist, du hast alle deine Ordner jederzeit griffbereit!</p>
                        </div>
                    </div>
                </div>

                <div class="sec_title text-center mt_70 wow fadeInUp" data-wow-delay="0.3s" style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">
                  <p class="f_400 f_size_16 mb-0">Interessiert? Dann schreibe uns!</p>
                </div>

            </div>
        </div>
    </section>-->

    <section class="prototype_featured_area sec_pad">
        <div class="container">
            <h2 class="f_size_30 f_600 t_color3 l_height40 text-center mb_90 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">Stelle deine Plattform für dich,<br> deinen Verein, dein Unternehmen <br>oder deine Community zusammen</h2>
            <div class="row flex-row-reverse p_feature_item">
                <div class="col-lg-7">
                    <div class="p_feture_img_one wow fadeInRight" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
                        <img src="https://dokume.blob.core.windows.net/user-7368/storage/21211.png?se=2022-02-16&amp;sr=b&amp;sp=r&amp;sig=lE4g6ryVHVsJ60FvmcBana1ze4S4uEFaORWFZIjbosw%3D&amp;sv=2014-02-14" alt="">
                    </div>
                </div>
                <div class="col-lg-5 d-flex align-items-center">
                    <div class="prototype_content wow fadeInLeft" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                        <h2 class="f_600 f_p t_color3">Wir haben die Gesamtlösung, die DU suchst!</h2><br>
                        <h5 class="f_600 f_p t_color3">So individuell jeder ist, so individuell ist <br>unsere Lösung</h5><br>
                      <!--<div class="prototype_logo">
                            <a href="#"><img src="http://droitthemes.com/html/saasland/img/home3/saas.png" alt=""></a>
                            <a href="#"><img src="http://droitthemes.com/html/saasland/img/home3/dimond.png" alt=""></a>
                            <a href="#"><img src="http://droitthemes.com/html/saasland/img/home3/psd.png" alt=""></a>
                        </div>-->
                        <p>Mit uns an eurer Seite, könnt ihr viele Prozesse digitalisieren, so dass ihre euch viel Zeit und Mühen ersparen könnt. Wir unterstützen Dich bei deiner Reise hin zur digitalen Exzellenz. Genieße einen außergewöhnlich transparenten 360°-Blick auf Deine Daten und Prozesse und mach auch Du Dein Unternehmen zukunftsfähig. Interessiert?  </p>
                    </div>
                </div>
            </div>
            <div class="row p_feature_item">
                <div class="col-lg-7">
                    <div class="p_feture_img_two wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                        <!--<img src="http://droitthemes.com/html/saasland/img/home3/prototype_banner_img2.png" alt="">-->
                        <img src="http://droitthemes.com/html/saasland/img/home4/banner_img.png" alt="">
                    </div>
                </div>
                <div class="col-lg-5 d-flex align-items-center">
                    <div class="prototype_content wow fadeInRight" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInRight;">
                        <h2 class="f_500 f_p t_color3">Du hast eigene Ideen und Vorstellungen? Wir setzen das für dich um!</h2>
                        <!--<div class="prototype_logo">
                            <a href="#"><img src="http://droitthemes.com/html/saasland/img/home3/saas.png" alt=""></a>
                            <a href="#"><img src="http://droitthemes.com/html/saasland/img/home3/dimond.png" alt=""></a>
                            <a href="#"><img src="http://droitthemes.com/html/saasland/img/home3/psd.png" alt=""></a>
                        </div>-->
                        <p>Wir bieten eine Vielzahl an Apps, die dir deinen Alltag erleichtern. So individuell wie dein Sport, dein Business - so individuell wie du bist, so individuell ist DokuMe anpassbar. Deine Bedürfnisse, deine Wünsche, deine Ideen. Erzähl sie uns, wir setzen sie gerne für dich um.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--<section class="startup_fuatures_area sec_pad">
      <!-- hier nicki schauen, warum .container in der class war... --
      <!--<div class="container">--
      <div class="container">
        <div class="sec_title mb_70 wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
          <h2 class="f_p f_size_30 l_height40 f_600 t_color text-center">Ways your team can<br> Use hubstaff</h2>
        </div>

        <ul class="nav nav-tabs startup_tab" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="market-tab" data-toggle="tab" href="#market" role="tab" aria-controls="market" aria-selected="true">
              <span class="icon"><i class="icon-cloud-upload"></i></span>
              <h3>Kalender<br> </h3>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="app-tab" data-toggle="tab" href="#app" role="tab" aria-controls="app" aria-selected="false">
              <span class="icon"><i class="icon-screen-tablet"></i></span>
              <h3>Wettkampf-<br> Dokumentation</h3>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="hubstaff-tab" data-toggle="tab" href="#hubstaff" role="tab" aria-controls="hubstaff" aria-selected="false">
              <span class="icon"><i class="icon-graduation"></i></span>
              <h3>Jahresplanung<br> </h3>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="engine-tab" data-toggle="tab" href="#engine" role="tab" aria-controls="engine" aria-selected="false">
              <span class="icon"><i class="icon-refresh"></i></span>
              <h3>Veranstaltung<br> </h3>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="business-tab" data-toggle="tab" href="#business" role="tab" aria-controls="business" aria-selected="false">
              <span class="icon"><i class="icon-bulb"></i></span>
              <h3>Trainingsgruppen-<br> Management</h3>
            </a>
          </li>
        </ul>

        <div class="tab-content startup_tab_content" id="myTabContent">
          <div class="tab-pane fade show active" id="market" role="tabpanel" aria-labelledby="market-tab">
            <div class="startup_tab_img">
              <div class="web_img">
                <img src="http://droitthemes.com/html/saasland/img/new/web_image.jpg" alt="">
              </div>
              <div class="phone_img"><img src="http://droitthemes.com/html/saasland/img/new/iPhoneX.png" alt=""></div>
            </div>
          </div>
          <div class="tab-pane fade" id="app" role="tabpanel" aria-labelledby="app-tab">
            <div class="startup_tab_img">
              <div class="web_img">
                <img src="http://droitthemes.com/html/saasland/img/new/web_image.jpg" alt="">
              </div>
              <div class="phone_img"><img src="http://droitthemes.com/html/saasland/img/new/iPhoneX.png" alt=""></div>
            </div>
          </div>
          <div class="tab-pane fade" id="hubstaff" role="tabpanel" aria-labelledby="hubstaff-tab">
            <div class="startup_tab_img">
              <div class="web_img">
                <img src="http://droitthemes.com/html/saasland/img/new/web_image.jpg" alt="">
              </div>
              <div class="phone_img"><img src="http://droitthemes.com/html/saasland/img/new/iPhoneX.png" alt=""></div>
            </div>
          </div>
          <div class="tab-pane fade" id="engine" role="tabpanel" aria-labelledby="engine-tab">
            <div class="startup_tab_img">
              <div class="web_img">
                <img src="http://droitthemes.com/html/saasland/img/new/web_image.jpg" alt="">
              </div>
              <div class="phone_img"><img src="http://droitthemes.com/html/saasland/img/new/iPhoneX.png" alt=""></div>
            </div>
          </div>
          <div class="tab-pane fade" id="business" role="tabpanel" aria-labelledby="business-tab">
            <div class="startup_tab_img">
              <div class="web_img">
                <img src="http://droitthemes.com/html/saasland/img/new/web_image.jpg" alt="">
              </div>
              <div class="phone_img"><img src="http://droitthemes.com/html/saasland/img/new/iPhoneX.png" alt=""></div>
            </div>
          </div>
        </div>
      </div>
    </section>-->

    <section class="stratup_service_area sec_pad bg_color">
      <div class="container">
        <div class="sec_title mb_70 wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
          <h2 class="f_p f_size_30 l_height40 f_600 t_color text-center">Dein Benefit –<br> alle Vorteile der digitalen Geschäftsstelle mit DokuMe im Überblick</h2>
        </div>
        <div class="row">
          <div class="col-lg-8">
            <div class="stratup_service_img">
              <div class="shape"></div>
              <!--<img class="laptop_img" src="websiteNEWASSETS/img/new/laptop.png" alt="">-->

              <img class="laptop_img" src="https://dokume.blob.core.windows.net/user-7368/storage/21200.png?se=2022-02-16&sr=b&sp=r&sig=Ki6dvUmoXj1ltR5Cx61S3HcAD7%2FY5lR6XmgrjRQo7W0%3D&sv=2014-02-14" width="718" alt="">

              <!--<img class="phone_img" src="websiteNEWASSETS/img/new/phone.png" alt="">-->
            </div>
          </div>
          <div class="col-lg-3 d-flex align-items-center">
            <div class="stratup_service_info">
              <div class="startup_service_item">
                <div class="icon"><i class="icon-badge"></i></div>
                <h3>Umweltfreundlich</h3>
                <p>Weniger Papier durch digitale Geschäftsprozesse</p>
              </div>
              <div class="startup_service_item">
                <div class="icon icon_two"><i class="icon-bell"></i></div>
                <h3>Immer verfügbar</h3>
                <p>Zugriff von jedem Computer oder Smartphone aus möglich</p>
              </div>
              <div class="startup_service_item">
                <div class="icon icon_three"><i class="icon-layers"></i></div>
                <h3>Einfache Rechteverteilung</h3>
                <p>Entscheide selbst, wer welche Daten sehen kann</p>
              </div>
              <div class="startup_service_item">
                <div class="icon icon_four"><i class="icon-screen-tablet"></i></div>
                <h3>Stetig neue Innovationen</h3>
                <p>Wir fügen stetig neue Apps und Funktionen hinzu</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="progress_bar_area">
      <div class="container">
        <div class="sec_title mb_70 wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
          <h2 class="f_p f_size_30 l_height40 f_600 t_color text-center">Die Plattform in Zahlen</h2>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-4 progress_item">
            <div class="circle" data-value="1" data-fill="{&quot;color&quot;: &quot;#aa6ffa&quot;}" data-trackcolor="">
              <div class="number">><span class="counter">10000</span></div>
            </div>
            <h4>Konten</h4>
            <p>Über 10.000 Nutzer sind bereits registriert.</p>
          </div>
          <div class="col-lg-3 col-md-4 progress_item">
            <div class="circle" data-value="1" data-fill="{&quot;color&quot;: &quot;#f3af4e&quot;}" data-trackcolor="">
              <div class="number">><span class="counter">1000</span></div>
            </div>
            <h4>Gruppen</h4>
            <p>Unsere Nutzer haben sich in über 1000 Gruppen organisiert.</p>
          </div>
          <div class="col-lg-3 col-md-4 progress_item">
            <div class="circle" data-value="1" data-fill="{&quot;color&quot;: &quot;#6fadfa&quot;}" data-trackcolor="">
              <div class="number"><span class="counter">76</span></div>
            </div>
            <h4>Apps</h4>
            <p>Mit über 76 kannst du dein eigenes DokuMe personalisieren.</p>
          </div>
          <div class="col-lg-3 col-md-4 progress_item">
            <div class="circle" data-value="1" data-fill="{&quot;color&quot;: &quot;#fa6fd1&quot;}" data-trackcolor="">
              <div class="number"><span class="counter">2013</span></div>
            </div>
            <h4>Gegründet</h4>
            <p>Seit dem Jahr 2013 schreiben wir gemeinsam die DokuMe-Geschichte weiter.</p>
          </div>
        </div>
        <div class="br_bottom"></div>
      </div>
    </section>

    <section class="action_area_two">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 d-flex align-items-center">
                    <div class="action_content">
                        <h2 class="f_600 f_size_30 l_height45 t_color3 mb-0 wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">Erfahre mehr über den digitalen Werkzeugkasten mit den Tools von DokuMe.</h2>
                        <a href="contact.php" class="btn_three btn_hover wow fadeInLeft" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">Überzeuge dich selbst.</a>
                        <!--<p><a href="contact.php">Oder frage nach einer DEMO</a></p>-->
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="action_img wow fadeInRight" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
                        <img src="http://droitthemes.com/html/saasland/img/home3/action_image.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sass_partner_logo_area sec_pad">
        <div class="container">
            <div class="sec_title text-center wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                <h2 class="f_p f_size_30 l_height50 f_600 t_color">Referenzen</h2>
                <!--<p class="f_400 f_size_16">Well at public school cheeky bugger grub burke codswallop smashing only a quid<br> pardon you lavatory chip shop, geeza loo horse play.</p>-->
            </div>
            <div class="partner_logo_area_four">
                <div class="row partner_info">

                  <div class="logo_item_color">
                    <a target="_blank" href="https://www.bsd-portal.de"><img src="https://www.bsd-portal.de/fileadmin/BSDPortal/Resources/Public/img/BSD-Logo-big.png" style="width: 150px;" alt=""></a>
                  </div>
                  <div class="logo_item_color">
                    <a target="_blank" href="http://www.heilsa-hilft.de/"><img src="https://dokume.net/website/SaasLand/NEW/dokumeCustom/img/partner/1.png" style="width: 250px;" alt=""></a>
                  </div>
                  <div class="logo_item_color">
                    <a target="_blank" href="http://www.judobund.de/"><img src="https://dokume.net/website/SaasLand/NEW/dokumeCustom/img/partner/2.png" style="height: 92px;" alt=""></a>
                  </div>
                  <div class="logo_item_color">
                    <a target="_blank" href="http://www.iat.uni-leipzig.de/"><img src="https://dokume.net/website/SaasLand/NEW/dokumeCustom/img/partner/3.png" style="height: 92px;" alt=""></a>
                  </div>
                  <div class="logo_item_color">
                    <a target="_blank" href="https://www.sportstiftung-nrw.de"><img src="https://www.sportstiftung-nrw.de/fileadmin/sportstiftung-nrw-template/Resources/Images/logo.png" style="width: 250px;margin-top: 25px;" alt=""></a>
                  </div>
                  <div class="logo_item_color">
                    <a target="_blank" href="http://www.trainerakademie-koeln.de/"><img src="https://dokume.net/website/SaasLand/NEW/dokumeCustom/img/partner/5.png" style="width: 250px; margin-top: 25px" alt=""></a>
                  </div>
                  <div class="logo_item_color">
                    <a target="_blank" href="https://physiosportkoeln.de/de/"><img src="https://dokume.net/website/SaasLand/NEW/dokumeCustom/img/partner/6.png" style="width: 220px; margin-top: 10px;" alt=""></a>
                  </div>
                  <div class="logo_item_color">
                    <a target="_blank" href="http://www.tc-schalchen.at"><img src="https://tcschalchen.dokume.net/img/tc-logo_final-01.png" style="height: 92px;" alt=""></a>
                  </div>
                  <div class="logo_item_color">
                    <a target="_blank" href="http://www.judogearusa.com/"><img src="https://dokume.net/website/SaasLand/NEW/dokumeCustom/img/partner/7.png" style="height: 92px;" alt=""></a>
                  </div>
                  <div class="logo_item_color">
                    <a target="_blank" href="https://www.raceresult.com/de-de/home/index.php"><img src="https://dokume.net/website/SaasLand/NEW/dokumeCustom/img/partner/8.png" style="width: 250px; margin-top: 20px" alt=""></a>
                  </div>
                  <div class="logo_item_color">
                    <a target="_blank" href="https://www.judoinside.com/"><img src="https://dokume.net/website/SaasLand/NEW/dokumeCustom/img/partner/judoinside_logo.jpg" style="width: 250px; margin-top: 20px" alt=""></a>
                  </div>
                  <div class="logo_item_color">
                    <a target="_blank" href="http://www.gymminder.com/"><img src="https://dokume.net/website/SaasLand/NEW/dokumeCustom/img/partner/4.png" style="height: 92px;" alt=""></a>
                  </div>

                </div>
            </div>
        </div>
    </section>

    <section class="testimonial_area_four sec_pad">
      <div class="testimonial_shap_img" style="background: url(websiteNEWASSETS/img/new/testimonial_bg_shap.png) no-repeat bottom left;"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 d-flex align-items-center">
            <div class="testimonial_title">
              <h6>Testimonials</h6>
              <h2 class="f_p f_size_30 l_height45 f_600 t_color">Loved by athletes, coaches <br>and federations across<br>the globe.</h2>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="stratup_testimonial_info d-flex align-items-center">
              <div class="testimonial_slider_four owl-carousel">
                <div class="item">
                  <div class="author_img">
                    <img src="https://scontent-ams4-1.xx.fbcdn.net/v/t31.0-1/c0.0.100.100a/p100x100/10687229_10204053598934661_2283344488690610832_o.jpg?_nc_cat=105&_nc_ohc=HDHik9zSDFcAQkTbckbBnk7IZZ40VFmRV9V1VFHfXVDq0bkYXq8wGD-WQ&_nc_ht=scontent-ams4-1.xx&_nc_tp=1&oh=fd13672aeccfd47857d197f86eee0893&oe=5E91F20A" alt="">
                  </div>
                  <p>The cooperation with Dokume is always informal, fast and judo passionate. That fits the JudoInside values. You can trust their manager is made by athletes who have a clear understanding of judo, databases, speed of publication and event experience.</p>
                  <h5>Hans van Essen</h5>
                  <h6>Editor in Chief<br> JudoInside.com</h6>
                </div>
                <div class="item">
                  <div class="author_img">
                    <img src="https://scontent-frt3-1.xx.fbcdn.net/v/t31.0-8/17390403_1623633630984793_8331476137429531238_o.jpg?_nc_cat=108&_nc_sid=85a577&_nc_ohc=TYwMbtAanAMAX-b5Jkb&_nc_ht=scontent-frt3-1.xx&oh=95fd7701d0c7a197ceaa0489a9775349&oe=5EB56838" height="70" alt="">
                  </div>
                  <p>Was ich an Dokume besonders schätze, ist der detaillierte Zuschnitt auf die eigenen Bedürfnisse. Als Endprodukt unserer Zusammenarbeit erhalte ich eine detaillierte Auswertung der Entwicklung meiner Athleten - dies spart mir Unmengen an Zeit und Aufwand, welche ich somit in die direkte Betreuung investieren kann!</p>
                  <h5>Simon Schnell</h5>
                  <h6>DJB Athletik Trainer</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

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
