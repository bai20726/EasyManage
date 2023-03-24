<?php
/**
 * Template Name: Admin-edit-post
 * 
 */

?>
<?php //get_header(); ?>
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

          
            <li class="nav-item">
                <a class="nav-link collapsed" href="/admin-view-user/">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>List of Users</span>
                </a>

            </li>
            
            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>View Users Location</span>
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
                    <!-- <form
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
                    </form> -->

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
                    // Get the post ID from the query string
                    $post_id = isset($_GET['post_id']) ? intval($_GET['post_id']) : 0;

                    // Query the post by ID
                    $query = new WP_Query(array('post_type' => 'project', 'p' => $post_id));

                    // The Loop
                    if ($query->have_posts()):
                        while ($query->have_posts()):
                            $query->the_post();
                            // Get the post data
                            $post_title = get_the_title();
                            $post_description = get_the_content();
                            $start_date = get_post_meta(get_the_ID(), 'project_start', true);
                            $due_date = get_post_meta(get_the_ID(), 'project_end', true);
                            $developer_id = get_post_meta(get_the_ID(), 'project_user', true);
                        endwhile;
                    endif;

                    // Handle form submission
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        // Update the post data
                        $post_data = array(
                            'ID' => $post_id,
                            'post_title' => $_POST['post_title'],
                            'post_content' => $_POST['post_description'],
                        );
                        wp_update_post($post_data);

                        update_post_meta($post_id, 'project_start', $_POST['start_date']);
                        update_post_meta($post_id, 'project_end', $_POST['due_date']);
                        update_post_meta($post_id, 'project_user', $_POST['developer_id']);

                        // Redirect to the updated post
                        wp_redirect(get_permalink($post_id));
                        exit;
                    }
                    ?>


                    <form action="" method="post">
                        <input type="hidden" name="post_id" value="<?php echo esc_attr($post_id); ?>">
                        <div class="form-group">
                            <label for="post-title">Post Title:</label>
                            <input type="text" class="form-control" id="post-title" name="post_title"
                                value="<?php echo esc_attr($post_title); ?>">
                        </div>
                        <div class="form-group">
                            <label for="post-description">Post Description:</label>
                            <textarea class="form-control" id="post-description" name="post_description" rows="5"
                                required><?php echo esc_html($post_description); ?></textarea>
                        </div>

                        <div class="form-group">
                            <label for="start-date">Start Date:</label>
                            <input type="date" class="form-control" id="start-date" name="start_date"
                                value="<?php echo esc_attr($start_date); ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="due-date">Due Date:</label>
                            <input type="date" class="form-control" id="due-date" name="due_date"
                                value="<?php echo esc_attr($due_date); ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="developer-select">Developer:</label>
                            <select class="form-control" id="developer-select" name="developer_id" required>
                                <option value="">Select Developer</option>
                                <?php
                                // Query the developers
                                $developers_query = new WP_User_Query(array('role' => 'developer'));
                                $developers = $developers_query->get_results();

                                // Loop through the developers and output the options
                                foreach ($developers as $developer) {
                                    $selected = ($developer->ID == $developer_id) ? 'selected' : '';
                                    echo '<option value="' . esc_attr($developer->ID) . '" ' . $selected . '>' . esc_html($developer->display_name) . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-danger">Save Changes</button>
                        <!-- <a href="/admin-view-task/" class="button btn btn-danger" type="submit"> Save Changes</a> -->
                    </form>





                </div>
                <!-- /.container-fluid -->
            </div>

        </div>
        <!-- End of Main Content -->

 
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger" href="/#/">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="/wp-content/themes/easymanage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/wp-content/themes/easymanage/assets/vendor/jquery/jquery.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/wp-content/themes/easymanage/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/wp-content/themes/easymanage/assets/js/sb-admin-2.min.js"></script>