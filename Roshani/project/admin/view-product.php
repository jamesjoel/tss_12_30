<?php
include("../dbcon.php");
if(!isset($_SESSION["is_user_log_logged_in"]))
{
header("../index.php");
}
include('admin_header.php');
$query ="SELECT * FROM save_product";
$result = mysqli_query($conn , $query);
?>
<div class="container" style="min-height: 600px">
	<h2>View All Product</h2>
	<div class="col-md-6 offset-md-3" >
		<div class="row">
			<table class="table table-bordered table-dark"style="margin-top: 100px">
				<tr>
					<td>S.No</td>
					<td>Product Neme</td>
					<td>Product category</td>
					<td>Product Price</td>
					<td>product image</td>
					<td>View</td>
					<td>Edit</td>
					<td>Delet</td>
				</tr>
				
					<?php
					while ($data = mysqli_fetch_assoc($result))
					 {
						?>
					<tr>
						<td><?php echo $data['id']?></td>
						<td><?php echo $data['product_name']?></td>
						<td><?php echo $data['product_category']?></td>
						<td><?php echo $data['price']?></td>
						<td><img src="photos/<?php echo $data['p_image']; ?>" height="100" width="100"/></td>
						<td><a href="#" class="btn btn-danger btn-sm">Veiw</a></td>
						<td><a href="#"class="btn btn-success btn-sm">Edit</a></td>
						<td><a href="#"class="btn btn-warning btn-sm">Delet</a></td>
					</tr>
						<?php
					}
					?>
				
			</table>
		</div>
	</div>
</div>