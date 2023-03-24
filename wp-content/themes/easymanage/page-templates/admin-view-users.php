<?php

/**
 * Template Name: Admin-view-user
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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Christine Bai</span>
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

                <?php
                $users = get_users(array('role__in' => array('editor')));

                if (isset($_POST['activate-button']) && isset($_POST['user_id'])) {
                    $user_id = intval($_POST['user_id']);
                    update_user_meta($user_id, 'user_status', 'active');
                    echo '';
                }
                ?>
                <?php
                $users = get_users(array('role__in' => array('editor')));

                if (isset($_POST['deactivate-button']) && isset($_POST['user_id'])) {
                    $user_id = intval($_POST['user_id']);
                    update_user_meta($user_id, 'user_status', 'inactive');
                    echo '';
                }
                ?>

                <?php
                if (isset($_POST['allow-user']) && isset($_POST['user_id'])) {
                    $user_id = intval($_POST['user_id']);
                    update_user_meta($user_id, 'registration_status', 'active');
                    echo '';
                }

                if (isset($_POST['disallow-user']) && isset($_POST['user_id'])) {
                    $user_id = intval($_POST['user_id']);
                    update_user_meta($user_id, 'registration_status', 'inactive');
                    echo '';
                }

                ?>

                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">List of Tasks</h1>
                        <a href="/admin-add-task/" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Add New Task</a>
                        <a href="/admin-view-user/" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Check Members</a>
                    </div>
                    <div class="main-content" id="panel">
                        <div class="card mb-4">
                            <div class="card-body px-0 pt-0 pb-2">
                                <div class="table-responsive p-0">
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr class="light">
                                                <th>Username</th>
                                                <th>Nickname</th>
                                                <th>Email</th>
                                                <th>Status</th>
                                                <th>Join Date</th>
                                                <th>Action</th>
                                                <th>Action-User</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            global $wpdb;
                                            $users_table = $wpdb->prefix . "users";
                                            $user_query = "SELECT * FROM $users_table ORDER BY ID DESC";
                                            $users = $wpdb->get_results($user_query);

                                            $users = get_users(array('role__in' => array('editor', 'developer')));
                                            foreach ($users as $user) {
                                                $user_info = get_userdata($user->ID);
                                                if ($user_info) {
                                                    $username = $user_info->user_login;
                                                    $nickname = $user_info->nickname;
                                                    $email = $user_info->user_email;
                                                    $status = get_user_meta($user->ID, 'user_status', true);
                                                    $join_date = $user_info->user_registered;
                                                    ?>
                                                    <tr id="user-<?php echo $user->ID; ?>">
                                                        <td>
                                                            <?php echo $username; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $nickname; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $email; ?>
                                                        </td>
                                                        <td class="user-status" data-user-status="<?php echo $status; ?>">
                                                            <?php if ($status === 'active' || $status === 1) {
                                                                echo 'Active';
                                                            } else if ($status === 'pending' || $status === 2) {
                                                                echo 'Pending';
                                                            } else {
                                                                echo 'Inactive';
                                                            } ?>
                                                        </td>
                                                        <td>
                                                            <?php echo date('F j, Y', strtotime($join_date)); ?>
                                                        </td>
                                                        <td>
                                                            <div class="flex align-items-center list-user-action">
                                                                <?php if ($status === 'active' || $status === 1) { ?>
                                                                    <form action="" method="post">
                                                                        <input type="hidden" name="user_id"
                                                                            value="<?php echo $user->ID; ?>">
                                                                        <input type="hidden" name="action" value="deactivate_user">
                                                                        <button type="submit" name="deactivate-button"
                                                                            class="btn btn-sm btn-danger">Deactivate</button>
                                                                    </form>
                                                                <?php } else { ?>
                                                                    <form action="" method="post">
                                                                        <input type="hidden" name="user_id"
                                                                            value="<?php echo $user->ID; ?>">
                                                                        <input type="hidden" name="action" value="activate_user">
                                                                        <button type="submit" name="activate-button"
                                                                            class="btn btn-sm btn-success">Activate</button>
                                                                    </form>
                                                                <?php } ?>
                                                            </div>

                                                        </td>
                                                        <td>

                                                        <?php if ($status === 'active' || $status === 1) { ?>
                                                            <form action="" method="post">
                                                                <input type="hidden" name="user_id"
                                                                    value="<?php echo $user->ID; ?>">
                                                                <button type="submit" name="disallow-user"
                                                                    class="btn btn-sm btn-danger">Disallow</button>
                                                            </form>
                                                        <?php } else { ?>
                                                            <form action="" method="post">
                                                                <input type="hidden" name="user_id"
                                                                    value="<?php echo $user->ID; ?>">
                                                                <button type="submit" name="allow-user"
                                                                    class="btn btn-sm btn-success">Allow</button>
                                                            </form>
                                                        <?php } ?>
                                                        </td>



                                                    </tr>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>












                </div>

</body>
<?php
get_footer()
    ?>

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
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