<?php
include("../db.php");
if(! isset($_SESSION['is_admin_logged_in']))
{
	header("location:index.php");
}
include("admin_header.php");

$a = $_GET['id'];


$query = "SELECT * FROM category";
$result = mysqli_query($con, $query);



$que_pro = "SELECT * FROM product WHERE id= $a";
$result_pro = mysqli_query($con, $que_pro);
$data_pro = mysqli_fetch_assoc($result_pro);
?>


	<div class="container" style="min-height: 600px;">
		<div class="row">
			<div class="col-md-6 offset-md-3">
		<h2>Update Product</h2>
		<form action="update_product.php" method="post" enctype="multipart/form-data">
			
		<div class="card">
			<div class="card-header">
				<h3>Product Detail</h3>
			</div>
			<div class="card-body">
				<div class="form-group">
					<label>Product Name</label>
					<input type="text" name="product_name" class="form-control" value="<?php echo $data_pro['product_name'] ?>">
				</div>
				<div class="form-group">
					<label>Current Image</label>
					<img src="product_image/<?php echo $data_pro['product_image'] ?>" height="50" width="50">
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
						{ 
							if($data['id']==$data_pro['product_category'])
							{ ?>
								<option selected="selected" value="<?php echo $data['id']; ?>"><?php echo $data['category_name']; ?></option>
 
							<?php }
							else
							{ ?>
								<option value="<?php echo $data['id']; ?>"><?php echo $data['category_name']; ?></option>

							<?php }

							?>
						<?php
						}
						?>
					</select>
				</div>
				<div class="form-group">
					<label>Product Price</label>
					<input type="text" name="product_price" class="form-control" value="<?php echo $data_pro['product_price'] ?>">
				</div>
				<div class="form-group">
					<label>Discount</label>
					<input type="text" name="discount" class="form-control" value="<?php echo $data_pro['discount'] ?>">
				</div>
				<div class="form-group">
					<label>Product Detail</label>
					<textarea class="form-control" name="detail"><?php echo $data_pro['detail']; ?></textarea>
				</div>

			</div>
			<div class="card-footer">
				<input type="submit" value="Update" class="btn btn-primary">
			</div>

			<input type="hidden" name="id" value="<?php echo $data_pro['id'] ?>" />
		</div>
		</form>
		</div>
		</div>
	</div>
</body>
</html>