<?php
$con = mysqli_connect('localhost','root','','project1');
// echo "yes";
// die;
$query = "SELECT * FROM student";
$result = mysqli_query($con , $query);
$arr = array();
while($data=mysqli_fetch_assoc($result))
{
	$arr[]=$data;
	
}
echo json_encode($arr);


?>