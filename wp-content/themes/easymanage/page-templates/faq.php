<?php
/**
 * Template Name: faq
 */
get_header();
?>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard Builder</title>
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://demos.creative-tim.com/soft-ui-dashboard/assets/css/nucleo-icons.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/soft-ui-dashboard/assets/css/nucleo-svg.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/soft-ui-dashboard/assets/css/soft-ui-dashboard.min.css?v=1.0.2">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <link rel="stylesheet" href="./assets/css/theme.css">
    <link rel="stylesheet" href="./assets/css/loopple/loopple.css">
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

    <section class="py-4 text">
        <div class="container">
            <div class="row my-5">
                <div class="col-md-6 mx-auto text-center">
                    <h2>Your Questions Answered</h2>
                    <p>Everything you need to know about our secure, cloud-based software </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="accordion" id="accordionRental">
                        <div class="accordion-item mb-3">
                            <h5 class="accordion-header" id="headingOne">
                                <button class="accordion-button border-bottom font-weight-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                What is a project management system?
                                    <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                                    <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                                </button>
                            </h5>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionRental" style="">
                                <div class="accordion-body text-dark text-sm opacity-8">
                                A project management system is a software tool that helps teams plan, organize, and track their projects from start to finish.
                                 It provides a centralized platform for team members to collaborate, assign tasks, track progress, and manage resources.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3">
                            <h5 class="accordion-header" id="headingTwo">
                                <button class="accordion-button border-bottom font-weight-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                What are the benefits of using a project management system?
                                    <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                                    <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                                </button>
                            </h5>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionRental" style="">
                                <div class="accordion-body text-dark text-sm opacity-8">
                                The benefits of using a project management system include increased productivity, improved communication and collaboration, better resource management, and more effective project planning and tracking
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3">
                            <h5 class="accordion-header" id="headingThree">
                                <button class="accordion-button border-bottom font-weight-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Is your project management system easy to use?
                                    <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                                    <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                                </button>
                            </h5>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionRental" style="">
                                <div class="accordion-body text-dark text-sm opacity-8">
                                Yes, our project management system is designed to be user-friendly and easy to use, even for those who are not familiar with project management software. 
                                We provide complete documentation and offer support to ensure that our clients can make the most of our system.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3">
                            <h5 class="accordion-header" id="headingFour">
                                <button class="accordion-button border-bottom font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                What type of projects can be managed using your system?
                                    <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                                    <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                                </button>
                            </h5>
                            <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#accordionRental" style="">
                                <div class="accordion-body text-dark text-sm opacity-8">
                                Our project management system can be used to manage a wide range of projects, from simple to complex. It can be used in various industries such as software development, construction, marketing, and more.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3">
                            <h5 class="accordion-header" id="headingFifth">
                                <button class="accordion-button border-bottom font-weight-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifth" aria-expanded="false" aria-controls="collapseFifth">
                                Is my data secure with your system?
                                    <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                                    <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                                </button>
                            </h5>
                            <div id="collapseFifth" class="accordion-collapse collapse" aria-labelledby="headingFifth" data-bs-parent="#accordionRental">
                                <div class="accordion-body text-dark text-sm opacity-8">
                                Yes, we take data security very seriously and use industry-standard encryption and security protocols to ensure that our clients' data is safe and secure.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</body>
<?php
get_footer()
?>