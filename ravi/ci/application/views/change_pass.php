
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
			<h2>Change Password</h2>
			<form action="<?php echo site_url('user/update_pass') ?>" method="post">
			<div class="card">
				<div class="card-header">User Profile</div>
				<div class="card-body">
					<div class="form-group">
						<label>Current Password</label>
						<input value="" type="password" name="c_pass" class="form-control" />
					</div>
					<div class="form-group">
						<label>New Password</label>
						<input value="" type="password" name="new_pass" class="form-control" />
					</div>
					<div class="form-group">
						<label>Confirm New Password</label>
						<input value="" type="password" name="conf_pass" class="form-control" />
					</div>
					<p class="text-danger text-center">
						<?php echo $this->session->flashdata("msg"); ?>
					</p>


				</div>
				<div class="card-footer">
					<input type="submit" value="Update" class="btn btn-primary">
				</div>
			</div>
			</form>
		</div>
	</div>
</div>

