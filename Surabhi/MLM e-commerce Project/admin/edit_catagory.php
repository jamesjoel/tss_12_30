<?php
include('../dbconnection.php');
include('backpro_admin.php');
include('header.php');
$a=$_GET['pid'];
$que_select="SELECT * FROM catagory WHERE id=$a";
$res_cat=mysqli_query($con, $que_select);
$data_cat=mysqli_fetch_assoc($res_cat);
?>


	<div class="container" style="min-height: 600px;">
		<div class="row">
			<div class="col-md-6 offset-md-3">
		<h2>Edit Category</h2>
		<form action="update_cat.php" method="post">
			
		<div class="card">
			<div class="card-header">
				<h3>Category Detail</h3>
			</div>
			<div class="card-body">
				<div class="form-group">
					<label>Category Name</label>
					<input type="text" name="catagory_name" class="form-control" value="<?php echo $data_cat['catagory_name']; ?>">
				</div>
				<input type="hidden" name="cat_id" class="form-control" value="<?php echo $data_cat['id'];?> ">
				

			</div>
			<div class="card-footer">
				<input type="submit" value="EDIT" class="btn btn-primary">
			</div>
		</div>
		</form>
		</div>

