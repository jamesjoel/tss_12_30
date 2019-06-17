<?php
include("../dbcon.php");
// print_r($_POST);
$u = $_POST['username'];
$p = $_POST['password'];
$p = sha1($p);

$query ="SELECT  * FROM user_log WHERE user_name='$u'";
$result =mysqli_query($conn,$query);
if(mysqli_num_rows($result)==1)
{
	$data =mysqli_fetch_assoc($result);

	print_r($data);
	if ($data['user_pass']==$p)
	 {
	 	$_SESSION['id']=$data['id'];
	 	$_SESSION['is_user_log_logged_in']= true;
	 	header("location:dashboard.php");
	}
	else{
		$_SESSION['msg'] ="This Password is Incorrect !";
		header("location:index.php");
	}
}
else
{
	$_SESSION['msg']= "This Username And Password is Incorrect !";
	header("location:index.php");
}



?> 