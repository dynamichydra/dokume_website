<!doctype html>
<html lang="en">


<head>
    <?php include('websiteNEWASSETS/includes/head.php'); ?>
    <style media="screen">
        .blog_area {
            text-align: center;
            max-width: 800px;
        }

        .breadcrumb_area {
            background-image: -moz-linear-gradient(180deg, #273B5C 0%, #273B5C 100%);
            background-image: -webkit-linear-gradient(180deg, #273B5C 0%, #273B5C 100%);
            background-image: -ms-linear-gradient(180deg, #273B5C 0%, #273B5C 100%);
        }

        .pos_banner_text h6 {
            font-size: 14px !important;
            line-height: 30px !important;
            font-family: "Poppins", sans-serif !important;
            text-transform: uppercase !important;
            font-weight: 500 !important;
            letter-spacing: 4px !important;
            margin-bottom: 12px !important;
            color: fff !important;
        }

        h2 {
            font-family: inherit !important;
            font-size: 30px !important;
            line-height: 40px !important;
            margin-bottom: 25px !important;
            color: fff !important;
        }

        .dm-social_wall-widget {
            position: relative;
            z-index: 10;
            margin-top: -50px;
        }
    </style>
</head>

<body>
    <div class="body_wrapper">

        <?php include('websiteNEWASSETS/includes/header.php'); ?>

        <section class="breadcrumb_area">
            <img class="breadcrumb_shap" src="websiteNEWASSETS/img/breadcrumb/banner_bg.png" alt="">
            <div class="container">
                <div class="pos_banner_text text-center">
                    <h6>WHAT'S NEW</h6>
                    <h2>Stay up to date and subscribe to our social media channels.</h2>
                </div>
            </div>
        </section>

        <section class="container">

            <style>
                /* space for own styles*/
            </style>

            <div class="dm-social_wall-widget" data-view="social_wall" data-wallid="4" data-profileid="12454" data-bootstrap="true" data-apikey="Gb8DWhDxt9Et0g5coUT8UxCzmvIyIM8U4KcjoPVdeU6LUmhtPIfqqCBux7DGWmBN"></div>

            <script>
                ! function() {
                    var e, t, r, i, s, n;
                    e = document, t = "script", r = "dokume_social_wall_widget", i = "https://dokume.net/public/plugin/social_wall/plugin.js", n = e.getElementsByTagName("script")[0], e.getElementById(r) || ((s = e.createElement(t)).id = r, "script" === t ? (s.src = i, s.defer = "defer", s.async = !1) : (s.href = i, s.rel = "stylesheet"), n.parentNode.insertBefore(s, n))
                }();
            </script>
        </section>

        <center>
            <section class="blog_area sec_pad">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="feedDIV" class="row">
                                <ul class="col-lg-12 list-unstyled page-numbers shop_page_number text-left mt_30">
                                    <li><span aria-current="page" class="page-numbers current">1</span></li>
                                    <li><a class="page-numbers" href="#">2</a></li>
                                    <li><a class="next page-numbers" href="#"><i class="ti-arrow-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!--
                    <div class="col-lg-4">
                        <div class="blog-sidebar">
                            <div class="widget sidebar_widget widget_search">
                                <form action="#" class="search-form input-group">
                                    <input type="search" class="form-control widget_input" placeholder="Search">
                                    <button type="submit"><i class="ti-search"></i></button>
                                </form>
                            </div>
                            <div class="widget sidebar_widget widget_recent_post mt_60">
                                <div class="widget_title">
                                    <h3 class="f_p f_size_20 t_color3">Recent posts</h3>
                                    <div class="border_bottom"></div>
                                </div>
                                <div class="media post_item">
                                    <img src="websiteNEWASSETS/img/blog-grid/post_1.jpg" alt="">
                                    <div class="media-body">
                                        <a href="#">
                                            <h3 class="f_size_16 f_p f_400">Proin gravi nibh velit auctor aliquet aenean.</h3>
                                        </a>
                                        <div class="entry_post_info">
                                            By: <a href="#">Admin</a>
                                            <a href="#">March 14, 2018</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="websiteNEWASSETS/img/blog-grid/post_2.jpg" alt="">
                                    <div class="media-body">
                                        <a href="#">
                                            <h3 class="f_size_16 f_p f_400">Proin gravi nibh velit auctor aliquet aenean.</h3>
                                        </a>
                                        <div class="entry_post_info">
                                            By: <a href="#">Admin</a>
                                            <a href="#">March 14, 2018</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="websiteNEWASSETS/img/blog-grid/post_3.jpg" alt="">
                                    <div class="media-body">
                                        <a href="#">
                                            <h3 class="f_size_16 f_p f_400">Proin gravi nibh velit auctor aliquet aenean.</h3>
                                        </a>
                                        <div class="entry_post_info">
                                            By: <a href="#">Admin</a>
                                            <a href="#">March 14, 2018</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="websiteNEWASSETS/img/blog-grid/post_4.jpg" alt="">
                                    <div class="media-body">
                                        <a href="#">
                                            <h3 class="f_size_16 f_p f_400">Proin gravi nibh velit auctor aliquet aenean.</h3>
                                        </a>
                                        <div class="entry_post_info">
                                            By: <a href="#">Admin</a>
                                            <a href="#">March 14, 2018</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget sidebar_widget widget_categorie mt_60">
                                <div class="widget_title">
                                    <h3 class="f_p f_size_20 t_color3">Categories</h3>
                                    <div class="border_bottom"></div>
                                </div>
                                <ul class="list-unstyled">
                                    <li> <a href="#"><span>Fashion</span><em>(54)</em></a> </li>
                                    <li> <a href="#"><span>Food for thought</span><em>(83)</em></a> </li>
                                    <li> <a href="#"><span>Gaming</span><em>(96)</em></a> </li>
                                    <li> <a href="#"><span>Music</span><em>(38)</em></a> </li>
                                    <li> <a href="#"><span>Uncategorized</span><em>(44)</em></a> </li>
                                    <li> <a href="#"><span>SaasLand</span><em>(44)</em></a> </li>
                                    <li> <a href="#"><span>Project Management</span><em>(44)</em></a> </li>
                                    <li> <a href="#"><span>Wireframing</span><em>(44)</em></a> </li>
                                </ul>
                            </div>
                            <div class="widget sidebar_widget widget_tag_cloud mt_60">
                                <div class="widget_title">
                                    <h3 class="f_p f_size_20 t_color3">Tags</h3>
                                    <div class="border_bottom"></div>
                                </div>
                                <div class="post-tags">
                                    <a href="#">SaasLand</a>
                                    <a href="#">Web Design</a>
                                    <a href="#">Saas</a>
                                    <a href="#">Cooling System</a>
                                    <a href="#">Corporate</a>
                                    <a href="#">Software</a>
                                    <a href="#">Landing</a>
                                    <a href="#">Wheels</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    -->
                    </div>

                </div>
            </section>
        </center>
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
    <script src="websiteNEWASSETS/vendors/nice-select/jquery.nice-select.min.js"></script>
    <script src="websiteNEWASSETS/vendors/scroll/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="websiteNEWASSETS/js/plugins.js"></script>
    <script src="websiteNEWASSETS/js/main.js"></script>

    <link rel="stylesheet" href="https://test.dokume.net/public/pushapp/bsd/js/fotorama/fotorama.css">
    <script src="https://test.dokume.net/public/pushapp/bsd/js/fotorama/fotorama.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js" integrity="sha256-4iQZ6BVL4qNKlQ27TExEhBN1HFPvAvAMbFavKKosSWQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/locale/de.js" integrity="sha256-wUoStqxFxc33Uz7o+njPIobHc4HJjMQqMXNRDy7X3ps=" crossorigin="anonymous"></script>
    <script src="websiteNEWASSETS/dokumeCustom/js/fb.js"></script>

    <!--<script>
      window.fbAsyncInit = function() {
        FB.init({
          appId            : '360166667671627',
          autoLogAppEvents : true,
          xfbml            : true,
          version          : 'v5.0'
        });

        FB.api(
  '/dokume.net',
  'GET',
  {"fields":"posts.limit(20){full_picture,message,attachments{subattachments},created_time,updated_time},link"},
  function(response) {
      // Insert your code here
  }
);
      };
    </script>
    <script async defer src="https://connect.facebook.net/en_US/sdk.js"></script>-->
</body>

</html>