<?php

/**
 * Template Name: User-View-User
 * 
 */
get_header(); ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Easy Manage</title>
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://demos.creative-tim.com/soft-ui-dashboard/assets/css/nucleo-icons.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/soft-ui-dashboard/assets/css/nucleo-svg.css">
    <link rel="stylesheet"
        href="https://demos.creative-tim.com/soft-ui-dashboard/assets/css/soft-ui-dashboard.min.css?v=1.0.2">
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img src="/wp-content/themes/easymanage/images/logo.png" alt="logo" height="100px">


    <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

            <li class="nav-item">
                <a class="nav-link" href="/dashboard/"
                    style="text-decoration: none; color: #090D5A; margin-right: 40px;">DASHBOARD</a>
            </li>


        </ul>
        <div class="justify-content-end">
            <a href="/#"><button type="button" style="margin-right: 40px;" role="button" class="btn">LOG
                    OUT</button></a>
        </div>
    </div>
</nav>
<div class="container-fluid">
    <div class="main-content" id="panel">
        <div class="card mb-4">
            <div class="card-body px-0 pt-0 pb-2">
                <form method="GET">
                    <div class="input-group mb-3">
                        <input type="text" name="search" class="form-control"
                            placeholder="Search for users by username">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-danger">Search</button>
                        </div>
                    </div>
                </form>

                <?php
                if (isset($_GET['search']) && !empty($_GET['search'])) {
                    global $wpdb;
                    $users_table = $wpdb->prefix . "users";
                    $search = sanitize_text_field($_GET['search']);
                    $user_query = "SELECT * FROM $users_table WHERE user_login LIKE '%$search%' ORDER BY ID DESC";
                    $users = $wpdb->get_results($user_query);

                    if ($users) {
                        ?>
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr class="light">
                                        <th>Username</th>
                                        <th>Nickname</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
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
                                            </tr>
                                            <?php
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <?php
                    } else {
                        echo "<p>No users found.</p>";
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>