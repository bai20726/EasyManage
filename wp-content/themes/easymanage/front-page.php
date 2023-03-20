<?php
/**
 * Template Name: landing
 */
get_header();
?>

<head>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Easy Manage</title>
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://demos.creative-tim.com/soft-ui-dashboard/assets/css/nucleo-icons.css">
        <link rel="stylesheet" href="https://demos.creative-tim.com/soft-ui-dashboard/assets/css/nucleo-svg.css">
        <link rel="stylesheet"
            href="https://demos.creative-tim.com/soft-ui-dashboard/assets/css/soft-ui-dashboard.min.css?v=1.0.2">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
        <link rel="stylesheet" href="./assets/css/theme.css">
    </head>

<body class="g-sidenav-show">
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
        <div class="container">
        <a class="navbar-brand" href="/#/" rel="tooltip" title="easy manage"
                data-placement="bottom">
                EASY MANAGE
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
                data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon mt-2">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </span>
            </button>
            <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0 ms-lg-12 ps-lg-5" id="navigation">
                <ul class="navbar-nav navbar-nav-hover w-100">
                    <li class="nav-item mx-2">
                        <a href= "/blogs/" 
                         class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center">
                            BLOGS
                        </a>
                       
                        
                    </li>
                    <li class="nav-item dropdown dropdown-hover mx-2">
                    <a href= "/faq/" 
                         class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center">
                            FAQ
                        </a>
                    </li>
                    <li class="nav-item dropdown dropdown-hover mx-2">
                        <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"
                            id="dropdownMenuDocs" data-bs-toggle="dropdown" aria-expanded="false">
                           CONTACT US
                        </a>
                    </li>
                    <li class="nav-item ms-lg-auto my-auto ms-3 ms-lg-0 mt-2 mt-lg-0">
                        <a href="/user-login/"
                            class="btn btn-sm  btn-warning  bg-gradient-warning mb-0 me-1 mt-2 mt-md-0">LOGIN</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="">
        <div class="page-header min-vh-100">
            <div class="oblique position-absolute top-0 h-100 d-md-block d-none">
                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6"
                    style="background-image:url(/wp-content/themes/easymanage/images/newsletter.jpg)"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7 d-flex justify-content-center flex-column">
                        <h1 class="text-gradient bg-gradient-warning">Effortlessly manage </h1>
                        <h1 class="mb-4">Your Projects with our management system </h1>
                        <p class="lead pe-5 me-5">Our project management system simplifies the task of managing
                            projects by providing a user-friendly interface for project managers to create, assign,
                            update, and delete projects.
                            The system ensures that all team members are on the same page, and deadlines are met on
                            time.</p>
                        <div class="buttons">
                             <a href="/register/" button type="button" class="btn mt-4 btn-warning  bg-gradient-warning">Get Started</button>                        
                                </a>
                                <a href="/blogs/" button type="button" class="btn text-bg-gradient-dark shadow-none mt-4">Read more</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="text-gradient text-dark mb-0 mt-2">Read More About Us</h3>
                    <p>Assigning tasks and tracking progress is made simple with our system. The project manager can
                        easily create tasks and assign
                        them to the appropriate team members. The system provides a centralized platform for team
                        members to track progress and communicate with each other. With our system, you can be assured
                        that everyone is working towards a common goal.</p>
                    <a href="/blogs/" class="text-warning icon-move-right">More about us
                        <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-5 ps-lg-0 ps-0">
                    <div class="p-3 info-horizontal">
                        <div class="icon icon-shape rounded-circle bg-default shadow text-center">
                            <i class="fas fa-ship opacity-10 text-warning" aria-hidden="true"></i>
                        </div>
                        <div class="description ps-3">
                            <p class="mb-0">Simplify Project Management <br> Our project management system simplifies
                                the task
                                of managing projects by providing a user-friendly interface for project managers to
                                create, assign, update,
                                and delete projects. </p>
                        </div>
                    </div>
                </div>

                <div class="p-3 info-horizontal">
                    <div class="icon icon-shape rounded-circle bg-default shadow text-center">
                        <i class="fas fa-handshake opacity-10 text-warning" aria-hidden="true"></i>
                    </div>
                    <div class="description ps-3">
                        <p class="mb-0">Assign Tasks and Track Progress with Ease <br>
                            The system provides a centralized platform for team members to track progress and
                            communicate with each other.
                            With our system, you can be assured that everyone is working towards a common goal.</p>
                    </div>

                </div>
                <div class="p-3 info-horizontal">
                    <div class="icon icon-shape rounded-circle bg-default shadow text-center">
                        <i class="fas fa-hourglass opacity-10 text-warning" aria-hidden="true"></i>
                    </div>
                    <div class="description ps-3">
                        <p class="mb-0">Streamline Workflows and Increase Productivity<br> With our system,
                            you can maximize the output of your team, leading to better results and increased
                            success.</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    

   
    <section class="py-5 bg-gray-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <div class="card card-blog card-plain">
                        <div class="position-relative">
                            <a class="d-block blur-shadow-image">
                                <img src="/wp-content/themes/easymanage/images/job.jpg" alt="img-blur-shadow"
                                    class="img-fluid shadow border-radius-lg">
                            </a>
                        </div>
                        <div class="card-body px-0 pt-4">
                            <p class="text-gradient text-warning text-gradient font-weight-bold text-sm text-uppercase">
                                System Streamlines Workflows</p>
                            <a href="/register/">
                                <h4>
                                    Assign Tasks and Track Progress with Ease
                                </h4>
                            </a>
                            <p>
                                Assigning tasks and tracking progress is made simple with our system. The project
                                manager can easily create tasks and assign them to the appropriate team members. The
                                system provides a centralized platform for team members to track progress and
                                communicate with each other.
                                With our system, you can be assured that everyone is working towards a common goal.
                            </p>
                            <a href="/blogs/" button type="button" class="btn bg-warning text-gradient mt-3">Read more</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 mx-auto text-center mt-5">
                    <div class="card card-blog card-plain">
                        <div class="position-relative">
                            <a class="d-block blur-shadow-image">
                                <img src="/wp-content/themes/easymanage/images/people.jpg" alt="img-blur-shadow"
                                    class="img-fluid shadow border-radius-lg">
                            </a>
                        </div>
                        <div class="card-body px-0 pt-4">
                            <p class="text-gradient text-warning text-gradient font-weight-bold text-sm text-uppercase">
                                Increase Productivity</p>
                            <a href="/register/">
                                <h4>
                                    Simplify Project Management
                                </h4>
                            </a>
                            <p>
                                Our project management system simplifies the task of managing projects by providing a
                                user-friendly interface for project managers to create, assign, update, and delete
                                projects.
                                The system ensures that all team members are on the same page, and deadlines are met on
                                time.
                            </p>
                            <a href="blogs" button type="button" class="btn bg-warning text-gradient mt-3">Read more</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto text-center pb-5">
                    <div class="icon icon-shape text-center mb-3">
                        <svg class="text-info" width="40px" height="40px" viewBox="0 0 46 42" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>customer-support</title>
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                    <g transform="translate(1716.000000, 291.000000)">
                                        <g transform="translate(1.000000, 0.000000)">
                                            <path class="color-background"
                                                d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z"
                                                opacity="0.59858631"></path>
                                            <path class="color-foreground"
                                                d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z">
                                            </path>
                                            <path class="color-foreground"
                                                d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z">
                                            </path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <h3>What Clients Say</h3>
                    <p class="lead">We’re constantly trying to express ourselves and actualize our dreams. If you have
                        the opportunity to play </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-plain text-center">
                        <a href="javascript:;">
                            <img class="avatar avatar-xl shadow" src="/wp-content/themes/easymanage/images/anne.jpg">
                        </a>

                        <div class="card-body">
                            <h4 class="card-title">Anne Mboya</h4>
                            <h6 class="category text-info text-gradient">Project Manager - Davinski Company</h6>
                            <p class="card-description">
                                "This project management system has made my life so much easier and my projects so much
                                more organized."
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-plain text-center">
                        <a href="javascript:;">
                            <img class="avatar avatar-xl shadow" src="/wp-content/themes/easymanage/images/agnes.jpeg">
                        </a>

                        <div class="card-body">
                            <h4 class="card-title">Agnes Mboya</h4>
                            <h6 class="category text-info text-gradient">HR Specialist - LeoRero Enterprise</h6>
                            <p class="card-description">
                                "
                                I highly recommend it to anyone who needs a little extra help managing their projects."
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-plain text-center">
                        <a href="javascript:;">
                            <img class="avatar avatar-xl shadow"
                                src="/wp-content/themes/easymanage/images/christine.jpg">
                        </a>

                        <div class="card-body">
                            <h4 class="card-title">Bai Mboya</h4>
                            <h6 class="category text-info text-gradient">Technology Officer- Mimosa Freelancing </h6>
                            <p class="card-description">
                                "Everyone who deals with projects should definetly get this software, life saver"
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto text-center">
                    <div class="ms-3 mb-md-5">
                        <h3>Contact us</h3>
                        <p>
                            For further questions contact using our contact form.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card card-plain">
                        <form id="contact-form" method="post" autocomplete="off">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Full Name</label>
                                        <div class="input-group mb-4">
                                            <input class="form-control" placeholder="Full Name" name="fullname" aria-label="Full Name"
                                                type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6 ps-md-2">
                                        <label>Email</label>
                                        <div class="input-group">
                                            <input type="email" class="form-control" placeholder="Your email please" >
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-4 mt-md-0 mt-4">
                                    <label>What can we help you?</label>
                                    <textarea name="message" class="form-control" id="message" rows="6"
                                        placeholder="Describe your problem in at least 250 characters"></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-warning  bg-gradient-warning mt-4" name="submitbtn">Send
                                            Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    
</body>
<?php
    get_footer()
    ?>