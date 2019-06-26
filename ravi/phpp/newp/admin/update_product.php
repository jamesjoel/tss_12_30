<?php
include("../db.php");
// print_r($_POST);die;
extract($_POST);
// $a = $_POST['name'];
if($_FILES['product_image']['name']=="")
{
mysqli_query($con, "UPDATE product SET product_name='$product_name', product_price='$product_price', product_category='$product_category', detail='$detail', discount='$discount' WHERE id=$id");
header("location:view_product.php");

}
else
{
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

			mysqli_query($con, "UPDATE product SET product_name='$product_name', product_price='$product_price', product_category='$product_category', detail='$detail', discount='$discount', product_image='$new_name' WHERE id=$id");

			unlink("product_image/".$oldname);


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
	
}





?>