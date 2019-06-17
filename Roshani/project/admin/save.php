<?php
include("../dbcon.php");
$a = $_POST['p_name'];
$b = $_POST['c_name'];
$c = $_POST['price'];
$d = $_POST['discount'];
$e = $_POST['detail'];
$query = " INSERT INTO save_product(product_name,product_category,price,discount,detail
) VALUES('$a','$b','$c','$d','$e')";
mysqli_query($conn , $query);
header("location:view-product.php");

?>