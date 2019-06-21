<?php
// print_r($_GET);
include("../db.php");
$a = $_GET['pid'];
$query = "DELETE FROM product WHERE id=$a";
mysqli_query($con, $query);
header("location:view_product.php");

?>