<?php
include("admin_db.php");
if(! isset($_SESSION['is_user_logged']))
{
	header("location:admin_login.php");
}

include("adminheader.php");


?>
<div class="container">
	<div class="row" style="height: 50px;"></div>
	<div class="col_md_4 offset-md-4 mr-4";>
		<h2>Add New Category</h2>	
	</div>
	<div class="col-md-6 offset-md-3">
		<form action="save_category.php" method="post">
			<div class="card">
				<div class="card-header ">
					<h3>Category Detail</h3>
				</div>
				<div class="card-body">
					<label>Category Name</label>
					<input class="form-control" type="text" name="category_name">
				</div>
				<div class="card-footer">
					<input class="bnt btn-primary" type="submit" value="ADD">
				</div>
			</div>

		</form>
	</div>
</div>