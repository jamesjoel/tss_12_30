<!DOCTYPE html>
<html>
<head>
	<title>Signup Form</title>
	<meta name="viewport" content="width=device-width, initial-scale=0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<script type="text/javascript"src="js/jquery.js"></script>
	<script type="text/javascript"src="js/bootstrap.bundel.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<h2>USER REGISTRATION</h2>
				<div class="card">
				<div class="card-header">SIGN UP</div>	
				<div class="card-body">
					<form action="save_sign.php"method="post"encytype="multipart/form-data">
					<div class="form-group">
						<label>Full Name</label>
						<input type="text" name="Full_name"class="form-control">
					</div>
					<div class="form-group">
						<label>Contact</label>
						<input type="text" name="Contact"class="form-control">
					</div>
					<div class="form-group">
						<label>user Name</label>
						<input type="text" name="user_name"class="form-control">
					</div>
					<div class="form-group">
						<label>password</label>
						<input type="password" name="pass"class="form-control">
					</div>
					<div class="form-group">
						<label>Re-password</label>
						<input type="password"class="form-control">
					</div>
					<div class="form-group">
						<label>Address</label>
						<textarea class="form-control"name="Add"></textarea>
					</div>
					<div class="form-group">
						<label>City</label>
						<select><option></option></select>
					</div>
					<div class="form-group">
						<label>Gender</label>
						<input type="radio" name="gender" value="Male">Male
						<input type="radio" name="gender" value="Female">Female
					</div>
					<div class="form-group">
						<input type="file" name="user_image"class="form-control">
					</div>
					<div class="form-group">
						<input type="checkbox" name="Agree">I Agree
					</div>

				</form>
					</div>
				</div>
			</div>

		</div>
	</div>
</body>
</html>