<?php

add_action( 'wp_enqueue_scripts', 'wp_enqueue_styles' );
function wp_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'realest', get_template_directory_uri() . '/css/realest.css' );

    
    wp_enqueue_script ( 'main', get_template_directory_uri() . '/js/main.js' );

}

register_nav_menus(array(
    'main-menu' => __('Main Menu', 'therealest'),
    'branding-menu' => __('Branding Menu', 'therealest')
));


function create_posttype() {

    register_post_type( 'product',
    
          array(
              'labels' => array(
                  'name' => __( 'Products' ),
                  'singular_name' => __( 'Product' )
        ),
        'supports' => array( 'title', 'editor', 'custom-fields','thumbnail' ),
              'public' => true,
              'has_archive' => true,
        	  'rewrite' => array('slug' => 'product'),
              'menu_icon'  => 'dashicons-cart'
        
          )
      );
  }
  
add_action( 'init', 'create_posttype' );


 function wpm_add_taxonomies() {

	$labels = array(
		'name'                       => _x( 'Product Categories', 'taxonomy general name'),
		'singular_name'              => _x( 'Product Category', 'taxonomy singular name'),
		'search_items'               => __( 'Search'),
		'popular_items'              => __( 'Popular categories'),
		'all_items'                  => __( 'All categories'),
		'edit_item'                  => __( 'Edit a category'),
		'update_item'                => __( 'Update a category'),
		'add_new_item'               => __( 'Add a new category'),
		'new_item_name'              => __( 'New category name'),
		'add_or_remove_items'        => __( 'Add or remove a category'),
		'choose_from_most_used'      => __( 'Choose from the most used categories'),
		'not_found'                  => __( 'No categories found'),
		'menu_name'                  => __( 'Categories'),
	);

	$args_cat_serie = array(
		'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_in_rest' => true,
        'show_admin_column' => true,
        'query_var' => true,
	);

    register_taxonomy( 'collections', 'product', $args_cat_serie );
}

add_action( 'init', 'wpm_add_taxonomies', 0 ); 


add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );



