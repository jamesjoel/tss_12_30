<?php
$result = mysqli_query($con, "SELECT * FROM category");
?>
<div class="col-md-3">
				<ul class="list-group">
					<?php
					while($data=mysqli_fetch_assoc($result))
					{ ?>

				  <li class="list-group-item d-flex justify-content-between align-items-center">
				    <a href="index.php?category=<?php echo $data['id']; ?>"><?php echo $data['category_name']; ?></a>
				    <span class="badge badge-dark badge-pill">0</span>
				  </li>
					<?php
					}
					?>
				 
				</ul>
			</div>