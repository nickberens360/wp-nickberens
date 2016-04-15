<?php 
function theme_js()
{
	// Register and link scripts:	
	//wp_register_script( 'modernizer', get_template_directory_uri() . '/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js' );
	wp_register_script( 'site', get_template_directory_uri() . '/js/min/main.min.js', array( 'jquery' ),'', true  );
	//wp_register_script( 'bootstrap', get_template_directory_uri() . '/js/vendor/bootstrap.min.js', array( 'jquery' ),'', true );
	
	//wp_enqueue_script( 'bootstrap' );
//	wp_enqueue_script( 'modernizer' );
  wp_enqueue_script( 'site' );
}
add_action( 'wp_enqueue_scripts', 'theme_js' );

//Register support for custom menu 
add_theme_support( 'menus' );

//Register support for widgets
add_theme_support( 'widgets' );


//Remove admin bar from front end
add_filter('show_admin_bar', '__return_false');



?>