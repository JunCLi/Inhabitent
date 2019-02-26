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
  <div class="product-thumbnail">
    <?php demo_theme_post_thumbnail(); ?>
  </div>
  <div class="product-info">
    <?php
    if ( is_singular() ) :
      the_title( '<h1 class="entry-title">', '</h1>' );
    else :
      the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
    endif; ?>
    
    <?php
      $customFields = get_post_custom();
      $priceArray = $customFields['price'];
      foreach ($priceArray as $price) :?>
        <p class="price"><?php echo $price ?></p>
      <?php endforeach;
    ?>
  </div>
</article><!-- #post-<?php the_ID(); ?> -->
