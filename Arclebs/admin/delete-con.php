<?php
 require_once('function/manage.php');
$id=$_GET['d'];
$del="DELETE FROM `cs_contact` WHERE con_id='$id'";

if(mysqli_query($con,$del)){
    header('Location:all-contact.php');
}else{
    header('Location:all-contact.php');
}

?>









