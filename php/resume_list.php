<?php

$con = mysqli_connect("localhost", "admin", "admin", "tss_12_30");

$query = "SELECT * FROM resume";
$result = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border="1" align="center" width="300" cellspacing="0" cellpadding="10">
	<tr>
		<th>S.No.</th>
		<th>Name</th>
		<th>Download</th>
	</tr>
	<?php

	while($data=mysqli_fetch_assoc($result))
	{ ?>
		<tr>
			<td><?php echo $data['id']; ?></td>
			<td><?php echo $data['file_name']; ?></td>
			<td><a download href="resume/<?php echo $data['file_name']; ?>">Download</a></td>
		</tr>
	<?php 
	}
	?>
</table>
</body>
</html>