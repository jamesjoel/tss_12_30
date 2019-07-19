

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="css/style2.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<body>
	<div class="container-fluid header-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<p class=" text-light">Indore best website</p>
			</div>
			<div class="col-md-6">
				<ul class="nav justify-content-end">
					<?php
                       if(isset($_SESSION['is_user_logged_in'])){


                  
					?>
					<li class="nav-item">
						<a href="my_account.php" class="nav-link text-light" >Myaccount <i class="fa fa-user"></i></a>
					</li>
					<li class="nav-item">
						<a href="logout.php" class="nav-link text-light" >Logout <i class="fa fa-user"></i></a>
					</li>
						<li class="nav-item">
				<a href="my_profile.php" class="nav-link text-light">My Profile</a>
			</li>

                 <?php

				} 
				else
				{ ?>
					<li class="nav-item">
						<a href="login.php" class="nav-link text-light">Login <i class="fa fa-lock"></i></a>
					</li>
					<li class="nav-item">
						<a href="signup.php" class="nav-link text-light" >Signup <i class="fa fa-user"></i></a>
					</li>

					<?php
                    }
					?>
				</ul>
			</div>
			
		</div>
	</div>
</div>
<nav class="navbar navbar-expand-sm header-bg navbar-dark sticky-top ">
		<a href="#" class="navbar-brand">The best shoping site.....</a>
		<button class="navbar-toggler" data-toggle="collapse" data-target="#mymenu">
			<span class="navbar-toggler-icon"></span>
		</button>
	<div id="mymenu"  class="collapse navbar-collapse">
			<ul class="navbar navbar-nav">
				<li class="nav-item">
					<a href="index.php" class="nav-link">Home</a>
				</li>
				<li class="nav-item">
					<a href="about.php" class="nav-link">About</a>
				</li>
			<li class="nav-item">
				<a href="contact.php" class="nav-link">Contact</a>
			</li>
			<li class="nav-item">
				<a href="practice.php" class="nav-link">Help</a>
			</li>
		</ul>
		
	</div>
</nav>