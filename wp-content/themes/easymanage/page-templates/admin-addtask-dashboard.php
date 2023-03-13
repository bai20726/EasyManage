<?php
/**
 * Template Name: Admin-add-task
 */
get_header();
?>
<head>
    
    <style>
        .card-header{
            background-color: whitesmoke;
        }
    </style>
</head>

<header id='main-header'>
    <div class='account'>
        <figure>
            <div class='avatar'>
                <img src="/wp-content/themes/easymanage/images/avatar.png" alt='' class='w-100 h-100'>
                <div class='effect'></div>
            </div>
            <figcaption>
                <h2 class='text-md'>Christine Bai Mboya</h2>
            </figcaption>
        </figure>
    </div>
    <div class='search'>
        <span class='icon flaticon-search color-fff'></span>
        <input type='text' placeholder='Search' name='search' id='search'>
    </div>
</header>
<!-- End Header -->

<!-- Start Main Content -->
<section class='container-fluid no-padding'>
    <div class='row wrapper no-padding'>
        <div class='col-xl-1 col-sm-2'>
            <nav class='menu-left'>
                <ul class='list'>
                    <li>
                        <a href='#' title=''>
                            <span class='text'>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href='/admin-dashboard/' title='' class='active'>
                            <span class='text'>Tasks</span>
                        </a>
                    </li>
                    <li>
                        <a href='#' title=''>
                            <span class='text'>Users</span>
                        </a>
                    </li>
                    <li>
                        <a href='/user-login/' title=''>
                            <span class='text'>Logout</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class='col-xl-11 col-sm-10'>
            <div class='main-content'>
                <header class='header-content'>
                    <div class='action'>
                        <a href='' title=''>New Task </a>
                        <button class='btn btn-primary'>New Board <span class='flaticon-add'></span></button>
                    </div>
                </header>
                <!-- Main content -->
                <section class='content'>
                    <div class='container-fluid'>
                        <div class='col-lg-12'>
                            <div class='m-2 card card-outline card-success'>
                                <div class='card-header'>
                                    <div class='card-tools'>
                                        <h1>New project</h1>
                                    </div>
                                </div>
                                <div class='card-body justify-content-center'>
                                    <div class='form-field1'>
                                        <form method="POST" action="">
                                            <div class='row  justify-content-center'>
                                                <div class='col'>
                                                    <label for='name'>Name</label><br>
                                                    <input type='text' class='form-control' name='name' placeholder=''
                                                        required>
                                                </div>
                                                <div class='col'>
                                                    <label for='name'>Start Date</label>
                                                    <input type='date' class='form-control' name='start' placeholder=''
                                                        required>
                                                </div>
                                            </div>
                                    </div>
                                    <div class='form-field2'>
                                            <div class='row justify-content-center'>
                                                <div class='col'>
                                                <label for='name'>Project Assigned T+o</label><br>
                                                    <input type='text' class='form-control' name='description' placeholder=''
                                                        required>
                                                </div>
                                                <div class='col'>
                                                    <label for='project'>End Date</label>
                                                    <input type='date' class='form-control' name='end' placeholder=''
                                                        required>
                                                </div>
                                                <div class='form-outline mb-4 '>
                                                    <label class='form-label' for='textAreaExample6'>Instructions</label>
                                                    <textarea class='form-control' id='textAreaExample6' name="instruction"
                                                        rows='5'></textarea>
                                                </div>
                                            </div>
</form>
                                    </div>
                                    <div class='btns-section'>
                                        <div class="btn-sec1">
                                        <button type='button' class='btn btn-primary btn-lg' name="submit">Save</button>
                                        </div>
                                        <div class="btn-sec2">
                                        <button type='button' class='btn btn-secondary btn-lg'>Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </section>
                <?php get_footer();
                ?>