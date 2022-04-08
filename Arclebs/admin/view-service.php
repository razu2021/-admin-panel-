<?php
  require_once('function/manage.php');
  get_header();
  get_sidebar();
$id=$_GET['v'];
$sel= "SELECT * FROM cs_services WHERE service_id='$id'";
$Q=mysqli_query($con,$sel);
$info=mysqli_fetch_assoc($Q);



 
?>


    <div class="row">
        <div class="col-md-12 main_content">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-8">
                            <h4 class="card_header_title"><i class="fa fa-gg-circle"></i> View Data</h4>
                        </div>
                        <div class="col-md-4 text-right">
                            <a class="btn btn-sm btn-dark card_top_btn" href="all-service.php"><i class="fa fa-th"></i> All services  </a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <table class="table table-bordered table-striped table-hover custom_view_table">
                                <tr>
                                    <td>Title </td>
                                    <td>:</td>
                                    <td><?=$info['service_title'];?></td>
                                </tr>
                              
                                <tr>
                                    <td>Service Detels</td>
                                    <td>:</td>
                                    <td><?=$info['service_detels'];?></td>
                                </tr>
                                <tr>
                                    <td>User Subject</td>
                                    <td>:</td>
                                    <td><?=$info['service_icon'];?></td>
                                </tr>
                                <tr>

                            </table>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
                <div class="card-footer text-center">
                    User single information
                </div>
            </div>
        </div>
    </div>



<?php  
  require_once('function/manage.php');
get_footer()
?>