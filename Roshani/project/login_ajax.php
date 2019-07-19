<?php
include("dbcon.php");
include("header.php");
include("slider.php");
?>
<script type="text/javascript">
	$(document).ready(function(){
		$("#login_btn").click(function(){
			var u = $("#username").val();
			var p = $("#password").val();
			
			if(u=="")
			{
				$("#u_msg").html("enter your valid id");
			}
			else{
				$("#u_msg").html("");
			}
			if(p=="")
			{
				$("#p_msg").htmt("enter your valid password");
			}
			else{
				$("#p_msg").html("");
			}
			if (u!=="" && p!=="") {
				$.ajax({
					url : "Auth_ajax.php",
					type: "post"
					data: { username :u ,password:p},
					success: function(res){
						alert(res);
					}
				});
			}


		});







	});
	



</script>
<div class="container-fluid bg-info">
	<div class="row">
	<?php include 'left-menu.php';?>
		<div class="col-md-4 offet-md-4">
			<h1>USER LOGIN</h1>

		
			<div class="card">
				<div class="card-body bg-danger ">
					<div class="form-group">
						<input type="text" placeholder="user ID"class="form-control"name="user_name" id ="username">
						<small id="u_msg" class=" text-light"></small>
					</div>
					<div class="form-group">
						<input type="password" placeholder="password"class="form-control"name="pass" id = "password">
					<small id="p_msg" class=" text-light"></small></div>
				</div>
				<div class="card-footer">
					<input type="button" value="Login" class="btn btn-primary" id="login_btn">
					
							</div>
							
			</div>
		
		</div>
	</div>
		
</div>
<?php include 'footer.php';?>
