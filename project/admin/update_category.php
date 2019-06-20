<?php
include("../db.php");

// print_r($_POST);
// die;
$a = $_POST['category_name'];
$b = $_POST['category_id'];

$query = "UPDATE category SET category_name='$a' WHERE id = $b";
mysqli_query($con, $query);
header("location:view_category.php");


?>