<?php
include('dbconnection.php');
include("header.php");
include("slider.php");
?>
 <!-- List catagary start -->
 <div class="container-fluid">
	<div class="row">
		<div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-capitalize">
			<?php
			include("list.php");
			?>
		</div>
		<div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9">
			<form action="auth.php" method="post">
				<div class="card shadow">
						<div class="card-header"><h2>Login Here</h2>
						</div>
						<div class="card-body">
								<div class="form-group">
									<input type="text" name="username" class="form-control" placeholder="User Name" />
								</div>
								<div class="form-group">
									<input type="password" name="password" class="form-control" />
								</div>
						</div>
						<div class="card-footer">
							<input type="submit" value="submit" class="btn btn-primary d-block">
								<p class="text-danger text-center">
							<?php
							if(isset($_SESSION['msg']))
							{
								echo $_SESSION['msg'];
								unset($_SESSION['msg']);
								
							}
							?>
						</p>
						</div>
				</div>
			</form>
		</div><!--  List catagary end -->
	</div>
</div><!-- container close -->
<?php
include("footer.php");
?>