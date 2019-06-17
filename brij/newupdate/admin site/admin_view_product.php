<?php
include("admin_db.php");
include("adminheader.php");

// if (! isset($_SESSION['is_admin_logged_in']))
// {
// 	header("location:../index.php");
// }

$query="SELECT * FROM table_product";
$result=mysqli_query($con,$query);

?>

<div class="container-fluid">
	<div class="row" style="height:50px;"></div>
	<div class="row">
		<div class="col-md-10 offset-md-1">
			<table class="table table-dark">
				<tr>
					<th>S.No.</th>
					<th>Product Name</th>
					<th>Product Price</th>
					<th>Product Category</th>						   <td>View</td>
							<td>Edit</td>
							<td>Delete</td>
				</tr>
				<?php
                 while ($data=mysqli_fetch_assoc($result))  
                 {?>
                 <tr>
                 	<td><?php echo $data['id'];?></td>
                 	<td><?php echo $data['product_name'];?></td>
                 	<td><?php echo $data['product_category'];?></td>
                 	<td><?php echo $data['product_price'];?></td>
                 	<td><a href="#" class="btn btn-info btn-sm">View</a></td>
							<td><a href="#" class="btn btn-warning btn-sm">Edit</a></td>
							<td><a href="#" class="btn btn-danger btn-sm">Delete</a></td>
                 </tr>
                 <?php }
				?>
			</table>
		</div>
	</div>
</div>