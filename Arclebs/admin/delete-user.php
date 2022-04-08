<?php
 require_once('function/manage.php');
$id=$_GET['d'];
$del="DELETE FROM `cs_user` WHERE user_id='$id'";

if(mysqli_query($con,$del)){
    header('Location:all-user.php');
}else{
    header('Location:all-user.php');
}



?>









