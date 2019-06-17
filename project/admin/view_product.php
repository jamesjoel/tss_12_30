<?php
include("../db.php");
if(! isset($_SESSION['is_admin_logged_in']))
{
	header("location:../index.php");
}
include("admin_header.php");
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
							<td><?php echo $data['product_name'];?></td>
							<td><?php echo $data['product_price'];?></td>
							<td><?php echo $data['product_category'];?></td>
							<td><img src="product_image/<?php echo $data['product_image']; ?>" height="100" width="100"/></td>
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