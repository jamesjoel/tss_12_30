<?PHP
include("../dbcon.php");
extract($_POST);
// print_r($_POST);
$query = "UPDATE save_product SET product_name = '$p_name' , product_category ='$c_name' ,price='$price',discount='$discount', detail='$detail' WHERE id = '$p_id' ";
mysqli_query($conn, $query);
header("location:view-product.php");
?>