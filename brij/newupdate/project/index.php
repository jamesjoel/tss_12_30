<?php
include("header.php");
$con = mysqli_connect("localhost", "root", "password", "user");

$query_product="SELECT * FROM table_product";
$result_product=mysqli_query($con,$query_product);

?>
	<div id="div1" class="jumbotron bg-success ">
		<div class="row" style="height: 80px;"></div>
		<div class="row " style="height: 100px;"></div><br/><br/>
		<div class="row ">
			<div class="col-md-3 col-sm-3 col-3 offset-0 bg-light ml-4" style="height: 390px">
				<div class="row bg-light text-dark mt-2 ml-1" style="height: 50px;"><h4 style="font-weight: bold;">Under ₹400 | Free</h4></div>
				<div class="row bg-success ml-2" style="height: 150px; width: 92%;">
					<div class="col-md-6 col-sm-6 col-6 border border-dark" style="background-image: url(image/classnew21.jpg); background-size: 100% 100%;">
						
					</div>
					<div class="col-md-6 col-sm-6 col-6 border border-dark" style="background-image: url(image/classnew20.jpg); background-size: 100% 100%;"></div>
				
				</div><br/>
				<div class="row bg-dark ml-2" style="height: 150px; width: 92%;">
					<div class="col-md-6 col-sm-6 col-6 border border-dark" style="background-image: url(image/classnew31.jpg); background-size: 100% 100%;"></div>
					<div class="col-md-6 col-sm-6 col-6  border border-dark" style="background-image: url(image/classnew22.jpg); background-size: 100% 100%;"></div>
				
				</div>
			</div>
			<div class="col-md-4 col-sm-3 col-3  bg-light ml-5  " style="height: 390px">
				<div class="row bg-light text-dark mt-2 ml-1" style="height: 50px;"><h4 style="font-weight: bold;">Under ₹400 | Free</h4></div>

				<div class="row bg-success ml-2" style="height: 150px; width:92%; ">

					<div class="col-md-6 col-sm-6 col-6 border border-dark" style="background-image: url(image/classnew21e.jpg); background-size: 100% 100%;">
						
					</div>
					<div class="col-md-6 col-sm-6 col-6  border border-dark" style="background-image: url(image/classnew20e.jpg); background-size: 100% 100%;"></div>
				
				</div><br/>
				<div class="row bg-dark ml-2" style="height: 150px; width:92%;">
					<div class="col-md-6 col-sm-6 col-6  border border-dark" style="background-image: url(image/classnew31a.jpg); background-size: 100% 100%;"></div>
					<div class="col-md-6 col-sm-6 col-6  border border-dark" style="background-image: url(image/classnew32.jpg); background-size: 100% 100%;"></div>
				
				</div>
			</div>
			<div class="col-md-3 col-sm-3 col-3  bg-light    ml-5  " style="height: 390px" >
				<div class="row bg-light text-dark mt-2 ml-1" style="height: 50px;  "><h4 style="font-weight: bold;">Under ₹400 | Free</h4></div>
				<div class="row bg-success ml-2" style="height: 150px; width: 92%">
					<div class="col-md-6 col-sm-6 col-6 border border-dark" style="background-image: url(image/classnew21b.jpg); background-size: 100% 100%;">
						
					</div>
					<div class="col-md-6 col-sm-6 col-6  border border-dark" style="background-image: url(image/classnew20b.jpg); background-size: 100% 100%;"></div>
				
				</div><br/>
				<div class="row bg-dark ml-2" style="height: 150px; width: 92%;">
					<div class="col-md-6   col-sm-6 col-6   border border-dark" style="background-image: url(image/classnew27.jpg); background-size: 100% 100%;"></div>
					<div class="col-md-6  col-sm-6 col-6   border border-dark" style="background-image: url(image/classnew28.jpg); background-size: 100% 100%;"></div>
				
				</div>
			</div>
		</div>
	</div>
	<br/><br/><br/><br/><br/>
	<div style="clear: both;"></div><br/>
	
	</div><br/>
		<div class="container-fluid ">
			 <?php
			include("menuvar-bottom.php");
		?>
			 <!-- "this is my menuvar_bottom" -->
		
			
				<?php 
				while($my_data=mysqli_fetch_assoc($result_product))
				{  
					$r=$my_data['product_price'];
					$d=$my_data['discount'];
					$d=$r*$d/100;
					$p=$r-$d;
					?>
					<div class="col-sm-6 col-6 col-md-3 ">
					<div class="card">
				    <div class="card-header"><h3><span class="badge badge-success">Add Product</span></h3></div>
				    <div class="card-body" style="height: 220px; background-image: url(image/classu4.jpg); background-size: 100% 220px;">
				    </div>
				    <div class="card-footer"><center><p><b> <?php echo $my_data['product_name']; ?><br/></b></center>RS.<del><?php echo $r; ?></del> Jush&#8377;<?php echo $p; ?></p></div>
				</div>
			</div>
				<?php }
				?>
				

		    <div class="col-sm-6 col-6 col-md-3 ">
				
			</div>
	    </div>
	</div><br/>
	
	</div><br/>
	<div style="clear: both;"></div>
	<div class="container-fluid">
		<div  class="row" style="height: 100px;">
			<div class="col-md-4 col-sm-6 col-6 offset-md-5 offset-sm-4 offset-4"><h1>Latest Items</h1></div>
		</div>
		<div  class="row" style="height:500px; overflow: hidden;">
			<div id="div-item1" class="col-md-2 col-sm-3 col-4 clearfix  offset-md-1">
				<div class="card product ">
					<div class="view">
						Quet view
					        </div>
						<img class="card-img-top" src="image/class10b.jpg">
							
						<div class="card-body">
							<p class="text-dark"><b> smart look</b></p>
							<p class="text-success">form  &#x20B9; 450</p>
						</div>
				</div>
			</div>
				<div id="div-item2" class="col-md-2 col-sm-3 col-4 offset-md-2">
					<div class="card product">
					<div class="view">
						Quet view
					</div>
						<img class="card-img-top" src="image/class11.jpg">
						<div class="card-body">
							<p class="text-dark"><b> smart look</b></p>
							<p class="text-success">form  &#x20B9; 450</p>
						</div>
				</div>
			</div>
				<div id="div-item3" class="col-md-2 col-sm-3 col-4 offset-md-2">
					<div class="card product">
					<div class="view">
						Quet view
					</div>
						<img class="card-img-top" src="image/class12.jpg">
						<div class="card-body">
							<p class="text-dark"><b> smart look</b></p>
							<p class="text-success">form  &#x20B9; 450</p>
						</div>
				</div>
			</div>
		</div>

	</div><br/><br/>
	<div style="clear: both;"></div>
	<div class="container-fluid">
		<div class="row" style="height: 250px">
			<div class="col-md-8 col-sm-8 col-8 bg-dark" style="background-image: url(image/new8.jpg); background-size: 100% 100%"></div>
			<div class="col-md-3 col-sm-4 col-4 bg-success offset-md-1 " style="background-image: url(image/classdemo1.jpg); background-size: 100% 100%"></div>
		</div>

	</div>  
	<div style="clear: both;"></div>
	<br/><br/>
	<div class="container">
		<div class="row ">
		<div  class="col-md-10 offset-md-2 col-sm-12 col-12  "><br/><h3>The International Product Of Bombay</h3><br/></div>
		<br/>
		</div>
	</div>
	<div class="container bg-success" style="height: 420px;">
		<div class="row"style="height: 420px; background-image: url(image/21.jpg); background-size:100% 100%">>
		</div>
		
		
	</div><br/>
	<div class="container">
		<div class="row">
			<div class="col-md-10 offset-md-1" style="text-align:justify;">Photoshop is a popular web design tool. With it, you can create web design mock-ups that can later on be converted to a tutorials features top-notch techniques on how tofunctional HTML/CSS template.<br/><br/>

This collection of tutorials features top-notch techniques on how to create web design layouts using Photoshop.tutorials features top-notch techniques on how to
Photoshop is a popular web design tool. With it, you can create web design mock-ups that can later on be converted to a tutorials features top-notch techniques on how tofunctional HTML/CSS template.<br/><br/>

This collection of tutorials features top-notch techniques on how to create web design layouts using Photoshop.tutorials features top-notch techniques on how to
			</div>
		</div>
	</div><br/><br/>
	<!-- "this is my footer" -->
	 <?php
	include("footer.php");
	?>