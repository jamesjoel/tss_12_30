<?PHP
include("../dbcon.php");
extract($_POST);
// print_r($_POST);
// print_r($_FILES);
// die();
if ($_FILES['p_image']['name']=="") 
{
$query = "UPDATE save_product SET product_name = '$p_name' , product_category ='$c_name' ,price='$price',discount='$discount', detail='$detail' WHERE id = '$p_id' ";
mysqli_query($conn, $query);
header("location:view-product.php");

}
else
{
$name = $_FILES['p_image']['name'];
$tmp_name = $_FILES['p_image']['tmp_name'];
$size = $_FILES['p_image']['size'];

$arr = explode ('.',$name);
$ext = end($arr);

if ($ext =="jpg"||$ext =="jpeg"||$ext =="png"||$ext =="gif" )
 {
	if ($size <= (1024*1024) )
	 {
	 	$new_name = time().rand(1000000000,1000000000)."_".".".$ext;
	 	move_uploaded_file($tmp_name,"photos/".$new_name);

			$a = $_POST['p_name'];
			$b = $_POST['c_name'];
			$c = $_POST['price'];
			$d = $_POST['discount'];
			$e = $_POST['detail'];


			$query  = "UPDATE save_product SET product_name = '$p_name' , product_category ='$c_name' ,price='$price',discount='$discount', detail='$detail',p_image='$new_name' WHERE id ='$p_id' ";
			mysqli_query($conn , $query);
			unlink("photos/".$oldname);
			header("location:view-product.php");
	}
	else
	{
		$_SESSION['msg']="This File has extra size";
		header("location:add-product.php");
	}


}
else
{
	$_SESSION['msg']="This File type can not load";
	header("location:add-product.php");
}


}
?>