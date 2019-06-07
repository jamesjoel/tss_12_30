<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<?php
 $data = array("first"=> array("na"=>"rohit","age1"=>25),
 	"second"=>array("na1"=>"jaya", "age2"=>26),
 	"third"=>array("na2"=>"nilesh","age3"=>22));

echo
"<table class='table table-dark'>
<tr>
<td>".$data['first']['na']."</td>
<td>".$data['first']['age1']."</td>

</tr>
<tr>
<td>".$data['second']['na1']."</td>
<td>".$data['second']['age2']."</td>

</tr>
</tr>
<tr>
<td>".$data['third']['na2']."</td>
<td>".$data['third']['age3']."</td>

</tr>
</table>"





	?>

</body>
</html>