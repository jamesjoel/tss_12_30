<?php include("../dbconnection.php");

$name = $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];
$size = $_FILES['image']['size'];


$arr = explode(".",$name);
$ext = end($arr);
if($ext == "jpg" || $ext == "jpeg" || $ext == "png" || $ext == "gif")
{ 
	if($size <= (1024*1024))
	{

		$new_name = time().rand(100000, 1000000).".".$ext;

		move_uploaded_file($tmp_name, "image/".$new_name);

		extract($_POST);
			
		$query="INSERT INTO product(p_name, p_cata, p_image, price, descount, detail) value('$product','$catagry','$new_name','$price','$discount','$detail')";

		mysqli_query($con, $query);
		echo "submitted";

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
