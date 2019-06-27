<?php
include("db.php");
$a = $_POST['current_pass'];
$b = $_POST['new_pass'];
$c = $_POST['c_new_pass'];

$id = $_SESSION['id'];
$data = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM user WHERE id = $id"));

if($data['password'] == sha1($a))
{
	if($b == $c)
	{
		$b = sha1($b);
		mysqli_query($con,"UPDATE user SET password = '$b' WHERE id = $id");
		$_SESSION['success_msg']="Your Password successfuly Changed";
		header("location:my_profile.php");
	}
	else
	{
		$_SESSION['msg']="New Password and Confirm New Password is not matched !";
		header("location:change_password.php");		
	}
}
else
{
	$_SESSION['msg']="Current Password is not correct !";
	header("location:change_password.php");
}




?>