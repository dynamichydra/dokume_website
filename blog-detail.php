<!doctype html>
<html lang="de">


<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="https://dokume.net/website/SaasLand/NEW/img/dokume_logo/DokuMe-pencil.png" type="image/x-icon">
  <!-- 50-60 chars -->
  <title>DokuMe Blog | Performance is a matter of planning </title>
  <meta name="theme-color" content="#333a54">
  <meta http-equiv="language" content="de">

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

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


  <style>
    .breadcrumb_area {
      background-image: -webkit-repeating-linear-gradient(#333a54, #000000);
    }

    .blog_content h5:hover {
      color: #333A54 !important;
    }

    .post_share a:hover {
      color: #E45038 !important;
    }

    .post_author .media-body {
      padding-left: 20px;
      padding-top: 16px;
    }

    .blog_single .blockquote {
      border-left: 4px solid #333A54;
    }

    #articleDIV img {
      max-width: 100%;
    }

    @media only screen and (max-width: 1000px) {
      .responsive-breadcrumb-container {
        margin-top: 91px;
      }

      .responsive-headline {
        font-family: inherit !important;
        font-size: 34px !important;
        color: white !important;
      }
    }
  </style>
</head>

<body>
  <div class="body_wrapper">

    <?php include('websiteNEWASSETS/includes/header.php'); ?>

    <section class="breadcrumb_area drdt-ignore-dark" style="min-height: 539px;">
      <div class="container">
        <div class="breadcrumb_content responsive-breadcrumb-container text-center">
          <h1 class="f_p f_700 f_size_50 w_color l_height50 mb_20 responsive-headline">Doku<font color="E45038">Me</font> Blog</h1>
          <p class="f_400 w_color f_size_16 l_height26">Erfahre mehr über die Auswirkungen der Digitalisierung.
            In unserem Blog erfährst du <br> wie du von der vierten industriellen Revolution profiteren kannst 🚀
          </p>
        </div>
      </div>
    </section>

    <?php
    include('websiteNEWASSETS/dokumeCustom/includes/publicBackend.php');
    include('websiteNEWASSETS/dokumeCustom/includes/common.php');
    include('websiteNEWASSETS/dokumeCustom/includes/newsdetail.php');

    ?>

    <section>
      <div class="container" style="padding-top: 60px;">
        <div class="col-lg-8">

          <div id="articleDIV" class="blog_single mb_50">

            <?php echo $firstImage; ?>

            <div class="blog_content">
              <div class="entry_post_info">
                Von: <a href="team.php"><?php echo $data->CREATOR_ID->NAME; ?></a>
                <?php echo date('d.m.Y', strtotime($data->SEND)); ?>
                <?php
                if (isset($data->PUSH_APP_MESSAGE_CATEGORY) && count($data->PUSH_APP_MESSAGE_CATEGORY) > 0) {
                  echo ' - ';
                  $isFirst = true;
                  foreach ($data->PUSH_APP_MESSAGE_CATEGORY as $k => $v) {
                    if (!$isFirst) {
                      echo ', ';
                    } else {
                      $isFirst = false;
                    }
                    echo $v->CATEGORY_ID->NAME;
                  }
                }
                ?>
              </div>
              <a href="#">
                <h5 class="f_p f_size_20 f_500 t_color mb-30"><?php echo $data->TITLE; ?></h5>
              </a>

              <div class="f_400 mb-30"><?php echo $data->MESSAGE; ?></div>

              <?php
              if (isset($data->MESSAGE_MORE) && $data->MESSAGE_MORE != '') {
              ?>

                <hr class="separator">

                <div class="f_400 mb-30">
                  <?php echo $data->MESSAGE_MORE; ?>
                  <?php echo $attachment['content'] ?? ''; ?>

                  <!--php echo getMsgQuestionnaires($data->PUSH_APP_MESSAGE_QUESTION); ?-->
                </div>

              <?php
              }

              if (isset($data->COUNTER) && $data->COUNTER != '') {
              ?>
                <div class="btn btn-secondary thumbCounter mb-3" data-counterid="<?php echo $data->ID; ?>" data-counteramount="<?php echo $data->COUNTER; ?>"><?php echo $data->COUNTER; ?> Gefällt mir <i class="fa fa-thumbs-up"></i></div>
              <?php
              }
              ?>
            </div>

            <div class="post_share">
              <div class="post-nam"> Teilen: </div>
              <div class="flex">
                <a href="#"><i class="ti-facebook"></i>Facebook</a>
                <a href="#"><i class="ti-twitter"></i>Twitter</a>
                <a href="#"><i class="ti-pinterest"></i>Pinterest</a>
              </div>
            </div>
            <div class="media post_author mt_60">
              <img class="rounded-circle" src="https://api.dokume.net/functions.php/storage/avatar/<?php echo $data->CREATOR_ID->ID; ?>" width="80" height="80" alt="">
              <div class="media-body">
                <h5 class="f_p t_color3 f_size_18 f_500"><?php echo $data->CREATOR_ID->NAME; ?></h5>
                <h6 class="f_p f_size_15 f_400 mb_20"><?php echo $data->USERINTERFACE_ID->NAME; ?></h6>
              </div>
            </div>

            <a id="newsBTN" href="blog-list.php" class="btn btn-block mt-5">Mehr News lesen</a>

          </div>

        </div>



      </div>
  </div>

  </section>


  <?php include('websiteNEWASSETS/includes/footer.php'); ?>


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

  <script src="https://dokume.net/public/bsd/photogallerie/APPS/gallery/lightgallery/js/lightgallery.min.js"></script>
  <script src="https://dokume.net/public/bsd/photogallerie/APPS/gallery/lightgallery/modules/lg-thumbnail.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@10.19.0/dist/lazyload.min.js"></script>
  <script src="js/moment-with-locales.js"></script>
  <script src="websiteNEWASSETS/dokumeCustom/js/newsDetailPHP.js"></script>
</body>

</html>