<?php
$con = mysqli_connect("localhost","root","password","practice1");

session_start();

$u = $_POST['username'];
$p = $_POST['pass'];

$query = "SELECT * FROM pr1 WHERE username='$u'";
$result = mysqli_query($con,$query);
if(mysqli_num_rows($result)==1)
{
	$data = mysqli_fetch_assoc($result);
	   // print_r($data);die;
	  if($data['password']==sha1($p))
	{
		$_SESSION['name']=$data['full_name'];
		$_SESSION['id']=$data['id'];
		$_SESSION['is_user_logged_in']=true;
		header("location:my_account.php");
	}
	else
	{
		$_SESSION['msg']="invalid password";
		header('location:login.php');
	}
   
	
}else
{
	$_SESSION['msg']="invalid username and password";
	header('location:login.php');
}


?>