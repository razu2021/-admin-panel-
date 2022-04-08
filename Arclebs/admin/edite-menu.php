
<?php
  require_once('function/manage.php');
  get_header();
  get_sidebar();

  $id=$_GET['e'];
  $sel="SELECT * FROM cs_menu WHERE menu_id='$id'";
  $q=mysqli_query($con,$sel);
  $data=mysqli_fetch_assoc($q);


  if(!empty($_POST)){
    $menu=$_POST['menu'];
    $mlink=$_POST['link'];
    $insert="UPDATE cs_menu SET menu_name='$menu', menu_link='$mlink' WHERE menu_id='$id'";
    $Q=mysqli_query($con,$insert);
    if($Q){
      header('Location: all-menu.php');
    }else{
      echo "Menu update faield !";
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
                    <input type="text" class="form-control" id="" name="menu" value="<?= $data['menu_name'];?>">
                  </div>
                </div> 
                <!-- m link start here  -->
          <div class="card-body">
                <div class="form-group row custom_form_group">
                  <label class="col-sm-3 col-form-label">Add menu Link :</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="" name="link" value="<?= $data['menu_link'];?>" >
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