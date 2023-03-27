<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_uri()); ?>" type="text/css" />
    <?php wp_head(); ?>
</head>

<body>
    <header class="flex justify-between bg-[#9e2a2b] text-white h-12 items-center">
        <img class="px-4" src="./public/images/mjeshtri-red.png" alt="logo">
        <nav>
            <?php
            wp_nav_menu(array('theme_location'=>'primary'));
            ?>
        </nav>
    </header>