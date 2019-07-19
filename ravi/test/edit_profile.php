<?php
include("db.php");
include("header.php");
include("slider.php");

if(! isset($_SESSION['is_user_logged_in'])){

	header("location:login.php");
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
				<h2 class="text-center text-dark">Edit My Profile</h2><hr>
			   <form action="update.php" method="post">
				<table class="table table-dark table-hover table-bordered">
					<tr>
						<td>Fullname:</td>
						<td><input type="text" name="full_name" value="<?php echo $data['full_name'];?>"class="form-control" ></td>
					</tr>
					<tr>
						<td>Username</td>
						<td><input disabled="disabled" type="text" name="username" value="<?php echo $data ['username'];?>  " class="form-control" >
							</td>
					</tr>
					<tr>
						<td>Gender</td>
						<td>Male <input <?php if($data['gender']=='male'){ echo "checked='checked'"; } ?> type="radio" name="gender" value="male" />
							Female <input <?php if($data['gender']=='female'){ echo "checked='checked'"; } ?> type="radio" name="gender" value="female" />
						</td>
					</tr>
					<tr>
						<td>City</td>
						<td>
							<select class="form-control" name="city">
								<option>
									select</option>
								<option <?php if($data['city']=='Indore'){ echo "selected='selected'";}?>>Indore</option>
								<option <?php if($data['city']=='Pune'){echo "selecte='selected'";}?>>Pune</option>
								<option <?php if($data['city']=='Delhi'){ echo "selected='selected'";}?>>Delhi</option>
								<option <?php if($data['city']=='Dewas'){ echo "selected='selected'";}?>>Dewas</option>

							</select>
						</td>
					</tr>
				
					<tr>
						<td>Contact</td>
						<td><input value="<?php echo $data['contact'];?>" type="text" name="contact" class="form-control"></td>
					</tr>
						<tr>
						<td>Address</td>
						<td><textarea  name="add" class="form-control"><?php echo $data['address'];?></textarea></td>
					</tr>
					<tr>
						<td>Current Image</td>
						<td><img src="image/<?php echo $data['image'] ?>" height="50" width="50"></td>
					</tr>
					<tr>
						<td>Profile Image</td>
						<td><input type="file" name="image" class="form-control"></td>
					</tr>
				
					<tr>
						<td>
							<a href=""><input type="submit" value="Update" class="btn btn-primary "></a>
						</td>
					</tr>
							
				</table>
					
				</form>
			</div>
			
			
		</div>
	</div>
</div>

<?php

include("footer.php");
?>