<?php

function my_original_theme_scripts() {
    wp_enqueue_style('my-original-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'my_original_theme_scripts');

// ナビゲーションメニューの登録
function my_original_theme_setup() {
    register_nav_menus(array(
        'primary' => 'メインメニュー',
    ));

    // アイキャッチ画像を有効化
    add_theme_support('post-thumbnails');
    
}

add_action('after_setup_theme', 'my_original_theme_setup');