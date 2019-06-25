<?php
include('dbcon.php');
   include ('header.php');
   include ('slider.php');
   $a = $_SESSION['id'];
   print_r($_SESSION);


$query = "SELECT * FROM user WHERE id='$a'";
$result = mysqli_query($conn, $query);
$data2 = mysqli_fetch_assoc($result);
	print_r($data2);
	// die;
   ?>
<div class="container-fluid bg-info">
	<div class="row">
	<?php include 'left-menu.php';?>
		<div class="col-md-8">
<h2 align="center">Update User Information </h2>
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<form action ="update_profile.php" method ="post">
				<div class ="card mb-4 shadow">
					<div class="card-header"><h2>Update Profile</h2></div>
					<div class="card-body">
						<div class="form-group">
							<label>Full Name</label>
									<input type="text" name="full_name" class="form-control"value="<?php echo $data2['full_name'];?>">
								</div>
								
								
								<div class="form-group">
									<label>Address</label>
								<textarea name="add" class="form-control"><?php echo $data2['address'];?></textarea>
								</div>
								<div class="form-group">
									<label>Gender</label>
									<br/>
					
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
									<input type="text" name="contact" class="form-control" value="<?php echo $data2['contact'];?>">
								</div>
								<input type="hidden" name="id" value="<?php echo $data2['id'];?>"class="form-control">
								<div class="form-group">
									<input type="checkbox" name="agree">
									I Agree
								</div>
							</div>
							<div class="card-footer">
								<input type="submit" value="update" class="btn btn-primary">
							</div>
						</div>
					</div>
					
				</div>
			</form>
		</div>
	</div>
</div>
	<?php
include("footer.php");
?>