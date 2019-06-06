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
$a=1;
$data= array('first' => array('name' => "rohit", 'age'=>25),'second'=>array('name' => "Jaya", 'age'=>26),'third'=>array('name' => "seema", 'age'=>22));
echo "<table class='"."table table-bordered text-center text-capitalize"."'>" ;
echo "<tr><th>S.No.</th><th>Name</th><th>city</th></tr>";
echo "<tr><td>".$a."</td><td>".$data['first']['name']."</td><td>".$data['first']['age']."</td></tr>";
$a++;
echo "<tr><td>".$a."</td><td>".$data['second']['name']."</td><td>".$data['second']['age']."</td></tr>";
$a++;
echo "<tr><td>".$a."</td><td>".$data['third']['name']."</td><td>".$data['third']['age']."</td></tr>";
echo "</table>";



?>
</div>
</div>
</body>
</html>