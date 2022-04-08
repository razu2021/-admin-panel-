<?php

$dbname='arclabs';
$dbuser='root';
$dbpassword='';
$dbhost='localhost';

$con=mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
if(!$con){
    echo "Your Database Conection faild !";
}
  

?>