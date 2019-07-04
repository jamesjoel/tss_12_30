<?php
include('../dbconnection.php');
if(! isset($_SESSION['is_admin_logged_in']))
{
	header("location:index.php");
}
include("header.php");
$a=$_GET['pid'];
$query = "SELECT * FROM product where ";
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
					$n=1;
					while($data = mysqli_fetch_assoc($result))
					{ ?>
						<tr>
							<td><?php echo $n; ?></td>
							<td><?php echo $data['p_name'];?></td>
							<td><?php echo $data['price'];?></td>
							<td><?php echo $data['p_cata'];?></td>
							<td><img src="image/<?php echo $data['p_img']; ?>" height="100" width="100"/></td>
						</tr>
					<?php 
					$n++;
				}

					?>



				</table>
			</div>
		</div>
	</div>
</body>
</html>