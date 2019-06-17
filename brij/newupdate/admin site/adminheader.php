<?php
// print_r($_SERVER);
$url=$_SERVER['REQUEST_URI'];
?>


<!DOCTYPE html>
<html>
<head>
	<title>admin</title>

	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" type="text/css" href="css/adminstyle.css">
	<link rel="stylesheet" type="text/css" href="">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row bg-success">
			<div class="col-md-8 offset-md-1">
				<h4 class="mt-2"><a class="text-light " href="#">Admin site</a>
				</h4>
			</div>
			<h4><div class="col-md-4 "><span class="badge badge-primary mt-2">from $ 16.5/m</span></div></h4>
		</div>
	</div>
  <nav class="navbar  navbar-expand-sm bg-primary navbar-dark sticky-top justify-content-center">
    <a class="navbar-brand" href="#">
      <img src="image/h10.jpg" style="width: 80px;">
    </a>
  
  <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#idtarget">
      <span class="navbar-toggle-icon"><i class="fa fa-bars" aria-hidden="true"></i> The Best product </span>
    </button>
    <div class="collapse navbar-collapse justify-content-center " id="idtarget"  >
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="index.php" class="nav-link text-light navbar_link mr-4 nav_link_admin" >Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light navbar_link mr-4 nav_link_admin" href='login.php' data-toggle="modal" data-target="#myModal">login</a>
         </li>
        <li class="nav-item">
          <a class="nav-link text-light navbar_link mr-4 nav_link_admin" href="#" data-toggle="modal" data-target="#myModal">about</a>
         </li>
         <li class="nav-item">
          <a class="nav-link text-light navbar_link nav_link_admin mr-4" href="#" data-toggle="modal" data-target="#myModal">Help</a>
         </li>
     </ul>
 </div>
</nav>
<div class="container-fluid">
	<div class="row bg-dark ">
		<ul class="nav justify-content-center"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<li class="nav-item">
			<a class="nav-link nav_link_admin <?php if(strstr($url,'Dachboard.php')){ echo "nav_link_admin_active";} ?>" href="#">Dachboard</a>
		</li>
		<li class="nav-item">
			<a class="nav-link nav_link_admin  <?php if(strstr($url,'add_product.php')) { echo "nav_link_admin_active";} ?>" href="add_product.php">Add Product</a>
		</li>
		<li class="nav-item">
			<a class="nav-link nav_link_admin <?php if(strstr($url,'view_product.php')) { echo "nav_link_admin_active";} ?>" href="admin_view_product.php">View Product</a>
		</li>
		<li class="nav-item">
			<a class="nav-link nav_link_admin  <?php if(strstr($url,'add_category.php')) { echo "nav_link_admin_active";} ?>" href="add_category.php">Add Category</a>
		</li>
		<li class="nav-item">
			<a class="nav-link nav_link_admin" href="#">View Category</a>
		</li>
		<li class="nav-item">
			<a class="nav-link nav_link_admin" href="#">View User</a>
		</li>
		</li>
		<li class="nav-item"> 
			<a class="nav-link nav_link_admin" href="#">Setting</a>
		</li>
		<li class="nav-item">
			<a class="nav-link nav_link_admin" href="#">Logout</a>
		</li>
	</ul>
	

</div>
	
</div>