<?php
include("db.php");
include("header.php");
include("slider.php");

?>
<script type="text/javascript">
	$(document).ready(function(){
		$("#login-btn").click(function(){
			var u = $("#username").val();
			var p = $("#password").val();
			if(u=="")
			{
				$("#u_msg").html("Insert Username");

			}
			else{
				$("#u_msg").html("");

			}
			if(p=="")
			{
				$("#p_msg").html("Insert Password");

			}
			else{
				
				$("#p_msg").html("");
			}
			
			if(u!="" && p!="")
			{
				$.ajax({
					url : "ajax_auth.php",
					type : "post",
					data : {username : u, password : p},
					success : function(res){
						if(res==1)
						{	
							$("#success_msg").html("Login Successful, You are going to Your Account Page <b id='count'>5</b>");
							counter();
						}
						if(res==2)
						{
							$("#p_msg").html("You Are Disabled Now");
						}
						if(res==3)
						{
							$("#p_msg").html("Password is Incorrect");	
						}
						if(res==4)
						{
							$("#u_msg").html("Username is Incorrect");	
							$("#p_msg").html("Password is Incorrect");	

						}
					}
				})
			}

		});
	});
	var a = 5;
	function counter()
	{
		$("#count").html(a);
		a--;
		if(a==1)
		{
			window.location.href="my_account.php";
		}

		setTimeout("counter()", 1000);
	}


</script>
<div class="conatiner-fluid">
	<div class="container">
		<ul class="nav justify-content-center center-nav">
			<li class="nav-item">
				<a href="#" class="nav-link">New Arrival</a>
			</li>
			<li class="nav-item slash">
				/
			</li>
			<li class="nav-item">
				<a href="#" class="nav-link">Recommended</a>
			</li>
			<li class="nav-item slash">
				/
			</li>
			<li class="nav-item">
				<a href="#" class="nav-link">Best Seller</a>
			</li>
			
		</ul>
	</div>
</div>
<div class="conatiner-fluid">
	<div class="container">
		<div class="row">
			<?php include("left-menu.php"); ?>
			<div class="col-md-9">
			
				
			<h3>User Login</h3>
				<div class="row">
					<div class="col-md-8 offset-md-2">
						<div class="card mb-4 shadow">
							<div class="card-header">
								<h2>Login</h2>
							</div>
							<div class="card-body">
								<div class="form-group">
									<label>Username</label>
									<input type="text" class="form-control" id="username" name="username">
									<small id="u_msg" class=" text-danger"></small>
								</div>
								<div class="form-group">
									<label>Password</label>
									<input type="password" id="password" class="form-control" name="password">
									<small id="p_msg" class="text-danger"></small>
								</div>
								<p class="text-success" id="success_msg"></p>
							</div>
							<div class="card-footer">
								<input type="button" id="login-btn" value="Login" class="btn btn-primary">
						
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>
<?php
include("footer.php");
?>

