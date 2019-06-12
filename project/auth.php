<?php
include("db.php");

// print_r($_POST);
// $u = $_POST['username'];
// $p = $_POST['password'];
extract($_POST);
$query = "SELECT * FROM user WHERE username='$username'";
$result=mysqli_query($con, $query);

if(mysqli_num_rows($result)==1)
{

}
else
{
	$_SESSION['msg']= "This Username And Password is Incorrect !";
	header("location:login.php");
}


?>