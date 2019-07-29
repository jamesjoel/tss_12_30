<?php
include("config.php");
include("header.php");

if(!isset($_SESSION['is_user_logged_in']))
{
  header("location:login.php");
}

$id = $_SESSION['id'];
$query = "SELECT * FROM pr1 WHERE id = '$id'";
$result=mysqli_query($con,$query);
$data = mysqli_fetch_assoc($result);

?>
<div id="content" >
		<div id="inside-content" class="wrapper">
			<form action="update.php" method="post">
				<table align="center" border="2" cellspacing="0" cellpadding="10" >
					<tr>
						<td>fullname</td>
						<td><input type="text" name="full_name" value="<?php echo $data['full_name'] ;?>"></td>
					</tr>
					<tr>
						<td>username</td>
						<td><input  disabled="disabled" type="text" name="username" value="<?php echo $data['username'];?>"></td>
					</tr>
					<tr>
						<td>gender</td>
						<td> 
							male<input <?php  if($data['gender']=='male'){ echo "checked='checked'" ;} ?> type="radio" name="gender" value="male">
							female<input <?php if($data['gender']=='female'){ echo "checked='checked'";}?> type="radio" name="gender" value="female"></td>
					</tr>
					<tr>
						<td>city</td>
						<td>
							<select name="city">
								<option >select</option>
								<option <?php if($data['city']=='indore'){echo "selected='selected'";}?> >indore</option>
								<option <?php if($data['city']=='pune'){ echo "selected='selected'";}?> >pune</option>
								<option <?php if($data['city']=='delhi'){ echo "selected='selected'";}?>>delhi</option>
								<option <?php if($data['city']=='kota'){ echo "selected='selected'";}?>>kota</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>contact</td>
						<td><input type="text" name="contact" value="<?php echo $data['contact'];?>"></td>
					</tr>
					
					

					<tr>
						<td>address</td>
						<td><textarea name="address"><?php echo $data['address'] ; ?></textarea></td>
					</tr>
					<tr>
						<td align="center" colspan="2"><input type="submit" name="submit" value="update" ></td>
					</tr>
				</table>

			</form>
			
		</div>
	</div>
	<?php
include("footer.php");
?>