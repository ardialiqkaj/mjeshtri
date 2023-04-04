<?php

function style_enqueue() {
	wp_enqueue_style( 'style-name', get_template_directory_uri() . '/public/css/tailwind.css');
}
add_action( 'wp_enqueue_scripts', 'style_enqueue' );

function mjeshtri_theme_setup() {
	
	$header_info = array(
	'width'         => 40,
	'height'        => 40,
	'default-image' => get_template_directory_uri() . '/images/sunset.jpg',
	);
	add_theme_support('menus');
	register_nav_menu('primary', 'Primary Header Navigation');
	register_nav_menu('secondary', 'Footer Navigation');
	add_theme_support( 'custom-header',$header_info );
}

add_action('init', 'mjeshtri_theme_setup')
?>