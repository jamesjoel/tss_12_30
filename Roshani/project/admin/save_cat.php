<?php
include("../dbcon.php");
// print_r($_POST);
$c = $_POST['category_name'] ;
$query = "INSERT INTO category_nameid (category_name) VALUES ('$c')";
mysqli_query($conn , $query);
header("location:veiw-category.php");

?>