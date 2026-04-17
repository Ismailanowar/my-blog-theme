<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="bg-dark py-3">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="logo">
            <h1 class="h3"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-white text-decoration-none"><?php bloginfo( 'name' ); ?></a></h1>
        </div>
        <nav class="main-navigation">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary-menu',
                'container'      => false,
                'menu_class'     => 'nav d-flex flex-row gap-3 text-white',
		'fallback_cb'    => false,
                'list_item_class' => 'nav-item',
                'link_class'     => 'nav-link text-white',
                
            ) );
            ?>
        </nav>
    </div>
</header>