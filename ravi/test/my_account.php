<?php
include("db.php");
include("header.php");
include("slider.php");


if(!isset($_SESSION['is_user_logged_in'])){
	header("location:login.php");
}

?>


<div class="container-fluid content-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<p class="text-dark" style="text-align: center;">Wellcome to our website:<b><?php echo $_SESSION['name']?></b></p>
				
			</div>
		</div>
	</div>
</div>


<?php
include("footer.php");
?>