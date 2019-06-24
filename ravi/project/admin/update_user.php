<?php
include("../db.php");
// print_r($_POST);
$a = $_POST['full_name'];



// $id = $_SESSION['id'];
 // print_r($_POST);die;

$query = "UPDATE user SET full_name='$a'  WHERE id = $id";
mysqli_query($con, $query);
header("location:users.php");




?>