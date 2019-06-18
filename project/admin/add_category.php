<?php
include("../db.php");
if(! isset($_SESSION['is_admin_logged_in']))
{
	header("location:../index.php");
}
include("admin_header.php");
?>


	<div class="container" style="min-height: 600px;">
		<div class="row">
			<div class="col-md-6 offset-md-3">
		<h2>Add New Category</h2>
		<form action="save_category.php" method="post">
			
		<div class="card">
			<div class="card-header">
				<h3>Category Detail</h3>
			</div>
			<div class="card-body">
				<div class="form-group">
					<label>Category Name</label>
					<input type="text" name="category_name" class="form-control">
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