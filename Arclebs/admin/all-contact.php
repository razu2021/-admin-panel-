
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
                                            <h4 class="card_header_title"><i class="fa fa-gg-circle"></i> Table All Data</h4>
                                      </div>
                                      <div class="col-md-4 text-right">
                                          <a class="btn btn-sm btn-dark card_top_btn" href="add-user.php"><i class="fa fa-th"></i> Add User</a>
                                      </div>
                                      <div class="clearfix"></div>
                                  </div>
                              </div>
                              <div class="card-body">
                                  <table class="table table-bordered table-striped table-hover custom_table">
                                    <thead class="thead-dark">
                                      <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Name</th>  
                                        <th scope="col">Email</th>
                                        <th scope="col">Subject</th>
                                        <th scope="col">Massage</th>
                                        <th scope="col">Manage</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                      <?php
                                      $sel = "SELECT* FROM cs_contact" ;
                                      $q=mysqli_query($con,$sel);
                                      $i=1;
                                      while($data=mysqli_fetch_assoc($q)){
                                        
                                      ?>

                                      <tr>
                                
                                        <td><?=$i++?></td>
                                        <td><?=$data['con_name'];?></td>
                                        <td><?=$data['con_email'];?></td>
                                        <td><?=substr($data['con_subject'],0,20);?></td>
                                        <td><?=substr($data['con_massage'],0,20);?></td>
                                   
               
                                      
                                        
                                        <td>
                                            <a href="view-contact.php ?v=<?=$data['con_id'];?>"><i class="fa fa-plus-square fa-lg"></i></a>
                                            <a href="delete-con.php ?d=<?=$data['con_id'];?>"><i class="fa fa-trash fa-lg"></i></a>
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