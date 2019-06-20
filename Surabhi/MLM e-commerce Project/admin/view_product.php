<?php
include('../dbconnection.php');
if(! isset($_SESSION['is_user_logged_in']))
{
	header("location:index.php");
}
include("header.php");
$query = "SELECT * FROM product";
$result = mysqli_query($con, $query);
?>


	<div class="container" style="min-height: 600px;">
		<h2>View All Category</h2>
		<div class="row">
			<div class="col-md-12">
				<table class="table table-bordered table-dark">
					<tr>
						<th>S.No.</th>
						<th>Product Name</th>
						<th>Product Price</th>
						<th>Product Category</th>
						<th>Product Image</th>
						<td>View</td>
						<td>Edit</td>
						<td>Delete</td>
					</tr>
					<?php
					while($data = mysqli_fetch_assoc($result))
					{ ?>
						<tr>
							<td><?php echo $data['id'];?></td>
							<td><?php echo $data['p_name'];?></td>
							<td><?php echo $data['price'];?></td>
							<td><?php echo $data['p_cata'];?></td>
							<td><img src="image/<?php echo $data['p_image']; ?>" height="100" width="100"/></td>
							<td><a href="#" class="btn btn-info btn-sm">View</a></td>
							<td><a href="#" class="btn btn-warning btn-sm">Edit</a></td>
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