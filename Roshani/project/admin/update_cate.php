<?php
include("../dbcon.php");
// print_r($_POST);
// die;
$a =  $_POST['category_name'];
$b =  $_POST['c_id'];
$query = "UPDATE category_nameid SET category_name ='$a' WHERE id = '$b'";
/*print_r($query);*/
mysqli_query($conn , $query);
header("location:veiw-category.php");



?>