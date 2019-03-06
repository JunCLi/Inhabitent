<?php
/**
 * Template part for displaying main product page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package demo-theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="entry-thumbnail">
    <?php demo_theme_post_thumbnail(); ?>
  </div>


  <div class="entry-content">
    <header class="entry-header">
      <?php
      if ( is_singular() ) :
        the_title( '<h1 class="entry-title">', '</h1>' );
      else :
        the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
      endif; ?>

      <div class="entry-meta">
        <?php
        demo_theme_posted_by();
        ?>
      </div>
    </header><!-- .entry-header -->

    <main class="entry-body">
      <?php
      the_content();
      ?>

      <div class="social-media-buttons">
        <button type="button" class="black-sm-button">
          <i class="fab fa-facebook-f"></i> Like
        </button>
        <button type="button" class="black-sm-button">
          <i class="fab fa-twitter"></i> Tweet
        </button>
        <button type="button" class="black-sm-button">
          <i class="fab fa-pinterest"></i> Pin
        </button>
      </div>
    </main>
  </div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
