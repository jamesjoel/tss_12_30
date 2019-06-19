<?php
include("db.php");

$u=$_POST['username'];
$p=$_POST['password'];

$p=sha1($p);

$query= "SELECT * FROM std WHERE username='$u'";
$result = mysqli_query($con,$query);
if(mysqli_num_rows($result)==1)
{

	$data = mysqli_fetch_assoc($result);
	print_r($data); 
	if($data['password']==$p)
	{
      $_SESSION['name']=$data['full_name'];
      $_SESSION['id']=$data['id'];
      $_SESSION['is_user_logged_in']==true;
      header("location:my_account.php");

	}
	else
	{
		$_SESSION['msg']="this password is incorrect !";
		header("location:login.php");

	}
}
else
{
  $_SESSION['msg']="this username and password is incorrect!";
  header("location:login.php");

}


?>