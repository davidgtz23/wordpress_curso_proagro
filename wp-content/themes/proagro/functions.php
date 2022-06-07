<?php


// Agregar Menú
function proagro_register_menus(){
    register_nav_menu('main-menu', 'Menú principal');
    register_nav_menu('footer-menu', 'Menú Footer');
}
add_action('after_setup_theme', 'proagro_register_menus');


// Agregar estilos
function proagro_enqueue_scripts(){
    wp_enqueue_style('proagro-style', get_stylesheet_uri());
    wp_enqueue_style('proagro-style', get_template_directory_uri().'/assets/css/footer.css', '', '1.0', true);

    // wp_enqueue_script('proagro-script', get_template_directory_uri().'/assets/js/app.js', '', '1.0', true);
}
add_action('wp_enqueue_scripts', 'proagro_enqueue_scripts');


// Setup theme
function proagro_setup_theme(){
    // html5 
    $supports = [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption'
    ];
    add_theme_support('html5', $supports );
    
    // Tag title support
    add_theme_support('title-tag');

    //Thumbnails supoort
    add_theme_support('post-thumbnails');

    //Automatic feed support
    add_theme_support('automatic-feed-links');
}
add_action('after_setup_theme', 'proagro_setup_theme');