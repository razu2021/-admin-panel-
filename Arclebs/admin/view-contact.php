<?php
  require_once('function/manage.php');
  get_header();
  get_sidebar();
$id=$_GET['v'];
$sel= "SELECT * FROM cs_contact WHERE con_id='$id'";
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
                            <a class="btn btn-sm btn-dark card_top_btn" href="all-contact.php"><i class="fa fa-th"></i> All User Contact List </a>
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
                                    <td>Name</td>
                                    <td>:</td>
                                    <td><?=$info['con_name'];?></td>
                                </tr>
                              
                                <tr>
                                    <td>User Email</td>
                                    <td>:</td>
                                    <td><?=$info['con_email'];?></td>
                                </tr>
                                <tr>
                                    <td>User Subject</td>
                                    <td>:</td>
                                    <td><?=$info['con_subject'];?></td>
                                </tr>
                                <tr>
                                <tr>
                                    <td>User Massage</td>
                                    <td>:</td>
                                    <td><?=$info['con_massage'];?></td>
                                </tr>
                    
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