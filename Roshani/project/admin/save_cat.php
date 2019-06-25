<?php
include("../dbcon.php");
// print_r($_POST);
$c = $_POST['category_name'] ;
	$alias_id = sha1(time());
$query = "INSERT INTO category_nameid (category_name,alias_id) VALUES ('$c','$alias_id')";
mysqli_query($conn , $query);
header("location:veiw-category.php");

?>