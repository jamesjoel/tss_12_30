<?php
include("../dbcon.php");
$a = $_GET['uid'];
// print_r($_GET);
$query = "DELETE FROM user WHERE id = $a";
mysqli_query($conn , $query);
header("location:check-user.php");
?>