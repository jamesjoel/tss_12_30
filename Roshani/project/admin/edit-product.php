<?php
include("../dbcon.php");
if(!isset($_SESSION['is_user_log_logged_in']))
{
	header("location:../index.php");
}
include("admin_header.php");
$a = $_GET['id'];
// print_r($_GET);
// die();
$query = "SELECT * FROM category_nameid";
$result = mysqli_query($conn, $query);

$query_pro = "SELECT * FROM save_product WHERE id = $a";
$result_pro = mysqli_query($conn , $query_pro);
$data_pro = mysqli_fetch_assoc($result_pro);

?>
		
<div class="container bg-danger">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<form action="update-product.php" method="post" enctype="multipart/form-data">
					<div class="card" style="margin-top:100px">
						<div class="card-header"><h2>Add Product</h2></div>
						<div class="card-body">
							<div class="form-group">
								<label>Product Name</label>
								<input type="text" name="p_name"class="form-control" value="<?php
								echo $data_pro['product_name'];?>">
							</div>
							<div class="form-group">
					<label>Current Image</label>
					<img src="photos/<?php echo $data_pro['p_image'] ?>" height="50" width="50">
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
						if($data['id']==$data_pro['product_category'])
									{?>
									 <option selected = "selected"value="<?php echo $data['id']; ?>"><?php echo $data['category_name']; ?></option>
									 <?php
									}
									else{
										?><option value="<?php echo $data['id']; ?>"><?php echo $data['category_name']; ?></option>


										<?php
									}
									?>
									<?php 
								}
								?>
								</select>
							</div>
							<div class="form-group">
								<label>Price</label>
								<input type="text" name="price"class="form-control"value="<?php echo $data_pro['price'] ?>">
							</div>
							<div class="form-group">
								<label>Discount</label>
								<input type="text" name="discount"class="form-control"value="<?php echo $data_pro['discount'] ?>">
							</div>
							<div class="form-group">
								<label>Details</label>
								<textarea class="form-control" name="detail"><?php echo $data_pro['detail'] ?></textarea>
							</div>

						</div>

						<div class="card-footer">
							<input type="submit" value="Update" class="btn btn-primary">
							
						</div>
						<input type="hidden" name="p_id"class="form-control" value="<?php echo $data_pro['id']?>">
						<input type="hidden" name="oldname"value="<?php echo $data_pro['p_image']?>">
					</div>
				</form>
				
			</div>
		</div>
	</div>

</body>
</html>