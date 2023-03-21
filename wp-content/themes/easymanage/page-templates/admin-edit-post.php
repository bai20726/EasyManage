<?php

/**
 * Template Name: Admin-edit-post
 * 
 */
get_header();
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
                                <span class="mr-2 d-none d-lg-inline text-warning-600 small">Christine Bai</span>
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
                        <h1 class="h3 mb-0 text-gray-800">Edit Task</h1>
                        <a href="/admin-add-task/" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Add New Task</a>
                        <a href="/admin-view-user/" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Check Members</a>
                    </div>

                    <?php
                    ob_start();
                    // Start output buffering
                    
                    // Check if form was submitted
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                        // Get post data
                        $post_id = $_POST['post_id'];
                        $post_title = $_POST['post_title'];
                        $post_description = $_POST['post_description'];
                        $start_date = $_POST['start_date'];
                        $due_date = $_POST['due_date'];
                        $developer_id = $_POST['developer_id'];

                        // Update post
                        $post_data = array(
                            'ID' => $post_id,
                            'post_title' => $post_title,
                            'post_content' => $post_description,
                            'post_date' => date('Y-m-d H:i:s'),
                            'post_status' => 'publish'
                        );
                        $post_id = wp_update_post($post_data);

                        // Update post meta
                        if ($post_id) {
                            update_post_meta($post_id, 'project_start', $start_date);
                            update_post_meta($post_id, 'project_end', $due_date);
                            update_post_meta($post_id, 'project_user', $developer_id);

                            // Redirect to project list page
                            wp_redirect(home_url('/project-list/'));
                            exit();
                        } else {
                            echo "Error updating project";
                        }

                    }

                    // Get user options
                    $user_options = array();
                    $users = get_users();
                    foreach ($users as $user) {
                        $user_options[$user->ID] = $user->display_name;
                    }

                    // Get current post
                    $post_id = get_the_ID();
                    $post_title = get_the_title();
                    $post_description = get_the_content();
                    $project_start = get_post_meta($post_id, 'project_start', true);
                    $project_end = get_post_meta($post_id, 'project_end', true);
                    $project_user_id = get_post_meta($post_id, 'project_user', true);

                    // Render edit form
                    ?>
                    <form action="" method="post">
                        <input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
                        <div class="form-group">
                            <label for="post-title">Post Title:</label>
                            <input type="text" class="form-control" id="post-title" name="post_title"
                                value="<?php echo $post_title; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="post-description">Post Description:</label>
                            <textarea class="form-control" id="post-description" name="post_description" rows="5"
                                required><?php echo $post_description; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="start-date">Start Date:</label>
                            <input type="date" class="form-control" id="start-date" name="start_date"
                                value="<?php echo $project_start; ?>" required>
                        </div class="form-group">
                        <div class="form-group">
                            <label for="due-date">Due Date:</label>
                            <input type="date" class="form-control" id="due-date" name="due_date"
                                value="<?php echo $project_end; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="developer-select">Developer:</label>
                            <select class="form-control" id="developer-select" name="developer_id" required>
                                <option value="">Select Developer</option>
                                <?php foreach ($user_options as $user_id => $display_name): ?>
                                    <option value="<?php echo $user_id; ?>" <?php selected($user_id, $project_user_id); ?>>
                                        <?php echo $display_name; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-danger">Save Changes</button>
                    </form>

                    <button class="btn btn-primary px-5" type="submit">
                        




            </div>
            <!-- /.container-fluid -->
        </div>

    </div>
    <!-- End of Main Content -->


    </div>
    <!-- End of Content Wrapper -->

    </div>

    <?php
    get_footer()
        ?>

    <!-- Bootstrap core JavaScript-->
    <script src="/wp-content/themes/easymanage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/wp-content/themes/easymanage/assets/vendor/jquery/jquery.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/wp-content/themes/easymanage/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/wp-content/themes/easymanage/assets/js/sb-admin-2.min.js"></script>