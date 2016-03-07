<?php

/**
 *
 */
class wopStart
{
  protected $theme_version;
  protected $suffix;

  public function init()
  {
    # code...
    $this->theme_version = '0.0.1'; //TODO jbrown:jbrown Implement proper theme version detection
    $this->suffix = ( defined('SCRIPT_DEBUG') AND SCRIPT_DEBUG ) ? '' : '.min';
    $this->register_sidebars();
    $this->register_styles();
    $this->register_menus();
    $this->enqueue_styles();
    $this->enqueue_scripts();
  }

  public function register_menus()
  {
      # code...
      register_nav_menus(
        array(
            "primary-menu" => __('Primary Menu','wdp'),
            'footer-menu'  => __( 'Footer Menu','wdp' ),
            'guide-menu'   => __( 'Guide Menu', 'wdp' ),
        )
      );
  }

  public function register_sidebars()
  {
      # code...
      register_sidebar(
        array(
          'name'			=>	'Sidebar', 'wdp',
          'id'			=>	'sidebar-1',
          'description'   =>  '',
          'class'         =>  '',
          'before_widget'	=>	'<div class="blog-box">',
          'after_widget'	=>	'</div>',
          'before_title'	=>	'<h2 class="widget-title">',
          'after_title'	=>	'</h2>',
        )
      );
  }

  public function register_styles()
  {
      # code...
      $suffix = $this->suffix;
      wp_register_style(
        'wdp-bootstrap',
        "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap$suffix.css",
        array(),
        '3.3.6',
        'screen'
      );
  }

  public function enqueue_styles()
  {
      # code...
      wp_enqueue_style('wdp-bootstrap');
  }

  public function register_scripts()
  {
      # code...
      $suffix = $this->suffix;
      wp_register_script(
          'wdp-bootstrap-js',
          "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap$suffix.js",
          array('jquery-core')
      );
  }

  public function enqueue_scripts()
  {
      # code...
      wp_enqueue_script('jquery');
      wp_enqueue_script('wdp-bootstrap-js');
  }

  public function widget_init()
  {
      # code...
  }

  public function defer_styles($tag, $handle)
  {
    # code...
    if ( 'wdp-bootstrap' === $handle )
    {
        $filtered = str_replace( ' href', '  async="async" href', $tag );
        echo $filtered;
    }
  }

  public function defer_scripts($tag, $handle)
  {
    # code...
    if ( 'wdp-bootstrap-js' === $handle )
    {
        $filtered = str_replace( ' src', ' async="async" src', $tag );
        echo $filtered;
    }
  }
}


?>
