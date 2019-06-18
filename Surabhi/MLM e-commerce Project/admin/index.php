<?php 
include('../dbconnection.php');
include('header.php');
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-8 offset-2 col-sm-8 offset-sm-2 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
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
		</div><!--  form catagary end -->
	</div>
</div>
</body>
</html> 