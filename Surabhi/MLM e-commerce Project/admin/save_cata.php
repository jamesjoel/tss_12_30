<?php
include("../dbconnection.php");
// print_r($_POST);
extract($_POST);
$result_cata="INSERT INTO catagory (category_name) VALUES ('$category_name')";
print_r($result_cata);
mysqli_query($con, $result_cata);
header("location:views_cata.php");
?>