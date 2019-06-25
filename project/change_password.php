<?php
include("db.php"); 
// backdoor protaction code
if(!isset($_SESSION['is_user_logged_in']))
{
	header("location:login.php");
}
include("header.php");
include("slider.php");

$data_user = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM user WHERE id=".$_SESSION['id']));


?>
<div class="conatiner-fluid" style="min-height: 600px;">
	<div class="container">
		<div class="row">
			<?php include("left-menu.php"); ?>
			<div class="col-md-9">
					<form action="update_pass.php" method="post">
				<div class="row">
						
					<div class="col-md-6 offset-md-3">
						<div class="form-group">
							<label>Current Password</label>
							<input type="password" name="current_pass" class="form-control">
						</div>
						<div class="form-group">
							<label>New Password</label>
							<input type="password" name="new_pass" class="form-control">
						</div>
						<div class="form-group">
							<label>Confirm New Password</label>
							<input type="password" name="c_new_pass" class="form-control">
						</div>
						<input type="submit" value="Update" class="btn btn-success">
					</div>
					<p class="text-danger">
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
</div>
<?php
include("footer.php");
?>

