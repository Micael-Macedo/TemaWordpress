<?php
add_action('after_setup_theme', 'my_theme_setup');
function my_theme_setup(){
    add_theme_support( 'post-thumbnails');

    add_theme_support( 'title-tag');

    register_nav_menus( array('priamry' => 'Primary') );
}
add_action( 'wp_enqueue_scripts', 'my_theme_scripts');
function my_theme_scripts(){
    wp_enqueue_style( 'my-theme-bootsrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
}