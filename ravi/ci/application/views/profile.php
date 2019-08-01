
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
			<h2>My Profile</h2>
			<?php
			$data = $result->row_array();
			if($data["image"]=="")
			{
				$path = base_url("public/images/avatar.png");
			}
			else
			{
				$path=base_url("public/user_image/".$data['image']);
			}



			?>
			<table class="table table-hover table-dark table-bordered">
				<tr>
					<td>Full Name</td>
					<td><?php echo $data['full_name']; ?></td>
				</tr>
				<tr>
					<td>Image</td>
					<td><img src="<?php echo $path ?>" height="80" width="80">
						<Br />
						<a href="<?php echo site_url('user/image_upload'); ?>">Change Image</a>
						
					</td>
				</tr>
				<tr>
					<td>Username</td>
					<td><?php echo $data['username']; ?></td>
				</tr>
				<tr>
					<td>Contact</td>
					<td><?php echo $data['contact']; ?></td>
				</tr>
				<tr>
					<td>Address</td>
					<td><?php echo $data['address']; ?></td>
				</tr>
				<tr>
					<td>Gender</td>
					<td><?php echo $data['gender']; ?></td>
				</tr>
				<tr>
					<td>City</td>
					<td><?php echo $data['city']; ?></td>
				</tr>

			</table>
			<a href="<?php echo site_url('user/edit') ?>" class="btn btn-warning">Edit</a>
			<a href="<?php echo site_url('user/change_pass') ?>" class="btn btn-warning">Change Password</a>


		</div>
	</div>
</div>

