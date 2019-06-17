<?php
include("../db.php");
// print_r($_POST);
extract($_POST);

mysqli_query($con, "INSERT INTO product (product_name, product_price, product_category, detail, discount) VALUES ('$product_name', '$product_price', '$product_category', '$detail', '$discount')");
header("location:add_product.php");
?>