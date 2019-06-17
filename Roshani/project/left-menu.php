<?php

$query = "SELECT * FROM category_nameid";
$result = mysqli_query($conn , $query);
?>
		<div class="col-md-4">
			<ul class="nav flex-column">
				<li class="nav-item">
					<a href="#"class="d-flex justify-content-between align-items-center nav-link text-dark"> Category <span class="align-items-end badge-pill badge-danger">New</span></a>
				</li>
				<?php
				while ($data = mysqli_fetch_assoc($result)) 
				{
				?>
				<li class="nav-item">
					<a href="#"class="d-flex justify-content-between align-items-center nav-link text-dark"><?php echo $data['category_name']?>
						<span class="badge-pill badge-danger">0</span>
					</a>
				</li>
				<?php	
				}
				?>
				
				
			</ul>
		</div>
		