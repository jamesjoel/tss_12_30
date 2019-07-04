<?php
include("../db.php");

extract($_POST);
mysqli_query($con,"INSERT INTO  product (product_name, product_price, product_category, detail, discount) VALUES ('$product_name', '$product_price', '$product_category', '$detail', '$discount')");
header("location:view_product.php");



?>