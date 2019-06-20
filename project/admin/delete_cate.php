<?php
// print_r($_GET);
include("../db.php");
$a = $_GET['cid'];
$query = "DELETE FROM category WHERE id=$a";
mysqli_query($con, $query);


$query = "DELETE FROM product WHERE category_name=$a";
mysqli_query($con, $query);

header("location:view_category.php");

?>