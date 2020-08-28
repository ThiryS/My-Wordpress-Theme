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

function register_theme_menus() {
    register_nav_menus( 
      array(
        'menu-header-1' => __( 'Emplacement Principal' ),
        'menu-footer-1' => __( 'Emplacement Pied de page 1' ),
      )
    );
  };
  add_action( 'init', 'register_theme_menus' );


// Ajouter la prise en charge des images mises en avant

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 2000, 400, true );
add_image_size( 'products', 800, 600, false );
add_image_size( 'square', 256, 256, false );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

function cptui_register_my_cpts() {

/**
 * Post Type: Recettes.
 */

$labels = [
    "name" => __( "Recettes", "custom-post-type-ui" ),
    "singular_name" => __( "Recettes", "custom-post-type-ui" ),
];

$args = [
    "label" => __( "Recettes", "custom-post-type-ui" ),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => false,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "rewrite" => [ "slug" => "recettes", "with_front" => true ],
    "query_var" => true,
    "supports" => [ "title", "editor", "thumbnail" ],
];

register_post_type( "recettes", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );


function cptui_register_my_cpts_recettes() {

/**
 * Post Type: Recettes.
 */

$labels = [
    "name" => __( "Recettes", "custom-post-type-ui" ),
    "singular_name" => __( "Recettes", "custom-post-type-ui" ),
];

$args = [
    "label" => __( "Recettes", "custom-post-type-ui" ),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => false,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "rewrite" => [ "slug" => "recettes", "with_front" => true ],
    "query_var" => true,
    "supports" => [ "title", "editor", "thumbnail" ],
];

register_post_type( "recettes", $args );
}

add_action( 'init', 'cptui_register_my_cpts_recettes' );

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
    'key' => 'group_5f3e246e83daa',
    'title' => 'Dev Restaurant Recettes',
    'fields' => array(
        array(
            'key' => 'field_5f47809dc14e7',
            'label' => 'Catégories',
            'name' => 'categories',
            'type' => 'taxonomy',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'acfe_permissions' => '',
            'taxonomy' => 'category',
            'field_type' => 'select',
            'allow_null' => 0,
            'add_term' => 1,
            'save_terms' => 0,
            'load_terms' => 0,
            'return_format' => 'object',
            'acfe_bidirectional' => array(
                'acfe_bidirectional_enabled' => '0',
            ),
            'multiple' => 0,
        ),
        array(
            'key' => 'field_5f466f5451eed',
            'label' => 'description',
            'name' => 'description',
            'type' => 'textarea',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'acfe_permissions' => '',
        'default_value' => '',
        'placeholder' => '',
        'maxlength' => '',
        'rows' => '',
        'new_lines' => '',
        'acfe_textarea_code' => 0,
    ),


        array(
            'key' => 'field_5f3fccb2c5d93',
            'label' => 'Ingrédients',
            'name' => 'ingredients',
            'type' => 'textarea',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'acfe_permissions'=>'',
            'default_value' => '',
            'placeholder' => '',
            'maxlength' => '',
            'rows' => '',
            'new_lines' => 'wpautop',
            'acfe_textarea_code'=>0,
        ),
        array(
            'key' => 'field_5f3fcce57d60c',
            'label' => 'Préparations',
            'name' => 'preparations',
            'type' => 'textarea',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'maxlength' => '',
            'rows' => '',
            'new_lines' => 'wpautop',
        ),
        array(
            'key' => 'field_5f3e26e6c20de',
            'label' => 'dev restaurant images',
            'name' => 'dev_restaurant_images',
            'type' => 'image',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'return_format' => 'url',
            'preview_size' => 'medium',
            'library' => 'all',
            'min_width' => '',
            'min_height' => '',
            'min_size' => '',
            'max_width' => '',
            'max_height' => '',
            'max_size' => '',
            'mime_types' => '',
        ),
        array(
            'key' => 'field_5f3e72d9c3faf',
            'label' => 'date et heure',
            'name' => 'date_et_heure',
            'type' => 'date_time_picker',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'display_format' => 'd/m/Y g:i a',
            'return_format' => 'd/m/Y g:i a',
            'first_day' => 1,
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'recettes',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
    'acfe_display_title' => '',
    'acfe_autosync' => array(
        0 => 'php',
    ),
    'acfe_permissions' => '',
    'acfe_form' => 0,
    'acfe_meta' => '',
    'acfe_note' => '',
));

endif;