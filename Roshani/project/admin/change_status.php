<?php
include("../dbcon.php");
if(!isset($_SESSION["is_user_log_logged_in"]))
{
header("../index.php");
}
$a = $_GET['uid'];
if($_GET['status']==1)
$status =  0;
else
$status = 1;
$query = "UPDATE user SET status = $status WHERE id= $a";
mysqli_query($conn ,$query);
header("location:check-user.php");
?>