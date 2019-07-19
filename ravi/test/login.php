<?php
include("db.php");
include("header.php");
include("slider.php");
?>

<div class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3 style="text-align: center;">User Login</h3><hr>
				<div class="row">
					<div class="col-md-8 offset-md-2">
						<form action="auth.php" method="post">
							<div class="card mb-4 shadow ">
							<div class="card-header">
							<h3 style="text-align: center;">Login</h3>
							</div>
							  <div class="card-body">
								<div class="form-group">
									<label>Username</label>
									<input type="text" name="username" class="form-control">
								</div>
								<div class="form-group">
									<label>Password</label>
									<input type="password" name="pass" class="form-control">
								</div>
								</div>
								<div class="card-footer">
								<div class="form-group">
									<input type="submit" value="Login" class="btn btn-primary">
								</div>
							</div>
							<p class="text-danger text-center"> 
							<?php
                          if(isset($_SESSION['msg'])){
                            
                                   echo($_SESSION['msg']);
                                   unset($_SESSION['msg']);
                          }
                           
							?></p>
							</div>
						</form>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>


<?php 
include("footer.php");
?>