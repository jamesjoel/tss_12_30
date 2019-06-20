<?php
// print_r($_POST);
include("db.php");
// mysqli_connect("hostname", "username", "password", "dbname")

$a = $_POST['full_name'];
$b = $_POST['username'];
$c = $_POST['pass'];

$c = sha1($c);


$d = $_POST['add'];
$e = $_POST['gender'];
$f = $_POST['contact'];
$g = $_POST['city'];


$query = "INSERT INTO user (full_name, username, password, address, gender, city, contact) VALUES ('$a', '$b', '$c', '$d', '$e', '$g', '$f')";

mysqli_query($con, $query);                      	
header("location:login.php");
?>