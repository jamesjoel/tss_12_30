<?php
session_start();
$con=mysqli_connect("localhost","root","password","user");

// print_r($_POST);
$a=$_POST['user_name'];
 $b=$_POST['password'];


$p = sha1($b);
 $query="SELECT * FROM tableuser WHERE full_name='$a'";

 $result=mysqli_query($con, $query);
if(mysqli_num_rows($result)==1)
{
	 $data= mysqli_fetch_assoc($result);
	 
    if ($data['password']==$p)
	 {
		$_SESSION['name']=$data['full_name'];
		$_SESSION['id']=$data['id'];
		$_SESSION['is_user_logged']=true;
		header("location:my_account.php");
	}
	else
	{
		$_SESSION['msg']="Password is Incorrect !";
		header("location:login.php");
	}

}
else
{
	$_SESSION['msg']= "This Username And Password is Incorrect !";
	header("location:login.php");
}





?>