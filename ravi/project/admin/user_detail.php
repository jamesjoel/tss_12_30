<?php
include("../db.php");
if(! isset($_SESSION['is_admin_logged_in']))
{
	header("location:index.php");
}
include("admin_header.php");
$query = "SELECT * FROM user ";
$result = mysqli_query($con, $query);

?>


	<div class="container" style="min-height: 600px;">
		<h2>Product Details</h2>
		<table class="table table-dark">
			<tr>
				<th>Full Name</th>
				<td><?php echo $data['full_name'];?></td>
			</tr>
			<tr>
				<th>User name</th>
				<td><?php echo $data['username'];?></td>
			</tr>
			<tr>
				<th>Password</th>
				<td><?php echo $data['password'];?></td>
			</tr>
			<tr>
				<th>gender</th>
				<td><?php echo $data['gender'];?></td>
			</tr>
			<tr>
				<th>city</th>
				<td><?php echo $data['city'];?></td>
			</tr>
			<tr>
				<th>Address</th>
				<td><?php echo $data['address'];?></td>
			</tr>
			<tr>
				<th>Contact</th>
				<td><?php echo $data['contact'];?></td>
			</tr>
		</table>
	</div>
</body>
</html>