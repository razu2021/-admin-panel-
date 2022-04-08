<?php
require_once('function/manage.php');
$id=$_GET['d'];
$dell="DELETE FROM cs_menu WHERE menu_id='$id'";
$delet=mysqli_query($con,$dell);
if($delet){
    header('Location: all-menu.php');
}else{
    header('Location: all-menu.php');
}

?>
