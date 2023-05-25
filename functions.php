<?php
require_once(get_template_directory() . '/inc/class-nav-bootstrap.php');

add_action('after_setup_theme', 'my_theme_setup');
function my_theme_setup(){
    add_theme_support( 'post-thumbnails');

    add_theme_support( 'title-tag');

    register_nav_menus( array('primary' => 'Primary') );
}
add_action( 'wp_enqueue_scripts', 'my_theme_scripts');
function my_theme_scripts(){
    wp_enqueue_style( 'my-theme-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');

    wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array('jquery'), '1', true);
    
    wp_enqueue_script('my-theme-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('popper'), '1.0', true);

}