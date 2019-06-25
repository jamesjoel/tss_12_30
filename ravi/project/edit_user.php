<?php
include("db.php");
if(! isset($_SESSION['is_user_logged_in']))
{
	header("location:index.php");
}
include("header.php");


$a = $_SESSION['id'];
$query = "SELECT * FROM user WHERE id= $a";
$result1 = mysqli_query($con, $query);
$data1 = mysqli_fetch_assoc($result1);



?>


	<div class="container" style="min-height: 600px;">
		<div class="row">
			<div class="col-md-6 offset-md-3">
		<h2>Update profile</h2>
		
			
		<div class="card">
			<div class="card-header">
				<h3>User Detail</h3>
			</div>
			<form action="update_user.php" method="post">
			<div class="card-body">
				<div class="form-group">
					<label>user name</label>
					<input type="text" name="full_name" class="form-control" value="<?php echo $data1['full_name']; ?>">
				</div>
				<div class="form-group">
									<label>Username</label>
									<input type="text" disabled="disabled"name="username"  class="form-control"value="<?php echo $data1['username']; ?>">
								</div>
								
								
								<div class="form-group">
									<label>Address</label>
									<textarea name="add" class="form-control"><?php echo $data1['address']; ?></textarea>
								</div>
								<div class="form-group">
									<label>Gender</label>
									<Br />
									Male <input <?php if($data1['gender']=='male'){ echo "checked='checked'"; } ?> type="radio" name="gender" value="male" />
							Female <input <?php if($data1['gender']=='female'){ echo "checked='checked'"; } ?> type="radio" name="gender" value="female" />
								</div>
								<div class="form-group">
									<label>City</label>
									<select class="form-control" name="city">
										<option>Select</option>
										<option <?php if($data1['city']=='Indore'){ echo "selected='selected'"; } ?>>Indore</option>
										<option <?php if($data1['city']=='Mumbai'){ echo "selected='selected'"; } ?>>Mumbai</option>
										<option <?php if($data1['city']=='Pune'){ echo "selected='selected'"; } ?>>Pune</option>
										<option <?php if($data1['city']=='Delhi'){ echo "selected='selected'"; } ?>>Delhi</option>
									
									</select>
								</div>
								<div class="form-group">
									<label>Contact</label>
									<input type="text" name="contact" class="form-control"value="<?php echo $data1['contact']; ?>">
								</div>

			</div>
			<div class="card-footer">
				<input type="submit" value="Update" class="btn btn-primary">
			</div>
			</form>
		</div>
		</form>
		</div>
		</div>
	</div>
</body>
</html>