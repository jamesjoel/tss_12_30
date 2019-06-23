<?php

include("db.php");
include("header.php");
include("slider.php");
$query_product = "SELECT * FROM product";
$result_product = mysqli_query($con, $query_product);


// print_r(mysqli_fetch_assoc($result));
?>

<div class="conatiner-fluid">
	<div class="container">
		<ul class="nav justify-content-center center-nav">
			<li class="nav-item">
				<a href="#" class="nav-link">New Arrival</a>
			</li>
			<li class="nav-item slash">
				/
			</li>
			<li class="nav-item">
				<a href="#" class="nav-link">Recommended</a>
			</li>
			<li class="nav-item slash">
				/
			</li>
			<li class="nav-item">
				<a href="#" class="nav-link">Best Seller</a>
			</li>
			
		</ul>
	</div>
</div>
<div class="conatiner-fluid">
	<div class="container">
		<div class="row">
			<?php include("left-menu.php"); ?>
			<div class="col-md-9">
				<h3>Item In Your Cart</h3>
				<a href="clear_cart.php">Clear Cart</a>
				<?php
				$cart = $_COOKIE['cart'];
				$cart_arr = explode("#", $cart);
				foreach($cart_arr as $x)
				{ 
					$result_cart = mysqli_query($con, "SELECT * FROM product WHERE alias_id = '$x'");
					$data_cart = mysqli_fetch_assoc($result_cart);
					?>
					<div class="card mb-4">
						<div class="card-body"><?php echo $data_cart['product_name']; ?></div>
						<div class="card-footer"><?php echo $data_cart['product_price']; ?></div>
					</div>

				<?php
				}
				?>
			</div>
		</div>
	</div>
</div>
<?php
include("footer.php");
?>

