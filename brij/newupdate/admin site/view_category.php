<?php
session_start();
$con=mysqli_connect("localhost","root","password","user");

// print_r($_SESSION);
if(! isset($_SESSION['is_user_logged']))
{
	header("location:admin_login.php");
}


include("adminheader.php");
$query="SELECT * FROM category";
$result=mysqli_query($con,$query);

?>
<div class="container" style="min-height: 600px;">
	<div class="row">
		<div class="col-md-6 offset-md-4"><h2>View All Category</h2></div>
	</div>
		
		<div class="row">
			<div class="col-md-10 offset-md-1">
				<table class="table table-bordered table-dark">
					<tr>
						<th>S.No.</th>
						<th>Category Name</th>
						<td>Edit</td>
						<td>Delete</td>
					</tr>
					<?php

					while ($data=mysqli_fetch_assoc($result))
					 {?>
					 	<tr>
					 		<td><?php echo $data['id'];?></td>
					 		<td><?php echo $data['category_name']?></td>
					 		<td><a href="#" class="btn btn-warning btn-sm">Edit</a></td>
							<td><a href="#" class="btn btn-danger btn-sm">Delete</a></td>
					 	</tr>
					
					<?php }?>



				</table>
			</div>
		</div>
	</div>
</body>
</html>