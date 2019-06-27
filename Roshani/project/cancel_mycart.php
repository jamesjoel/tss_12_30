<?php
include("dbcon.php");

$a = $_GET['pid'];
// print_r($_GET);
$arr = explode('#', $_COOKIE['cart']);

$key = array_search($a, $arr);
unset($arr[$key]);


 $x = implode('#',$arr);
 setcookie("cart", $x, time()+(3600*24));

header("location:my_cart.php");







?>