<?php
/**
 * Front Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package terrace
 */

get_header();
?>
<style type="text/css">
  .bumn-logo-left {
    position: absolute;
    left: 10px;
    top: 10px;
    z-index: 99999999;
  }
  .bumn-logo-right {
    position: absolute;
    right: 10px;
    top: 25px;
    z-index: 99999999;
  }
</style>
<div class="bumn-logo">
  <img src="<?php echo get_template_directory_uri() ?>/assets/img/pp.png" class="bumn-logo-left">
  <img src="<?php echo get_template_directory_uri() ?>/assets/img/bumn.png" class="bumn-logo-right">
</div>
<div class="promo-zoom full-height">
  <div class="pin-scene">
    <div class="mountains"></div>
    <div class="house-left"></div>
    <div class="house-right"></div>
    <div class="step-opacity"></div>
    <div class="promo-zoom-titles" data-wow-delay=".2s">
      <img src="<?php echo get_template_directory_uri() ?>/assets/img/greenpark.png">
    </div>
  </div>
</div>

<div class="promo-about full-height step-visibility step-logo">
  <div class="section about">
    <div class="container">
      <img src="<?php echo get_template_directory_uri() ?>/assets/img/achieve1.png">
      <h2 class="about-title">Pioneer of Green Concept</h2>
      <div class="about-descr text-grey" style="text-align: center;">
        <span style="max-width: 500px; display: inline-block;">Sustainability is the future and the only way of life. Advocating sustainability on huge platform to avoid catastrophic climate change is a new world order. And we are here to implement it.</span>
      </div>
    </div>
  </div>
  <img src="<?php echo get_template_directory_uri() ?>/assets/img/plant-ach.png" alt="" class="floater-plant-ach1" />
  <img src="<?php echo get_template_directory_uri() ?>/assets/img/plant-ach.png" alt="" class="floater-plant-ach2" />
</div>


<div class="section-item services wow fadeInUp" data-wow-offset="450">
  <div class="container">
    <h3 class="section-item-title">Our Unit Type</h3>
    <div class="services-descr text-grey">Discover our room types. Each presents a sophisticated ambience with rich decoration.</div>
    <div class="row">
      <div class="col-md-4">
        <a href="service.html" class="service-item wow fadeInUp" data-wow-offset="450">
          <div class="services-letter letter-g font-custom">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/badroom1.png">
            <div class="mask wow slideInLeft" data-wow-delay=".2s" data-wow-duration="2.5s" data-wow-offset="450"></div>
          </div>
          <div class="service-item-title">1 Bedroom Type</div>
          <div class="service-item-descr text-grey">Our One-Bedroom type has a spacious bedroom with a living - dining area, kitchen and comfortable bathroom.</div>
        </a>
      </div>
      <div class="col-md-4">
        <a href="service.html" class="service-item wow fadeInUp" data-wow-offset="450">
          <div class="services-letter letter-w font-custom">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/badroom2.png">
            <div class="mask wow slideInLeft" data-wow-delay=".4s" data-wow-duration="2.5s" data-wow-offset="450"></div>
          </div>
          <div class="service-item-title">2 Bedroom Type</div>
          <div class="service-item-descr text-grey">Ideal for young families the 39,5 - 48 square meter Two-Bedroom type has a spacious bedroom, living room area, dining room, kitchen and bathroom.</div>
        </a>
      </div>
      <div class="col-md-4">
        <a href="service.html" class="service-item wow fadeInUp" data-wow-offset="450">
          <div class="services-letter letter-g font-custom">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/badroom3.png">
            <div class="mask wow slideInLeft" data-wow-delay=".8s" data-wow-duration="2.5s" data-wow-offset="450"></div>
          </div>
          <div class="service-item-title">2 Bedroom Suite Type</div>
          <div class="service-item-descr text-grey">Truly spacious at 52 - 53,5 square meters, the Two-Bedroom Suite is the most luxurious unit and conduct the affairs of your professional and personal life.</div>
        </a>
      </div>
    </div>
  </div>
</div>

<div class="section-item projects wow fadeInUp" data-wow-offset="150">
  <div class="container">
    <h3 class="section-item-title">Features & Facilities</h3>
    <div class="carousel-container wow fadeIn a-play" data-wow-offset="450" data-wow-duration="0.2s">
      <div class="a-project-carousel owl-carousel owl-theme">
        <div class="project-carousel-item">
          <div class="project-carousel-photo" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/img/feature1.jpg);"></div>
          <div class="project-carousel-detail">
            <div class="project-carousel-category">Brnading</div>
            <div class="project-carousel-title wow fadeInDown">Exclusive<br />Swimming Pool</div>
          </div>
        </div>
      </div>
      <div class="mask wow slideInLeft" data-wow-offset="450" data-wow-duration="1.5s"></div>
    </div>

    <!-- <div class="more-total"><a href="work-grid.html">see all projects</a></div> -->
  </div>
  <img src="<?php echo get_template_directory_uri() ?>/assets/img/plant-projects1.png" alt="" class="floater-plant-projects1" />
  <img src="<?php echo get_template_directory_uri() ?>/assets/img/plant-projects2.png" alt="" class="floater-plant-projects2" />
</div>


