<?php

function style_enqueue() {
	wp_enqueue_style( 'style-name', get_template_directory_uri() . './public/css/tailwind.css');
}
add_action( 'wp_enqueue_scripts', 'style_enqueue' );

?>