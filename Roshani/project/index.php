
	<?php
  include("dbcon.php");
   include ('header.php');
   include ('slider.php');
  $product_query = "SELECT *,save_product.id AS pid, save_product.alias_id as paid FROM save_product INNER JOIN category_nameid ON save_product.product_category= category_nameid.id";
   $pro_result = mysqli_query($conn, $product_query);
   ?>

<div class="container-fluid bg-info">
	<div class="row">
	<?php include 'left-menu.php';?>
		<div class="col-md-8">
			<div class="row ">
        <?php
          while($data_product = mysqli_fetch_assoc($pro_result))
          { 
            $p = $data_product['price'];
            $d = $data_product['discount'];
            $x = $p*$d/100;
            $discount_price = $p - $x;            
            ?>
				<div class="col-md-4">
					<div class="card mb-2"style="min-height: 400px">
    						<img class="card-img-top" height ="250" src="admin/photos/<?php echo $data_product['p_image']?>"style="width:100%;">
    						<div class="card-body ">
     							<div class="card-title"><h3><?php echo $data_product['product_name'] ?></h3><p><?php echo $data_product['category_name']?></p></div> 
     							 <del>(<?php echo $data_product['price'] ?><i class="fa fa-inr" aria-hidden="true"></i>)</del>
     							 <p><i class="fa fa-inr" aria-hidden="true"></i><?php echo $discount_price; ?></p>

  									<a href="add_to_cart.php?pid=<?php echo $data_product['paid']?>" class="btn btn-primary">Add to cart</a>
      								<a href="#" class="btn btn-primary float-right">Buy</a>
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
<?php include 'footer.php';?>