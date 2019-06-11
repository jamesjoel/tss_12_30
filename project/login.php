<?php
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

			<h3>User Login</h3>
				<div class="row">
					<div class="col-md-8 offset-md-2">
						<div class="card mb-4 shadow">
							<div class="card-header">
								<h2>Login</h2>
							</div>
							<div class="card-body">
								<div class="form-group">
									<label>Username</label>
									<input type="text" class="form-control">
								</div>
								<div class="form-group">
									<label>Password</label>
									<input type="password" class="form-control">
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

