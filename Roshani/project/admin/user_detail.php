<?php
include("../dbcon.php");
if(!isset($_SESSION["is_user_log_logged_in"]))
{
header("../index.php");
}
include('admin_header.php');
$a =$_GET['uid'];
$query ="SELECT * FROM user WHERE id =$a";
$result = mysqli_query($conn , $query);
$data = mysqli_fetch_assoc($result);
?>
<div class="container" style="min-height: 600px">
	<h2>View User Details</h2>
<table class="table table-bordered table-dark"style="margin-top: 100px">
				<tr>
				<th> Full Name</th>
				<td><?php echo $data['full_name'];?></td>
			</tr>
			<tr>
				<th>Contact No</th>
				<td><?php echo $data['contact'];?></td>
			</tr>
			<tr>
				<th>User Id</th>
				<td><?php echo $data['username'];?></td>
			</tr>
			<tr>
				<th>Address</th>
				<td><?php echo $data['address'];?></td>
			</tr>
			<tr>
				<th>Gender</th>
				<td><?php echo $data['gender'];?></td>
			</tr>
			<tr>
				<th>City</th>
				<td><?php echo $data['city'];?></td>
			</tr>
			
		</table>	<div class="col-md-6 offset-md-3" >
		<div class="row">
			
</div>
</body>
</html>
