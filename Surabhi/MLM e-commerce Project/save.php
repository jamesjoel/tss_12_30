<?php
include("dbconnection.php");
print_r($_POST);
$a = $_POST['full_name'];
$b = $_POST['username'];
$c = $_POST['pass'];

$c=sha1($c);

$d = $_POST['add'];
$e = $_POST['gender'];
$f = $_POST['contact'];
$g = $_POST['city'];
$query="INSERT INTO user(name, username, password,address,gender,contact,city)value('$a','$b','$c','$d','$e','$f','$g')";
/*print_r($query);
*/mysqli_query($con, $query);

header("location:index.php");
?>