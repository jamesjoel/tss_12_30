<?php
include("config.php");
$a = $_POST['full_name'];
$c = $_POST['gender'];
$d = $_POST['city'];
$e = $_POST['contact'];
$f = $_POST['address'];
$id = $_SESSION['id'];
$_SESSION['name']=$a;
$query = "UPDATE pr1 SET full_name='$a',gender= '$c', city ='$d', contact = '$e', address = '$f' WHERE id = '$id'";
// print_r($_POST); die;

mysqli_query($con,$query);
header("location:my_profile.php");
?>