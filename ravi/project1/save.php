<?php

include("db.php");

$a= $_POST['full_name'];
$b=$_POST['username'];
$c= $_POST['pass'];

$c=sha1($c);

$d=$_POST['add'];
$e=$_POST['gender'];
$f=$_POST['city'];
$g=$_POST['contact'];

$query = "INSERT INTO std (full_name,username,password,address,gender,city,contact) VALUES ('$a','$b','$c','$d','$e','$f','$g')";
mysqli_query($con,$query);
header("location:login.php");
?>