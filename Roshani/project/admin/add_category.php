<?php
include("../dbcon.php");
if (!isset($_SESSION["is_user_log_logged_in"]))
{
	header("location:../index.php");
}
include("admin_header.php");
?>
 <div class= "container" style="min-height:600px ">
 	<div class="row">
 		<div class=" col-md-6 offset-md-1">
 			<div class="card " style="margin:100px">
 				<div class="card-header"><h2>ADD Category</h2></div>
 				<div class="card-body">
 					<form action="save_cat.php" method="post">
 						<div class="form-group">
 							<label>Category Name</label>
 							<input type="text" name="category_name" class="form-control">
 						 </div>
 						 <div class="card-footer">
 						 	<input type="submit" value="ADD" class="btn btn-info">
 						 </div>
 					</form>
 			</div>
 		</div>
 		</div>
 	</div>
 </div>
