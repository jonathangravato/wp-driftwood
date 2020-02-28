<?php
/**
 * The template for displaying the header
 *
 * @package WordPress
 * @subpackage Driftwood
 * @since 1.0.0
 */
 ?>

<!DOCTYPE html>
<html lang="en">
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php
    // WP Hook for necessarily loading in head meta tags, titles, and scripts used by third-party plugins and custom functions within functions.php.
    wp_head();
    ?>
  </head>
  <body id="page-top" <?php body_class(); ?>>
    
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
      <div class="container">

        <?php 
        
        // If Front Page: Use Site Title and Description as H1 tag.

        if ( is_front_page() ) { echo '</h1>'; } 
        
        ?>
        
          <a class="navbar-brand js-scroll-trigger" href="#page-top">
            
            <?php
            
            // Display Site Title and Tagline as Site Branding IF custom logo does not exist
            
            if ( ! get_theme_mod( 'custom_logo' ) ) {

              if ( get_bloginfo( 'name' ) && get_bloginfo( 'description' ) ) { 
                echo( get_bloginfo( 'name' ) .  ' | <span>' . get_bloginfo( 'description' ) . '</spna>' ); 
              }
              else {
                echo( 'Driftwood Group | <span>Townhomes for sale in Mirimar Beach, FL</spna>' ); 
              }

            }
            else { the_custom_logo(); }

            ?>

          </a>

        <?php 
        
        // If Front Page: Use Site Title and Description as H1 tag.

        if ( is_front_page() ) { echo '</h1>'; } 
        
        ?>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <?php
        wp_nav_menu( array(
            'theme_location'	=> 'primary',
            'depth'				=> 1, // 1 = with dropdowns, 0 = no dropdowns.
            'container'			=> 'div',
            'container_class'	=> 'collapse navbar-collapse',
            'container_id'		=> 'bs-example-navbar-collapse-1',
            'menu_class'		=> 'navbar-nav ml-auto',
            'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
            'walker'			=> new WP_Bootstrap_Navwalker()
        ) );
        ?>
        <!-- <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
          <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#locations">Locations</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#move-in-ready">Move-In Ready</a>
            </li>
            <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact Us</a>
            </li>
          </ul>
        </div> -->
      </div>
    </nav>
