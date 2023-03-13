<?php
/**
 * Template Name: forgot-password
 */
get_header();
?>
<div class="login-wrapper">
    <div class="login-logo">
        <img src="/wp-content/themes/easymanage/images/logo.png" alt="logo">
    </div>
    <div class="text-center mt-4 name">
        Forgot Password
    </div>
    <form class="p-3 mt-3">
    <div class="form-field d-flex align-items-center">
            <span class="far fa-envelope"></span>
            <input type="email" name="email" id="email" placeholder="Email">
        </div>
        <a href="/#"class="btn mt-3">Submit</a>
    </form>
</div>
