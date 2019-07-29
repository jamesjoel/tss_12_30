<?php
include("config.php");
include("header.php");

// Backdoor protaction code ---- start
if(! isset($_SESSION['is_user_logged_in']))
{
	header("location:login.php");
}
// Backdoor protaction code ---- end
$id = $_SESSION['id'];
$query = "SELECT * FROM pr1 WHERE id ='$id'";
$result =mysqli_query($con,$query);
$data = mysqli_fetch_assoc($result);
 
?>
<div id="content" >
		<div id="inside-content" class="wrapper">
			<b>
				welcome to my profile <b><?php echo $_SESSION['name'];?></b>
			</b>
			<br>
			<form>
				<table align="center" border="2" cellspacing="0" cellpadding="10">
					<tr>
						<td>fullname</td>
						<td><?php echo $data['full_name'];?></td>
					</tr>
					<tr>
						<td>username</td>
						<td><?php echo $data['username'] ;?></td>
						
					</tr>
					<tr>
						<td>password</td>
						<td><?php echo $data ['password'] ;?></td>
						
					</tr>
					<tr>
						<td>gender</td>
						<td><?php echo $data ['gender']?></td>
						
					</tr>
					<tr>
						<td>city</td>
						<td><?php echo $data ['city'] ;?></td>
						
					</tr>
					<tr>
						<td>contact</td>
						<td><?php echo $data ['contact']; ?></td>
						
					</tr>
					<tr>
						<td>address</td>
						<td><?php echo $data ['address'];?></td>
						
					</tr>
				</table>
				</form>
				<br>
				<a href="edit.php">Edit</a>
		</div>
	</div>
	<?php
	include("footer.php");
	?>