<?php

include("adminheader.php");
?>
<div class="container-fluid">
	<div class="row" style="height: 100px;"></div>
	<div class="row">
    <div class="col-md-4 ">
			<form  action="save_admin.php" method="post">
                  <div class="form-group">
                  	<label for="text"><h5>Product Name</h5></label>
                  	<input class="form-control" type="text" name="product name"
                  	placeholder="Product Name">
                  </div>
                   <div class="form-group">
                  	<div class="dropdown">
                     <button type="button" class="btn btn-light border  dropdown-toggle" data-toggle="dropdown" style="width: 280px;">Product category</button> 
                     <div class="dropdown-menu">
                       <a  class="dropdown-item" href="#">ELECTRONIC ITEM</a>
                       <a  class="dropdown-item" href="#">CLOTH STORE</a>
                       <a  class="dropdown-item" href="#">SPORT MATERIAL</a>     
                       <a  class="dropdown-item" href="#">MORE</a>
                     </div>
                    </div>
                  </div>
                  <div class="form-group">
                  	<label for="text"><h5>Product  Price</h5></label>
                  	<input class="form-control" type="text" name="product price" placeholder="Product Price">
                  </div>
                   <div class="form-group">
                  	<label for="text"><h5>Discount</h5></label>
                  	<input class="form-control" type="text" name="product discount" placeholder="Discount">
                  </div>
                   <div class="form-group">
                  	<label for="text"><h5>Product Details</h5></label>
                  	<input class="form-control" type="text" name="product Details" placeholder="Product Details">
                  </div>
		</div>


	</div>
	<div class="row">
		<div class="col-md-3 offset-md-1">
			 <div class="form-group">
                  	<label for="text"></label>
                  	<input class="form-control bg-success text-light" type="submit" >
              </div>
        </div>      
		</div>			
	</form>
</div>