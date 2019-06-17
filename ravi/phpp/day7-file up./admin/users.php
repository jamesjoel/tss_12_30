<?php
include("../db.php");
if(! isset($_SESSION['is_admin_logged_in']))
{
	header("location:../index.php");
}
include("admin_header.php");
$query = "SELECT * FROM user";
$result = mysqli_query($con, $query);
?>


	<div class="container" style="min-height: 600px;">
		<h2>View All Category</h2>
		<div class="row">
			<div class="col-md-10 offset-md-1">
				<table class="table table-bordered table-dark">
					<tr>
						<th>S.No.</th>
						<th>Full Name</th>
						<th>Username</th>
						<th>Contact</th>
						<td>View</td>
						<td>Status</td>
						<td>Delete</td>
					</tr>
					<?php
					while($data = mysqli_fetch_assoc($result))
					{ ?>
						<tr>
							<td><?php echo $data['id'];?></td>
							<td><?php echo $data['full_name'];?></td>
							<td><?php echo $data['username'];?></td>
							<td><?php echo $data['contact'];?></td>
							<td><a href="#" class="btn btn-info btn-sm">View</a></td>
							<td><a href="#" class="btn btn-warning btn-sm">Status</a></td>
							<td><a href="#" class="btn btn-danger btn-sm">Delete</a></td>
						</tr>
					<?php 
					}

					?>



				</table>
			</div>
		</div>
	</div>
</body>
</html>