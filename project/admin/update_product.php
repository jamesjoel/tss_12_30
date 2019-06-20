<?php
include("../db.php");
extract($_POST);
// $a = $_POST['name'];

mysqli_query($con, "UPDATE product SET product_name='$product_name', product_price='$product_price', product_category='$product_category', detail='$detail', discount='$discount' WHERE id=$id");
header("location:view_product.php");

?>