<?php
include('../dbconnection.php');
include('backpro_admin.php');
$a=$_GET['uid'];
$del_user="DELETE From user where id=$a";
mysqli_query($con, $del_user);
header('location:view_user.php');
?>
