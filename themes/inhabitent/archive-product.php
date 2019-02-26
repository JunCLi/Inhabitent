<?php
/**
 * Template Name: Product
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
				<h1>Shop Stuff</h1>
				<nav class=shop-type-nav>
					<ul>
						<?php
							$shopTypeArgs = array(
								'taxonomy' => 'product_type',
								'hide_empty' => false,
								'number' => 4,
							);

							$shopTypes = get_terms($shopTypeArgs);

							foreach ($shopTypes as $shopType) : ?>
								<li><a href="<?php echo get_term_link($shopType); ?>"><?php echo $shopType->name; ?></a></li> 
							<?php endforeach; wp_reset_postdata(); ?>
					</ul>
				</nav>
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
