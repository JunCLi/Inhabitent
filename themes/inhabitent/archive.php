<?php
/**
 * Template Name: Shop
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package demo-theme
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
				<?php
					$newSlugArray = explode(':', get_the_archive_title());
					$newProductTypeName = array_values(array_slice($newSlugArray, -1))[0];
					echo $newProductTypeName; 
				?>
				</h1>

				<?php
				the_archive_description('<div class="archive-description">', '</div>');
				?>
			</header><!-- .page-header -->

			<section class="shop-content">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content-shop', get_post_type() );

			endwhile; ?>
			</section>
			<?php the_posts_navigation();

		else :

			get_template_part( 'template-parts/content-shop', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
