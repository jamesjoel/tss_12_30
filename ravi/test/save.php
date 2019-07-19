<?php
include("db.php");
$a = $_POST['fullname'];
$b = $_POST['username'];
$c = $_POST['pass'];
$d = $_POST['gender'];
$e = $_POST['city'];
$f = $_POST['contact'];
$g = $_POST['add'];
//$h = $_POST['img'];



/*$name = $_FILES['img']['name'];
$tmp_name = $_FILES['img']['tmp_name'];
move_uploaded_file($tmp_name ,"image/".$name);*/


$name = $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];
move_uploaded_file($_FILES['image']['tmp_name'], "image/".$_FILES['image']['name']);

$query = "INSERT INTO  user(full_name,username,password,gender,city,address,contact,image) VALUES ('$a','$b','$c','$d','$e','$g','$f','$name')";
mysqli_query($con, $query);
header("location:login.php");

?>