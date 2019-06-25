<?php
// print_r($_GET);
$a = $_GET['id'];

$arr = explode("#", $_COOKIE['cart']);
print_r($arr);
$key = array_search($a, $arr);
unset($arr[$key]);

$x = implode("#", $arr);

setcookie("cart", $x, time()+(3600*24));
header("location:my_cart.php");



?>