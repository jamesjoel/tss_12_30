<?php
$con=mysqli_connect("localhost","root","password","user");
$result=mysqli_query($con,"SELECT * FROM category");
?>


<div class="row">
			<div class="col-sm-6 col-md-3 col-6">
				<ul class="list-group">
		                <?php
                     while($data=mysqli_fetch_assoc($result))
                     { ?>
                       <li class="list-group-item d-flex justify-content-between align-items-center">
				    <?php echo $data['category_name']; ?>
				    <span class="badge badge-primary badge-pill">0</span>
				  </li>
                   <?php }
		                ?>
					
				</ul>
			</div>
		