<?php 
/**
 * Template Name: Project List
*/
get_header();?>
<section class="content">
            <div class="container-fluid">
                <div class="col-lg-12">
                    <h2 class="my-5 text-center text-light">
                        
                    </h2>
                    <div class="m-2 card card-outline card-success">
                        <div class="card-header">
                            <div class=" d-flex  gap-5">
                                <h3 class="flex-grow-1 text-center text-primary">List of Projects</h3>
                                <a class=" ms-auto btn btn-primary" href="/admin-dash/"> Add New project</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover table-condensed" id="list">
                                <colgroup>
                                    <col width="5%">
                                    <col width="10%">
                                    <col width="25%">
                                    <col width="15%">
                                    <col width="15%">
                                    <col width="10%">
                                    <col width="10%">
                                    <col width="10%">
                                </colgroup>
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Project</th>
                                        <th>Description</th>
                                        <th>Project Started</th>
                                        <th>Project Due Date</th>
                                        <th>Project Status</th>
                                        <th>Assigned Developer</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                              
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>
                                            <p><b></b></p>
                                        </td>
                                        <td>
                                            <p></b></p>
                                            <p class="truncate"></p>
                                        </td>
                                        <td><b></b></td>
                                        <td><b></td>
                                        <td>
                                            
                                            </span>                   
                                        </td>
                                        <td>
                                            <span class=''></span>                        
                                        </td>
                                        <td>
                                            <div class="mt-2 d-flex gap-1" >
                                                <a href="#"><input class="btn btn-primary"type="button" value="Edit"></a>
                                                <form action="" method="post">
                                                    <input type="hidden" name="meta-field" value="<?php echo get_post_meta(get_the_ID(), 'project_user', true); ?>">
                                                    <input type="hidden" name="post-id" value="<?php echo get_the_ID(); ?>">
                                                    <button class="btn btn-primary"type="submit" name="delete_post">Del</button>
                                                </form>
                                            </div>                       
                                        </td>
                                    </tr>	
                                    
                                </tbody>
                               
                            </table>
                        </div>
                    </div>
                </div>
            </div><!--/. container-fluid -->
        </section>