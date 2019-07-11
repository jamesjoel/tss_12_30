<?php
include("db.php");
$u = $_POST['username'];
$que = "SELECT * FROM user WHERE username='$u'";
$result = mysqli_query($con, $que);
if(mysqli_num_rows($result)!=0)
{
	echo "This Username Already Exists";
}

?>