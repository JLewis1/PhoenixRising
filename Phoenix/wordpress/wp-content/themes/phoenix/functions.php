<?php 

register_sidebar(array(
	'name' => 'Right Sidebar',
));

function home_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
}
	add_filter( 'wp_page_menu_args', 'home_page_menu_args' );
	add_theme_support( 'post-thumbnails' ); 