<?php
include("../db.php");
if(! isset($_SESSION['is_admin_logged_in']))
{
	header("location:../index.php");
}
include("admin_header.php");
$query = "SELECT * FROM category";
$result = mysqli_query($con, $query);
?>


	<div class="container" style="min-height: 600px;">
		<div class="row">
			<div class="col-md-6 offset-md-3">
		<h2>Add New Product</h2>
		<form action="save_product.php" method="post" enctype="multipart/form-data">
			
		<div class="card">
			<div class="card-header">
				<h3>Product Detail</h3>
			</div>
			<div class="card-body">
				<div class="form-group">
					<label>Product Name</label>
					<input type="text" name="product_name" class="form-control">
				</div>
				<div class="form-group">
					<label>Product Image</label>
					<input type="file" name="product_image" class="form-control">
					<p class="text-danger">
						<?php
						if(isset($_SESSION['msg']))
						{
							echo $_SESSION['msg'];
							unset($_SESSION['msg']);
						}

						?>
					</p>
				</div>
				<div class="form-group">
					<label>Product Category</label>
					<select class="form-control" name="product_category">
						<option>Select</option>
						<?php
						while($data=mysqli_fetch_assoc($result))
						{ ?>
							<option><?php echo $data['category_name']; ?></option>
						<?php
						}
						?>
					</select>
				</div>
				<div class="form-group">
					<label>Product Price</label>
					<input type="text" name="product_price" class="form-control">
				</div>
				<div class="form-group">
					<label>Discount</label>
					<input type="text" name="discount" class="form-control">
				</div>
				<div class="form-group">
					<label>Product Detail</label>
					<textarea class="form-control" name="detail"></textarea>
				</div>

			</div>
			<div class="card-footer">
				<input type="submit" value="Add" class="btn btn-primary">
			</div>
		</div>
		</form>
		</div>
		</div>
	</div>
</body>
</html>