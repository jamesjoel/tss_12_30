<?php
include('../dbconnection.php');
include('backpro_admin.php');
include('header.php');
$user="SELECT * From user WHERE id=$_GET[uid]";
$result_user=mysqli_query($con, $user);
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
						<td>Status</td>
					</tr>
					<?php
					$n=1;
					while($data=mysqli_fetch_assoc($result_user))
					{ 
						?>
						<tr>
							<td><?php echo $data['id'];?></td>
							<td><?php echo $data['name'];?></td>
							<td><?php echo $data['username'];?></td>
							<td><?php echo $data['contact'];?></td>
							<td><?php
								if($data['status']==1)
								echo "<p class='text-success font-weight-bold'>Enable</p>" ;
							else 
							echo "<p class='text-danger font-weight-bold'>Disable</p>";					?>
						</tr>
					<?php 
					$n++;
					}

					?>



				</table>
			</div>
		</div>
	</div>
</body>
</html>