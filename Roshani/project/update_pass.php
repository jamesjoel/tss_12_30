<?php
include("dbcon.php");
$p = $_POST['current_password'];
$n = $_POST['new_password'];
$c = $_POST['c_new_password'];
$a = $_SESSION['id'];
$query = "SELECT * FROM user WHERE id = $a";

$result = mysqli_query($conn,$query);
$data = mysqli_fetch_assoc($result);
if ($data['password']==sha1($p))
 {
 	if ($n==$c)
 	 {
 	 	$n =sha1($n);

 	 $query = "UPDATE user SET password = '$n'WHERE id = $a";
 	 	 mysqli_query($conn, $query);

 	 	$_SESSION['success_msg']="Your Password successfuly Changed";
 	 	// echo "yes";
		header("location:my_profile.php");	
 	}
 	else
 	{
 		$_SESSION['msg']="New Password and Confirm New Password is not matched !";
		header("location:change_password.php");	

 	}

}

else
{
	$_SESSION['msg']="Current Password is not correct !";
	header("location:change_password.php");
}



?>