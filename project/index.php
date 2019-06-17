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
				<div class="row">
					<?php
					while($data_product=mysqli_fetch_assoc($result_product))
					{ 
						$p = $data_product['product_price'];
						$d = $data_product['discount'];
						$x = $p*$d/100;
						$discount_price = $p - $x;						

						?>


					<div class="col-md-4 col-6 mb-2 mt-2">
						<div class="card product">
							<div class="view-box">
							Quick View
							</div>
						  	<img class="card-img-top" src="admin/product_image/<?php echo $data_product['product_image']; ?>" alt="Card image" />
							  <div class="card-body">
							    <h4 class="card-title"><?php echo $data_product['product_name'] ?></h4>
							    <p class="card-text"><del>(<?php echo $data_product['product_price'] ?>)</del> <?php echo $discount_price; ?></p>
							    <a href="#" class="btn btn-outline-dark text-center d-block">Add to Cart</a>
							  </div>
						</div>
					</div>
					<?php 
					}
					?>



				</div>
			</div>
		</div>
	</div>
</div>
<?php
include("footer.php");
?>

