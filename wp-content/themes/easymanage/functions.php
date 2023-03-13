<?php
/**
 
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

function wp_custom_styles(){
  // wp_register_style('custom', '/wp-content/themes/easymanage/assets/css/custom.css',array(),'1.0.0', 'all');
  wp_enqueue_style('custom');
  wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css' );

}

add_action('wp_enqueue_scripts', 'wp_custom_styles');

// Enqueue the Bootstrap JavaScript file
function my_scripts() {
    wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js', array( 'jquery' ), '4.5.0', true );
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );

// Register the navigation menu location
function register_my_menu() {
  register_nav_menus(
    array(
      'primary' => __( 'Primary Menu', 'theme' ),
    )
  );
}
add_action( 'init', 'register_my_menu' );

// Display the navigation menu
function display_my_menu() {
  echo '<div class="top-header-holder"></div>';
  echo '<nav id="main-nav" class="navbar navbar-expand-lg" aria-labelby="man-nav-label">';
  echo '<h2 id="main-nav-label" class="sr-only"></h2>';
  echo '<div class="container">';
  echo '<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false">';
  echo '<span class ="navbar-toggler-icon"></span>';
  echo '</button>';
  wp_nav_menu( array(
    'theme_location' => 'primary',
    'menu_class' => 'navbar-nav',
    'container_id' => 'navbarNavDropdown',
    'container_class' => 'collapse navbar-collapse',
    'fallback_cb' =>'',
    'menu_id'=>'main-menu'
  ) );
  echo '</div>';
  echo '</nav>';
}

?>