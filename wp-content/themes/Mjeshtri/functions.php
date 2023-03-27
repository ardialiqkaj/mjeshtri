<?php

function style_enqueue() {
	wp_enqueue_style( 'style-name', get_template_directory_uri() . './public/css/tailwind.css');
}
add_action( 'wp_enqueue_scripts', 'style_enqueue' );

function mjeshtri_theme_setup() {
	add_theme_support('menus');
	register_nav_menu('primary', 'Primary Header Navigation');
	register_nav_menu('secondary', 'Footer Navigation');
}

add_action('init', 'mjeshtri_theme_setup')
?>