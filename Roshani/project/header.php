
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width,initial-scale=1"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="imghover.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
</head>
<body class="m-0 p-0">
	<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-12 col-sm-12">
					<h1> Hello! World</h1>
				</div>
				<div class="col-md-6 col-12 col-sm-12 ">
					<ul class="nav justify-content-end">
						<?php
						// session_start();
						if(isset($_SESSION['is_user_logged_in']))
						{ ?>

							<li class="nav-item">
								<a href="account.php" class="nav-link text-dark">My Account <i class="fa fa-lock"></i></a>
							</li>
							<li class="nav-item">
								<a href="logout.php" class="nav-link text-dark">Logout <i class="fa fa-user"></i></a>
							</li>



						<?php
						}
						else
						{ ?>

							<li class="nav-item">
								<a href="login.php" class="nav-link text-dark">Login <i class="fa fa-lock"></i></a>
							</li>
							<li class="nav-item">
								<a href="signup1.php" class="nav-link text-dark">Signup <i class="fa fa-user"></i></a>
							</li>


						<?php
						}
						?>
					</ul>
				</div>
			</div>
	</div>
	<nav class="navbar bg-info navbar-dark navbar-expand-sm sticky-top">
		<a href="#"class="navbar-brand">The Qualisure</a>
		<button class="navbar-toggler" data-toggle="collapse" data-target="#mymenu">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div id="mymenu"class=" collapse navbar-collapse">
			<ul class="navbar-nav">
			<li class="nav-item">
				<a href="index.php" class="nav-link"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
			</li>
			<li class="nav-item">
				<a href="#"class="nav-link"><i class="fa fa-hand-o-left" aria-hidden="true"></i> About</a>
			</li>
			<li class="nav-item">
				<a href="#"class="nav-link"><i class="fa fa-envelope" aria-hidden="true"></i> Contact</a>
			</li>
			<li class="nav-item">
				<a href="#"class="nav-link"> Term</a>
			</li>
			<li class="nav-item">
				<a href="#"class="nav-link"> Help</a>
			</li>
			<li class="nav-item dropdown">
				<a href="#"class="nav-link dropdown-toggle"data-toggle="dropdown"> More</a>
				<div class="dropdown-menu">
					<a href="#"class="dropdown-item">Sony</a>
					<a href="#"class="dropdown-item">iphone</a>
					<a href="#"class="dropdown-item">Apple</a>
					<a href="#"class="dropdown-item">Samsung</a>
					<a href="#"class="dropdown-item">Nokia</a>
				</div>
			</li>
			</div>
		</ul>
		<ul class="navbar-nav navbar-right">
			<li class="nav-item">
				<a href="#"class="nav-link"><i class="fa fa-shopping-cart" aria-hidden="true"></i> My-Cart<span class="badge badge-danger">(0)</span></a>
			</li>
		</ul>
		</div>
	</nav>