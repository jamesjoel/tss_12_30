<?php
include("db.php"); 
// backdoor protaction code
if(!isset($_SESSION['is_user_logged_in']))
{
	header("location:login.php");
}
include("header.php");
include("slider.php");
?>
<script type="text/javascript">
	$(document).ready(function(){
		$(".img-thumbnail").click(function(){
			// alert();
			var a = $(this).attr("src");
			switch(a){
				case "themes/1.png" : $("#css_link").attr("href", "css/1.css");
										var b ="css/1.css";
										break;
				case "themes/2.png" : $("#css_link").attr("href", "css/2.css");
										var b ="css/2.css";
										break;
				case "themes/3.png" : $("#css_link").attr("href", "css/3.css");
										var b ="css/3.css";
										break;
				case "themes/main.png" : $("#css_link").attr("href", "css/style.css");
										var b ="css/style.css";
										break;
			}
			$.ajax({
				url : "update_theme.php",
				type : "post",
				data : {theme : b}
			});
		});
	});
</script>


<div class="conatiner-fluid" style="min-height: 600px;">
	<div class="container">
		<div class="row">
			<?php include("left-menu.php"); ?>
			<div class="col-md-9">
				<h3>All Themes</h3>				
				<div class="row">
					<div class="col-md-3">
						<img  class="img-thumbnail" src="themes/1.png">
					</div>
					<div class="col-md-3">
						<img class="img-thumbnail" src="themes/2.png">
					</div>
					<div class="col-md-3">
						<img class="img-thumbnail" src="themes/3.png">
					</div>
					<div class="col-md-3">
						<img class="img-thumbnail" src="themes/main.png">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
include("footer.php");
?>

