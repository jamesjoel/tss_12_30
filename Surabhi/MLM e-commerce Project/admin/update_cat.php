<?php
include("../dbconnection.php");
/*$a=$_POST['catagory_name'];
$b=$_POST['cat_id'];*/
extract($_POST);
/*echo $catagory_name."<br/>".$cat_id;
die;*/
$updat_query="UPDATE catagory set catagory_name='$catagory_name' WHERE id=$cat_id";

mysqli_query($con, $updat_query);
header("location:views_cata.php");
?>
