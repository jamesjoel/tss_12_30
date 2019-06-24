<?php
include("../db.php");
// print_r($_GET);
$a = $_GET['uid'];
if($_GET['status']==1)
	$status = 0;
else
	$status = 1;
$query = "UPDATE user SET status = $status  WHERE id = $a";
mysqli_query($con, $query);
header("location:users.php");

?>