<?php

/**
 * Template Name: Admin-view-task
 * 
 */
get_header();
?>
<?php

if (isset($_POST['update-meta'])) {
    $post_id = $_POST['post-id'];
    $new_value = $_POST['meta-field'];
    update_post_meta($post_id, 'meta_key', $new_value);
  }

if (isset($_POST['delete_post'])) {
    $post_id = $_POST['post-id'];
    wp_delete_post($post_id);
}
$current_user = wp_get_current_user();
$user = new WP_User( $current_user ->ID);

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
                        <h1 class="h3 mb-0 text-gray-800">List of Tasks</h1>
                        <a href="/admin-add-task/" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Add New Task</a>
                        <a href="/admin-view-user/" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Check Members</a>
                                <a href="admin-view-completed" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i>Completed Tasks</a>
                    </div>


                    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-danger">Task List</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Task Title</th>
                        <th>Task Description</th>
                        <th>Start Date</th>
                        <th>Due Date</th>
                        <th>Assigned To</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php
                $query = new WP_Query( array(
                    'post_type' => 'project',
                    'meta_query' => array(
                        'relation' => 'OR',
                        array(
                            'key' => 'project_status_select',
                            'value' => 'In Progress',
                            'compare' => '='
                        ),
                        array(
                            'key' => 'project_status_select',
                            'value' => 'Pending',
                            'compare' => '='
                        )
                    )
                ) );
                
                // The Loop
                if ($query->have_posts()):
                    while ($query->have_posts()):
                        $query->the_post();
                        // your post content ( title, excerpt, thumb....)
                
                        $project_start = get_post_meta(get_the_ID(), 'project_start', true);
                        $project_end = get_post_meta(get_the_ID(), 'project_end', true);
                        $project_status = get_post_meta(get_the_ID(), 'project_status_select', true);

                        $project_user_id = get_post_meta(get_the_ID(), 'project_user', true);

                        $project_user = '';
                        if ($project_user_id) {
                            $user_info = get_userdata($project_user_id);
                            if ($user_info) {
                                $project_user = $user_info->display_name;
                            }
                        }

                        ?>
                        <tbody>
                            
                            <tr>
                                <td>
                                    <?php the_title(); ?>
                                </td>
                                <td>
                                    <?php the_content(); ?>
                                    <p class="truncate"></p>
                                </td>
                                <td>
                                    <?php echo esc_attr($project_start); ?>
                                </td>
                                <td>
                                    <?php echo esc_attr($project_end); ?></b>
                                </td>
                                </td>
                                <td>
                                    <?php echo esc_attr($project_user); ?>
                                </td>
                                <td>
                                            <span <?php if ($project_status == 'Pending') { echo'class="badge text-bg-danger"'; } ?> <?php if ($project_status == 'In Progress') { echo'class="badge text-bg-primary"'; } ?> <?php if ($project_status == 'Completed') { echo'class="badge text-bg-success"'; } ?> >
                                                <?php echo esc_attr( $project_status ) ;?>
                                            </span>                   
                                        </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                            id="dropdownMenuButton" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">Action</button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <?php if ($project_status != 'completed'): ?>
                                                <a class="dropdown-item" href="/admin-edit-task/?post_id=<?php echo get_the_ID(); ?>&post_url=<?php echo urlencode(get_permalink()); ?>">Edit</a>

                                                
                                                <a class="dropdown-item" href="<?php echo get_delete_post_link(get_the_ID()); ?>">Delete</a>
                                            <?php endif; ?>
                                            <?php if ($project_status == 'completed'): ?>
                                                <a class="dropdown-item" href="#">Reassign</a>
<?php endif; ?>

                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <?php
                                        endwhile;
                                        //Reset Query
                                        wp_reset_query();
                                    endif;
                                    ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>



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
      <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
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

     