<?php
include("../db.php");
if(! isset($_SESSION['is_admin_logged_in']))
{
	header("location:../index.php");
}
include("admin_header.php");
?>


	<div class="container" style="min-height: 600px;">
		<h2>Welcome to Admin Area</h2>
	</div>
</body>
</html>