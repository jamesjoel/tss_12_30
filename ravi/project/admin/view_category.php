<?php
include("../db.php");
if(! isset($_SESSION['is_admin_logged_in']))
{
	header("location:index.php");
}
include("admin_header.php");
$query = "SELECT * FROM category";
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
							<td><?php echo $data['category_name'];?></td>
							<td><a href="edit_cate.php?id=<?php echo $data['id']; ?>" class="btn btn-warning btn-sm">Edit</a></td>
							<td><a href="delete_cate.php?cid=<?php echo $data['id']; ?>" class="btn btn-danger btn-sm">Delete</a></td>
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