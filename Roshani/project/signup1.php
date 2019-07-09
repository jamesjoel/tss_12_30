<?php
include('dbcon.php');
   include ('header.php');
   include ('slider.php');
   ?>
   <script type="text/javascript"src="js/validation.js"></script>
<div class="container-fluid bg-info">
	<div class="row">
	<?php include 'left-menu.php';?>
		<div class="col-md-8">
<h2 align="center">User Registration</h2>
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<form action ="save1.php" method ="post" id="signup_frm">
				<div class ="card mb-4 shadow">
					<div class="card-header"><h2>Sign-up</h2></div>
					<div class="card-body">
						<div class="form-group">
							<label>Full Name</label>
									<input type="text" name="full_name" class="form-control"id="full_name">
									<small class="text-danger"id="full_name_msg"></small>
								</div>
								<div class="form-group">
									<label>Username</label>
									<input type="text" name="username"  class="form-control"id="username">
									<small class="text-danger"id="username_msg"></small>
								</div>
								<div class="form-group">
									<label>Password</label>
									<input type="password" name="pass" class="form-control"id="pass">
									<small class="text-danger"id="pass_msg"></small>
								</div>
								<div class="form-group">
									<label>Re-Password</label>
									<input type="password" name="re_pass" class="form-control"id="re_pass">
									<small class="text-danger"id="re_pass_msg"></small>
								</div>
								<div class="form-group">
									<label>Address</label>
									<textarea name="add" class="form-control"id="add"></textarea>
									<small class="text-danger"id="add_msg"></small>
								</div>
								<div class="form-group">
									<label>Gender</label>
									<Br />
									Male <input type="radio" value="male" name="gender"id="male">
									Female <input type="radio" value="female" name="gender" id="female">
									<br>
									<small class="text-danger"id="gender_msg"></small>
								</div>
								<div class="form-group">
									<label>City</label>
									<select class="form-control" name="city" id="city">
										<option>Select</option>
										<option>Indore</option>
										<option>Mumbai</option>
										<option>Pune</option>
										<option>Bhopal</option>
										<option>Delhi</option>
									</select>
									<small class="text-danger"id="city_msg"></small>
								</div>
								<div class="form-group">
									<label>Contact</label>
									<input type="text" name="contact" class="form-control" id="contact">
									<small class="text-danger"id="contact_msg"></small>
								</div>
								<div class="form-group">
									<input type="checkbox" name="agree"id="agree">
									I Agree
									<br/>
									<small class="text-danger"id="agree_msg"></small>
								</div>
							</div>
							<div class="card-footer">
								<input type="submit" value="Signup" class="btn btn-primary">
							</div>
						</div>
					</div>
					
				</div>
			</form>
		</div>
	</div>
</div>
	<?php
include("footer.php");
?>