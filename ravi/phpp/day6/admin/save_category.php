<?php
include("../db.php");
// print_r($_POST);
extract($_POST);

mysqli_query($con, "INSERT INTO category (category_name) VALUES ('$category_name')");
header("location:view_category.php");
?>