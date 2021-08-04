<?php
/**
 * Theme Functions 
 * 
 * @package Aquila
 * 
 */
/*
echo '<prev>';
 print_r(AQUILA_DIR_PATH);

wp_die();
*/

 

 if (! defined('AQUILA_DIR_PATH')) {
    define('AQUILA_DIR_PATH', untrailingslashit( get_template_directory() ));
 }


 require_once AQUILA_DIR_PATH . '/inc/helpers/autoloader.php';

 function aquila_get_theme_instance() {
   \AQUILA_THEME\Inc\AQUILA_THEME::get_instance();
 }

 aquila_get_theme_instance();

 function aquila_enquue_scripts() {

    // wp_enqueue_style( 'style-css', get_stylesheet_uri(), [], filemtime( get_template_directory() . '/style.css') , 'all');
    // wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/main.js', [] , filemtime( get_template_directory() . '/assets/main.js') , true ) ;

    


    // Register Scripts
    wp_register_script( 'main-js', get_template_directory_uri() . '/assets/main.js', [] , filemtime( get_template_directory() . '/assets/main.js') , true ) ;
    wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/assets/src/library/js/bootstrap.min.js', ['jquery'] , false , true ) ;


  

    // Enqueue Scripts
    wp_enqueue_script( 'main-js' );
    wp_enqueue_script( 'bootstrap-js' );

 }