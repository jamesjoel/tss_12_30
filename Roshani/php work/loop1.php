<?php
$data1=array("name"=>"rohit","age"=>"24");
$data2=array("name"=>"jaya","age"=>"23");
$data3=array("name"=>"gourav","age"=>"20");
$all=array($data1,$data2,$data3);


echo "<table border=1 cellspacing='0' align='center' width='300'>";
foreach ($all as  $x) 
{
	echo "<tr>";
	foreach ($x as $key => $value) 
	{
echo "<td>".$key."</td><td>".$value."</td>";
	}
	echo "</tr>";
}