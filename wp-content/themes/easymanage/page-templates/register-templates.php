<?php
/**
 * Template Name:Register_user
 */
get_header();
?>
<div class="login-wrapper">
    <div class="login-logo">
        <img src="/wp-content/themes/easymanage/images/logo.png" alt="logo">
    </div>
    <div class="text-center mt-4 name">
       Register
    </div>
    <form class="p-3 mt-3">
        <div class="form-field d-flex align-items-center">
            <span class="far fa-user"></span>
            <input type="text" name="firstname" id="firstname" placeholder="First Name">
        </div>
        <div class="form-field d-flex align-items-center">
            <span class="far fa-user"></span>
            <input type="text" name="secondname" id="secondname" placeholder="Second Name">
        </div>
        <div class="form-field d-flex align-items-center">
            <span class="far fa-envelope"></span>
            <input type="email" name="email" id="email" placeholder="Email">
        </div>
        <div class="form-field d-flex align-items-center">
            <span class="fas fa-key"></span>
            <input type="password" name="password" id="pwd" placeholder="Password">
        </div>
        <button class="btn mt-3">Sign Up</button>
    </form>
    <div class="text-center fs-6">
    <a href="/user-login/">Have an account? LOGIN</a>
    </div>
</div>