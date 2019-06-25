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
				<p class="text-success">
					<?php
					if(isset($_SESSION['success_msg']))
					{
						echo $_SESSION['success_msg'];
						unset($_SESSION['success_msg']);
					}
					?>
				</p>
				<table class="table table-hover table-bordered table-dark">
					<tr>
						<td>Full Name</td>
						<td><?php echo $data_user['full_name'];?></td>
					</tr>
					<tr>
						<td>Username</td>
						<td><?php echo $data_user['username'];?></td>
					</tr>
					<tr>
						<td>Address</td>
						<td><?php echo $data_user['address'];?></td>
					</tr>
					<tr>
						<td>City</td>
						<td><?php echo $data_user['city'];?></td>
					</tr>
					<tr>
						<td>Gender</td>
						<td><?php echo $data_user['gender'];?></td>
					</tr>
					<tr>
						<td>Contact</td>
						<td><?php echo $data_user['contact'];?></td>
					</tr>
				</table>		
				<a href="change_password.php" class="btn btn-sm btn-info">Change Password</a>
			</div>
		</div>
	</div>
</div>
<?php
include("footer.php");
?>

