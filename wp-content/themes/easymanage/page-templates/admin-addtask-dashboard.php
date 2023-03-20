<?php

/**
 * Template Name: Admin-Add-Task
 * 
 */
get_header();
?>



<?php

if (isset($_POST['cpt_nonce_field']) && wp_verify_nonce($_POST['cpt_nonce_field'], 'cpt_nonce_action')) {

    // Check if the user already has an assigned project
    $developer_id = $_POST['user'];
    $assigned_projects = get_posts(
        array(
            'post_type' => 'project',
            'meta_query' => array(
                [
                    'key' => 'project_user',
                    'value' => $developer_id,
                ],
                [
                    'key' => 'project_status_select',
                    'value' => array('Pending', 'In Progress'),
                    'compare' => 'IN',
                ],
            ),
        ));

    if (!empty($assigned_projects)) {
        // Developer already has an assigned project, don't assign another
        $alert_type = 'danger';
        $alert_message = 'Developer already has an assigned project.';
    } else {
        // create post object with the form values
        // Create a new project post
        $project_title = sanitize_text_field($_POST['title']);
        $project_content = sanitize_text_field($_POST['content']);
        $project_start_date = sanitize_text_field($_POST['start']);
        $project_due_date = sanitize_text_field($_POST['deadline']);
        $project_status = 'Pending';
        $project_user = intval($_POST['user']);

        $new_project = array(
            'post_title' => $project_title,
            'post_content' => $project_content,
            'post_status' => 'publish',
            'post_type' => $_POST['project'],
            'meta_input' => array(
                'project_start' => $project_start_date,
                'project_end' => $project_due_date,
                'project_status_select' => $project_status,
                'project_user' => $project_user,
            ),
        );
        // insert the post into the database
        $project_start = $_POST['start'];

        global $post;
        $post_id = $post->ID;
        $project_id = wp_insert_post($new_project);
        //add_post_meta($cpt_id,'project_start',$project_start);
        if ($project_id) {
            $alert_type = 'success';
            $alert_message = 'Project assigned successfully.';
        } else {
            $alert_type = 'danger';
            $alert_message = 'Error assigning project. Please try again.';
        }
    }

}

?>


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin </title>

    <!-- Custom fonts for this template-->
    <link href="/wp-content/themes/easymanage/assets/css/fontwesome/min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles -->
    <link href="/wp-content/themes/easymanage/assets/css/admin-dashboard.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav  bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard/">

                <img src="/wp-content/themes/easymanage/images/logo.png" alt="logo" height="100px" alt="...">
            </a>


            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/dashboard/">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>




            <!-- Nav Item  -->
            <li class="nav-item">
                <a class="nav-link " href="/admin-view-task/">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>List of Tasks</span>
                </a>

            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="/admin-view-user/">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>List of Users</span>
                </a>

            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>View Users</span>
                </a>

            </li>



        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-danger" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-warning" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>





                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Christine Bai</span>
                                <img class="img-profile rounded-circle"
                                    src="/wp-content/themes/easymanage/images/profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Add New Task</h1>
                                                <a href="/admin-view-user/" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Check Members</a>
                    </div>



                    <div class="container my-5">
                        <div class="row">
                            <div class="col">

                                <form class="form card shadow p-4" action="" method="post">
                                    <?php if (isset($alert_message)): ?>
                                        <div class="alert alert-<?php echo $alert_type; ?> mb-3" role="alert">
                                            <?php echo $alert_message; ?>
                                        </div>
                                    <?php endif; ?>
                                    <h3 class="text-center text-danger">Add Project</h3>
                                    <div class="form-group mt-2">
                                        <label for="title">
                                            <?php _e('Enter the Project Title:', 'mytextdomain'); ?>
                                        </label>
                                        <input type="text" class="form-control" id="title" name="title"
                                            placeholder="Project Title" required>
                                    </div>
                                    <div class="form-group mt-2">
                                        <label for="content">
                                            <?php _e('Enter the Project Description:', 'mytextdomain'); ?>
                                        </label>
                                        <textarea rows="3" class="form-control" id="content" name="content"
                                            placeholder="Enter Project Description here" required></textarea>
                                    </div>
                                    <div class="form-group mt-2">
                                        <label for="content">Start Date:</label>
                                        <input type="date" class="form-control" id="start_date" name="start"
                                            placeholder="Enter Project Start Date here" required>
                                    </div>
                                    <div class="form-group mt-2">
                                        <label for="content">Due Date:</label>
                                        <input type="date" class="form-control" id="due_date" name="deadline"
                                            placeholder="Enter Project Deadline here" required>
                                    </div>
                                    <div class="form-group mt-2">
                                        <input type="hidden" class="form-control" id="status" name="status"
                                            value="Pending" placeholder="Project Status">
                                    </div>
                                    <?php
                                    // Get all users with the "User" role
                                    $users = get_users(
                                        array(
                                            'role' => 'developer',
                                            'orderby' => 'user_nicename',
                                        )
                                    );
                                    $user_options = array();
                                    foreach ($users as $user) {
                                        $user_options[$user->ID] = $user->display_name;
                                    }
                                    ?>
                                    <div class="form-group mt-2">
                                        <select class="form-control" id="user" name="user">
                                            <option value="">Select Developer</option>
                                            <?php foreach ($user_options as $user_id => $user_name): ?>
                                                <option value="<?php echo $user_id; ?>"><?php echo $user_name; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group mt-2 text-center">
                                        <button class="btn btn-primary px-5" type="submit">
                                            <?php _e('Submit', 'mytextdomain') ?>
                                        </button>
                                        <input type='hidden' name='project' id='project' value='project' />
                                        <!-- <input class="btn btn-primary px-5" type="button" value="Submit" name="projectsubmit"> -->
                                    </div>
                                    <?php wp_nonce_field('cpt_nonce_action', 'cpt_nonce_field'); ?>
                                </form>
                            </div>
                        </div>
                    </div>




                </div>
            </div> <!-- End of Main Content -->


        </div>
        <!-- End of Content Wrapper -->

    </div>