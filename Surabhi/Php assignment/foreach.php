<!DOCTYPE html>
<html>
<head>
	<title>Day 1_Php</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
</head>
<body>
	<div class="row">
		<div class="col-md-6 offset-3">

<?php
$data1=array("name"=>"Rohit", "age"=>25);
$data2=array("name"=>"Jaya", "age"=>26);
$data3=array("name"=>"Gaurav", "age"=>20);
$all=array($data1,$data2,$data3);
/*print_r($all);*/
	$a=1;
	echo "<table class='"."table table-bordered text-center text-capitalize"."'>" ;
	echo "<tr><th>S.No.</th><th colspan='2'>Name</th><th colspan='2'>Age</th></tr>";

		foreach($all as $x)
			{
				echo "<tr><td>".$a."</td>";
					foreach ($x as $key => $value)
					{
					echo "<td>".$key."</td><td>".$value."</td>";
					}
				echo "</tr>";
				$a++;
		}
	echo "</table>";
?>
</div>
</div>
</body>
</html>
