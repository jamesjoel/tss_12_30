<?php
include("dbcon.php");
/*session_start();*/ 
// // backdoor protaction code
if(! isset($_SESSION['is_user_logged_in']))
{
	header("location:login.php");
}
include("header.php");
include("slider.php");       
$a = $_SESSION['id'];
/*$b = $_SESSION['name'];*/
$query ="SELECT * FROM user WHERE id = $a";
$result = mysqli_query($conn , $query);
$data1 = mysqli_fetch_assoc($result);

       /* $_SESSION['contact']= $data['contact'];
		$_SESSION['username']= $data['username'];
		$_SESSION['address']= $data['address'];
		$_SESSION['gender']= $data['gender'];
		$_SESSION['city']= $data['city'];*/

?>
<div class="conatiner-fluid" style="min-height: 600px;">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<?php include("left-menu.php");?> </div>
			<div class="col-md-4">
				<h3>Welcome to our website : <?php echo $data1['full_name']; ?></h3>
			</div>
			<div class="container-fluid"style = "min-height: 500px">
				<table class="table table-bordered table-dark"style="margin-top: 100px">
				<tr>
				<th> Full Name</th>
				<td><?php echo $data1['full_name']; ?></td>
			</tr>
			<tr>
				<th>Contact No</th>
				<td><?php echo $data1['contact'];?></td>
			</tr>
			<tr>
				<th>User Id</th>
				<td><?php echo $data1['username'];?></td>
			</tr>
			<tr>
				<th>Address</th>
				<td><?php echo $data1['address'];?></td>
			</tr>
			<tr>
				<th>Gender</th>
				<td><?php echo $data1['gender'];?></td>
			</tr>
			<tr>
				<th>City</th>
				<td><?php echo $data1['city'];?></td>
			</tr>
			<tr><td><a href="edit_profile.php" class="btn btn-danger">Update Profile</a></td></tr>
			
		</table>
				
			</div>
			
		</div>
	</div>
</div>
<?php
include("footer.php");
?>

