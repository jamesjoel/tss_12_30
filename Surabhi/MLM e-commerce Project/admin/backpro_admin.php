<?php
/*include('../dbconnection.php');*/
if(!isset($_SESSION['is_admin_logged_in'])){
	header("location:index.php");
}
?>