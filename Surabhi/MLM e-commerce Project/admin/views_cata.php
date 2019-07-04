<?php 
include('../dbconnection.php');
include('backpro_admin.php');
include("header.php");
$query = "SELECT * FROM catagory";
$result = mysqli_query($con, $query);
?>


	<div class="container" style="min-height: 600px;">
		<h2>View All Category</h2>
		<div class="row">
			<div class="col-md-10 offset-md-1">
				<table class="table table-bordered table-dark">
					<tr>
						<th>S.No.</th>
						<th>Category Name</th>
						<td>Edit</td>
						<td>Delete</td>
					</tr>
					<?php
					$n=1;
					while($data = mysqli_fetch_assoc($result))

					{ ?>
						<tr>
							<td><?php echo $n;?></td>
							<td><?php echo $data['catagory_name'];?></td>
							<td><a href="edit_catagory.php?pid=<?php echo $data['id'];?>" class="btn btn-warning btn-sm">Edit</a></td>
							<td><a href="del_cat.php?pid=<?php echo $data['id'];?>" class="btn btn-danger btn-sm">Delete</a></td>
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