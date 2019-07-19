<?php
include("header.php");
include("slider.php");
?>

<div class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3 style="text-align: center;">User Registration</h3><hr>
				<div class="row">
					<div class="col-md-8 offset-md-2">
						<form action="save.php" method="post" enctype="multipart/form-data">
							<div class="card shadow">
								<div class="card-header">
									<h2 style="text-align: center;">Signup</h2>
								</div>
								<div class="card-body">
									<div class="form-group">
										<label>Full name</label>
										<input type="text" name="fullname" placeholder="Full name" class="form-control">
									</div>
									<div class="form-group">
										<label>Username</label>
										<input type="text" name="username" placeholder="Username" class="form-control">
									</div>
									<div class="form-group">
										<label>Password</label>
										<input type="Password" name="pass" placeholder="Password" class="form-control">
									</div>
									<div class="form-group">
										<label>Contact</label>
										<input type="text" name="contact" placeholder="Contact" class="form-control">
									</div>
									<div class="form-group">
										<label>Gender</label><br>
										Male <input value="male" type="radio" name="gender" > Female <input value="female" type="radio" name="gender">
									</div>
									<div class="form-group">
										<label>City</label>
										<select class="form-control" name="city">
											<option>Select</option>
											<option>Indore</option>
											<option>Pune</option>
											<option>Delhi</option>
											<option>Dewas</option>
										</select>
									</div>
									<div class="form-group">
										<label>Address</label>
										<textarea name="add" placeholder="Address" class="form-control"></textarea>
									</div>
										<div class="form-group">
										<label>Image</label>
										<input type="file" name="image" class="form-control">
									</div>
									<div class="form-group">
										<input type="checkbox" name="agree"> I agree Terms and condition
									</div>
									<div class="form-group">
										<input type="submit" value="Signup" class="btn btn-primary">
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<br>

<?php
include("footer.php");
?>
