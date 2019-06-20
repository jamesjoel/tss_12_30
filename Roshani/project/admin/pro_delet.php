<?php
include("../dbcon.php");
$a =$_GET['prid'];
/*print_r($_GET);*/
$del_query = " DELETE FROM save_product WHERE id = $a";
mysqli_query($conn,$del_query);
// print_r($del_query);
header("location:view-product.php");

?>