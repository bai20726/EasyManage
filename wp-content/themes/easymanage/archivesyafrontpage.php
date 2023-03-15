<?php
get_header();
?>


<div id="wrapper-navbar">
    <div class="top-header-holder">
        <div class="container">
            <div class="row align-items-centre">
                <div class="col-4">
                    <a href="/" class="logo-holder">
                        <img src="/wp-content/themes/easymanage/images/logo.png" alt="Logo" height="150">
                    </a>
                </div>
                <div class="col-6">
                    <div class="login-holder">
                        <div class="contact-holder d-flex justify-content-center">
                            <a href="#" class="phone">
                                <i class="fa fa-phone"></i>
                                +254789654133</a>
                            <a href="#" class="address">
                                <i class="fa fa-map"></i>Kware street, Nyeri, Kenya</a>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="/user-login/" class="login-btn">LOGIN</a>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="social-media-holder d-flex justify-content-around">
                        <i class="fa fa-facebook"></i>
                        <i class="fa fa-instagram"></i>
                    </div>
                </div>
            </div>


        </div>

    </div>
</div>


<div class="home-banner">
    <di class="container">
        <h1>Efficient Project Management Solution</h1>
</div>
</div>

<div class="home-welcome">
    <div class="title-holder">
        <div class="container">
            <h2><span>Welcome to </span>Easy Manage</h2>
        </div>
    </div>
    <div class="home-welcome-paragraph">
        <div class="container">
            <div class="row">
                <div class="col-lg-1"> </div>
                <div class="col-lg-8">
                    <p class="tagline"> Easy Manage is a management application that helps
                        project managers keep track of all their members and
                        assign projects to their members
                    </p>
                    <p> Assigning tasks and tracking progress is made simple with our system.
                        The project manager can easily create tasks and assign them
                        to the appropriate team members. The system provides a centralized
                        platform for team members to track progress and communicate with
                        each other
                    </p>
                </div>
                <div class="col-lg-3">
                    <div class="button">Read More</div>
                </div>

            </div>
        </div>
    </div>
</div>



<div class="home-subscribe">
    <div class="title-holder">
        <div class="container">
            <h2><span>Sign Up </span>Subscribe to our newsletter</h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-1"> </div>
            <div class="col-lg-11">
                <?php echo do_shortcode('[contact-form-7 id="38" title="Newsletter Subscription"]'); ?>

            </div>
        </div>
    </div>
</div>



<div class="home-social">
    <div class="title-holder">
        <div class="container">
            <h2><span>Socials</span>Follow us on Instagram and Facebook</h2>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-1"> </div>
            <div class="col-lg-11">
                <div class="facebook-holder">
                    <div class="title">
                        <i class="fa fa-facebook"></i>
                        Whats New on Facebook
                    </div>
                    <div class="content-holder">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="image">
                                    <img src="/wp-content/themes/easymanage/images/facebook.jpg" alt="facebook post">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="content">
                                    <div class="meta-data">
                                        <div class="date"><i class="fa fa-calendar"></i> Posted on 3rd Jan 2023</div>
                                        <div class="likes"> <i class="fa fa-thumbs-upe"></i> 20 likes</i></div>
                                    </div>
                                    <p>The system automates many of the repetitive tasks,
                                        freeing up time for the team members to focus on the more
                                        important aspects of the project. With our system, you can
                                        maximize the output of your team,
                                        leading to better results and increased success.</p>
                                    <a href="#" class="button"> Read on Facebook</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>
</div>
<?php get_footer();