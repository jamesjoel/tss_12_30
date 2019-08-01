
<div class="container mt-4 pt-3">
  <div class="row">

    <div class="col-md-10 offset-md-1">
      <h2 class="text-center">View All User</h2>      
      <table class="table table-dark table-hover table-bordered">
      	<tr>
      		<th>S.No.</th>
      		<th>Full Name</th>
      		<th>Username</th>
      		<th>Contact</th>
      		<th>Status</th>
      		<th>Change</th>
      	</tr>
      	<?php
      	$n=1;
      	foreach($result->result_array() as $data)
      	{ 
      		if($data['status']==1)
      			$a = "Enable";
      		else
      			$a = "Disable";

      		?>
      		<tr>
      			<td><?php echo $n; ?></td>
      			<td><?php echo $data['full_name']; ?></td>
      			<td><?php echo $data['username']; ?></td>
      			<td><?php echo $data['contact']; ?></td>
      			<td><?php echo $a; ?></td>
      			<td><a href="<?php echo site_url('admin/change_status/'.$data['id'].'/'.$data['status']) ?>" class="btn btn-sm btn-info">Change</a></td>
      		</tr>
      	<?php 
      	$n++;
      	}
      	?>
      </table>
    </div>
  </div>
</div>
