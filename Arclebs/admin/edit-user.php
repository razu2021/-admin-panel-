
<?php
  require_once('function/manage.php');
  get_header();
  get_sidebar();

  $id=$_GET['e'];
  $sel="SELECT * FROM cs_user  WHERE user_id='$id'";
  $Q=mysqli_query($con,$sel);
  $data=mysqli_fetch_assoc($Q);

if(!empty($_POST)){
  $name =$_POST['name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $role = $_POST['role'];
  $eid =$_POST['eid'];
  $image = $_FILES['file']; 
  $imageName='';
  if($image['name']!=''){
  $imageName=$name.time().'_'.rand(100000,10000000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);
  }
  if(!empty($name)){
    $update="UPDATE cs_user SET user_name='$name', user_phone='$phone',user_email='$email', role_id='$role' WHERE user_id='$eid'";

    if(mysqli_query($con,$update)){
        if($image['name']!=''){
          $imgupd="UPDATE cs_user SET user_photo='$imageName' WHERE user_id='$eid'";
          mysqli_query($con,$imgupd);
          move_uploaded_file($image['tmp_name'],'uploads/'.$imageName);
        };
        header('Location:view-user.php?v='.$eid);
    }else{
        echo "Opps! Registration failed.";
    }
  }else{
    echo "Please enter your name!";
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
                                            <a class="btn btn-sm btn-dark card_top_btn" href="all-user.php"><i class="fa fa-th"></i> All User Information </a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
      
                                <!-- name field  -->
                                <div class="card-body">
                                     <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">Name:</label>
                                        <div class="col-sm-7">
                                          <input type="text" class="form-control" id="" name="eid" value="<?= $data['user_id'];?>">
                                          <input type="text" class="form-control" id="" name="name" value="<?= $data['user_name'];?>">
                                        </div>
                                      </div> 
                                      <!-- phone field start -->
                                     <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">Phone:</label>
                                        <div class="col-sm-7">
                                          <input type="tel" class="form-control" id="" name="phone" value="<?= $data['user_phone'];?>">
                                        </div>
                                      </div> 
                                      <!-- phone field start -->
                                     <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">Email:</label>
                                        <div class="col-sm-7">
                                          <input type="email" class="form-control" id="" name="email" value="<?= $data['user_email'];?>">
                                        </div>
                                      </div> 
                                      <!-- phone field start -->
                                     <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">Username:</label>
                                        <div class="col-sm-7">
                                          <input type="text" class="form-control" id="" name="username" value="<?= $data['user_username'];?>" disabled>
                                        </div>
                                      </div> 

                                      <div class="form-group row custom_form_group">
                     <label class="col-sm-3 col-form-label">User Role:</label>
                     <div class="col-sm-7">
                       <select class="form-control" name="role">
                           <option value="">select role</option>
                           <?php
                               $selr="SELECT * FROM cs_role ORDER BY role_id ASC";
                               $Qr=mysqli_query($con,$selr);
                               while($urole=mysqli_fetch_assoc($Qr)){
                           ?>
                           <option value="<?= $urole['role_id']; ?>" <?php if($urole['role_id']==$data['role_id']){ echo 'selected';} ?>> <?= $urole['role_name']; ?></option>
                           <?php } ?>
                       </select>
                     </div>
                   </div>

                                      <!-- phone field start -->
                                     <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">Upload File :</label>
                                        <div class="col-sm-7">
                                          <input type="file" class="form-control" id="" name="file">
                                        </div>
                                      </div> 

                       
                                </div>
                                <div class="card-footer text-center">
                                    <button type="submit" class="btn btn-sm btn-dark submit_btn">update</button>
                                </div>
                              </div>
                          </form>
                        </div>
                    </div>
 <?php
    get_footer();
   ?>