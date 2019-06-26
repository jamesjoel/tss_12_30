<?php
include("dbcon.php");
extract($_POST);
// print_r($_POST);

$query = "UPDATE user SET full_name = '$full_name',address = '$add',gender = '$gender',city = '$city',contact = '$contact' WHERE  id = '$id'";
// echo $query;

mysqli_query($conn , $query);
header("location:account.php");

?>