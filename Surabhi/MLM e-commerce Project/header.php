<?php
/*print_r($_SERVER);*/
$url = $_SERVER['REQUEST_URI'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Krishna Marketting</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
	<link rel="stylesheet" type="text/css" href="css/style1.css" />


	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
</head>
<body class="bg-light">
	<div class="container-fluid">
			<ul class="nav justify-content-end">
			<li class="nav-item">	<a class="nav-link" href="login.php">Login</a>	</li>
			<li class="nav-item">	<a class="nav-link" href="signup.php">Logup</a>	</li>
		</ul>
		<nav class="navbar bg-warning navbar-expand-sm navbar-light text-capitalize sticky-top">
			<!-- <div class="col-6 col-sm-6 col-md-6"> -->
				<a class="navbar-brand text-success" href="#">Krishna Marketing</a>
		<!-- 	</div> -->
			<button class="navbar-toggler" data-toggle="collapse" data-target="#menu"><span class="navbar-toggler-icon"></span></button>
		<!-- 	<div class="col-6 col-sm-6 col-md-6 "> -->
				<div class="collapse navbar-collapse justify-content-end" id="menu">
					<ul class="navbar-nav">
						<li class="nav-item">
				<a href="index.php" class="nav-link <?php if(strstr($url, "index.php")){ echo "nav-link-active"; } ?>">Home</a>
			</li>
			<li class="nav-item">
				<a href="about.php" class="nav-link <?php if(strstr($url, "about.php")){ echo "nav-link-active"; } ?>">About</a>
			</li>
			<li class="nav-item">
				<a href="contact.php" class="nav-link <?php if(strstr($url, "contact.php")){ echo "nav-link-active"; } ?>">Contact</a>
			</li>
			<li class="nav-item">
				<a href="help.php" class="nav-link <?php if(strstr($url, "help.php")){ echo "nav-link-active"; } ?>">Help</a>
			</li>
						
						<li class="nav-item dropdown">	
							<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">More</a>
								<div class="dropdown-menu ">
									<a href="#" class="dropdown-item">Jewllary</a>
									<a href="#" class="dropdown-item">shoes</a>
									<a href="#" class="dropdown-item">bags</a>
									<a href="#" class="dropdown-item">other</a>
								</div>
						</li>
						<li class="nav-item">	<a href="#" class="nav-link">cart<span class="px-2 badge badge-danger">4</span></a></li>
					</ul>
				</div>

	</nav>
	</div> <!-- navbar close -->