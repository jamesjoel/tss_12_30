<?php
// print_r($_POST);
// die;
$con = mysqli_connect("localhost", "root", "password", "user");
// mysqli_connect("hostname", "username", "password", "dbname")

$a = $_POST['product_name'];
$b = $_POST['product_category'];
$c = $_POST['product_price'];
$d = $_POST['discount'];
$e = $_POST['details'];




 $query = "INSERT INTO table_product (product_name , product_category , product_price , discount, details) VALUES ('$a', '$b', '$c', '$d', '$e')";
// die;

mysqli_query($con, $query);
header("location:admin_index.php");
?>