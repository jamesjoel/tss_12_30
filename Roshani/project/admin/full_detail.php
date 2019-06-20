<?php
include("../dbcon.php");
if(! isset($_SESSION['is_user_log_logged_in']))
{
	header("location:../index.php");
}
include("admin_header.php");
$a =$_GET['pid'];
$query = "SELECT * FROM save_product INNER JOIN category_nameid ON save_product.product_category = category_nameid.id WHERE save_product.id = $a";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);
?>	<div class="container-fluid"style ="min-height: 600px">
	<br/>
	<br/>
	<br/>
	<br/>
	<h2>Product Detail</h2>
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
				<td><?php echo $data['price'];?></td>
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
