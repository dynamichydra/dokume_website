<!doctype html>
<html lang="en">

<head>
  <?php include('websiteNEWASSETS/includes/head.php'); ?>
  <style>
    .prototype_banner_area {
      background-color: #ffffff;
      color: #fff !important;
      padding-bottom: 50px;
      /*background-image: url(https://cdn.pixabay.com/photo/2018/04/28/16/40/network-3357642_1280.jpg);
      background-image: url(https://cdn.pixabay.com/photo/2018/03/15/16/11/background-3228704_1280.jpg);
      background-image: url(https://cdn.pixabay.com/photo/2016/01/06/21/42/light-bulbs-1125016_1280.jpg);

      background-image: url(https://cdn.pixabay.com/photo/2018/06/16/16/17/road-3478977_1280.jpg);
      background-image: url(https://cdn.pixabay.com/photo/2016/02/28/11/42/norway-1226822_1280.jpg);
      background-image: url(https://cdn.pixabay.com/photo/2020/03/11/07/51/fjord-4921314_1280.jpg);
      background-image: url(https://cdn.pixabay.com/photo/2015/04/20/13/10/rock-731140_1280.jpg);
      background-image: url(https://medium-schwyz.ch/wp-content/uploads/2019/09/15695059695191704285396-1-1080x675.jpg);
      background-image: url(https://cdn.pixabay.com/photo/2016/01/19/17/19/foggy-1149637_1280.jpg);
      background-image: url(https://cdn.pixabay.com/photo/2016/10/20/18/35/sunrise-1756274_1280.jpg);
      background-image: url(https://media.istockphoto.com/vectors/gps-and-search-icon-technology-abstract-background-vector-id960800472);
      background-image: url(https://media.istockphoto.com/vectors/map-of-the-planet-world-map-global-social-network-future-vector-blue-vector-id1142610359);
      background-image: url(https://as2.ftcdn.net/jpg/03/11/66/45/500_F_311664550_S1yd4t4jyneOz2s6ZsiCs7f9KwOPojS6.jpg);
      background-image: url(https://as1.ftcdn.net/jpg/02/92/85/46/500_F_292854612_gF8uc64cG637rY9hJidqZDJIGfGmZHz5.jpg);
      background-image: url(https://as2.ftcdn.net/jpg/01/95/94/39/500_F_195943958_OokKLaoxO6e5nCpiaNn3XyvzHP6aZvvn.jpg);
      background-image: url(https://as1.ftcdn.net/jpg/02/31/29/52/500_F_231295256_0M4hudEK0AvNp5U3u7R7PuZ7dSCagPwX.jpg);*/
      background-image: url(https://dokume.blob.core.windows.net/user-7368/storage/29626.png?se=2022-09-25&sr=b&sp=r&sig=HqQV40hr2OG6ptMiZcdZaAfLKkFNdpHbDsp9vCrQgDo%3D&sv=2014-02-14);
      background-size: cover;
    }

    .company_banner_area .parallax-effect {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 105%;
      z-index: -1;
      opacity: 0.8;
      background-size: cover;
    }

    #readyBTN {
      margin-top: 20px;
    }

    @media (min-width: 768px) {
      .company_banner_area .parallax-effect {
        background-size: cover !important;
      }
    }


    .company_banner_area {
      padding-top: 85px;
      padding-top: 145px;
      padding-bottom: 20px;
      min-height: 100vh;
      position: relative;
      overflow: hidden;
      background-image: none;
      z-index: 1;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      text-align: left;
      color: #fff !important;
    }

    #advatagesList {
      list-style-type: none;
      counter-reset: orangeNumbers;
      padding: 0;
    }

    #advatagesList li {
      background: #fff;
      -webkit-box-shadow: 0px 2px 7px 0px rgba(12, 0, 46, 0.1);
      box-shadow: 0px 2px 7px 0px rgba(12, 0, 46, 0.1);
      border-radius: 10px;
      display: inline-block;
      padding: 10px;
      padding-left: 30px;
      margin-bottom: 15px;
      -webkit-transition: all 0.2s linear;
      -o-transition: all 0.2s linear;
      transition: all 0.2s linear;
    }

    #advatagesList li:before {
      font-weight: bold;
      margin-top: 1.5px;
      margin-left: -15px;
      margin-right: 3px;
      content: counter(orangeNumbers) ".";
      counter-increment: orangeNumbers;
    }

    @media (max-width: 768px) {

      .prototype_banner_area,
      .parallax-effect {
        /*background-image: url(https://dokume.blob.core.windows.net/user-7368/storage/21190.png?se=2022-02-16&sr=b&sp=r&sig=k7QpUp5KbhAqGTUnKVo03rHI72KkM5GAI9OpZSz%2BFtc%3D&sv=2014-02-14);*/
        background-size: contain;
        background-repeat: no-repeat;
        background-color: #070c14;
        background-position: -414px 0px;
        background-size: 284%;
      }

      .parallax-effect {
        background-size: contain !important;
        background-repeat: no-repeat !important;
        background-color: #070c14 !important;
        background-position: -414px 0px !important;
        background-size: 284% !important;
      }
    }

    .prototype_banner_area h2 {
      color: #fff;
    }

    .h_dark .btn_get {
      background: #e45039;
      color: #fff;
      border-color: #fff;
    }

    .prototype_banner_area .t_color3,
    .prototype_banner_area h2 {
      color: #grey;
    }

    .prototype_banner_area p,
    .prototype_content p {
      color: #fff !important;
    }

    .btn_three {
      background: #e45039;
      border-color: #fff;
    }

    .payment_features_item h4 {
      color: black;
    }

    #particles-js {}

    .particles-js-canvas-el {
      position: absolute;
      top: 0;
      right: 0;
      width: 65% !important;
    }

    .sec_pad {
      padding: 60px 0px;
    }

    .seo_btn_one {
      color: #F0F5F9;
      background: #1C46AA;
    }

    .seo_features_content .seo_features_item .icon {
      background: #0E467F;
    }

    .seo_features_content .seo_features_item .icon.two {
      background: #0E467F;
    }

    .seo_btn_one:hover {
      background: #011E43;
      color: #fff;
    }

    .img:hover .cloud_bg_1.png {
      opacity: 0.5;
    }

    .support_integration_area {
      background: #F1F2FC;
    }

    .f_400 {
      font-weight: 300;
    }

    .seo_features_2mg {
      vertical-align: middle;
      border-style: none;
      float: right;
      right: 0px;
      left: auto;
    }

    .s_integration_item img {
      height: 50px;
    }

    @media (min-width: 992px) {
      #rocketImageGroup {
        /*margin-top: 25%;*/
      }
    }

    @media (max-width: 576px) {
      .integration_img {
        margin-top: 120px;
        max-width: 100%;
        height: 150px;
        margin-bottom: -57px;
        margin-top: 0;
      }


      .seo_subscribe_area {
        min-height: 750px;
        background-color: #273B5D;
      }

      .mobileBlack {
        background-color: rgba(0, 0, 0, .5);
      }

      .btn_three:hover {
        color: #e45037;
        background: #ffffff;
      }


    }

    .payment_features_two {
      border-top: 5px dashed;
    }

    .shape:before {
      position: absolute;
      right: 0;
      top: 0;
      content: '';
      display: block;
      background: #fff !important;
      z-index: 0;
      opacity: 1;
      min-height: 107px;
      width: 2000px;
      -webkit-transform: rotate(2.5deg);
      -ms-transform: rotate(2.5deg);
      transform: rotate(2.5deg);
      -webkit-transform-origin: 100% 0 0;
      -ms-transform-origin: 100% 0 0;
      transform-origin: 100% 0 0;
    }

    /**/
    /*n_awesome_features_area css */

    .awesome_f_item {
      margin-top: 40px;
    }

    .awesome_f_item .media-left {
      padding-right: 24px;
    }

    .erp_analytics_area h3 {
      font-family: inherit;
      font-size: 20px;
      margin-top: 40px;
    }

    .erp_analytics_area p {
      font-size: 16px;
      color: #6a7695;
      font-weight: 300;
    }


    .n_awesome_features_area h3 {
      font-family: inherit;
      font-size: 20px;
    }


    .n_awesome_features_area p {
      font-size: 16px;
      color: #6a7695;
      font-weight: 300;
    }

    .erp_analytics_area {
      background-image: url(websiteNEWASSETS/img/index/background.svg);
      background-position: bottom;
      background-size: 150%;
      background-color: #FAFAFD;
    }

    .n_title_color span {
      background-color: #273B5C;
      padding: 4px 12px;
      border-radius: 50%;
      color: white;
    }

    .hosting_service_item .icon {
      background: #273B5C;
    }

    .icon {
      font-size: 30px;
      color: #ffffff
    }

    .hosting_service_item:hover {
      border-color: #E45038;
    }

    @media (max-width: 768px) {

      #rocketImageGroup {
        text-align: right;
        margin-bottom: -30px;
      }

      #rocketImageGroup img,
      .integration_img {
        height: 100px;
        width: auto;

      }

      .round_circle {
        display: none;
      }

      .erp_analytics_area {
        background-size: 350%;
      }

      .seo_features_2mg img {
        height: 250px;
        margin-bottom: 25px;
      }
    }

    .seo_features_img.seo_features_img_two .round_circle.two {
      top: 120px;
    }
  </style>
