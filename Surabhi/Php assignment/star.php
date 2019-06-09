<!DOCTYPE html>
<html>
<head>
	<title>Day 1_Php</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
</head>
<body class="bg-success">
	<div class="container-fluid">
	<div class="row ">
		<div class="col-md-2 border"> <!-- simple star -->
			<?php
				$data=array(1,2,3,4,5);
				foreach($data as $x)
					{
						foreach($data as $v)
							{
								
							echo "*";
							if($x==$v)
									break;
						}
						echo "<br />";
					}

			?>
</div>
		<div class="col-md-2 border"> <!-- backword star -->
			<?php
				$data=array(1,2,3,4,5);
				foreach($data as $x)
					{
						foreach($data as $v)
							{
							if($v>=$x)
							{		
							echo "*";
							$v--;
							}
						}
						echo "<br />";
					}

			?>
		</div>
	<div class="col-md-2 border"> <!-- pramid star -->
			<?php
				$data=array(1,2,3,4,5);
				foreach($data as $x)
					{
						foreach($data as $v)
								{	
									if($v>$x)
									{		
									echo "&nbsp;";
									$v--;
									}
								}
								foreach($data as $n)
									{
										if($n<=$x)
										{		
										echo "*";
										$n++;
										}
									}
								echo "<br />";
					}

			?>
		</div>

<div class="col-md-2 border"> 
			<?php
				$data=array(1,2,3,4,5);
						$a=0;
						$b=1;
						echo  $a. ",".$b. ",";
				foreach($data as $x)
					{
						$c=$a+$b;
						echo $c. ",";
						$a=$b;
						$b=$c;
					}

			?>
		</div>

<div class="col-md-2 border"> 
			<?php
				$data=array(1,2,3,4,5);
						$a=1;
						$b=2;
						echo  $a. ",".$b. ",";
				foreach($data as $x)
					{
						$c=$a*$b;
						echo $c. ",";
						$a=$b;
						$b=$c;
					}

			?>
		</div>
</div>
</div>
</body>
</html>