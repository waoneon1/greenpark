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
	      <div class="row">
	        <div class="col-md-4 mt-1 mb-5">
	          <h3 class="section-item-title">office</h3>
	          <div class="contact-item">Jl. Perumahan Puri Krakatau Hijau<br />
	          	Blok G1 No. 1A, Jalan Raya Merak - Grogol<br />
	          	Cilegon Barat</div>
	          <div class="contact-item"><a href="mailto:hello@lewisstudio.co">grandterraceapartment@gmail.com</a></div>
	          <div class="contact-item"><a href="tel:+00853462188" class="phone-link">+0085 346 2188</a></div>
	        </div>
	        <div class="col-md-4 mb-5">
	       		<img src="<?php echo get_template_directory_uri() ?>/assets/img/greenpark.png" style="max-width: 100%">
	        </div>
	        <div class="col-md-4 mt-1 mb-5 text-right">
	          <h3 class="section-item-title">Location</h3>
	          <div class="twitter-item">
	       			<img src="<?php echo get_template_directory_uri() ?>/assets/img/barcode.jpg" style="max-width: 100%">
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>
	  <div class="site-info">
	    <div class="container">
	      <div class="copyright"><strong>greenpark terrace apartment &copy; 2019</strong>. all rights reserved</div>
	    </div>
	  </div>
	</footer>

</div><!-- .animsition -->

<?php wp_footer(); ?>

<script>
  $(document).ready(function() {
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
