<?php
include('../dbcon.php');
$a = $_GET['cid'];
// print_r($_GET);
echo $query = "DELETE FROM category_nameid WHERE alias_id = '$a'";
// die;
mysqli_query($conn , $query);
$query = "DELETE FROM save_product WHERE product_category = $a";
mysqli_query($conn , $query);


header("location:veiw-category.php");
?>