<?php
  require_once('function/manage.php');
  get_header();
  get_sidebar();
$id=$_GET['v'];
$sel= "SELECT * FROM cs_client WHERE client_id='$id'";
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
                            <a class="btn btn-sm btn-dark card_top_btn" href="all-client.php"><i class="fa fa-th"></i> All User Contact List </a>
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
                                    <td>Client Name : </td>
                                    <td>:</td>
                                    <td><?=$info['client_name'];?></td>
                                </tr>
                              
                                <tr>
                                    <td>Client Title :</td>
                                    <td>:</td>
                                    <td><?=$info['client_title'];?></td>
                                </tr>
                                <tr>
                                    <td>Client Designation : </td>
                                    <td>:</td>
                                    <td><?=$info['client_dig'];?></td>
                                </tr>
                                <tr>
                                <tr>
                                    <td>Client Photo </td>
                                    <td>:</td>
                                    <td>
                                    <?php
                                        if($info['client_photo']!=''){?>
                                          <img src="uploads/<?=$info['client_photo'];?>" alt="image" height="100px">
                                        <?php }else{ ?>
                                          <img src="images/avatar.png" alt="image" height="100px">
                                        <?php } ?>
                                    </td>
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