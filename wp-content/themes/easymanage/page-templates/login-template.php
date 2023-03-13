<?php
/**
 * Template Name: Login_user
 */
get_header();
?>
<div class="login-wrapper">
    <div class="login-logo">
        <img src="/wp-content/themes/easymanage/images/logo.png" alt="logo">
    </div>
    <div class="text-center mt-4 name">
        Login
    </div>
    <form class="p-3 mt-3">
        <div class="form-field d-flex align-items-center">
            <span class="far fa-user"></span>
            <input type="text" name="userName" id="userName" placeholder="Username">
        </div>
        <div class="form-field d-flex align-items-center">
            <span class="fas fa-key"></span>
            <input type="password" name="password" id="pwd" placeholder="Password">
        </div>
        <a href="/admin-dash/"class="btn mt-3">Login</a>
    </form>
    <div class="text-center fs-6">
        <a href="/forgot-password/">Forget password?</a> or <a href="/register/">Sign up</a>
    </div>
</div>

<!-- <style>


.login-wrapper {
    max-width: 350px;
    min-height: 500px;
    margin: 80px auto;
    padding: 40px 30px 30px 30px;
    background-color: #223A47;
    border-radius: 15px;
    box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #fff;
}

.login-logo {
    width: 80px;
    margin: auto;
}

.login-logo img {
    width: 100%;
    height: 80px;
    object-fit: cover;
    border-radius: 50%;
    box-shadow: 0px 0px 3px #5f5f5f,
        0px 0px 0px 5px #ecf0f3,
        8px 8px 15px #a7aaa7,
        -8px -8px 15px #fff;
}

.login-wrapper .name {
    font-weight: 600;
    font-size: 1.4rem;
    letter-spacing: 1.3px;
    padding-left: 10px;
    color: #555;
}

.login-wrapper .form-field input {
    width: 100%;
    display: block;
    border: none;
    outline: none;
    background: none;
    font-size: 1.2rem;
    color: #666;
    padding: 10px 15px 10px 10px;
    /* border: 1px solid red; */
}

.login-wrapper .form-field {
    padding-left: 10px;
    margin-bottom: 20px;
    border-radius: 20px;
    box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff;
}

.login-wrapper .form-field .fas {
    color: #555;
}

.login-wrapper .btn {
    box-shadow: none;
    width: 100%;
    height: 40px;
    background-color: #03A9F4;
    color: #fff;
    border-radius: 25px;
    box-shadow: 3px 3px 3px #b1b1b1,
        -3px -3px 3px #fff;
    letter-spacing: 1.3px;
}

.login-wrapper .btn:hover {
    background-color: #039BE5;
}

.login-wrapper a {
    text-decoration: none;
    font-size: 0.8rem;
    color: #03A9F4;
}

.login-wrapper a:hover {
    color: #039BE5;
}

@media(max-width: 380px) {
    .login-wrapper {
        margin: 30px 20px;
        padding: 40px 15px 15px 15px;
    }
}

    </style> -->