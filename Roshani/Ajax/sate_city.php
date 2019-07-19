<?php
$con = mysqli_connect('localhost','root','','project1');
$query ="SELECT * FROM state";
$result = mysqli_query($con, $query);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript"src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#state_dd").change(function(){
				var a = $(this).val();
				$.ajax({
					url : "getcity.php",
					type : "post",
					data : { stateid:a },
				    success : function(res){
				    	// alert(res);
				    	$("#city_dd").html(res);
				    }

				});

			});

		});
	</script>
</head>
<body>
	Select State<select id="state_dd">
		<option>select</option>
		<?php
				while($data=mysqli_fetch_assoc($result))
				{ ?>
					<option value="<?php echo $data['id']; ?>">
						<?php echo $data['state_name'];?></option>
				<?php 
				}
				?>
	</select>
	<Br/>
	<Br/>
	<Br/>
	<Br/>
	<Br/>
	<Br/>
	<Br/>
	<Br/>
	<Br/>
	<Br/>
	<Br/>
	<Br/>

Select City<select id="city_dd">
		<option>select city first</option>
	</select>

</body>
</html>