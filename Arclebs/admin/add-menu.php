




<?php
  require_once('function/manage.php');
  get_header();
  get_sidebar();

  if(!empty($_POST)){
    $menu=$_POST['menu'];
    $mlink=$_POST['link'];
    if(!empty($menu)){
      if(!empty($mlink)){
        // QUERY START  HERE 
        $insert="INSERT INTO cs_menu(menu_name ,menu_link)VALUES('$menu','$mlink')";
        $Q=mysqli_query($con,$insert);
        if($Q){
          echo "Your Menu Included Successfuly ";
        }else{
          echo "faield Included !";
        }
    
      //QUERY END HERE   

      }else{
        echo " added link here @";
      }
      // MENU END HERE 
    }else{
      echo "Please insert your menu name !";
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
                                            <a class="btn btn-sm btn-dark card_top_btn" href="all-menu.php"><i class="fa fa-th"></i> All  Menu Information  </a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <!-- name field  -->
                                <div class="card-body">
                                     <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">Add menu:</label>
                                        <div class="col-sm-7">
                                          <input type="text" class="form-control" id="" name="menu">
                                        </div>
                                      </div> 
                                      <!-- menu name end here  -->
                                      <div class="card-body">
                                     <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">add  menu Link:</label>
                                        <div class="col-sm-7">
                                          <input type="text" class="form-control" id="" name="link">
                                        </div>
                                      </div> 
                                      <!-- menu name end here  -->
                                   
                       
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