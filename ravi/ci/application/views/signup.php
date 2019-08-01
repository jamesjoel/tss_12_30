
<div class="container" style="min-height: 500px;">
	<div class="row">
		<div class="col-md-3">
			
		</div>
		<div class="col-md-9">
			<?php
			// echo validation_errors();
			?>
			<form action="" method="post">
				
			<div class="card mb-4">
				<div class="card-header">
					<h2>Registration</h2>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label>Full Name</label>
						<input type="text" value="<?php echo set_value("full_name"); ?>" name="full_name" placeholder="Full Name" class="form-control">
						<small class="text-danger"><?php echo form_error("full_name"); ?></small>
					</div>
					<div class="form-group">
						<label>Username</label>
						<input type="text" value="<?php echo set_value("username") ?>" placeholder="Username" class="form-control" name="username">
						<small class="text-danger"><?php echo form_error("username"); ?></small>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input name="pass" type="password" placeholder="Password" class="form-control">
						<small class="text-danger"><?php echo form_error("pass"); ?></small>
					</div>
					<div class="form-group">
						<label>Re-Password</label>
						<input name="re_pass" type="password" placeholder="Re-Password" class="form-control">
						<small class="text-danger"><?php echo form_error("re_pass"); ?></small>
					</div>
					<div class="form-group">
						<label>Address</label>
						<textarea name="add" class="form-control"><?php echo set_value("add") ?></textarea>
						<small class="text-danger"><?php echo form_error("add"); ?></small>
					</div>
					<div class="form-group">
						<label>Gender</label>
						<br />
						<input type="radio" <?php echo set_radio("gender", "male"); ?> value="male" name="gender">Male
						<input type="radio" <?php echo set_radio("gender", "female"); ?> value="female" name="gender">Female
						<br />
						<small class="text-danger"><?php echo form_error("gender"); ?></small>
					</div>
					<div class="form-group">
						<label>City</label>
						
						<select class="form-control" name="city">
							<option value="">Select</option>
							<option <?php echo set_select("city", "indore"); ?> value="indore">Indore</option>
							<option <?php echo set_select("city", "bhopal"); ?> value="bhopal">Bhopal</option>
							<option <?php echo set_select("city", "mumbai"); ?> value="mumbai">Mumbai</option>
							<option <?php echo set_select("city", "pune"); ?>  value="pune">Pune</option>
						</select>
						<small class="text-danger"><?php echo form_error("city"); ?></small>
					</div>
					<div class="form-group">
						<label>Contact</label>
						<input type="text" placeholder="Contact" value="<?php echo set_value("contact") ?>" class="form-control" name="contact">
						<small class="text-danger"><?php echo form_error("contact"); ?></small>
					</div>
				</div>
				<div class="card-footer">
					<input type="submit" value="Sign Up" class="btn btn-primary">
				</div>
			</div>

			
			</form>
		</div>
	</div>
</div>

