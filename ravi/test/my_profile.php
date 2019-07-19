<?php
include("db.php");
include("header.php");
include("slider.php");

if(! isset($_SESSION['is_user_logged_in'])){
	header("login.php");
}

$x = $_SESSION['id'];
$query = "SELECT * FROM user WHERE id = '$x'";
$result = mysqli_query($con , $query);
$data = mysqli_fetch_assoc($result);

?>
<div class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<p class="text-dark text-center">Wellcome My Profile:<b><?php echo $_SESSION['name'];?></b></p>
				<table class="table table-dark table-hover table-bordered">
					<tr>
						<td>Fullname:</td>
						<td><?php echo $data['full_name']?></td>
					</tr>
					<tr>
						<td>Username:</td>
						<td><?php echo $data['username']?></td>
					</tr>
					<tr>
						<td>Gender:</td>
						<td><?php echo $data['gender']?></td>
					</tr>
					<tr>
						<td>City:</td>
						<td><?php echo $data['city']?></td>
					</tr>
					<tr>
						<td>Contact:</td>
						<td><?php echo $data['contact']?></td>
					</tr>
					<tr>
						<td>Address:</td>
						<td><?php echo $data ['address']?></td>
					</tr>
					<tr>
						<td>Image:</td>
						<td><img src="image/<?php echo $data['image']; ?>" height="100" width="100"/></td>
					</tr>
					<td><a href="edit_profile.php" class="btn btn-light">Edit</a></td>
				</table>
				

			</div>
		</div>
	</div>
</div>


<?php

include("footer.php");
?>