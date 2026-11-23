<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<header>
    <h1><?php bloginfo('name'); ?></h1>
    <p><?php bloginfo('description'); ?></p>

    <button
        class="menu-toggle"
        type="button"
        aria-controls="primary-menu"
        aria-expanded="false"
        aria-label="メニューを開く"
    >
        <span class="menu-toggle-icon" aria-hidden="true">☰</span>
    </button>

    <?php
    wp_nav_menu(array(
        'theme_location' => 'primary',
        'container' => 'nav',
        'container_class' => 'main-nav',
        'container_id' => 'primary-menu',
    ));
    ?>
    
</header>
