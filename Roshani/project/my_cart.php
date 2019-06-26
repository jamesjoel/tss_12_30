<?php
 include("dbcon.php");
include("header.php");
include("slider.php");


?>
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
				// print_r($cart_arr);
// print_r($cart_arr);
				// die();
				foreach($cart_arr as $x)
				{ 
          $query_product = "SELECT * FROM save_product WHERE alias_id = '$x'";

        $result_product = mysqli_query($conn ,$query_product);

	    $data_cart = mysqli_fetch_assoc($result_product);
// die();
					?>
					<div class="card mb-4"><a href="cancel_mycart.php?pid=<?php echo $data_cart['alias_id']?>" class="close d-flex justify-content-end" style="color: red;">x</a>
						
						<div class="card-body">
					<?php
					        echo $data_cart['product_name'];
							 
							 ?>
								<div class="card-footer close"><?php echo $data_cart['price'];?></div>
							</div>
						
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