</head>

<body>

  <?php include('websiteNEWASSETS/includes/headerCompany.php'); ?>


  <section id="particles-js" class="company_banner_area">
    <div class="parallax-effect" style="background: url(websiteNEWASSETS/img/index/index_1.jpg);"></div>
    <div class="parallax-effect mobileBlack" style="background-color: rgba(0,0,0,.2)"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-7 d-flex align-items-center">
          <div class="prototype_content">

            <h1 class="f_size_40 f_700 w_color l_height50 pr_70 mb_20 wow fadeInLeft" data-wow-delay="0.3s" data-i18n="[html]index.headline1">INTRODUCE YOURSELF,<div style="display:block!important">YOUR IDEA BECOMES DIGITAL.</div>
            </h1><br><br>
            <!--<h3 class="wow fadeInLeft" data-wow-delay="0.3s" style="color: #fff;margin-top: -70px"><br>Schnell, einfach, und grenzgenial.<br>Setz es um. Mit DokuMe.</h3>-->
            <h3 class="wow fadeInLeft" data-wow-delay="0.3s" style="color: #fff;margin-top: -70px" data-i18n="[html]index.headline2"><br>Are you looking for a partner who offers ready-made IT solutions -<br>or develops your individual one with you?<br>Welcome to DokuMe.</h3>
            <p class="f_400 l_height28 wow fadeInLeft" data-wow-delay="0.5s" data-i18n="[html]index.intro">
              <br>
              The digital world is our universe: we don't do 'rocket science', we do your business digitally. All IT solutions are integrated, secure and transparent on our DokuMe platform. In this way, you always have an overview and can configure your own app, chatbot or social wall in just a few steps. Simple, fast and efficient.
              <br><br>
              Our mission is to give everything for you. With our IT solutions, which can be flexibly adapted to your daily challenges.
              <br>

            </p>
            <h3 style="color:#fff" data-i18n="[html]index.sloganOneSolution">Everything for one - with a solution for everything.
