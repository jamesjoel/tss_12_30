<?php
include("../dbconnection.php");
extract($_POST);
$query="INSERT INTO product(p_name,p_cata,price,discount,detail) value('$product','$catagry','$price','$discount','$detail')";
/*print_r($query);*/
mysqli_query($con, $query);
header("location:index.php");
?>