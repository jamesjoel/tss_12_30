<div class="container" style="min-height: 500px;">
	<div class="row">
		<div class="col-md-3">
			
		</div>
		<div class="col-md-6">
			<h2>Login</h2>
			<form action="<?php echo site_url('home/auth') ?>" method="post">
				
			<div class="card">
				<div class="card-header">
					<h3>User Login</h3>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label>Username</label>
						<input name="username" type="text" class="form-control">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input name="pass" type="password" class="form-control">
					</div>
					<p class="text-danger">
						<?php
						echo $this->session->flashdata("msg");
						?>
					</p>

				</div>
				<div class="card-footer">
					<input type="submit" value="Login" class="btn btn-primary">
				</div>
			</div>
			</form>
		</div>
	</div>
</div>

