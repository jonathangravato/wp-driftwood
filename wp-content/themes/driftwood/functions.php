<?php

// Enqueue Scripts including Bootstrap 4 css and javascript
add_action( 'wp_enqueue_scripts', function() {
    // CSS
    // Get the style.css timestamp & make it a named constant
    $css_timestamp = filemtime( get_stylesheet_directory().'/style.css' );
    define( 'THEME_VERSION', $css_timestamp );

    // enqueue Bootstrap CSS
    wp_enqueue_style( 'bootstrap4', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css' );
    
    // enqueue parent styles
    wp_enqueue_style('parent-theme', get_template_directory_uri() .'/style.css', array(), THEME_VERSION);
    
    // enqueue Google Fonts
    wp_enqueue_style( 'g-fonts', 'https://fonts.googleapis.com/css?family=Dancing+Script:700%2COpen+Sans:400,600,700&display=swap' );
    
    // enqueue Font Awesome Styles
    wp_enqueue_style('fs-styles', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    

    // Javascript
    wp_enqueue_script( 'boot1','https://code.jquery.com/jquery-3.3.1.slim.min.js', array( 'jquery' ),'',true );
    wp_enqueue_script( 'boot2','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array( 'jquery' ),'',true );
    wp_enqueue_script( 'boot3','https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array( 'jquery' ),'',true );
    wp_enqueue_script( 'fa-scripts','https://use.fontawesome.com/releases/v5.12.1/js/all.js', array( 'jquery' ),'',true );
});

// Register Theme Features
add_action( 'after_setup_theme', function()  {

    // Add theme support for Menus
    add_theme_support( 'menus' );

	// Add theme support for Featured Images
    add_theme_support( 'post-thumbnails', array( '' ) );
    
    // Add theme support for Title Tags
    add_theme_support( 'title-tag' );

    // Add theme support for Custom Logo
    add_theme_support( 'custom-logo' );
    
});

// Template Configuration

add_action( 'wp', function() {

    if ( is_home() ) {

        // Setup Blog Home

    } //end is_home

    if ( is_archive() ) {

        // Archive Mods

    }

    if ( !is_front_page() && is_page() || is_single() ){

        // Not Front Page but Page or Single

    } //end is_page || is_single && !is_front_page

    if ( is_page() ){

        // Page Mods

    } //end is_page

    if ( is_single() ) {

        // Sinlge Post Mods

    } //end is_single

}); //end template configuration


// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'driftwood' ),
) );