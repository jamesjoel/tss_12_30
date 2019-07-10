<?php
include("db.php");

$u = $_POST['username'];
$p = $_POST['password'];

$p = sha1($p);


$query = "SELECT * FROM user WHERE username='$u'";
$result=mysqli_query($con, $query);
if(mysqli_num_rows($result)==1)
{
	$data = mysqli_fetch_assoc($result);
	// print_r($data);
	if($data['password']==$p)
	{
		if($data['status']==1)
		{

		$_SESSION['name']=$data['full_name'];
		$_SESSION['id']=$data['id'];
		$_SESSION['is_user_logged_in']=true;
			echo 1;
		}
		else
		{
			$_SESSION['msg']= "You Are Disabled now pls contact our team !";
			echo 2;
		}
	}
	else
	{
		$_SESSION['msg']= "This Password is Incorrect !";
		echo 3;
	}
}
else
{
	$_SESSION['msg']= "This Username And Password is Incorrect !";
	echo 4;
}


?>