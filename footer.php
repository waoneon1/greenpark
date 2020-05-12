<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package terrace
 */

?>
	</div><!-- .wrapper -->
	<footer id="footer" class="footer">
	  <div class="footer-content">
	    <div class="container">
	      <div class="row align-items-center">
	        <div class="col-md-4 mt-1" style="background-color: rgba(255, 255, 255, 0.58);">
	          <h3 class="section-item-title section-item-title--footer">Project Site</h3>
	          <div class="contact-item" id="contact">
	          	Greenpark Gallery<br />
				Ruko A1-1 Mega Blok Simpang Tiga Cilegon, <br />
				Ramanuju, Kec. Purwakarta, <br />
				Kota Cilegon, Banten - 42431
	          	<!-- Jl. Perumahan Puri Krakatau Hijau<br />
	          	Blok G1 No. 1A, Jalan Raya Merak - Grogol<br />
	          	Cilegon Barat -->
	          </div>
	          <div class="contact-item">
	          	<!-- <a href="mailto:greenparkterrace@gmail.com">greenparkterrace@gmail.com</a> -->
	          	<a href="mailto:greenparkterrace.apartemen@gmail.com">greenparkterrace.apartemen@gmail.com</a>
	          </div>

	          <h3 class="section-item-title section-item-title--footer">Social Media</h3>
	          <div class="contact-item">
	          	<ul class="social social-rounded mt-3">
                  <li><a href="https://www.facebook.com/GreenPark-Terrace-Apartment-1180276792085903/">
                  	<i class="socicon-facebook"></i>
                  </a></li>
                  <li><a href="https://www.instagram.com/greenparkterrace/">
                  	<i class="socicon-instagram"></i>
                  </a></li>
                  <li><a href="mailto:greenparkterrace@gmail.com">
                  	<i class="socicon-mail"></i>
                  </a></li>
                </ul>
	          </div>


	          <h3 class="section-item-title section-item-title--footer">Hotline</h3>
	          <div class="contact-item mb-3 pb-3">
	          	<a href="tel:08111607567" class="phone-link">081 1160 7567</a><br/>
	          	<a href="tel:02547734567" class="phone-link">0254-7734567</a>
	          </div>

	        </div>
	        <div class="col-md-4 mb-5">
	       		<img src="<?php echo get_template_directory_uri() ?>/assets/image/greenpark.png" style="max-width: 100%">
	        </div>
	        <div class="col-md-4 mt-1 mb-5 text-right">
	          <h3 class="section-item-title">Location</h3>
	          <div class="twitter-item">
	       			<img src="<?php echo get_template_directory_uri() ?>/assets/image/barcode.jpg" style="max-width: 100%">
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>
	  <div class="site-info" style="background-color: #32281E; color: #fff;">
	    <div class="container">
	      <div class="copyright"><strong>greenpark terrace apartment &copy; <?php echo date("Y");?></strong>. all rights reserved</div>
	    </div>
	  </div>
	</footer>

</div><!-- .animsition -->

<?php wp_footer(); ?>

<script>
  $(document).ready(function($) {

    // marketing executive
    var hash = window.location.hash.substr(1);
    if (mrkt.includes(hash)) {
    	$('#mrkt-' + hash).show();
    } else {
    	$('#mrkt-' + mrkt[0]).show();
    }
    
    // init controller
    var controller = new ScrollMagic.Controller();

    // build scenes
    new ScrollMagic.Scene({triggerElement: '.promo-zoom', triggerHook: 0, duration: '100%'})
          .setTween('.house-left', {left: '-30%', scale: 1.25, ease: Linear.easeNone})
          .addTo(controller);

    new ScrollMagic.Scene({triggerElement: '.promo-zoom', triggerHook: 0, duration: '100%'})
          .setTween('.house-right', {right: '-10%', bottom: '-20%', scale: 1.35, ease: Linear.easeNone})
          .addTo(controller);

    new ScrollMagic.Scene({triggerElement: '.promo-zoom', triggerHook: 0, duration: '100%'})
          .setTween('.mountains', {top: '-60%', scale: 2.2, ease: Linear.easeNone})
          .addTo(controller);

    new ScrollMagic.Scene({triggerElement: '.promo-zoom', triggerHook: 0, duration: '100%'})
          .setTween('.promo-zoom-titles', {top: '0%', opacity: 0, ease: Linear.easeNone})
          .addTo(controller);

    new ScrollMagic.Scene({triggerElement: '.promo-zoom', triggerHook: 0, duration: '100%'})
          .setTween('.navbar-nav', {opacity: 0, ease: Linear.easeNone})
          .addTo(controller);

    new ScrollMagic.Scene({triggerElement: '.step-opacity', triggerHook: 0, duration: '15%'})
          .setTween('.mountains, .house-right, .house-left', {opacity: 0, ease: Linear.easeNone})
          .addTo(controller);

    new ScrollMagic.Scene({triggerElement: '.step-visibility', triggerHook: 0, duration: '10%'})
          .setTween('.mountains, .house-right, .house-left, .navbar-nav, .promo-zoom-titles', {visibility: 'hidden', ease: Linear.easeNone})
          .addTo(controller);

    new ScrollMagic.Scene({triggerElement: '.step-logo', triggerHook: 0, duration: '1%'})
          .setTween('.about', {opacity: '1', top: '0', ease: Linear.easeNone})
          .addTo(controller);

  });
</script>

</body>
</html>
