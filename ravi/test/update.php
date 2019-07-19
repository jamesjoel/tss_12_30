<?php
include("db.php");
 
$a = $_POST['full_name'];
$b = $_POST['gender'];
$c = $_POST['city'];
$d = $_POST['contact'];
$e = $_POST['add'];


$id = $_SESSION['id'];
//print_r($_POST); die;
$query= "UPDATE user SET full_name='$a', gender='$b', city='$c', contact='$d', address='$e' WHERE id = $id";
mysqli_query($con ,$query);
header("location:my_profile.php"); 
?>