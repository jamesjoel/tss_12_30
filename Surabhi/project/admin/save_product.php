<?php
include("../db.php");
// print_r($_POST);

$name = $_FILES['product_image']['name'];
$tmp_name = $_FILES['product_image']['tmp_name'];
$size = $_FILES['product_image']['size'];


$arr = explode(".",$name);
$ext = end($arr);
	

if($ext == "jpg" || $ext == "jpeg" || $ext == "png" || $ext == "gif")
{
	if($size <= (1024*1024))
	{

		$new_name = time().rand(100000, 1000000).".".$ext;

		move_uploaded_file($tmp_name, "product_image/".$new_name);

		extract($_POST);

		mysqli_query($con, "INSERT INTO product (product_name, product_price, product_category, detail, discount, product_image) VALUES ('$product_name', '$product_price', '$product_category', '$detail', '$discount', '$new_name')");
		header("location:view_product.php");

	}
	else
	{
		$_SESSION['msg']="This File is too large";
		header("location:add_product.php");
	}


}
else
{
	$_SESSION['msg']="This File type not allowd";
	header("location:add_product.php");
}







?>