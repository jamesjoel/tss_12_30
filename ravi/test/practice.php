<?php
include("header.php");
include("slider.php");
?>
<div class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-8 offset-md-2">
						<div class="card mb-4 shadow">
							<div class="card-header">
								<h3 style="text-align: center;">Login</h3>
							</div>
							<div class="card-body">
								<div class="form-group">
								<label>Username</label>
								<input type="name" name="username" class="form-control">
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" name="pass" class="form-control">
							</div>
							</div>
							<div class="card-footer">
								<input type="submit" value="Login" class="btn btn-primary">
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
include("footer.php");

?>
