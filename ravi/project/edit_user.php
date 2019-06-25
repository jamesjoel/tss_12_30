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
		<form action="" method="post">
			
		<div class="card">
			<div class="card-header">
				<h3>User Detail</h3>
			</div>
			<div class="card-body">
				<div class="form-group">
					<label>user name</label>
					<input type="text" name="full_name" class="form-control" value="<?php echo $data1['full_name']; ?>">
				</div>
				<div class="form-group">
									<label>Username</label>
									<input type="text" name="username"  class="form-control"value="<?php echo $data1['full_name']; ?>">
								</div>
								<div class="form-group">
									<label>Password</label>
									<input type="password" name="pass" class="form-control">
								</div>
								<div class="form-group">
									<label>Re-Password</label>
									<input type="password" name="re_pass" class="form-control">
								</div>
								<div class="form-group">
									<label>Address</label>
									<textarea name="add" class="form-control"></textarea>
								</div>
								<div class="form-group">
									<label>Gender</label>
									<Br />
									Male <input type="radio" value="male" name="gender">
									Female <input type="radio" value="female" name="gender">
								</div>
								<div class="form-group">
									<label>City</label>
									<select class="form-control" name="city">
										<option>Select</option>
										<option>Indore</option>
										<option>Mumbai</option>
										<option>Pune</option>
										<option>Bhopal</option>
										<option>Delhi</option>
									</select>
								</div>
								<div class="form-group">
									<label>Contact</label>
									<input type="text" name="contact" class="form-control">
								</div>

			</div>
			<div class="card-footer">
				<input type="submit" value="Update" class="btn btn-primary">
			</div>
		</div>
		</form>
		</div>
		</div>
	</div>
</body>
</html>