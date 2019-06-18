<?php
session_start();
$con=mysqli_connect("localhost","root","password","user");


// if (isset($_SESSION['is_user_logged'];))
//  {
//   header("location:admin_login.php");
// }
$query="SELECT * FROM category";
$result=mysqli_query($con,$query);


include("adminheader.php");

?>
<div class="container-fluid">
	<div class="row" style="height: 100px;"></div>
	<div class="row">
   <div class="col-md-6 offset-md-3">
    <h2>Add New Product</h2>
    <form action="save_admin.php" method="post">
      
    <div class="card">
      <div class="card-header">
        <h3>Product Detail</h3>
      </div>
      <div class="card-body">
        <div class="form-group">
          <label>Product Name</label>
          <input type="text" name="product_name" class="form-control">
        </div>
        <div class="form-group">
          <label>Product Category</label>
          <select class="form-control" name="product_category">
            <option>Select</option>
            <?php
            while ($data=mysqli_fetch_assoc($result)) 
            {?>
              <option><?php echo $data['category_name']?></option>
            
           <?php } ?>
            <option>Mobile</option>
            <option>Electronics</option>
            <option>Home Appliance</option>
          </select>
        </div>
        <div class="form-group">
          <label>Product Price</label>
          <input type="text" name="product_price" class="form-control">
        </div>
        <div class="form-group">
          <label>Discount</label>
          <input type="text" name="discount" class="form-control">
        </div>
        <div class="form-group">
          <label>Product Detail</label>
          <textarea class="form-control" name="detail"></textarea>
        </div>

      </div>
      <div class="card-footer">
        <input type="submit" value="Add" class="btn btn-primary">
      </div>
    </div>
    </form>
    </div>

	</div>
			
	</form>
</div>