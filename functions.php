<?php
add_action( 'init', 'wop_temp_star' );
add_action( 'admin_init', 'wdp_admin_init');

require_once(get_template_directory().'/wopStart.php');

function wop_temp_star()
{
	# code...
	$wpinit = new wopStart();
	$wpinit->init();
}

function mybreborn_apply_script_filters($tag, $handle)
{
	$wpinit = new wopStart();
	$wpinit->defer_scripts($tag, $handle);
}

function mybreborn_apply_style_filters($tag, $handle)
{
	$wpinit = new wopStart();
	$wpinit->defer_styles($tag, $handle);
}

function wdp_admin_init()
{
	# code...
	wp_deregister_style( 'wdp-bootstrap' );
}

?>
