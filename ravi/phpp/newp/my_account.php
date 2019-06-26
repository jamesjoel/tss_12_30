<?php
include("db.php"); 
// backdoor protaction code
if(! isset($_SESSION['is_user_logged_in']))
{
	header("location:login.php");
}
include("header.php");
include("slider.php");
$a = $_SESSION['id'];
$query = "SELECT * FROM user WHERE id=$a";
$result1 = mysqli_query($con, $query);
$data1 = mysqli_fetch_assoc($result1);
// print_r($data);
?>
<div class="container-fluid" style="min-height: 600px;">
	<div class="container">
		<div class="row">
			<?php include("left-menu.php"); ?>
			<div class="col-md-9">
				<h3>Welcome to our website : <?php echo $_SESSION['name']; ?></h3>
               <h2>User Details</h2>
               

         <table class="table table-dark">
			
			<tr>
				<th>Full Name</th>
				<td><?php echo $data1['full_name'];?></td>
			</tr>
			<tr>
				<th>User name</th>
				<td><?php echo $data1['username'];?></td>
			</tr>
			
			<tr>
				<th>gender</th>
				<td><?php echo $data1['gender'];?></td>
			</tr>
			<tr>
				<th>city</th>
				<td><?php echo $data1['city'];?></td>
			</tr>
			<tr>
				<th>Address</th>
				<td><?php echo $data1['address'];?></td>
			</tr>
			<tr>
				<th>Contact</th>
				<td><?php echo $data1['contact'];?></td>
			</tr> 
			<tr>
				<td><a href="edit_user.php?id=<?php echo $data1['id']; ?>" class="btn btn-warning btn-sm">Edit</a></td>
			</tr>
				                 
			
	</table>
		

			</div>
		</div>
	</div>
</div>
<?php
include("footer.php");
?>



