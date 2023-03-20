<?php

function style_enqueue()
{
	wp_enqueue_style('style-name', get_template_directory_uri() . '/public/css/tailwind.css');
	wp_enqueue_style('style', get_template_directory_uri() . 'style.css');
	wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', [], null, true);
}
add_action('wp_enqueue_scripts', 'style_enqueue');

?>