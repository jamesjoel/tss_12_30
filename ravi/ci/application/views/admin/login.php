<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("public/css/bootstrap.css");?>">
	<script type="text/javascript" src="<?php echo base_url("public/js/jquery.js") ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("public/js/bootstrap.bundle.js") ?>"></script>
</head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="#">Admin Panel</a>


</nav>
<div class="container mt-4 pt-3">
  <div class="row">

    <div class="col-md-4 offset-md-4">
      <form action="<?php echo site_url('admin/auth') ?>" method="post">
        
      <div class="card">
        <div class="card-header">Admin Login</div>
        <div class="card-body">
          <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control">
          </div>
        </div>
        <div class="card-footer">
          <input type="submit" class="btn btn-dark" value="Login">
        </div>
        <p class="text-danger text-center">
          <?php echo $this->session->flashdata("msg"); ?>
        </p>
      </div>
      </form>
    </div>
  </div>
</div>



</body>
</html>