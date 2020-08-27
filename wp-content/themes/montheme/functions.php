<?php 
function load_stylesheets()
{
    wp_register_style('font', get_template_directory_uri() . '/css/fonts/pe-icon-7-stroke.css', array(), 1,'all');
    wp_enqueue_style('font');

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), 1,'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('gaia', get_template_directory_uri() . '/css/gaia.css', array(), 1,'all');
    wp_enqueue_style('gaia');

    wp_register_style('custom', get_template_directory_uri() . '/custom.css', array(), 1,'all');
    wp_enqueue_style('custom');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');
        
function addjs()
{
    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), 1, 1, 1);
    wp_enqueue_script('jquery');

    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), 1, 1, 1);
    wp_enqueue_script('bootstrap');

    wp_register_script('modernizr', get_template_directory_uri() . '/js/modernizr.js', array(), 1, 1, 1);
    wp_enqueue_script('modernizr');

    wp_register_script('gaia', get_template_directory_uri() . '/js/gaia.js', array(), 1, 1, 1);
    wp_enqueue_script('gaia');

    wp_register_script('custom', get_template_directory_uri() . '/custom.js', array(), 1, 1, 1);
    wp_enqueue_script('custom');

}

add_action('wp_enqueue_scripts', 'addjs');


// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

