<?php
$id = $_GET['pid'];
// print_r($_GET);
// die();
$time = 3600*24;
if (isset($_COOKIE['cart']))
 {
    $oldid = $_COOKIE['cart'];
	$newid = $oldid."#".$id;
	setcookie("cart", $newid, time()+$time);
}
else
{
	setcookie("cart",$id ,time()+$time);
}
header("location:index.php");

?>