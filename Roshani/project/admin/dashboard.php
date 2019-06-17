<?php
include("../dbcon.php");
if(! isset($_SESSION['is_user_log_logged_in']))
{
	header("location:../index.php");
}
include("admin_header.php");
?>

