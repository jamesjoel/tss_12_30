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
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<?php
				$data=array(1,2,3,4,5,6,7,8,9,10);
				echo "<table class='"."table table-bordered text-center text-capitalize"."'>" ;
				foreach($data as $x)
					{
						echo "<tr>";
							foreach($data as $v)
							{
								
							echo "<td>".$v." X ".$x." = ".$x*$v."</td>";
							}
						echo "</tr>";
					}
				echo "</table>";

			?>

<?php
$a=array(5,2);
echo(array_product($a));
?>


</div>
</div>
</div>
</body>
</html>