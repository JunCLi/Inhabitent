<?php
/**
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
				<h1 class="page-title"> Latest 
				<?php
					$newSlugArray = explode(':', get_the_archive_title());
					$newProductTypeName = array_values(array_slice($newSlugArray, -1))[0];
					echo $newProductTypeName; 
				?>
				</h1>
			</header><!-- .page-header -->

			<section class="adventure-container">
				<?php 
					$adventurePostsArgs = array(
						'post_type' => 'adventure',
						'post_per_page' => 4
					);

					$adventurePosts = get_posts($adventurePostsArgs);

					foreach ($adventurePosts as $key => $post) : setup_postdata($post); ?>
						<div class="adventure adventure-<?php echo $key ?>" style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('<?php echo get_the_post_thumbnail_url() ?>') 50% 70% no-repeat; background-size: 160% auto;">
							
							<div class="adventure-content">
								<h3><?php the_title() ?></h3>
								<a class="read-more-button" href="<?php the_permalink(); ?>">Read More</a>
							</div>
						</div>
					<?php endforeach; wp_reset_postdata(); ?>
				</div>
				<p class="adventure-archive"><a href="./adventure">More Adventures</a></p>
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
