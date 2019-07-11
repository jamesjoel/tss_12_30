<?php
$con = mysqli_connect("localhost", "root", "password", "tss_12_30");

$query = "SELECT * FROM state";
$res = mysqli_query($con, $query);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#state_dd").change(function(){
				var a = $(this).val();
				$.ajax({
					url : "getcity.php",
					type : "post",
					data : { stateid : a},
					success : function(res){
						//alert(res);
						$("#city_dd").html(res);
					}
				});
			});
		});
	</script>
</head>
<body>
<br />
<br />
Select State <select id="state_dd">
				<option>Select</option>	
				<?php
				while($data=mysqli_fetch_assoc($res))
				{ ?>
					<option value="<?php echo $data['id']; ?>"><?php echo $data['state_name'];?></option>
				<?php 
				}
				?>
			</select>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
Select City <select  id="city_dd">
				<option>Select State First</option>
			</select>
</body>
</html>