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
			<?php dynamic_sidebar( 'sidebar-2' ); ?>
			<div class="text-logo">
				<img src="<?php echo get_stylesheet_uri(); ?>/../images/inhabitent-logo-text.svg">
			</div>
		</div>	
		<div class="site-info">
			<p>copyright © 2019 Inhabitent</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
