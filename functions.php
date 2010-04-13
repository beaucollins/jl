<?php

if ( ! isset( $content_width ) )
	$content_width = 900;

if ( ! function_exists('twentyten_setup')){
  
  function twentyten_setup(){
   // This theme styles the visual editor with editor-style.css to match the theme style.
   add_editor_style();
  
   // This theme uses post thumbnails
   // add_theme_support( 'post-thumbnails' );
  
   // This theme uses wp_nav_menu()
   add_theme_support( 'nav-menus' );
  
   // Add default posts and comments RSS feed links to head
   add_theme_support( 'automatic-feed-links' );
  
   // Make theme available for translation
   // Translations can be filed in the /languages/ directory
   load_theme_textdomain( 'twentyten', TEMPLATEPATH . '/languages' );
  
   $locale = get_locale();
   $locale_file = TEMPLATEPATH . "/languages/$locale.php";
   if ( is_readable( $locale_file ) )
     require_once( $locale_file );
   	
   	// No CSS, just IMG call. The %s is a placeholder for the theme template directory URI.
  	define( 'HEADER_IMAGE', '%s/images/headers/forestfloor.jpg' );
  	
   	// The height and width of your custom header. You can hook into the theme's own filters to change these values.
  	// Add a filter to twentyten_header_image_width and twentyten_header_image_height to change these values.
  	define( 'HEADER_IMAGE_WIDTH', apply_filters( 'twentyten_header_image_width',  940 ) );
  	define( 'HEADER_IMAGE_HEIGHT', apply_filters( 'twentyten_header_image_height',	500 ) );
  	
  	// Add a way for the custom header to be styled in the admin panel that controls
  	// custom headers. See twentyten_admin_header_style(), below.
  	add_custom_image_header( '', 'twentyten_admin_header_style' );
  	
  	
  }
  
}