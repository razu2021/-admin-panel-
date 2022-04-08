<?php
 require_once('function/manage.php');
$id=$_GET['d'];
$del="DELETE FROM `cs_client` WHERE client_id='$id'";

if(mysqli_query($con,$del)){
    header('Location:all-client.php');
}else{
    header('Location:all-client.php');
}

?>









