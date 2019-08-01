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
  <a class="navbar-brand" href="#">TSS</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('home') ?>">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('home/about') ?>">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('home/contact') ?>">Contact</a>
      </li> 
      <?php
      if($this->session->userdata("is_user_logged_in"))
      { ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('user') ?>">Dashboard</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('user/profile') ?>">Profile</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('user/logout') ?>">Logout</a>
        </li>
      <?php
      }else{ ?>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('home/login') ?>">Login</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('home/signup') ?>">Signup</a>
      </li>
      <?php
      }
      ?>




    </ul>
  </div> 
</nav>
<div class="jumbotron jumbotron-fluid bg-info">
	<div class="container">
		<h2>The Stepping Stone</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
</div>
<?php
$this->load->view($pagename);
?>
<div class="container-fluid bg-danger">
  <h5 class="m-0 p-3 text-center text-light">
    This is Footer &copy; The Stepping Stone
  </h5>
</div>


</body>
</html>