<div class="section text-center clients" style="padding-bottom: 0">
  <div class="container">
      <h3 class="section-item-title">Testimonial</h3>
      <div class="reviews-carousel-container wow fadeIn" data-wow-offset="450" data-wow-duration="1.5s">
        <div class="a-reviews-carousel owl-carousel owl-theme">
        <div class="reviews-carousel-item">
          <div class="inside">
            <div class="reviews-carousel-text">“Ini adalah apartemen dengan berbagai fasilitas, letak yang strategis, aman, nyaman dan jangkauan akses yang mudah”</div>
            <div class="reviews-carousel-author"><strong>Lilis</strong> <span class="text-grey-light">at</span> Limasland Realty Cilegon </div>
          </div>
        </div>
        <!-- <div class="reviews-carousel-item">
          <div class="inside">
            <div class="reviews-carousel-text">"A designer knows he has achieved perfection not when there is nothing left to add, but when there is  nothing left to take away."</div>
            <div class="reviews-carousel-author"><strong>Paolo Dybala</strong> <span class="text-grey-light">at</span> Apple Inc</div>
          </div>
        </div> -->
        </div>
      </div>
  </div>
  <img src="<?php echo get_template_directory_uri() ?>/assets/img/plant-client-right.png" alt="" class="floater-plant-client-right" />
  <img src="<?php echo get_template_directory_uri() ?>/assets/img/plant-client.png" alt="" class="floater-plant-client" />
</div>

<div class="section text-center clients w-partner-list" style="padding-top: 0">
  <div class="container">
      <div class="partner-list row align-items-center" style="margin-top:0; padding-top: 9.25925926vmin;">
        <div class="col partner-item wow fadeIn" data-wow-delay=".1s" data-wow-offset="100">
          <a href="#">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/partner1.png" alt=""/>
            <p class="editorials-descr text-grey partner-space">Triple Play Services</p>
          </a>
        </div>
        <div class="col partner-item wow fadeIn" data-wow-delay=".2s" data-wow-offset="100">
          <a href="#">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/partner2.png" alt=""/>
            <p class="editorials-descr text-grey partner-space">Co-Working Spaces</p>
          </a>
        </div>
        <div class="col partner-item wow fadeIn" data-wow-delay=".3s" data-wow-offset="100">
          <a href="#">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/partner3.png" alt=""/>
            <p class="editorials-descr text-grey partner-space">E-Library</p>
          </a>
        </div>
        <div class="col partner-item wow fadeIn" data-wow-delay=".4s" data-wow-offset="100">
          <a href="#">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/partner4.png" alt=""/>
            <p class="editorials-descr text-grey partner-space">Kumkang Building</p>
          </a>
        </div>
        <div class="col partner-item wow fadeIn" data-wow-delay=".5s" data-wow-offset="100">
          <a href="#">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/partner5.png" alt=""/>
            <p class="editorials-descr text-grey partner-space">Indirect System</p>
          </a>
        </div>
      </div>
  </div>
  <img src="<?php echo get_template_directory_uri() ?>/assets/img/plant-partnerlist.png" alt="" class="floater-plant-partner" />
</div>

<div class="section section-last text-center editorials">
  <div class="container">
    <div class="wow fadeInUp" data-wow-duration=".6s" data-wow-offset="450">
      <h3 class="section-item-title">LATEST NEWS</h3>
      <div class="editorials-descr text-grey">Check out our upcoming events, exhibitions and other activities</div>
    </div>

    <div class="article-list row wow fadeInUp" data-wow-duration=".5s" data-wow-offset="450">
      <div class="col-md-4">
        <div class="article-item">
          <div class="article-item-photo zooming wow fadeInDown" data-wow-delay=".6s" data-wow-offset="450"><a href="single-post-with-sidebar.html"><img src="<?php echo get_template_directory_uri() ?>/src/img/pic9.jpg" alt="" class="img-fluid" /></a></div>
          <div class="article-item-category"><a href="news-grid.html">Event</a></div>
          <div class="article-item-title"><a href="single-post-with-sidebar.html">Runway fashion show with ALEXA & TIARA Bridal</a></div>
          <div class="article-item-date text-grey">December 25, 2018</div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="article-item">
          <div class="article-item-photo zooming wow fadeInDown" data-wow-delay=".8s" data-wow-offset="450"><a href="single-post-with-sidebar.html"><img src="<?php echo get_template_directory_uri() ?>/src/img/pic10.jpg" alt="" class="img-fluid" /></a></div>
          <div class="article-item-category"><a href="news-masonry.html">Open Table</a></div>
          <div class="article-item-title"><a href="single-post-no-sidebar.html">Visit us at GALAXY PERMAI mall and get unique doorprize</a></div>
          <div class="article-item-date text-grey">December 6, 2018</div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="article-item">
          <div class="article-item-photo zooming wow fadeInDown" data-wow-delay="1s" data-wow-offset="450"><a href="single-post-with-sidebar.html"><img src="<?php echo get_template_directory_uri() ?>/src/img/pic11.jpg" alt="" class="img-fluid" /></a></div>
          <div class="article-item-category"><a href="news-with-sidebar.html">EXHIBITION</a></div>
          <div class="article-item-title"><a href="single-post-with-sidebar.html">Visit our exhibition booth at GRAND PERMAI mall start at december 15 - 17, 2018 </a></div>
          <div class="article-item-date text-grey">October 12, 2018</div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="promo-zoom-footer">
    <div class="inside">
      <img src="<?php echo get_template_directory_uri() ?>/assets/img/signofnature.jpg" alt="" class="img-fluid" />
    </div>
</div>

<?php
get_footer();
