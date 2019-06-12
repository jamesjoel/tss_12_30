<?php
// print_r($_POST);
$con = mysqli_connect("localhost", "root", "password", "user");
// mysqli_connect("hostname", "username", "password", "dbname")

$a = $_POST['product name'];
$b = $_POST['product category'];
$c = $_POST['product price'];
$d = $_POST['discount'];
$e = $_POST['product details'];




$query = "INSERT INTO user (productname , product category , product price , discout , product details) VALUES ('$a', '$b', '$c', '$d' '$e')";

mysqli_query($con, $query);
// header("location:index.php");
?>