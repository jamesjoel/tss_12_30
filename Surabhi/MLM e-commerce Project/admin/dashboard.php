<?php 
include('../dbconnection.php');
if(!isset ($_SESSION['is_user_logged_in']))
{
	header('location:index.php');
}
include('header.php');
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-8 offset-2 col-sm-8 offset-sm-2 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
			<div class="card">
				<div class="card-header">
					<H1>Welocme <?php $_SESSION['name']; ?>
					</H1>
				</div>
			</div>
		</div><!--  form catagary end -->
	</div>
</div>
</body>
</html> 