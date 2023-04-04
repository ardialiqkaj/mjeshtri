<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_uri()); ?>" type="text/css" />
    <?php wp_head(); ?>
</head>

<body>
    <header class="flex justify-between bg-[#9e2a2b] text-white h-14 items-center p-4">
        <?php if (get_header_image()) : ?>
            <div id="site-header">
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home" class="flex items-center justify-center">
                    <img class="rounded-full" alt="" src="<?php header_image(); ?>" width="<?php echo absint(get_custom_header()->width); ?>" height="<?php echo absint(get_custom_header()->height); ?>">
                    <p class="px-2 text-2xl font-bold">MJESHTRI</p>
                </a>
            </div>
        <?php endif; ?>
        <nav>
            <?php
            $args = array(
                'theme_location' => 'primary',
                'menu_class' => 'flex'
            );
            wp_nav_menu($args);
            ?>
        </nav>
    </header>