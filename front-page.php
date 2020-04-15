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
    <header class="bumn-logo">
        <nav>
            <ul>
                <li><img src="<?php echo get_template_directory_uri() ?>/assets/image/greenpark-sm-w.png" class="bumn-logo-left"></li>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#unit">Unit</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#news">News & Updates</a></li>
                <li><a href="#contact">Contact Us</a></li>
                <li><img src="<?php echo get_template_directory_uri() ?>/assets/image/bumn.png" class="bumn-logo-right"></li>
            </ul>
        </nav>
    </header>
    <div class="promo-zoom full-height">
        <div class="pin-scene">
            <div class="mountains"></div>
            <!-- <div class="house-left"></div> -->
            <div class="house-right"></div>
            <div class="step-opacity"></div>
            <div class="promo-zoom-titles" data-wow-delay=".2s">
                <img src="<?php echo get_template_directory_uri() ?>/assets/image/greenpark-top-w.png">
            </div>
        </div>
    </div>

    <div class="promo-about full-height step-visibility step-logo" 
    style="background-color: #32281E; padding-top: 100px!important;">
        <div class="section about">
            <div class="container" id="about" >
                <h3 class="section-item-title" style="color:#CEBFA2">About Us</h3>
                <div class="row">
                    <div class="col-md-6">
                        <p class="text-justify" style="color:#fff">Hunian vertical Pertama di Kota Cilegon dengan lokasi strategis & dekat kawasan industri. PT PP Properti Tbk mempersembahkan <b>GREENPARK TERRACE</b> Apartment yang didesain untuk memenuhi kebutuhan tempat tinggal dengan fasilitas lengkap & pemandangan indah dari setiap unit, akses ke Pintu Tol Cilegon Barat hanya 5 menit. Akses Utama menuju Pelabuhan Merak, dekat dengan kawasan industri skala internasional, terdapat 133 perusahaan.</p>
                    </div>
                    <div class="col-md-6">
                        <div class="carousel-container wow fadeIn a-play">
                            <div class="a-project-carousel owl-carousel owl-theme">
                                <div class="project-carousel-item">
                                    <div class="project-carousel-photo" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/image/aboutus1.jpg');"></div>
                                </div>
                                <div class="project-carousel-item">
                                    <div class="project-carousel-photo" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/image/aboutus2.jpg');"></div>
                                </div>
                                <div class="project-carousel-item">
                                    <div class="project-carousel-photo" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/image/aboutus3.jpg');"></div>
                                </div>
                            </div>
                            <div class="mask wow slideInLeft" data-wow-offset="450" data-wow-duration="1.5s"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="partner-list row align-items-center" style="margin-top:0; padding-top: 9.25925926vmin;">
                    
                    <div class="col-12">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/image/list_logo_kecil.png" alt=""/>
                    </div>

                </div>
            </div>
        </div>
        <img src="<?php echo get_template_directory_uri() ?>/assets/image/plant-ach.png" alt="" class="floater-plant-ach1 rumbai" />
        <img src="<?php echo get_template_directory_uri() ?>/assets/image/plant-ach.png" alt="" class="floater-plant-ach2 rumbai" />
    </div>


    <div class="section-item services wow fadeInUp" data-wow-offset="450">
        <div class="container" id="unit" >
            <h3 class="section-item-title">Our Unit Type</h3>
            <div class="services-descr text-grey">Discover our room types. Each presents a sophisticated ambience with rich decoration.</div>
            <div class="row">
                <div class="col-md-4">
                    <a href="<?php echo get_template_directory_uri() ?>/assets/image/unit/studio/unit1.jpg" 
                        data-fancybox="gallery"
                        class="service-item wow fadeInUp" data-wow-offset="450">
                        <div class="services-letter letter-g font-custom">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/image/badroom3.png">
                            <div class="mask wow slideInLeft" data-wow-delay=".2s" data-wow-duration="2.5s" data-wow-offset="450"></div>
                        </div>
                        <div class="service-item-title">1 Bedroom Type</div>
                        <div class="service-item-descr text-grey">Our One-Bedroom type has a spacious bedroom with a living - dining area, kitchen and comfortable bathroom.</div>
                    </a>
                    <?php include get_template_directory() . '/template-parts/gallery-one.php' ?>
                </div>
                <div class="col-md-4">
                    <a href="<?php echo get_template_directory_uri() ?>/assets/image/unit/br2/unit1.jpg"
                    data-fancybox="gallery2"
                    class="service-item wow fadeInUp" data-wow-offset="450">
                        <div class="services-letter letter-w font-custom">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/image/badroom2.png">
                            <div class="mask wow slideInLeft" data-wow-delay=".4s" data-wow-duration="2.5s" data-wow-offset="450"></div>
                        </div>
                        <div class="service-item-title">2 Bedroom Type</div>
                        <div class="service-item-descr text-grey">Ideal for young families the 39,5 - 48 square meter Two-Bedroom type has a spacious bedroom, living room area, dining room, kitchen and bathroom.</div>
                    </a>
                    <?php include get_template_directory() . '/template-parts/gallery-two.php' ?>
                </div>
                <div class="col-md-4">
                    <a href="<?php echo get_template_directory_uri() ?>/assets/image/unit/br2s/unit1.jpg"
                    data-fancybox="gallery3"
                    class="service-item wow fadeInUp" data-wow-offset="450">
                        <div class="services-letter letter-g font-custom">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/image/badroom1.png">
                            <div class="mask wow slideInLeft" data-wow-delay=".8s" data-wow-duration="2.5s" data-wow-offset="450"></div>
                        </div>
                        <div class="service-item-title">2 Bedroom Suite Type</div>
                        <div class="service-item-descr text-grey">Truly spacious at 52 - 53,5 square meters, the Two-Bedroom Suite is the most luxurious unit and conduct the affairs of your professional and personal life.</div>
                    </a>
                    <?php include get_template_directory() . '/template-parts/gallery-three.php' ?>

                </div>
            </div>
        </div>
    </div>

    <div class="section-item projects wow fadeInUp" data-wow-offset="150" style="background-color: #32281E; padding-top: 40px;">
        <div class="container"  id="gallery" >
            <h3 class="section-item-title"style="color:#CEBFA2">Gallery</h3>
            <div class="row">
                <div class="col-md-6 col-12 gallery-liner">
                    <div class="carousel-container wow fadeIn a-play">
                        <div class="a-project-carousel owl-carousel owl-theme">
                            <?php $img = [1,3,5,7,9,11,13,15] ?>
                            <?php foreach ($img as $key => $val): ?>
                                <div class="project-carousel-item">
                                    <div class="project-carousel-photo" style="background-image: url('<?php echo get_template_directory_uri() . "/assets/image/upload/gallery".$val.".jpg" ?>');"></div>
                                </div>
                            <?php endforeach ?>
                        </div>
                        <div class="mask wow slideInLeft" data-wow-offset="450" data-wow-duration="1.5s"></div>
                    </div>
                    <div class="subtitle-img-vid">Image</div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="videoWrapper"> 
                        <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/9NntikP1ZmU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="subtitle-img-vid">Videos</div>
                </div>
            </div>

            <!-- <div class="more-total"><a href="#">see all projects</a></div> -->
        </div>
        <img src="<?php echo get_template_directory_uri() ?>/assets/image/plant-projects1.png" alt="" class="floater-plant-projects1" />
        <img src="<?php echo get_template_directory_uri() ?>/assets/image/plant-projects2.png" alt="" class="floater-plant-projects2" />
    </div>

    <div class="section text-center clients" style="padding-bottom: 0">
        <div class="container">
            <h3 class="section-item-title">Customer Testimonial</h3>
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
        <img src="<?php echo get_template_directory_uri() ?>/assets/image/plant-client-right.png" alt="" class="floater-plant-client-right rumbai" />
        <img src="<?php echo get_template_directory_uri() ?>/assets/image/plant-client.png" alt="" class="floater-plant-client rumbai" />
    </div>

    <div class="text-center clients w-partner-list" style="padding-top: 0">
        <img src="<?php echo get_template_directory_uri() ?>/assets/image/plant-partnerlist.png" alt="" class="floater-plant-partner rumbai" />
    </div>

    <div class="section section-last text-center editorials">
        <div id="news" class="container">
            
            <h3 class="section-item-title">NEWS UPDATE</h3>
            <!-- <div class="editorials-descr text-grey">Check out our upcoming events, exhibitions and other activities</div> -->

            <div class="article-list row wow fadeInUp" data-wow-duration=".5s" data-wow-offset="450">
                <div class="col-md-4">
                    <div class="article-item">
                        <div class="article-item-photo zooming wow fadeInDown" data-wow-delay=".6s" data-wow-offset="450">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/image/upload/nnews1.jpg" alt="" class="img-fluid" />
                        </div>
                        <!-- <div class="article-item-category"><a href="#">Event</a></div>
                        <div class="article-item-title"><a href="#">Runway fashion show with ALEXA & TIARA Bridal</a></div>
                        <div class="article-item-date text-grey">December 25, 2018</div> -->
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="article-item">
                        <div class="article-item-photo zooming wow fadeInDown" data-wow-delay=".8s" data-wow-offset="450">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/image/upload/nnews2.jpg" alt="" class="img-fluid" />
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="article-item">
                        <div class="article-item-photo zooming wow fadeInDown" data-wow-delay="1s" data-wow-offset="450">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/image/upload/nnews3.jpg" alt="" class="img-fluid" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <h3 class="section-item-title line-ontitle">SOCIAL UPDATES</h3>
            <div class="section-item">
              <div class="project-photo-carousel a-photo-carousel owl-carousel owl-theme nav-inside nav-square dots-md">
                <div class="project-photo-item">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/image/upload/social1.jpg" alt="" />
                </div>
                <div class="project-photo-item">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/image/upload/social2.jpg" alt="" />
                </div>
                <div class="project-photo-item">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/image/upload/social3.jpg" alt="" />
                </div>
                <div class="project-photo-item">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/image/upload/social4.jpg" alt="" />
                </div>
                <div class="project-photo-item">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/image/upload/social5.jpg" alt="" />
                </div>
              </div>
            </div>
        </div>
    </div>

    <div class="promo-zoom-footer">
        <div class="inside">
            <img src="<?php echo get_template_directory_uri() ?>/assets/image/signofnature.jpg" alt="" class="img-fluid" />
        </div>
    </div>

    <div class="promo-zoom-footer">
        <div class="inside">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.8744683752643!2d106.04150851476807!3d-6.011969295645735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e418fcb1152d66b%3A0xba648a9157ef0a78!2sGreenpark%20Gallery!5e0!3m2!1sen!2sid!4v1586829016618!5m2!1sen!2sid" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </div>

    <?php
get_footer();