
<?php
include("../dbcon.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width ,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundel.js"></script>
</head>
<body class="bg-danger">
<nav class="navbar navbar-dark  bg-dark navbar-expand-sm fixed-top">
		<a href="#" class="navbar-brand">The Admin</a>
		<button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
			<span class="navbar-toggler-icon"></span>
		</button>
 		<div id="menu" class="collapse navbar-collapse">

		</div>

			
	</nav>
	<div class="container" style="margin-top: 100px;">
		<div class="row">

			<div class="card col-md-6 offset-md-3">
				<div class="card-header"><h1>Login</h1></div>

				<div class="card-body">
					<form action="log.php" method="post">
						<div class="form-group">
							<input type="text" name="username" class="form-control"placeholder="user ID">
						</div>
						<div class="form-group">
							<input type="password" name="password" class="form-control"placeholder="password">
						</div>
						<div class="card-footer">
							<input type="submit" value="Login" class="btn btn-info">
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
						
					</form>
				</div>
			</div>
		</div>
	</div>

</body>
</html>