<?php
include("db.php");
$u = $_POST['username'];
$p = $_POST['pass'];

$query = "SELECT * FROM user WHERE username = '$u'";
$result = mysqli_query($con , $query);

if (mysqli_num_rows($result)==1){

	$data = mysqli_fetch_assoc($result);
	if($data['password']==$p){

		$_SESSION['name']=$data['full_name'];
		$_SESSION['id']=$data['id'];
		$_SESSION['is_user_logged_in']=true;
		header("location:my_account.php");
	}
	else
	{
		$_SESSION['msg']="The password is incorrect!";
		header("location:login.php");
	}
}
else
{
	$_SESSION['msg']="The username and  password is incorrect!";
	header("location:login.php");
}


?>