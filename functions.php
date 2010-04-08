<?php

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
  }
  
}