<?php
// print_r($_SERVER);
$url = $_SERVER['REQUEST_URI'];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"> 
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
</head>
<body>
	<div class="conatiner-fluid header-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-12 col-sm-12">
					<p class="text-light pt-2">Indore Best Shopping Site...</p>
				</div>
				<div class="col-md-6 col-12 col-sm-12">
					<ul class="nav justify-content-end">
						<?php
						if(isset($_SESSION['is_user_logged_in']))
						{ ?>

							<li class="nav-item">
								<a href="my_account.php" class="nav-link text-light">My Account <i class="fa fa-lock"></i></a>
							</li>
							<li class="nav-item">
								<a href="logout.php" class="nav-link text-light">Logout <i class="fa fa-user"></i></a>
							</li>



						<?php
						}
						else
						{ ?>

							<li class="nav-item">
								<a href="login.php" class="nav-link text-light">Login <i class="fa fa-lock"></i></a>
							</li>
							<li class="nav-item">
								<a href="signup.php" class="nav-link text-light">Signup <i class="fa fa-user"></i></a>
							</li>


						<?php
						}
						?>




						
					</ul>
				</div>
			</div>
		</div>
	</div>
<nav class="navbar navbar-expand-sm header-bg navbar-dark sticky-top">
	<a href="index.php" class="navbar-brand">My Shopping Site</a>
	<button class="navbar-toggler" data-toggle="collapse" data-target="#mymenu">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div id="mymenu" class="collapse navbar-collapse">
		<ul class="navbar navbar-nav">
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
		</ul>
	</div>
</nav>