</h3>
            <form action="#" class="mailchimp banner_subscribe" method="post">
              <!--  <div class="input-group subcribes wow2 fadeInLeft2" data-wow-delay2="0.6s">
                <input type="email" name="EMAIL" id="email" class="form-control memail" placeholder="Email">
              </div>-->
              <p class="mchimp-errmessage" style="display: none;"></p>
              <p class="mchimp-sucmessage" style="display: none;"></p>
              <!--<button id="readyBTN" class="btn btn_three btn_hover f_size_15 f_500 wow2 fadeInLeft2" data-wow-delay2="0.8s" type="submit">Ready. > Jetzt Kontakt aufnehmen.</button>-->
              <a href="contact.php" class="btn btn_three btn_hover f_size_15 f_500 wow2 fadeInLeft2" data-wow-delay2="0.8s" data-i18n="index.contact1">Ready. > Contact us now.</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="erp_analytics_area">
    <div class="container">
      <div class="hosting_title erp_title text-center">
        <h2 class="f_p f_size_30 l_height50 f_600 t_color3 uppercase">WHAT AWAITS YOU IN OUR GALAXY</h2>
        <p>One platform for everything. We have ready-to-use apps for every industry that can be combined with one another as desired on our DokuMe platform.
And if something is missing, we can easily add the function.</p>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="erp_analytics_item text-center wow fadeInUp">
            <img src="websiteNEWASSETS/img/index/index3.svg" width="80px" height="80px" alt="">
            <h3>For companies.</h3>
            <p>We advise, develop and connect your ideas in a platform with digital interfaces to existing systems.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="erp_analytics_item text-center wow fadeInUp" data-wow-delay="0.2s">
            <img src="websiteNEWASSETS/img/index/index4.svg" width="80px" height="80px" alt="">
            <h3>For sports associations</h3>
            <p>Individual solutions for sports associations: So that the focus is on the sport and not the organization. Training documentation and association administration.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="erp_analytics_item text-center wow fadeInUp" data-wow-delay="0.4s">
            <img src="websiteNEWASSETS/img/index/index1.svg" width="80px" height="80px" alt="">
            <h3>Finished Products</h3>
            <p>Use our mature DokuMe portfolio flexibly for your work: project planning, social walls, forms and much more.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="n_awesome_features_area sec_pad" id="features">
    <div class="container">
      <div class="new_sectitle" style="text-align:right">
        <h2 class="f_p f_size_30 l_height50 f_600 t_color3 uppercase">YOUR SUCCESS IS OUR MISSION:<br>
          YOUR ADVANTAGES AT A GLANCE</h2>
      </div>
      <div class="row d_flex">
        <div class="col-md-4">
          <div id="rocketImageGroup" class="seo_features_img seo_features_img_two">
            <div class="round_circle two"></div>
            <!--<div class="round_circle two"></div>-->
            <img src="websiteNEWASSETS/img/index/rocket2.png" width="110%" weight="110%" alt="" style="transform: rotate(22deg)">
          </div>
        </div>
        <div class="col-md-8 flex">
          <div class="row">
            <div class="col-md-6 flex">
              <div class="awesome_features_items">
                <div class="media awesome_f_item aw_right2">
                  <div class="media-left">
                    <!--  <img src="https://droitthemes.com/previews/html/neo/images/new/icon/f-1.png" alt="Generic placeholder image">-->
                  </div>
                  <div class="media-body">
                    <h3 class="n_title_color"><span>1</span> speed</h3>
                    <p class="p_color">We offer you a variety of already developed apps that you can use directly. Or we can develop our own IT solution for you together.</p>
                  </div>
                </div>
                <div class="media awesome_f_item aw_right2" style="margin-top: 13px;">
                  <div class="media-left">
                    <!--   <img src="https://droitthemes.com/previews/html/neo/images/new/icon/f-2.png" alt="Generic placeholder image">-->
                  </div>
                  <div class="media-body">
                    <h3 class="n_title_color"><span>2</span> security</h3>
                    <p class="p_color">Your data runs securely and stably on our DokuMe platform. You have access and control at all times.</p>
                  </div>
                </div>
                <div class="media awesome_f_item aw_right2">
                  <div class="media-left">
                    <!--     <img src="https://droitthemes.com/previews/html/neo/images/new/icon/f-3.png" alt="Generic placeholder image">-->
                  </div>
                  <div class="media-body">
                    <h3 class="n_title_color"><span>3</span> influence</h3>
                    <p class="p_color">you are houston On our platform, you can manage your IT tools yourself in real time and from anywhere.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 flex">
              <div class="awesome_features_items">
                <div class="media awesome_f_item">
                  <div class="media-left">
                    <!--       <img src="https://droitthemes.com/previews/html/neo/images/new/icon/f-4.png" alt="Generic placeholder image">-->
                  </div>
                  <div class="media-body">
                    <h3 class="n_title_color"><span>4</span> connection</h3>
                    <p class="p_color">Our DokuMe platform communicates with all IT systems and can be easily connected to your interface.</p>
                  </div>
                </div>
                <div class="media awesome_f_item">
                  <div class="media-left">
                    <!--       <img src="https://droitthemes.com/previews/html/neo/images/new/icon/f-5.png" alt="Generic placeholder image">-->
                  </div>
                  <div class="media-body">
                    <h3 class="n_title_color"><span>5</span> competence</h3>
                    <p class="p_color">In addition to our core crew, many smart people work on DokuMe to always offer you the best product.</p>
                  </div>
                </div>
                <div class="media awesome_f_item">
                  <div class="media-left">
                    <!--         <img src="https://droitthemes.com/previews/html/neo/images/new/icon/f-6.png" alt="Generic placeholder image">-->
                  </div>
                  <div class="media-body">
                    <h3 class="n_title_color">Is anything missing?</h3>
                    <p class="p_color">Get in touch with us - we'd be happy to tell you more.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div style="width: 100%;text-align: center;">
            <a href="contact.php" class="mt_30 seo_btn seo_btn_one btn_hover" style="background-color: #e45039;color: #fff" data-i18n="index.contact2">Set. > Contact us now.</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="seo_features_one sec_pad angled-edge angled-edge-white" style="background:#FAFAFD;">
    <div class="container">
      <div class="row flex-row-reverse row-reverse">
        <div class="col-lg-5">
          <div class="seo_features_2mg">
            <div class="round_circle"></div>
            <div class="round_circle two"></div>
            <img src="websiteNEWASSETS/img/seo/features_img.png" alt="">
          </div>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-6">
          <div class="seo_features_content">
            <br><br>
            <!--<h2>DEINE BEGEISTERUNG: UNSERE GALAXIE.<br>TAUCHE EIN IN UNSER PRODUKTPORTFOLIO.</h2>-->
            <h2 class="f_p f_size_30 l_height50 f_600 t_color3 uppercase">TAKE OFF WITH OUR PRODUCT PORTFOLIO.</h2>
            <p>Of course we could list every product we offer here - but that would be almost as infinite as counting stars.</p>
            <br>
            <h3>We make it easy for you - and we can do everything.</h3><br>
            <p>In fact, our DokuMe platform lays the foundation for any digital application - from the individual complete IT solution for your company, whether large or small, to individual apps that must be available quickly, to tried-and-tested solutions for companies, sports associations and athletes.
            </p>
            <!--  <div class="media seo_features_item">
            <div class="icon"><i class="fas fa-rocket"></i></div>
              <div class="media-body">
                <h3>Wir machen es Dir daher einfach ??? und k??nnen alles.</h3><br>
                <p>Tats??chlich ist mit unserer DokuMe Plattform der Grundstein gelegt f??r jegliche digitale Applikation ??? von der individuellen IT-Gesamtl??sung f??r dein Unternehmen ob gro?? oder klein, ??ber einzelne Apps, die rasch verf??gbar sein m??ssen, bis hin zu erprobten L??sungen f??r Sportverb??nde und Athleten. Ein Auszug unserer vergangenen Missionen

                  <!--<a href="products.php">>> mehr erfahren</a>.</p>-->
          </div>
        </div>
        <!--<div class="media seo_features_item">
              <div class="icon two"><img src="websiteNEWASSETS/img/icons/diagramm1.png" alt=""></div>
              <div class="media-body">
                <h3>Erfolgsgepr??fte Modultechnologie:</h3>
                <p>Warum die Welt neu erfinden? Nutze eines der existierenden Module aus unserem Gesamtbaukasten und profitiere von rascher Einsatzf??higkeit mit maximaler Sicherheit. 100% Speed, 100%
                  Erfolg.
                  <a href="products.php">>> mehr erfahren</a>.
                  <br><br>
                  ??berzeuge dich von unseren Erfolgen und tauche mit uns in eine neue Galaxie. Erfahre mehr ??ber unsere Produkte.-->
        </p>
        <br>
      </div>
    </div>
    </div>
    </div>
    </div>
    </div>
  </section>

  <section class="support_integration_area angled-edge angled-edge-grey">
    <div class="container">
      <div class="sec_title text-center mb_70 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
        <h2 class="f_p f_size_30 l_height50 f_600 t_color3 uppercase">PRODUCT PORTFOLIO</h2>
        <p class="f_400 f_size_16 mb-0">An excerpt of our past missions:</p>
      </div>
      <div class="row flex-row-reverse">
        <div class="col-lg-9 col-md-10 col-sm-12">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
              <a href="#" class="s_integration_item">
                <img src="websiteNEWASSETS/img/index/icon_mainmenu_1.png" alt="">
                <h5>Websites</h5>
              </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
              <a href="#" class="s_integration_item">
                <img src="websiteNEWASSETS/img/index/icon_mainmenu_2.png" alt="">
                <h5>Chatbots</h5>
              </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
              <a href="#" class="s_integration_item">
                <img src="websiteNEWASSETS/img/index/icon_mainmenu_3.png" alt="">
                <h5>Events</h5>
              </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
              <a href="#" class="s_integration_item">
                <img src="websiteNEWASSETS/img/index/icon_mainmenu_4.png" alt="">
                <h5>CRM</h5>
              </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
              <a href="#" class="s_integration_item">
                <img src="websiteNEWASSETS/img/index/icon_mainmenu_5.png" alt="">
                <h5>Project management</h5>
              </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
              <a href="#" class="s_integration_item">
                <img src="websiteNEWASSETS/img/index/icon_mainmenu_6.png" alt="">
                <h5>booking systems</h5>
              </a>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6">
              <a href="#" class="s_integration_item">
                <img src="websiteNEWASSETS/img/index/icon_mainmenu_6.png" alt="">
                <h5>ERP</h5>
              </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
              <a href="#" class="s_integration_item">
                <img src="websiteNEWASSETS/img/index/icon_mainmenu_6.png" alt="">
                <h5>E-commerce</h5>
              </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
              <a href="#" class="s_integration_item">
                <img src="websiteNEWASSETS/img/index/icon_mainmenu_6.png" alt="">
                <h5>Etc..</h5>
              </a>
            </div>

            <!--  <button class="btn btn_three btn_hover f_size_15 f_500 wow2 fadeInLeft2" data-wow-delay2="0.8s" type="submit">Go. > Jetzt Kontakt aufnehmen.</button>-->
            <!--<div class="col-lg-12 col-md-4 col-sm-6">
              <a href="https://dokume.net/website/SaasLand/NEW/products.php" class="s_integration_item" style="background-color:#0E467F;">
                <img src="websiteNEWASSETS/img/erp-home/erp_icon2.png" alt="">
                <h5 style="color: #fff;">Dein Projekt</h5>
              </a>
            </div>-->
            <br>
            <div style="width: 100%;text-align: center;z-index: 1;">
              <a href="contact.php" class="mt_30 seo_btn seo_btn_one btn_hover" style="background-color: #e45039;color: #fff;" data-i18n="index.contact3">Go. > Contact us now.</a>
            </div>
            <br>
          </div>
        </div>
        <div class="col-lg-3 col-md-2 col-sm-12">
          <img class="integration_img" src="websiteNEWASSETS/img/new-home/tree_3.png" alt="">
        </div>
      </div>
    </div>
    <br>
    <br>
  </section>

  <section class="hosting_service_area sec_pad angled-edge angled-edge-lightblue">
    <div class="container">
      <div class="hosting_title text-center">
        <h2 class="wow fadeInUp f_p f_size_30 l_height50 f_600 t_color3 uppercase" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;margin-top: 100px">HOW IT WORKS: THE DOKUME PLATFORM</h2>
        <p class="wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">The heart of our success is our DokuMe platform, your "command center". Here you can manage your IT product, communicate with your team and add new applications if you wish. As always: simple, fast and efficient.</p>
      </div>
      <div class="row">
        <div class="col-lg-4 col-sm-6">
          <div class="hosting_service_item">
            <div class="icon">
              <i class="fas fa-sign-in-alt"></i>
            </div>
            <a href="#">
              <h4 class="h_head">Sign up & choose</h4>
            </a>
            <p>Find the apps that suit you. Personalize them with just a few clicks so you can quickly reach your goal.</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="hosting_service_item">
            <div class="icon">
              <i class="fas fa-user-plus"></i>
            </div>
            <a href="#">
              <h4 class="h_head">Invite & get started</h4>
            </a>
            <p>Add your team members. You start together.</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="hosting_service_item">
            <div class="icon">
              <i class="fas fa-rocket"></i>
            </div>
            <a href="#">
              <h4 class="h_head">Analyze & grow</h4>
            </a>
            <p>Use our reporting and analysis options. This will make your IT portfolio (alternatively: IT product) even better.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include('websiteNEWASSETS/includes/liftOff.php'); ?>
  
  <?php include('websiteNEWASSETS/includes/footer.php'); ?>
  <?php include('websiteNEWASSETS/includes/scripts.php'); ?>

  <script>
    $('.s_integration_item').on('click', function(e) {
      e.preventDefault();

      alert('We are currently working hard to produce new content for the site. Come back soon to learn more.');
      return false;
    });

    $('#readyBTN').on('click', function() {
      window.location = `signup.php?email=${$('#email').val()}`;
    })
  </script>


</body>

</html>
