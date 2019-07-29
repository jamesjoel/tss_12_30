
<?php
include("config.php");
 include("header.php");
// Backdoor protaction code ---- start
if(! isset($_SESSION['is_user_logged_in']))
{
   header("location:login.php");
}
// Backdoor protaction code ---- end
?>

	<div id="contant">
		<div id="inside_contant" class="wrapper">
					<b>
            welcome to our website &nbsp;<b><?php echo $_SESSION['name'] ; ?></b>
         </b>

		</div>
	</div>

<?php
include("footer.php");
?>