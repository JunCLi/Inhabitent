<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package demo-theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<main class="product-item">
		<header class="entry-header">
			<?php demo_theme_post_thumbnail(); ?>
		</header><!-- .entry-header -->


		<div class="entry-content">
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif; ?>

			<?php $customFields = get_post_custom();
			$priceArray = $customFields['price'];
			foreach ($priceArray as $price) : ?>
				<p class="price"><?php echo $price ?></p>
			<?php endforeach; ?>

			<?php
			the_content();
			?>

			<div class="social-media-buttons">
				<button type="button" class="black-sm-button">
					Like
				</button>
				<button type="button" class="black-sm-button">
					Tweet
				</button>
				<button type="button" class="black-sm-button">
					Pin
				</button>
			</div>
		</div><!-- .entry-content -->
	</main>

	<footer class="entry-footer">
		<?php demo_theme_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
