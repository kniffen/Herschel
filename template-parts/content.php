<?php
/**
 * Template for displaying content
 *
 * @package Herschel
 * @since 1.4.0
 * @version 1.5.0 [Improved markup]
 */
?>
<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  
  <?php get_template_part( 'template-parts/entry', 'header' ); ?>

  <?php if (
    get_the_post_thumbnail() !== '' &&
    (
      ( ( is_home() || is_archive() ) && get_theme_mod( 'thumbnail_index', true ) ) ||
      ( is_single() && get_theme_mod( 'thumbnail_content', true ) )
    )
  ): ?>
    <a class="post-thumbnail" href="<?php the_permalink() ?>">
      <?php the_post_thumbnail( 'herschel-featured-image' ); ?>
    </a><!-- .post-thumbnail -->
  <?php endif; ?>

  <article class="entry-content">
    <?php
    the_content();

    wp_link_pages( array(
      'before' => '<div class="page-links">' . __( 'Pages:', 'herschel' ),
      'after' => '</div>',
      'link_before' => '<span class="page-number">',
      'link_after' => '</span>',
    ) );
    ?>
  </article><!-- .entry-content -->

  <?php
  if ( is_single() ) {
    get_template_part('template-parts/entry', 'footer');
  } ?>
</section>