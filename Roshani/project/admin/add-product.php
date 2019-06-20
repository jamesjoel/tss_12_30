<?php
include("../dbcon.php");
if(!isset($_SESSION['is_user_log_logged_in']))
{
	header("location:../index.php");
}
include("admin_header.php");
$query = "SELECT * FROM category_nameid";
$result = mysqli_query($conn, $query);
?>

		
<div class="container bg-danger">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<form action="save.php" method="post"enctype="multipart/form-data">
					<div class="card" style="margin-top:100px">
						<div class="card-header"><h2>Add Product</h2></div>
						<div class="card-body">
							<div class="form-group">
								<label>Product Name</label>
								<input type="text" name="p_name"class="form-control">
							</div>
							<div class="form-group">
								<label>Product image</label>
								<input type="file" name="p_image"class="form-control">
								<p class="text-danger">
								<?php
								if (isset($_SESSION['msg']))
								{
									echo $_SESSION['msg'];
									unset($_SESSION['msg']);
								}
								?>
								</p>
							</div>
							<div class="form-group">
								<label>Product Category</label>
								<select class="form-control" name="c_name">
									<option>Select</option>
									<?php
									while ($data = mysqli_fetch_assoc($result)) 
									{
									?>
									 <option value="<?php echo $data['id']; ?>"><?php echo $data['category_name']; ?></option>
									 <?php
									}
									?>
								</select>
							</div>
							<div class="form-group">
								<label>Price</label>
								<input type="text" name="price"class="form-control">
							</div>
							<div class="form-group">
								<label>Discount</label>
								<input type="text" name="discount"class="form-control">
							</div>
							<div class="form-group">
								<label>Details</label>
								<textarea class="form-control"name="detail"></textarea>
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