<?php

/**
 * Register Custom Navigation Walker
 */
require_once get_template_directory() . '/template-parts/navbar.php';

    function agregar_css_js(){
        wp_enqueue_style('style', get_stylesheet_uri());
        wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
        wp_enqueue_style( 'principal', get_template_directory_uri() . '/css/principal.css');

        wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array ( 'jquery' ), 1.14, true);

        wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array ( 'popper' ), 4.3, true);
    }

    add_action( 'wp_enqueue_scripts', 'agregar_css_js' );

    
    function reforest_setup(){
        // Imagenes destacadas
        if ( function_exists( 'add_theme_support' ) ) {
            add_theme_support( 'post-thumbnails' );
        }

        add_theme_support( 'title-tag' );

    }

    add_action('after_setup_theme', 'reforest_setup');
    

    // Registrar Menús 
    function register_my_menus() {
        register_nav_menus(
            array(
            'menu-principal' => __( 'Menú Superior' )
           )
         );
       }
       add_action( 'init', 'register_my_menus' );
?>