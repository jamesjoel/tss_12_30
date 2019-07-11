<?php
$con = mysqli_connect("localhost", "admin", "admin", "tss_12_30");

$query = "SELECT * FROM student";
$res = mysqli_query($con, $query);

$arr = array();

while($data=mysqli_fetch_assoc($res))
{
	// $arr[]=json_encode($data);
	$arr[]=$data;
}
echo json_encode($arr);
?>