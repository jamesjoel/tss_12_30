<?php
// print_r($_POST);
// die;
$con = mysqli_connect("localhost", "root", "password", "user");
// mysqli_connect("hostname", "username", "password", "dbname")

$a = $_POST['product_name'];
$b = $_POST['product_Category'];
$c = $_POST['product_price'];
$d = $_POST['product_discount'];
$e = $_POST['product_Details'];




 $query = "INSERT INTO table_product (product_name , product_category , product_price , discount, details) VALUES ('$a', '$b', '$c', '$d', '$e')";
// die;

mysqli_query($con, $query);
header("location:index.php");
?>