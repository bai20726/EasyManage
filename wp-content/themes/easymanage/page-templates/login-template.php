<?php
/**
 * Template Name: Login_user
 */
get_header();
?>
<?php
if ( isset( $_POST['login_submit'] ) ) {

    // Sanitize and get the user inputs
    $username = sanitize_user( $_POST['username'] );
    $password = sanitize_text_field( $_POST['password'] );

    // Attempt to log the user in
    $creds = array(
        'user_login'    => $username,
        'user_password' => $password,
        'remember'      => true,
    );

    $user = wp_signon( $creds, false );

    if ( is_wp_error( $user ) ) {
        // Handle login error
        echo 'Invalid login credentials.';
    } else {
        // Redirect the user to a specific page after successful login
        wp_redirect( '/dashboard/' );
        exit;
    }

}
?>
<div class="login-wrapper">
    <div class="login-logo">
        <img src="/wp-content/themes/easymanage/images/logo.png" alt="logo">
    </div>
    <div class="text-center mt-4 name">
        Login
    </div>
    <form class="p-3 mt-3" method="post" action="">
        <div class="form-field d-flex align-items-center">
            <span class="far fa-user"></span>
            <input type="text" name="username" id="userName" placeholder="Username">
        </div>
        <div class="form-field d-flex align-items-center">
            <span class="fas fa-key"></span>
            <input type="password" name="password" id="pwd" placeholder="Password">
        </div>
        <input type="hidden" name="login_submit" value="1">
        <button type="submit" class="btn mt-3" id="ajax-login-btn">Login</button>
    </form>
    <div class="text-center fs-6">
        <a href="/forgot-password/">Forget password?</a> or <a href="/register/">Sign up</a>
    </div>
    <a href="/#/" button type="submit" class="btn mt-3" id="btn">LOST? Lets me take you back  </a>
</div>
