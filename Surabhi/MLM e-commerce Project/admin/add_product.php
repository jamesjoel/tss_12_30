<?php 
include('../dbconnection.php');
if(! isset($_SESSION['is_user_logged_in']))
{
	header("location:index.php");
}
include('header.php');
$query_cat="SELECT * FROM catagory";
$result_cat=mysqli_query($con, $query_cat);

?>

<div class="container-fluid mt-3">
	<div class="row">
		<div class="col-md-6 offset-3">
			<form action="add_product_save.php" method="post" enctype="multipart/form-data">

				<div class="card">
					<div class="card-header">
						<h3>Add Product</h3>
					</div>
					<div class="card-body bg-info text-white">
						<div class="form-group row">
							<label for="product" class="col-md-3 col-form-label">Product Name</label>
							<input type="text" id="product" name="product" placeholder="Enter Product Name" class="col-md-9 form-control">
						</div>
						<div class="form-group row">
							<p class="text-danger">
						<?php
						if(isset($_SESSION['msg']))
						{
							echo $_SESSION['msg'];
							unset($_SESSION['msg']);
						}

						?>
					</p>
							<label for="image" class="col-md-3 col-form-label">Product image</label>
							<input type="file" id="image" name="image" class="col-md-9 form-control">
						</div>

						<div class="form-group row">
							<label for="productCatagary" class="col-md-3 col-form-label">Catagry</label>
							<select name="catagry" id="productCatagary" class="col-md-9 form-control" >
								<option>Select Catagory</option>
							<?php
						while($data=mysqli_fetch_assoc($result_cat))
						{ ?>
							<option value="<?php echo $data['id']; ?>"><?php echo $data['catagory_name']; ?></option>
						<?php
						}
						?>
								
							</select>
						</div>

						<div class="form-group row">
							<label for="price" class="col-md-3 col-form-label">Price </label>
							<input type="text" id="price" name="price" placeholder="Enter Value" class="col-md-9 form-control">
						</div>

						<div class="form-group row">
							<label for="discount" class="col-md-3 col-form-label">Discount</label>
							<input type="text" id="discount" name="discount" placeholder="Enter Discount" class="col-md-9 form-control">
						</div>
						<div class="form-group row">
							<label for="detail" class="col-md-3 col-form-label">Detail</label>
							<textarea id="detail" name="detail" placeholder="Product descreption" class="col-md-9 form-control"></textarea>
						</div>
						
					</div>
					<div class="card-footer">
						<div class="form-group row  d-flex justify-content-around">
						<input type="submit" name="submit" value="submit" class="btn btn-light btn-outline-info col-md-4">
						<input type="close" name="reset" value="Reset" class="btn btn-light btn-outline-info col-md-4">
						</div>
					</div>
				</div><!-- card class -->
			</form>
		</div>
		</div>
	</div>
</div> <!-- container fluid closed -->
</body>
</html>