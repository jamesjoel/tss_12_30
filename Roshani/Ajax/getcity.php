<?php
$con = mysqli_connect("localhost","root","","project1");

$a = $_POST['stateid'];
echo $a;

$que = "SELECT * FROM city WHERE state_id = $a";

$res = mysqli_query($con, $que);

echo "<option>Select</option>";
while($data=mysqli_fetch_assoc($res))
{
	echo "<option>".$data['city_name']."</option>";
}

?>