<?php
include("../db.php");
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
	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
	  <!-- Brand -->
	  <a class="navbar-brand" href="#">Admin Panel</a>

	  <!-- Toggler/collapsibe Button -->
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <!-- Navbar links -->
	  <div class="collapse navbar-collapse" id="collapsibleNavbar">
	    
	  </div> 
	</nav>
<div class="container">
	<div class="row mt-4">
		<div class="col-md-6 offset-md-3 mt-4">
			<form action="auth.php" method="post">
				
			<div class="card mb-4 shadow">
				<div class="card-header">
					<h2>Login</h2>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label>Username</label>
						<input type="text" class="form-control" name="username">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" class="form-control" name="password">
					</div>
				</div>
				<div class="card-footer">
					<input type="submit" value="Login" class="btn btn-primary">
			
				</div>
				<p class="text-center text-danger">
					<?php

					if(isset($_SESSION['msg']))
					{
						echo $_SESSION['msg'];
						unset($_SESSION['msg']);
					}
					?>
				</p>
			</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>