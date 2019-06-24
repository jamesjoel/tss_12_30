<?php
include("../db.php");
$u=$_POST['username'];
$p=$_POST['password'];

echo $query="SELECT * FROM admin WHERE username='$u'";
$result = mysqli_query($con, $query);
if(mysqli_num_rows($result)==1)
{

	$data = mysqli_fetch_assoc($result);
	if($data['password']==$p)
	{
     $_SESSION['id']=$data['id'];
     $_SESSION['is_admin_logged_in']=true;
     header("location:dashbord.php");

	}
	else
	{
		$_SESSION['msg']="The password is incorrect!";
		header("location:index.php");
	}
}
else
{
	$_SESSION['msg']="The username and password is incorrect!";
	header("location:index.php");
}

?>