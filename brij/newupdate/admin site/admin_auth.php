<?php
session_start();
$con=mysqli_connect("localhost","root","password","user");

// print_r($_POST);
$a=$_POST['username'];
 $b=$_POST['password'];


$p = sha1($b);
 $query="SELECT * FROM admin_table WHERE user_name='$a'";

 $result=mysqli_query($con, $query);
if(mysqli_num_rows($result)==1)
{
	 $data= mysqli_fetch_assoc($result);
  //    print_r($data['password']);
  //    print_r($p);

	 // die();
    if ($data['password']==$p)
	 {

		$_SESSION['name']=$data['user_name'];
		$_SESSION['id']=$data['id'];
		$_SESSION['is_user_logged']=true;
		header("location:admin_index.php");
	}
	else
	{
		$_SESSION['msg']="Password is Incorrect !";
		header("location:admin_login.php");
	}

}
else
{
	$_SESSION['msg']= "This Username And Password is Incorrect !";
	header("location:admin_login.php");
}





?>