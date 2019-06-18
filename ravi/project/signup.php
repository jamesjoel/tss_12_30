<?php
include("db.php");
include("header.php");
include("slider.php");
?>

<div class="conatiner-fluid">
	<div class="container">
		<ul class="nav justify-content-center center-nav">
			<li class="nav-item">
				<a href="#" class="nav-link">New Arrival</a>
			</li>
			<li class="nav-item slash">
				/
			</li>
			<li class="nav-item">
				<a href="#" class="nav-link">Recommended</a>
			</li>
			<li class="nav-item slash">
				/
			</li>
			<li class="nav-item">
				<a href="#" class="nav-link">Best Seller</a>
			</li>
			
		</ul>
	</div>
</div>
<div class="conatiner-fluid">
	<div class="container">
		<div class="row">
			<?php include("left-menu.php"); ?>
			<div class="col-md-9">


			<h3>User Registration</h3>
				<div class="row">
					<div class="col-md-8 offset-md-2">
						<form action="save.php" method="post">
						<div class="card mb-4 shadow">
							<div class="card-header">
								<h2>Signup</h2>
							</div>
							<div class="card-body">
								<div class="form-group">
									<label>Full Name</label>
									<input type="text" name="full_name" class="form-control">
								</div>
								<div class="form-group">
									<label>Username</label>
									<input type="text" name="username"  class="form-control">
								</div>
								<div class="form-group">
									<label>Password</label>
									<input type="password" name="pass" class="form-control">
								</div>
								<div class="form-group">
									<label>Re-Password</label>
									<input type="password" name="re_pass" class="form-control">
								</div>
								<div class="form-group">
									<label>Address</label>
									<textarea name="add" class="form-control"></textarea>
								</div>
								<div class="form-group">
									<label>Gender</label>
									<Br />
									Male <input type="radio" value="male" name="gender">
									Female <input type="radio" value="female" name="gender">
								</div>
								<div class="form-group">
									<label>City</label>
									<select class="form-control" name="city">
										<option>Select</option>
										<option>Indore</option>
										<option>Mumbai</option>
										<option>Pune</option>
										<option>Bhopal</option>
										<option>Delhi</option>
									</select>
								</div>
								<div class="form-group">
									<label>Contact</label>
									<input type="text" name="contact" class="form-control">
								</div>
								<div class="form-group">
									<input type="checkbox" name="agree">
									I Agree Terms and Conditions.
								</div>
							</div>
							<div class="card-footer">
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
<?php
include("footer.php");
?>

