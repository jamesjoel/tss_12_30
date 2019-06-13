<?php

include("adminheader.php");
?>
<div class="container-fluid">
	<div class="row" style="height: 100px;"></div>
	<div class="row">
		<div class="col-md-7 ">
			<form class="form-inline" action="save_admin.php" method="post">
                  <div class="form-group">
                  	<label for="text"><h5>Product Name</h5> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                  	<input class="form-control" type="text" name="product name"
                  	placeholder="Product Name">
                  </div>
                   <div class="form-group">
                  	<label for="text"><h5>Product category</h5>&nbsp;&nbsp;&nbsp;&nbsp;</label>
                  	<input class="form-control" type="text" name="product Category" placeholder="Product Category">
                  </div>
                  <div class="form-group">
                  	<label for="text"><h5>Product  Price</h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                  	<input class="form-control" type="text" name="product price" placeholder="Product Price">
                  </div>
                   <div class="form-group">
                  	<label for="text"><h5>Discount</h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                  	<input class="form-control" type="text" name="product discount" placeholder="Discount">
                  </div>
                   <div class="form-group">
                  	<label for="text"><h5>Product Details</h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                  	<input class="form-control" type="text" name="product Details" placeholder="Product Details">
                  </div>
		</div>


	</div>
	<div class="row">
		<div class="col-md-3 offset-md-2">
			 <div class="form-group">
                  	<label for="text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                  &nbsp;	<input class="form-control bg-success text-light" type="submit" >
              </div>
        </div>      
		</div>			
	</form>
</div>