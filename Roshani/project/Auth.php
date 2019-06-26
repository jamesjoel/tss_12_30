<?php
// print_r($_POST);
// $conn = mysqli_connect('localhost','root','','roshani');
// session_start();
include("dbcon.php");
$u = $_POST['user_name'];
$p  = $_POST['pass'];
$p = sha1($p);
$query = "SELECT * from user WHERE username= '$u'";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result)==1)
{
	$data = mysqli_fetch_assoc($result);
       if($data['password']==$p)
       {
       	if ($data['status']==1) 
       	{
       	$_SESSION['name']= $data['full_name'];
		$_SESSION['id']= $data['id'];
		$_SESSION['is_user_logged_in']=true;
		header("location:account.php");
       	
       	}
       	else
       	{
       		$_SESSION['msg']= "You Are Disabled now pls contact to admin !";
			header("location:login.php");

       	}
	
		
	}
	else
	{
		$_SESSION['msg']= "This Password is Incorrect !";
		header("location:login.php");
	}
}
else
{
	
	$_SESSION['msg'] = "This Username And Password is Incorrect !";
	header("location:login.php");
}
?>