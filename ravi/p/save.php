<?php
include("config.php");
$a = $_POST['full_name'];
$b = $_POST['username'];
$c = $_POST['password'];
$c = sha1($c);
$d = $_POST['contact'];
$e = $_POST['gender'];
$f = $_POST['city'];
$g = $_POST['address'];
$query = "INSERT INTO pr1(full_name,username,password,contact,gender,city,address) VALUES('$a','$b','$c','$d','$e','$f','$g')";
mysqli_query($con,$query);
header("location:login.php");
?>
