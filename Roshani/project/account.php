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
?>
<div class="conatiner-fluid" <!-- style="min-height: 600px; -->">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<h3>Welcome to our website : <?php echo $_SESSION['name']; ?></h3>						
			</div>
			<?php include("left-menu.php"); 

			?>
		</div>
	</div>
</div>
<?php
include("footer.php");
?>

