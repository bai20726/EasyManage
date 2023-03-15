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

// // First, include the wp-config.php file to access the WordPress database
// // require_once('/home/bai/Local Sites/easymanage/app/public/wp-config.php');

// First, check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register_user'])) {

  // Then, get the user input from the registration form
  $username = isset($_POST['username']) ? sanitize_user($_POST['username']) : " ";
  $email = isset($_POST['email']) ? sanitize_user($_POST['email']) : " ";
  $password = isset($_POST['password']) ? $_POST['password'] : '';
  $confirm_password = isset($_POST['confirm_password']) ? $_POST['confirm_password'] : " ";

  // Validate the user input
  if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
      // Handle errors for empty fields
      die('Please fill in all required fields');
  }

  if ($password !== $confirm_password) {
      // Handle password mismatch error
      die('Passwords do not match');
  }

  // Check if email is already registered
  if (email_exists($email)) {
      die('Email already registered');
  }

  //insert the new user into the wp_users table
  $user_id = wp_insert_user(array(
      'user_login' => $username,
      'user_pass' => $password,
      'user_email' => $email,
      'user_registered' => date('Y-m-d H:i:s'),
      'role' => 'editor'
  ));

  if (is_wp_error($user_id)) {
      // Handle insert error
      die($user_id->get_error_message("unable to register" ));
    } else {
      // Set the registration status to "inactive"
      add_user_meta($user_id, 'registration_status', 'inactive');
      
      // User inserted successfully, redirect to success page
      // wp_redirect('/#/');
      // exit;
  }
}
 // Filter user login to check for inactive registration status
add_filter('wp_authenticate_user', 'check_user_registration_status', 10, 2);
function check_user_registration_status($user, $password) {
    $user_id = $user->ID;
    $registration_status = get_user_meta($user_id, 'registration_status', true);
    
    if ($registration_status === 'inactive') {
        // Set error message and prevent login
        $error = new WP_Error('authentication_failed', __('Your account is not active. Please contact support for assistance.'));
        return $error;
    }
    
    // Return the user object if registration status is active
    return $user;
}


function template_redirect() {
  // Check if we're on the "dashboard" page
  if (is_page('dashboard')) {
    // Check if the user is logged in
    if (is_user_logged_in()) {
      // Get the user's role
      $user = wp_get_current_user();
      $user_role = $user->roles[0];

      // Check if the user is an admin
      if ($user_role == 'administrator') {
        // Redirect to the admin page template
        include(get_template_directory() . '/page-templates/admin-dashboard.php');
        exit();
      } else {
        // Redirect to the user page template
        include(get_template_directory() . '/page-templates/user_dashboard.php');
        exit();
      }
    }
  }
}
add_action('template_redirect', 'template_redirect');



?>