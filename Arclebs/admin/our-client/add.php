
<?php
  require_once('function/manage.php');
  get_header();
  get_sidebar();

if(!empty($_POST)){
  $name =$_POST['name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $username = $_POST['username'];
  $role = $_POST['role'];

  $pass =md5( $_POST['pass']);
  $cpass =md5( $_POST['cpass']);
  $image = $_FILES['file']; 
  $imageName='';
  if($image['name']!=''){
  $imageName=$name.time().'_'.rand(100000,10000000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);
  }
  if(!empty($name)){
  if(!empty($phone)){
    if(!empty($email)){
      if(!empty($username)){
        if(!empty($pass)){
          if($pass===$cpass){
           // DATABASE QUERY     INSERT      START HERE
          // DATABASE QUERY     INSERT      START HERE
          $insert ="INSERT INTO cs_user(user_name , user_phone , user_email, user_username,user_password,role_id,user_photo) 
          VALUES ('$name','$phone','$email',' $username', '$pass','$role','$imageName')";
          if(mysqli_query($con,$insert)){
            // uploads images here 
           move_uploaded_file($image['tmp_name'],'uploads/'.$imageName);
          echo "your registration successfuly";
          }else{
             echo " your registration is faild !";
          }
         // DATABASE QUERY     INSERT      END  HERE
         // DATABASE QUERY     INSERT      END  HERE




            // confirm password 
          }else{
            echo " your confirme password is didn't match ";
          }
          // password end here 
        }else{
          echo " please inter your password ";
        }
// user name end here 
      }else{
        echo " please inter your username ";
      }
// email end here
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
                                          <input type="text" class="form-control" id="" name="name">
                                        </div>
                                      </div> 
                                      <!-- phone field start -->
                                     <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">Phone:</label>
                                        <div class="col-sm-7">
                                          <input type="tel" class="form-control" id="" name="phone">
                                        </div>
                                      </div> 
                                      <!-- phone field start -->
                                     <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">Email:</label>
                                        <div class="col-sm-7">
                                          <input type="email" class="form-control" id="" name="email">
                                        </div>
                                      </div> 
                                      <!-- phone field start -->
                                     <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">Username:</label>
                                        <div class="col-sm-7">
                                          <input type="text" class="form-control" id="" name="username">
                                        </div>
                                      </div> 
                                      <!-- phone field start -->
                                     <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">Password:</label>
                                        <div class="col-sm-7">
                                          <input type="password" class="form-control" id="" name="pass">
                                        </div>
                                      </div> 
                                      <!-- phone field start -->
                                     <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">Confirm Password:</label>
                                        <div class="col-sm-7">
                                          <input type="password" class="form-control" id="" name="cpass">
                                        </div>
                                      </div> 

                                      <!-- role  field start -->
                                     <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">Confirm Password:</label>
                                        <div class="col-sm-7">
                                         <select class="form-control" name="role">
                                            <option value="">Select role  </option>
                                            <?php  
                                              $selr="SELECT * FROM cs_role";
                                              $qr=mysqli_query($con,$selr);
                                              while($urole=mysqli_fetch_assoc($qr)){
                                            ?>
                                              <option value="<?= $urole['role_id']; ?>"><?= $urole['role_name']; ?></option>
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
                                    <button type="submit" class="btn btn-sm btn-dark submit_btn">REGISTRATION</button>
                                </div>
                              </div>
                          </form>
                        </div>
                    </div>
 <?php
    get_footer();
   ?>