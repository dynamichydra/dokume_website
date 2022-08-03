<?php

  function requireToVar($file){
    ob_start();
    require($file);
    return ob_get_clean();
  }

  $data = json_decode(requireToVar('testimonials.json'), true);
    
  if (!isset($testimonialType)) {
    $testimonialType = 1;
  }

  if ($testimonialType == 1) {
    $html = '
    <section class="feedback_area_three bg_color sec_pad">
      <div class="container">
        <!--<div class="sec_title mb_70 wow fadeInUp" data-wow-delay="0.4s">
            <h2 class="f_p f_size_40 l_height50 f_500 t_color">Unsere zufriedenen Kunden</h2>
        </div>-->
        <div class="row">
          <div id="fslider_two" class="feedback_slider_two owl-carousel">';

    foreach($data as $testimonial) {
      $html .= '
      <div class="item">
        <div class="feedback_item">
          <div class="feed_back_author">
            <div class="media">
              <div class="img">
                <img src="'.$testimonial['AVATAR'].'" alt="'.$testimonial['NAME'].'">
              </div>
              <div class="media-body">
                <h5 class="t_color f_size_15 f_p f_500">'.$testimonial['NAME'].'</h5>
                <h6 class="f_p f_400">'.$testimonial['DESCRIPTION'].'</h6>
              </div>
            </div>
            <div class="ratting">
              <a href="#"><i class="ti-star"></i></a>
              <a href="#"><i class="ti-star"></i></a>
              <a href="#"><i class="ti-star"></i></a>
              <a href="#"><i class="ti-star"></i></a>
              <a href="#"><i class="ti-star"></i></a>
            </div>
          </div>
          <p class="f_size_16">'.$testimonial['TESTIMONIAL'].'</p>
        </div>
      </div>';  
    }

    $html .= '
          </div>
        </div>
      </div>
    </section>';
  } else if ($testimonialType == 2) {

    $html = '
    <section class="testimonial_area_four sec_pad">
    <div class="testimonial_shap_img" style="background: url(websiteNEWASSETS/img/new/testimonial_bg_shap.png) no-repeat bottom left;"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex align-items-center">
          <div class="testimonial_title">
            <h6>Referenzen</h6>
            <h2 class="f_p f_size_30 l_height45 f_600 t_color">Geliebt von Athleten, Trainern<br>und Verbänden auf der<br>ganzen Welt</h2>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="stratup_testimonial_info d-flex align-items-center">
            <div class="testimonial_slider_four owl-carousel">';

    foreach($data as $testimonial) {
      $html .= '
      <div class="item">
        <div class="author_img">
          <img src="'.$testimonial['AVATAR'].'" alt="'.$testimonial['NAME'].'" style="height:100%;width:100%">
        </div>
        <p>'.$testimonial['TESTIMONIAL'].'</p>
        <h5>'.$testimonial['NAME'].'</h5>
        <h6>'.$testimonial['DESCRIPTION'].'</h6>
      </div>
      ';
    }

    $html .= '
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>';
  }
  
  echo $html;

?>