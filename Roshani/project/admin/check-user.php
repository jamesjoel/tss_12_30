<?php
include("../dbcon.php");
if(!isset($_SESSION["is_user_log_logged_in"]))
{
header("../index.php");
}
include('admin_header.php');
$query ="SELECT * FROM user";
$result = mysqli_query($conn , $query);
?>
<div class="container" style="min-height: 600px">
	<h2>View All Users</h2>
	<div class="col-md-6 offset-md-3" >
		<div class="row">
			<table class="table table-bordered table-dark"style="margin-top: 100px">
				<tr>
					<td>S.No</td>
					<td> Full Neme</td>
					<td>User Name</td>
					<td> contact</td>
					<td>View</td>
					<td>Status</td>
					<td>Delet</td>
				</tr>
				
					<?php
					$n=1;
					while ($data = mysqli_fetch_assoc($result))
					 {
						?>
					<tr>
						<td><?php echo $n ;?></td>
						<td><?php echo $data['full_name']?></td>
						<td><?php echo $data['username']?></td>
						<td><?php echo $data['contact']?></td>
						<td>
							<a href="user_detail.php?uid=<?php echo $data['id']?>" class="btn btn-danger btn-sm">Veiw</a>
						</td>
						<td><a href="#"class="btn btn-success btn-sm">Status</a></td>
						<td>
							<a href="user_del.php?uid=<?php echo $data ['id'];?>"class="btn btn-warning btn-sm">Delete</a>
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