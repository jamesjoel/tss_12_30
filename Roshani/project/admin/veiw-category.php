<?php
include("../dbcon.php");
if(!isset($_SESSION["is_user_log_logged_in"]))
{
header("..index.php");
}
include('admin_header.php');
$query ="SELECT * FROM category_nameid";
$result = mysqli_query($conn , $query);
?>



<div class="container" style="min-height: 600px">
	<h2>View All CAtegory</h2>
	<div class="row" >
		<div class="col-md-6 offset-md-1">
			<table class=" table table-dark table-bordered" style=" margin:100px">
				<tr>
					<th>S.No.</th>
					<th>Category Name</th>
					<th>Edit</th>
					<th>Delet</th>
				</tr>
				<?php
				$n = 1;
				while ($data = mysqli_fetch_assoc($result)) 
				{
					?>
					<tr>
					<td><?php echo $n;?></td>
					<td><?php echo $data['category_name'];?></td>
					<td><a href="edit_cate.php?"class="btn btn-danger btn-sm">Edit</a></td>
					<td>
						<a href="cat_delete.php?cid=<?php echo $data['id'];?>"class=" btn btn-warning btn-sm">Delete</a>
					</td>
				</tr>
			<?php
			$n++;
				}
				?>
				
			</table>
		</div>
	</div>
</div>
