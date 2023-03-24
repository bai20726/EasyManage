<?php

/**
 * Template Name: Dashboard
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
                <a class="nav-link" href="/user-view-user/"
                    style="text-decoration: none; color: #090D5A; margin-right: 40px;">CHECK OTHER MEMBERS</a>
            </li>

            
        </ul>
        <div class="justify-content-end">
            <a href="/#"><button type="button" style="margin-right: 40px;" role="button" class="btn">LOG OUT</button></a>
        </div>
    </div>
</nav>

<body class="g-sidenav-show">
    
    <div class="main-content" id="panel">
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 mt-3 shadow-none border-radius-xl" id="navbarTop">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <h6 class="font-weight-bolder mb-0">Dashboard</h6>
                </nav>

            </div>
        </nav>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-danger">Assigned Task</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">




                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Task Name</th>
                                <th>Description</th>
                                <th>Start Date</th>
                                <th>Due Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <?php
                        if (isset($_POST['accepted'])) {
                            $post_id = $_POST['post-id'];
                            $new_value = $_POST['meta-field'];
                            update_post_meta($post_id, 'project_status_select', $new_value);
                        }
                        
                        if (isset($_POST['completed'])) {
                            $post_id = $_POST['project-id'];
                            $new_value = $_POST['meta-field2'];
                            update_post_meta($post_id, 'project_status_select', $new_value);
                        }
                        
                        $current_user = wp_get_current_user();
                        $user = new WP_User( $current_user ->ID);
                        $project_status = get_post_meta(get_the_ID(), 'project_status_select', true);
                        
                        // The Query
                        $query = new WP_Query(
                            array(
                                'post_type' => 'project',
                                'meta_key' => 'project_user',
                                'meta_value' => get_current_user_id()
                            )
                        );

                        query_posts($query);

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
                                            <?php echo esc_attr($project_end); ?>
                                        </td>
                                        <td> <span <?php if ($project_status == 'Pending') {
                                            echo 'class="badge text-bg-danger"';
                                        } ?>         <?php if ($project_status == 'In Progress') {
                                                      echo 'class="badge text-bg-primary"';
                                                  } ?>         <?php if ($project_status == 'Completed') {
                                                                echo 'class="badge text-bg-success"';
                                                            } ?>>
                                                <?php echo esc_attr($project_status); ?>
                                            </span> </td>
                                            <td>
                                            <div class="mt-2 d-flex gap-1" >
                                                <form action="" method="post">
                                                    <input type="hidden" name="meta-field" value="In Progress">
                                                    <input type="hidden" name="post-id" value="<?php echo get_the_ID(); ?>">                      
                                                    <button class="btn btn-primary"type="submit" name="accepted" <?php if ($project_status == 'In Progress' || $project_status == 'Completed') { echo'disabled'; } ?> >Accept</button>
                                                </form>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mt-2 d-flex gap-1" >
                                                <form action="" method="post">
                                                    <input type="hidden" name="meta-field2" value="Completed">
                                                    <input type="hidden" name="project-id" value="<?php echo get_the_ID(); ?>">
                                                    <button class="btn btn-primary"type="submit" name="completed" <?php if ($project_status == 'Completed') { echo'disabled'; } ?>>Completed</button>
                                                </form>
                                            </div>          
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


                <!-- Bootstrap JS -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



            </div>
        </div>
       