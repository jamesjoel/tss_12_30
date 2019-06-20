<?php
// print_r($_GET);
include("../db.php");
$a = $_GET['uid'];
$query = "DELETE FROM user WHERE id=$a";
mysqli_query($con, $query);
header("location:users.php");

?>