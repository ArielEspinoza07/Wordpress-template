<?php
// add feed links to header
if (function_exists('add_theme_support')) {
	add_theme_support( 'automatic-feed-links' );
} else {
	return;
}

register_nav_menus( array(
  'primary'   => __( 'Top primary menu', 'Test' ),
  'secondary' => __( 'Secondary menu in left sidebar', 'Test' ),
) );

  function test_widgets_init() {
    require get_template_directory() . '/inc/widgets.php';
  	register_widget( 'Test_Widget' );
  	register_sidebar( array(
  		'name' => __( 'sidebar-1', 'Test' ),
  		'id' => 'sidebar-1',
  		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
  		'after_widget' => "</aside>",
  		'before_title' => '<div class="widget-title">',
  		'after_title' => '</div>',
  	) );
  	register_sidebar( array(
  		'name' => __( 'sidebar-1', 'Test' ),
  		'id' => 'sidebar-2',
  		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
  		'after_widget' => "</aside>",
  		'before_title' => '<div class="widget-title">',
  		'after_title' => '</div>',
  	) );

  }
  add_action( 'widgets_init', 'test_widgets_init' );
?>
