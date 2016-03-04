<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage TesThemeWorpress
 * @since TesThemeWorpress 1.0
 */
  get_header();
?>
  <div class="site-content">
    <?php
      get_sidebar( 'content' );
      get_sidebar();
    ?>
    <section>
      <div class="row">
        <?php
            if (have_posts()) :
              while (have_posts()) : the_post();
                  ?>
                  <div class="col-md-6">
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_content(); ?></p>
                    <div class="col-md-4">
                      <?php edit_post_link(); ?>
                    </div>
                    <div class="col-md-4">
                      <?php wp_link_pages(); ?>
                    </div>
                  </div>
              <?php endwhile;
            endif;
        ?>
      </div>
    </section>
  </div>

<?php get_footer(); ?>
