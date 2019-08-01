<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("public/css/bootstrap.css");?>">
	<script type="text/javascript" src="<?php echo base_url("public/js/jquery.js") ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("public/js/bootstrap.bundle.js") ?>"></script>
</head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Admin Panel</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('admin/dash') ?>">Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('admin/view_users') ?>">View Users</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('admin/logout') ?>">Logout</a>
      </li>
      


    </ul>
  </div> 
</nav>
<div class="container" style="min-height: 500px">
<?php
$this->load->view($pagename);
?>
</div>
<div class="container-fluid bg-danger">
  <h5 class="m-0 p-3 text-center text-light">
    This is Footer &copy; The Stepping Stone
  </h5>
</div>


</body>
</html>