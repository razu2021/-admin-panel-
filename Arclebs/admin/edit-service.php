
<?php
  require_once('function/manage.php');
  get_header();
  get_sidebar();

  $id=$_GET['e'];
  $sel="SELECT* FROM cs_services WHERE service_id='$id'";
  $q=mysqli_query($con,$sel);
  $info=mysqli_fetch_assoc($q);


if(!empty($_POST)){
  $title =$_POST['title'];
  $detel = $_POST['detels'];
  $icon = $_POST['icon'];

$update="UPDATE cs_services SET service_title='$title',service_detels='$detel',service_icon='$icon' WHERE service_id='$id'";
$up=mysqli_query($con,$update);
if($up){
header('Location: all-service.php');
}else{
  header('Location: all-service.php');
}










}
?>
 
                    <div class="row">
                        <div class="col-md-12 main_content">
                            <form action='' method='POST'  enctype="multipart/form-data">
                              <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-md-8">
                                              <h4 class="card_header_title"><i class="fa fa-gg-circle"></i> Form Design</h4>
                                        </div>
                                        <div class="col-md-4 text-right">
                                            <a class="btn btn-sm btn-dark card_top_btn" href="all-service.php"><i class="fa fa-th"></i> service Information </a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <!-- name field  -->
                                <div class="card-body">
                                     <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">Service Title :</label>
                                        <div class="col-sm-7">
                                          <input type="text"    class="form-control" id="" name="title" value="<?= $info['service_title'];?>">
                                        </div>
                                      </div> 
                                      <!-- phone field start -->
                                     <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">Service Detels :</label>
                                        <div class="col-sm-7">
                                            <textarea  id="" type="text"  cols="35" rows="6" class="form-control" name="detels" 
                                            
                                            value="<?= $info['service_id'];?>"><?= $info['service_detels'];?></textarea> 



                                          
                                        </div>
                                      </div> 
                                      <!-- phone field start -->
                                     <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">Service icon:</label>
                                        <div class="col-sm-7">
                                          <input type="text" class="form-control" id="" name="icon"  value="<?= $info['service_icon'];?>">
                                        </div>
                                      </div> 
                                </div>
                                <div class="card-footer text-center">
                                    <button type="submit" class="btn btn-sm btn-dark submit_btn">REGISTRATION</button>
                                </div>
                              </div>
                          </form>
                        </div>
                    </div>

 <?php
    get_footer();
   ?>