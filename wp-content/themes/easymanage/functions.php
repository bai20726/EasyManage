<?php
/**
 
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

function wp_custom_styles(){
  wp_register_style('custom', get_template_directory_uri().'/assets/css/custom.css',array(),'1.0.0', 'all');
  wp_enqueue_style('custom');
}

add_action('wp_enqueue_scripts', 'wp_custom_styles');



?>