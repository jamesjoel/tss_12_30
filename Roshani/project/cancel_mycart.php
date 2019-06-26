<?php
include("dbcon.php");

$a = $_GET['pid'];
// print_r($_GET);
$arr = explode('#', $_COOKIE['cart']);
psrint_r($arr);
/array_splice($arr,0);
print_r($arr);

 // $x = implode('#',$arr);
 // print_r($x);

// header("location:my_cart.php");







?>