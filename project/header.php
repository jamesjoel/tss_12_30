<?php
if(isset($_COOKIE['cart']))
{
	$cart = $_COOKIE['cart'];
	$cart_arr = explode("#", $cart);
	$total_item = count($cart_arr);
	

}
else
{
	$total_item = 0;
}
$url = $_SERVER['REQUEST_URI'];

$theme_name="css/style.css";

if(isset($_SESSION['is_user_logged_in']))
{
	$theme_res = mysqli_query($con, "SELECT * FROM user WHERE id = ".$_SESSION['id']);
	$theme_arr = mysqli_fetch_assoc($theme_res);

	$theme_name=$theme_arr['theme'];
}


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"> 
	<link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css"> 
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.css"> 
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link id="css_link" rel="stylesheet" type="text/css" href="<?php echo $theme_name; ?>">
	
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.bxslider.js"></script>
	<script type="text/javascript" src="js/jquery-ui.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
	<?php
	$get_all_obj = mysqli_query($con, "SELECT * FROM product");

	$str="";
	while($get_all_data=mysqli_fetch_assoc($get_all_obj))
	{
		$str .= "'".$get_all_data['product_name']."',";
	}

	$new_str = rtrim($str, ",");


	?>
	<script type="text/javascript">
		$(document).ready(function(){
			var arr =  [ <?php echo $new_str ?>];



			$( "#q" ).autocomplete({
      			source: arr
    		});


    		
		});
	</script>
</head>
<body>
	<div class="conatiner-fluid header-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-12 col-sm-12">
					<p class="text-light pt-2">Indore Best Shopping Site...</p>
				</div>
				<div class="col-md-6 col-12 col-sm-12">
					<ul class="nav justify-content-end">
						<?php
						if(isset($_SESSION['is_user_logged_in']))
						{ ?>

							<li class="nav-item">
								<a href="my_account.php" class="nav-link text-light">My Account <i class="fa fa-lock"></i></a>
							</li>
							<li class="nav-item">
								<a href="my_profile.php" class="nav-link text-light">My Profile </a>
							</li>
							<li class="nav-item">
								<a href="theme.php" class="nav-link text-light">Themes </a>
							</li>
							<li class="nav-item">
								<a href="logout.php" class="nav-link text-light">Logout <i class="fa fa-user"></i></a>
							</li>



						<?php
						}
						else
						{ ?>

							<li class="nav-item">
								<a href="login.php" class="nav-link text-light">Login <i class="fa fa-lock"></i></a>
							</li>
							<li class="nav-item">
								<a href="signup.php" class="nav-link text-light">Signup <i class="fa fa-user"></i></a>
							</li>


						<?php
						}
						?>




						
					</ul>
				</div>

			</div>
		</div>
	</div>
<nav class="navbar navbar-expand-sm header-bg navbar-dark sticky-top">
	<a href="index.php" class="navbar-brand">My Shopping Site</a>
	<button class="navbar-toggler" data-toggle="collapse" data-target="#mymenu">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div id="mymenu" class="collapse navbar-collapse">
		<ul class="navbar navbar-nav">
			<li class="nav-item">

				<a href="index.php" class="nav-link <?php if(strstr($url, "index.php")){ echo "nav-link-active"; } ?>">Home</a>
			</li>
			<li class="nav-item">
				<a href="about.php" class="nav-link <?php if(strstr($url, "about.php")){ echo "nav-link-active"; } ?>">About</a>
			</li>
			<li class="nav-item">
				<a href="contact.php" class="nav-link <?php if(strstr($url, "contact.php")){ echo "nav-link-active"; } ?>">Contact</a>
			</li>
			<li class="nav-item">
				<a href="help.php" class="nav-link <?php if(strstr($url, "help.php")){ echo "nav-link-active"; } ?>">Help</a>
			</li>
		</ul>
		<ul class="navbar navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="my_cart.php">My Cart (<?php echo $total_item; ?>)</a>
			</li>
		</ul>
	</div>
	<form class="form-inline" action="index.php" method="get">
	<div class="form-group">
		<input type="text" id="q" placeholder="Keyword" class="form-control" name="q">
		<input type="submit" value="Search" class="btn btn-dark">
	</div>
	</form>
</nav>