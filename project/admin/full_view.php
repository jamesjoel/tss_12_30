<?php
include("../db.php");
if(! isset($_SESSION['is_admin_logged_in']))
{
	header("location:../index.php");
}
include("admin_header.php");
$a = $_GET['pid'];
$query = "SELECT * FROM product INNER JOIN category ON product.product_category = category.id WHERE product.id=$a";
$result = mysqli_query($con, $query);
$data = mysqli_fetch_assoc($result);
?>


	<div class="container" style="min-height: 600px;">
		<h2>Product Details</h2>
		<table class="table table-dark">
			<tr>
				<th>Product Name</th>
				<td><?php echo $data['product_name'];?></td>
			</tr>
			<tr>
				<th>Product Category</th>
				<td><?php echo $data['category_name'];?></td>
			</tr>
			<tr>
				<th>Product Price</th>
				<td><?php echo $data['product_price'];?></td>
			</tr>
			<tr>
				<th>Product Detail</th>
				<td><?php echo $data['detail'];?></td>
			</tr>
			<tr>
				<th>Discount</th>
				<td><?php echo $data['discount'];?></td>
			</tr>
			
		</table>
	</div>
</body>
</html>