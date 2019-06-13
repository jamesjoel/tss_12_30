<?php
include("dbconnection.php");
extract($_POST);
$query = "SELECT * FROM user WHERE user_name='$username'";
print_r($query);

$result=mysqli_query($con, $query);

if(mysqli_num_rows($result)==1)
{
			$_SESSION['msg']= "WELCOME.....";
			header("location:login.php");

}
else
{
	$_SESSION['msg']= "This Username And Password is Incorrect !";
	header("location:login.php");
}


?>