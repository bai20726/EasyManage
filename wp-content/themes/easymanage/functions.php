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
    wp_enqueue_script( 'bootstrap-js',
     'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js',
     array( 'jquery' ), '4.5.0', true );
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
//  // Filter user login to check for inactive registration status
// add_filter('wp_authenticate_user', 'check_user_registration_status', 10, 2);
// function check_user_registration_status($user, $password) {
//     $user_id = $user->ID;
//     $registration_status = get_user_meta($user_id, 'registration_status', true);
    
//     if ($registration_status === 'inactive') {
//         // Set error message and prevent login
//         $error = new WP_Error('authentication_failed', __('Your account is not active. Please contact support for assistance.'));
//         return $error;
//     }
    
//     // Return the user object if registration status is active
//     return $user;
// }

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

// Add custom user meta field for user status
add_action('user_register', 'add_user_status', 10, 1);
function add_user_status($user_id) {
    add_user_meta($user_id, 'user_status', 'inactive');
}

// Change user status when admin activates user account
add_action('admin_init', 'activate_user_account');
function activate_user_account() {
    if (isset($_GET['action']) && $_GET['action'] == 'activate_user' && isset($_GET['user_id'])) {
        $user_id = intval($_GET['user_id']);
        update_user_meta($user_id, 'user_status', 'active');
    }
}

// Register user
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register_user'])) {
    $username = isset($_POST['username']) ? sanitize_user($_POST['username']) : '';
    $email = isset($_POST['email']) ? sanitize_user($_POST['email']) : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $confirm_password = isset($_POST['confirm_password']) ? $_POST['confirm_password'] : '';

    if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
        // Handle errors for empty fields
        die('Please fill in all required fields');
    }

    if ($password !== $confirm_password) {
        // Handle password mismatch error
        die('Passwords do not match');
    }

    if (email_exists($email)) {
        die('Email already registered');
    }

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
        
        // Redirect to success page
        wp_redirect('');
        exit;
    }
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

//LIMITING LOGIN ATTEMPTS

function check_attempted_login($user, $username, $password){
  if(get_transient('attempted_login')){
      $datas = get_transient('attempted_login');

      if ($datas['tried'] >= 3){
          $until = get_option('_transient_timeout_' . 'attempted_login');
          $time = time_to_go($until);

          return new WP_Error('too_many_tried', sprintf(__('<strong>ERROR</strong>: You have reached authentication limit, please try after %1$s'), $time));
      }
  }

  return $user;
}

add_filter('authenticate', 'check_attempted_login', 30, 3);

function login_failed($username){
  if (get_transient('attempted_login')){
      $datas = get_transient('attempted_login');
      $datas['tried']++;

      if ($datas['tried'] <= 3)
          set_transient('attempted_login', $datas, 300);
      }else{
          $datas = array(
              'tried' => 1
          );
          set_transient ('attempted_login', $datas, 300);
      }
        
  
}

add_action('wp_login_failed', 'login_failed', 10, 1);

function time_to_go($timestamp){
  //converting mysql timestamp to php time
  $periods = array(
      "second",
      "minute",
      "hour",
      "day",
      "week",
      "month",
      "year"
  );

  $lengths = array(
      "60",
      "60",
      "24",
      "7",
      "4.35",
      "12"
  );

  $current_timestamp = time();
  $difference = abs($current_timestamp - $timestamp);

  for ($i = 0; $difference >= $lengths[$i] && $i < count($lengths)-1; $i ++ ){
      $difference /= $lengths[$i];
  }

  //adding the countdown if the remaining is less than a minute
  $difference = round($difference);

  if(isset($difference)){
      if($difference != 1){
          $periods[$i] .= "s";
          $output = "$difference $periods[$i]";
          return $output;
      }
  }
}




//add action('rest_api_init", 'custom_rest_api')
function register_rest_api_routes(){
register_rest_route('projects/v1', 'api', array('callback' => 'get_Projects'));
}
function get_projects(){
  $args = array(
    'post_type' =>'project',
    'posts_per_page' =>5,
  'status' =>'publish'  
);
$new_query = new WP_Query($args);
$projects = $new_query ->posts;
return $projects;
}
add_action('rest_api_init','register_rest_api_routes');

// Creating custom namespaces
function register_rest_api_contact(){
  register_rest_route('contact/v1', 'api', array('callback'=>'get_contact'));
  function get_contact() {
    $args = array(
      'post_type' => 'contact',
      'posts_per_page' => 5,
      'status' => 'publish',
    );
    
    $new_query = new WP_Query($args);
    $contact = $new_query->posts;
    
    return $contact;
  }
}

  