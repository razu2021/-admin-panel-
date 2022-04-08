
<?php
  require_once('function/manage.php');
  get_header();
  get_sidebar();

  $id=$_GET['e'];
  $sel="SELECT* FROM cs_offers WHERE offerId='$id'";
  $q=mysqli_query($con,$sel);
  $info=mysqli_fetch_assoc($q);

if(!empty($_POST)){
  $title =$_POST['title'];
  $detel = $_POST['detels'];
  $image = $_FILES['pic'];
  $imageName='';
  if($image['name']!=''){
  $imageName=$title.time().'_'.rand(100000,10000000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);
  }

$update="UPDATE cs_offers SET offer_title='$title',offer_detels='$detel' WHERE offerId='$id'";
$up=mysqli_query($con,$update);
if($up){
  $imgup="UPDATE cs_offers SET offer_photo='$imageName' WHERE offerId='$id'";
  $Q=mysqli_query($con,$imgup);
  move_uploaded_file($image['tmp_name'],'uploads/'.$imageName);





header('Location: all-offer.php');
}else{
  header('Location: all-offer.php');
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
                                          <input type="text"    class="form-control" id="" name="title" value="<?= $info['offer_title'];?>">
                                        </div>
                                      </div> 
                                      <!-- phone field start -->
                                     <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">Service Detels :</label>
                                        <div class="col-sm-7">
                                            <textarea  id="" type="text"  cols="35" rows="6" class="form-control" name="detels" 
                                            
                                            value="<?= $info['offerId'];?>"><?= $info['offer_detels'];?></textarea> 



                                          
                                        </div>
                                      </div> 
                                      <!-- phone field start -->
                                     <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">Service icon:</label>
                                        <div class="col-sm-4">
                                          <input type="file" class="form-control" id="" name="pic"  value="<?= $info['offer_photo'];?>">
                                        </div>
                                        <div class="col-sm-3">
                                        <?php
                                           if($info['offer_photo']!=''){ ?>
                                             <img src="uploads/<?=$info['offer_photo'];?> " alt="image" height="120px">  
                                        <?php   }else{ ?>
                                            <img src="images/avatar.png " alt="photo" height="100px" > 
                                        <?php } ?>
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