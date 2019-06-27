<?php
include("dbcon.php");
if(! isset($_SESSION['is_user_logged_in']))
{
	header("location:login.php");
}
include("header.php");
include("slider.php");
$a = $_SESSION['id'];
/*$b = $_SESSION['name'];*/
$query ="SELECT * FROM user WHERE id = $a";
$result = mysqli_query($conn , $query);
$data1 = mysqli_fetch_assoc($result);
?>
<div class="container-fluid" style="min-height: 600px;">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<form action="update_pass.php" method="post">
					<div class="row">
						<div class="col-md-6 offset-md-3">
						     	<div class="form-group">
								<label>Current Password</label>
								<input type="password" name="current_password" class="form-control">
							</div>
							<div class="form-group">
								<label>New Password</label>
								<input type="password" name="new_password" class="form-control">
							</div>
							<div class="form-group">
								<label>Confirm New Password</label>
								<input type="password" name="c_new_password" class="form-control">
							</div>
							<input type="submit" value="update" class="btn btn-info">
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
			</div>
		</div>
	</div>
</div>
<?php
include("footer.php");
?>