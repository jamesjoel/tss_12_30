<?php

include("dbconnection.php");
/*
$s =$_POST['username'];
$p =$_POST['password'];
echo $p."<br />";
$p = sha1($p);
echo $p."<br />";*/
extract($_POST);
echo $password."<br />";
$p= sha1($password);

echo $p."<br />";
$query = "SELECT * FROM user WHERE username='$username'";
 echo "<br />".$query;

$result=mysqli_query($con, $query);

if(mysqli_num_rows($result)==1)
{
		$data=mysqli_fetch_assoc($result);
		print_r($data);
		echo "<br />";
		print_r($data['password']);
		echo "<br />". $p;

	if($data['password']==$p)
			{
			$_SESSION['name']=$data['name'];
			$_SESSION['id']=$data['id'];
			$_SESSION['is_user_logged_in']=true;
			echo "yes";
			header("location:myaccount.php");
			}

else
	{
		$_SESSION['msg']= "This Password is Incorrect !";
		echo "password X";
		/*header("location:login.php");*/
	}
}
else
{
	$_SESSION['msg']= "This Username And Password is Incorrect !";
	echo "all wrong";
	/*header("location:login.php");*/
}


?>