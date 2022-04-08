
<?php
  require_once('function/manage.php');
  get_header();
  get_sidebar();
 
?>
<i class="fa-brands fa-youtube"></i>
                    <div class="row">
                        <div class="col-md-12 main_content">
                            <div class="card">
                              <div class="card-header">
                                  <div class="row">
                                      <div class="col-md-8">
                                            <h4 class="card_header_title"><i class="fa fa-gg-circle"></i> Oue All Services </h4>
                                      </div>
                                      <div class="col-md-4 text-right">
                                          <a class="btn btn-sm btn-dark card_top_btn" href="add-service.php"><i class="fa fa-th"></i> Add post</a>
                                      </div>
                                      <div class="clearfix"></div>
                                  </div>
                              </div>
                              <div class="card-body">
                                  <table class="table table-bordered table-striped table-hover custom_table">
                                    <thead class="thead-dark">
                                      <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Title </th>  
                                        <th scope="col">Detels </th>
                                        <th scope="col">Icon </th>
                                        <th scope="col">Manage</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                      <?php
                                      $sel = "SELECT* FROM cs_services" ;
                                      $q=mysqli_query($con,$sel);
                                      $i=1;
                                      while($data=mysqli_fetch_assoc($q)){
                                        
                                      ?>

                                      <tr>
                                
                                        <td><?=$i++?></td>
                                        <td><?=$data['service_title'];?></td>
                                        <td><?=substr($data['service_detels'],0,10);?></td>
                                        <td><?=$data['service_icon'];?></td> 
                                        <td>
                                            <a href="view-service.php ?v=<?=$data['service_id'];?>"><i class="fa fa-plus-square fa-lg"></i></a>
                                            <a href="edit-service.php ?e=<?=$data['service_id'];?>"><i class="fa fa-pencil-square fa-lg"></i></a>
                                        </td>
                                       
                                      </tr>
                                      <?php } ?>
                                  
                                   
                                    </tbody>
                                  </table>
                              </div>
                              <div class="card-footer text-center">
                                  All User Information 
                              </div>
      
                            </div>
                        </div>
                    </div>


            
<?php
  get_footer();

?>