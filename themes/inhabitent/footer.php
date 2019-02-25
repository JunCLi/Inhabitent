<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package demo-theme
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="footer-info">
			<div class="contact-info">
				<h4>Contact Info</h3>
				<a>info@inhabitent.com</a>
				<a>778-456-7891</a>
			</div>
			<div>
				<h4>Business Hours </h4>
				<p><span>Monday-Friday:</span> 9am to 5pm</p>
				<p><span>Saturday:</span> 10am to 2pm</p>
				<p><span>Sunday</span> Closed</p>
			</div>
			<div class="text-logo">
				<img src="<?php echo get_stylesheet_uri(); ?>/../images/inhabitent-logo-text.svg">
			</div>
		</div>	
		<div class="site-info">
			
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
