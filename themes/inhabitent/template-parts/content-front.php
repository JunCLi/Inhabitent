<?php
/**
 * Template part for front page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package demo-theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	</header><!-- .entry-header -->


	<div class="entry-content">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'demo-theme' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
      get_the_title()
      

		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'demo-theme' ),
			'after'  => '</div>',
		) );
    ?>


    <section class="shop-stuff-section">
      <h2>Shop Stuff</h2> 

      <div class="shop-container"> 
        <?php 
          $shopTypeArgs = array(
          'taxonomy' => 'product_type',
          'hide_empty' => false,
          'number' => 4,
          );

          $shopTypes = get_terms($shopTypeArgs);

          foreach ($shopTypes as $shopType) : ?>
            <div class="product-type">
              <img src='https://via.placeholder.com/150'>
              <p><?php echo $shopType->description ?></p>
              <a href="<?php echo get_term_link($shopType); ?>" class="btn"><?php echo $shopType->name; ?></a>
            </div>

        <?php endforeach; ?>
      </div>
    </section>


    <section class="journal-section">
      <h2>Inhabitent Journal</h2>

      <?php
        $journalPostsArgs = array(
          'post_type' => 'post',
          'posts_per_page' => 3
        );
        $journalPosts = get_posts($journalPostsArgs);
        ?>

        <div class="journal-container">
        <?php foreach ($journalPosts as $post) : setup_postdata($post); ?>
          <div class="journal">
            <?php the_post_thumbnail('large'); ?>
            <div class="journal-content">
              <p class="journal-meta">
                <?php demo_theme_posted_on(); 
                echo " / ";
                demo_theme_comment_number() ?>
              </p>
              <h3><?php the_title() ?></h3>
              <a class="read-more-button" href="<?php the_permalink(); ?>">Read Entry</a>
            </div>
          </div>
        <?php endforeach;  wp_reset_postdata(); ?>
        </div>
    </section>

    <section class="adventure-section">
      <h2>Latest Adventures</h2>
      <?php 
        // $adventure
      ?>
    </section>

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php demo_theme_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
