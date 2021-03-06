<?php
/**
 * Template for displaying images
 *
 * @package Herschel
 * @since   1.6.0
 * @version 1.7.0 [Improved attachment navigation]
 */
?>

<?php get_header(); ?>

<div id="main-content-container">

  <main id="site-main" role="main">

    <?php while ( have_posts() ): the_post(); ?>

      <section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <?php get_template_part( 'template-parts/entry', 'header' ); ?>
        
        <article class="entry-content">
          <?php echo wp_get_attachment_image( get_the_ID(), 'large' ); ?>
          <?php the_excerpt(); ?>
        </article><!-- .entry-content -->

      </section>

      <footer class="entry-footer">
        <div class="nav-links image-navigation">
          <div class="nav-previous">
            <?php previous_image_link( false, '<span>' . __( 'Previous Image', 'herschel' ) . '</span>' ); ?>
          </div>
          <div class="nav-next">
            <?php next_image_link( false, '<span>' . __( 'Next Image', 'herschel' ) . '</span>' ); ?>
          </div>
        </div><!-- .nav-links -->
      </footer><!-- .entry-footer -->

      <?php if ( comments_open() || get_comments_number() ) comments_template(); ?>


    <?php endwhile; ?>


  </main><!-- #site-main -->
  
  <?php get_sidebar(); ?>

</div><!-- #main-content-container -->

<?php get_footer(); ?>