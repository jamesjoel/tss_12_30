<?php
session_start();
$con=mysqli_connect("localhost","root","password","user");

// print_r($_POST);
// $a=$_POST['user_name'];
// $b=$_POST['password'];

extract($_POST);
 $query="SELECT * FROM tableuser WHERE full_name='$user_name'";

 $result=mysqli_query($con, $query);



if(mysqli_num_rows($result)==1)
{

}
else
{
	$_SESSION['msg']= "This Username And Password is Incorrect !";
	header("location:login.php");
}





?>