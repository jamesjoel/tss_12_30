<?php
include('../dbconnection.php');
$pid=$_GET['pid'];
/*echo $pid;
die;*/
$del_cat="DELETE FROM catagory WHERE id=$pid";
mysqli_query($con, $del_cat);
$del="DELETE FROM product WHERE p_cata=$pid";
mysqli_query($con, $del);
header("location:views_cata.php");

?>