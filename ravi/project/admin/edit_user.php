<?php
include("../db.php");
if(! isset($_SESSION['is_admin_logged_in']))
{
	header("location:../index.php");
}
include("admin_header.php");


$a = $_GET['id'];
$query = "SELECT * FROM user WHERE id= $a";
$result = mysqli_query($con, $query);
$data = mysqli_fetch_assoc($result);



?>


	<div class="container" style="min-height: 600px;">
		<div class="row">
			<div class="col-md-6 offset-md-3">
		<h2>Update User detail</h2>
		<form action="user_detail.php" method="post">
			
		<div class="card">
			<div class="card-header">
				<h3>user Detail</h3>
			</div>
			<div class="card-body">
				<div class="form-group">
					<label>User Name</label>
					<input type="text" name="category_name" class="form-control" value="<?php echo $data['full_name']; ?>">
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