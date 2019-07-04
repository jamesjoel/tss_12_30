<?php 
include("../dbconnection.php");
$a=$_GET['uid'];
/*echo $a;
die();*/
/*print_r($_GET);die;*/
if($_GET['status']==1)
	$status = 0;
else 
	$status = 1;

$up_status="UPDATE user SET status=$status WHERE id=$a";
mysqli_query($con, $up_status);
header("location:view_user.php");
?>
