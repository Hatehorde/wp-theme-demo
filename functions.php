<?php 

//Lier la feuille de style et les fonts au projet

function simplenews_enqueue_styles(){

    wp_enqueue_style( 'latofont', 'https://fonts.googleapis.com/css2?family=Lato&display=swap' );
    
    wp_enqueue_style( 'merrifont', 'https://fonts.googleapis.com/css2?family=Merriweather+Sans&display=swap' );

    wp_enqueue_style( 'maincss', get_template_directory_uri() . '/styles/main.css', array('latofont','merrifont') );

}

add_action( 'wp_enqueue_scripts', 'simplenews_enqueue_styles' );

// supports de theme

function simplenews_add_theme_support(){

    add_theme_support( 'post-thumbnails' );

    add_theme_support('title-tag');

}

add_action( 'after_setup_theme', 'simplenews_add_theme_support' );

// Déclarer les menus

function simplenews_register_menus(){

    register_nav_menus( array(
        'main-menu' => __('Menu principal')
    ));

}

add_action('after_setup_theme', 'simplenews_register_menus');

// Utiliser les Widgets
function simplenews_widget_init($id){

    register_sidebar( array(

        'name' => 'widget 1',
        'id' => 'widget-1',
        'description' => 'widget affiché en haut du sidebar',
        'before_widget' => '<div class="side-widget">',
        'after_widget' => '</div>'

    ) );

    register_sidebar( array(

        'name' => 'widget 2',
        'id' => 'widget-2',
        'description' => 'widget affiché en bas du sidebar',
        'before_widget' => '<div class="side-widget">',
        'after_widget' => '</div>'

    ) );

}

add_action('widgets_init', 'simplenews_widget_init');