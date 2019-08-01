
<div class="container">
	<div class="row">
		<div class="col-md-3">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</div>
		<div class="col-md-9">
			<h2>Edit Proile</h2>
			<?php
			$data = $result->row_array();
			?>
			<form action="<?php echo site_url('user/update') ?>" method="post">
				
			<div class="card">
				<div class="card-header">User Profile</div>
				<div class="card-body">
					<div class="form-group">
						<label>Full Name</label>
						<input value="<?php echo $data['full_name']; ?>" type="text" name="full_name" class="form-control" />
					</div>
					<div class="form-group">
						<label>Username</label>
						<input type="text" value="<?php echo $data['username']; ?>" disabled="disabled" name="username" class="form-control" />
					</div>
					
					<div class="form-group">
						<label>Address</label>
						<textarea class="form-control" name="address"><?php echo $data['address']; ?></textarea>
					</div>
					<div class="form-group">
						<label>Gender</label>
						<br />
						<input type="radio" <?php if($data['gender']=="male"){ echo "checked='checked'"; } ?> name="gender" value="male"/>Male
						<input type="radio" <?php if($data['gender']=="female"){ echo "checked='checked'"; } ?> name="gender" value="female"/>Female
					</div>
					<div class="form-group">
						<label>City</label>
						<select name="city" class="form-control">
							<option>Select</option>
							<option <?php if($data['city']=="indore"){ echo "selected='selected'"; } ?>>indore</option>
							<option <?php if($data['city']=="bhopal"){ echo "selected='selected'"; } ?>>bhopal</option>
							<option <?php if($data['city']=="mumbai"){ echo "selected='selected'"; } ?>>mumbai</option>
							<option <?php if($data['city']=="pune"){ echo "selected='selected'"; } ?>>pune</option>
						</select>
					</div>
					<div class="form-group">
						<label>Contact</label>
						<input type="text" value="<?php echo $data['contact'] ?>" name="contact" class="form-control" />
					</div>
				</div>
				<div class="card-footer">
					<input type="submit" value="Update" class="btn btn-primary">
				</div>
			</div>
			</form>

		</div>
	</div>
</div>

