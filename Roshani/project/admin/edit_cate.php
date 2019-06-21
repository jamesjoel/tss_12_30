<?php
include("../dbcon.php");
if (!isset($_SESSION["is_user_log_logged_in"]))
{
	header("location:../index.php");
}
include("admin_header.php");

$a = $_GET['id'];

// print_r($_GET);
// die();
$query = "SELECT * FROM category_nameid where id = $a";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);

?>
 <div class= "container" style="min-height:600px ">
 	<div class="row">
 		<div class=" col-md-6 offset-md-1">
 			<form action="update_cate.php" method="post">
 			<div class="card " style="margin:100px">
 				<div class="card-header"><h2>Update Category</h2></div>
 				<div class="card-body">
 						<div class="form-group">
 							<label>Category Name</label>
 							<input type="text" name="category_name" class="form-control" value="<?php echo $data['category_name'];?>">
 						 </div>
 						 <input type="hidden" name="c_id" class = form-control value = "<?php echo $data['id'];?>">

 						 <div class="card-footer">
 						 	<input type="submit" value="Update" class="btn btn-info">
 						 </div>
 						 
 					</form>
 			</div>
 		</div>
 		</div>
 	</div>
 </div>
