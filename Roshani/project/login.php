 
	<?php
// $conn = mysqli_connect("localhost", "root", "", "roshani");
include("dbcon.php");
   include ('header.php');
   include ('slider.php');
   ?>

<div class="container-fluid bg-info">
	<div class="row">
	<?php include 'left-menu.php';?>
		<div class="col-md-4 offet-md-4">
			<h1>USER LOGIN</h1>

		<form action="Auth.php" method="post">
			<div class="card">
				<div class="card-body bg-danger ">
					<div class="form-group">
						<input type="text" placeholder="user ID"class="form-control"name="user_name">
					</div>
					<div class="form-group">
						<input type="password" placeholder="password"class="form-control"name="pass"></div>
				</div>
				<div class="card-footer">
					<input type="submit" value="Login" class="btn btn-primary">
							</div>
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
		</form>
		</div>
	</div>
		
</div>
<?php include 'footer.php';?>

