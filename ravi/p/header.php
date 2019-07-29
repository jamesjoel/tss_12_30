<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
<body>
	<div id="header">
		<div id="inside_header" class="wrapper">
			<div id="logo">
				<b>Facebook</b>
			</div>
		</div>
	</div>
	<div id="menu">
		<div id="inside_menu" class="wrapper">
			<ul>
				<li>
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="about.php">About</a>
				</li>
				<li>
					<a href="contact.php">contact</a>
				</li>
				<?php
				// When user is logged in
				if(isset($_SESSION['is_user_logged_in'])) 
				{
				?>
				
				<li>
					<a href="my_account.php">myaccount</a>
				</li>
				<li>
					<a href="logout.php">Logout</a>
				</li>
				<li><a href="my_profile.php">Myprofile</a></li>
				<?php
			}
			else
			{
				?>
				<li>
					<a href="login.php">Login</a>
				</li>
				<li>
					<a href="signup.php">Signup</a>
				</li>
					<?php
                }
	            ?>
			</ul>
		</div>
	</div>