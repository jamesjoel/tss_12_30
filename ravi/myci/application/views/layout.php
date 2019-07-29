

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title ;?></title>
</head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url("public/css/style2.css") ;?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url("public/css/bootstrap.css");?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url("public/css/font-awesome.css");?>">
<script type="text/javascript" src= "<?php echo base_url("public/js/bootstrap.bundle.js");?>"></script>
<script type="text/javascript" src="<?php echo base_url("public/js/jquery.js");?>"></script>
<body>
	<div class="container-fluid header-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<p class=" text-light">Indore best website</p>
			</div>
			<div class="col-md-6">
				<ul class="nav justify-content-end">
					<?php
      if($this->session->userdata("is_user_logged_in"))
      { ?>
        <li class="nav-item">
          <a class="nav-link text-light" href="<?php echo site_url('user') ?>">Dashboard</a>
        </li>
         <li class="nav-item">
          <a class="nav-link text-light" href="<?php echo site_url('user/profile') ?>">Profile</a>
        </li>
         <li class="nav-item">
          <a class="nav-link text-light" href="<?php echo site_url('user/logout') ?>">Logout</a>
        </li>
      <?php
      }else{ ?>

                    <li class="nav-item">
						<a href="<?php echo site_url("home/login");?>" class="nav-link text-light">Login <i class="fa fa-lock"></i></a>
					</li>
					<li class="nav-item">
						<a href="<?php echo site_url('home/signup')?>" class="nav-link text-light" >Signup <i class="fa fa-user"></i></a>
					</li>
					 <?php
                       }
                     ?>

				</ul>
			</div>
			
		</div>
	</div>
</div>
<nav class="navbar navbar-expand-md header-bg navbar-dark sticky-top ">
		<a href="#" class="navbar-brand">The best shoping site.....</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mymenu">
			<span class="navbar-toggler-icon"></span>
		</button>
	<div id="mymenu"  class="collapse navbar-collapse">
			<ul class=" navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url("home");?>" >Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url('home/about');?>" >About</a>
				</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo site_url('home/contact');?>" >Contact</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#" >Help</a>
			</li>
		</ul>
		
	</div>
</nav>
<div class="jumbotron jumbotron-fluid slider-bg "></div>
<?php

$this->load->view($pagename);
?>
<div class="container-fluid footer-bg ">
	<div class="container">
		<div class="row">
			<div class="col-md-6 text-light mt-4 ">
				<h4>My shopping site</h4>
				<p>Sudama nagar indore (m.p.)
				<br><i class="fa fa-phone">8889402861</i></p>
				
			</div>
			 
		
		</div>
	</div>
</div>
</body>
</html>