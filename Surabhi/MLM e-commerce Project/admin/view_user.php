<?php
include("../dbconnection.php");
include('backpro_admin.php');
include('header.php');
$user_query="SELECT * FROM User";
$user_res=mysqli_query($con, $user_query);
//$data=mysqli_fetch_assoc($user_res);
?>

	<div class="container" style="min-height: 600px;">
		<h2>View All Category</h2>
		<div class="row">
			<div class="col-md-10 offset-md-1">
				<table class="table table-bordered table-dark">
					<tr>
						<th>S.No.</th>
						<th>Full Name</th>
						<th>Username</th>
						<th>Contact</th>
						<td>View</td>
						<td>Status</td>
						<td>Delete</td>
					</tr>
					<?php
					while($data=mysqli_fetch_assoc($user_res))
					{ 
						if($data['status']==1)
						{
							$btn="<a href='change_sta.php?uid=".$data['id']."&status=".$data['status']."' class='btn btn-warning btn-sm'>Disable</a>";
						}
						else
						{
							$btn="<a href='change_sta.php?uid=".$data['id']."&status=".$data['status']."' class='btn btn-success btn-sm'>Enable</a>";
						}
						?>
						<tr>
							<td><?php echo $data['id'];?></td>
							<td><?php echo $data['name'];?></td>
							<td><?php echo $data['username'];?></td>
							<td><?php echo $data['contact'];?></td>
							<td><a href="user_detail.php?uid=<?php echo $data['id'];?>" class="btn btn-info btn-sm">View</a></td>
							<td><?php echo $btn; ?></td>
							<td><a href="user_del.php?uid=<?php echo $data['id'];?>" class="btn btn-danger btn-sm">Delete</a></td>
						</tr>
					<?php 
					}

					?>



				</table>
			</div>
		</div>
	</div>
</body>
</html>