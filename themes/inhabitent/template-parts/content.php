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
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				demo_theme_posted_on();
				echo " / ";
				demo_theme_comment_number();
				echo " / ";
				// demo_theme_comments_link();
				demo_theme_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
		<?php demo_theme_post_thumbnail(); ?>
	</header><!-- .entry-header -->


	<div class="entry-content">
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->

		<div class="dark-read-more-button">
			<a href="<?php the_permalink(); ?>">Read More →</a>
		</div>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
