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

<header class="container-fluid">
  <?php
    get_sidebar();
  ?>
</header>
<section class="container-fluid">
  <div class="row">
    <?php
        if (have_posts()) :
          while (have_posts()) : the_post();
              ?>
              <div class="col-md-6">
                <div class="panel panel-info ">
                  <div class="panel-heading text-center">
                      <h2 class="panel-title"><?php the_title(); ?></h2>
                  </div>
                  <div class="panel-body">
                    <p><?php the_content(); ?></p>
                  </div>
                  <div class="panel-footer">
                    <div class="row">
                      <div class="col-md-4">
                        <?php the_author(); ?>
                      </div>
                      <div class="col-md-4">
                        <?php the_time(); ?>
                      </div>
                      <div class="col-md-4">
                        <?php edit_post_link('edit', '<p>', '</p>'); ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          <?php endwhile;
        endif;
    ?>
  </div>
</section>

<?php get_footer(); ?>
