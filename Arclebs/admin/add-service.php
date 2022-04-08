
<?php
  require_once('function/manage.php');
  get_header();
  get_sidebar();

if(!empty($_POST)){
  $title =$_POST['title'];
  $detel = $_POST['detels'];
  $icon = $_POST['icon'];

  //$image = $_FILES['file']; 
  //$imageName='';
 // if($image['name']!=''){
 // $imageName=$name.time().'_'.rand(100000,10000000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);
 // }

  if(!empty($title)){
  if(!empty($detel)){
    if(!empty($icon)){
     
           // DATABASE QUERY     INSERT      START HERE
          // DATABASE QUERY     INSERT      START HERE
          $insert ="INSERT INTO cs_services(service_title, service_detels, service_icon) 
          VALUES ('$title','$detel','$icon')";
          if(mysqli_query($con,$insert)){
          echo "your registration successfuly";
          }else{
             echo " your registration is faild!";
          }
         // DATABASE QUERY     INSERT      END  HERE
         // DATABASE QUERY     INSERT      END  HERE




// icon end here
    }else{
      echo " please inter your email ";
    }
//phone end here 
  }else{
    echo " please inter your phone number ";
  }
// name end here 
}else{
  echo "please inter your name ";
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
                                          <input type="text" class="form-control" id="" name="title">
                                        </div>
                                      </div> 
                                      <!-- phone field start -->
                                     <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">Service Detels :</label>
                                        <div class="col-sm-7">
                                            <textarea  id="" type="text" cols="30" rows="6"  class="form-control" name="detels"></textarea>
                                        </div>
                                      </div> 
                                      <!-- phone field start -->
                                     <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">Service icon:</label>
                                        <div class="col-sm-7">
                                          <input type="text" class="form-control" id="" name="icon">
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