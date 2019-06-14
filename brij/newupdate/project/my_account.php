<?php
include("db.php");
// print_r($_SESSION);
if (! isset($_SESSION['is_user_logged']))
{
	
	header("location:login.php");

}
include("header.php");

?>
<div class="conatiner-fluid" style="min-height: 600px;">
	<br/>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-5 offset-4">
				<span class="badge badge-success"><h3>Welcome to our website : <?php echo $_SESSION['name']; ?></h3></span>	
			</div>						
		</div>
	</div>
	<div class="container-fluid">
			<?php include("menuvar-top.php"); ?>
			
	</div>
</div>
<?php
include("footer.php");
?>