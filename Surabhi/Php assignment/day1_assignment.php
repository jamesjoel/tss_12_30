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
$name="rohit";
$city="ujjain";
echo "<table class="."table table-bordered>" ;
echo "<tr><th> s.no.</th><th>Name</th><th>city</th></tr>";
echo "<tr><td> $a</td><td>$name</td><td>$city</td></tr>";
$a++;
$name="Jaya";
$city="Indore";

echo "<tr><td> $a</td><td>$name</td><td>$city</td></tr>";
echo "</table>";
?>
</div>
</div>
</body>
</html>