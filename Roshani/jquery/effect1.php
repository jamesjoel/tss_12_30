<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript"src="jquery.js"></script>
	<script type="text/javascript">
		 $(document).ready(function(){
			$("button").click(function(){
				// $("#box").hide();
					// $("#box").show();
					// $("#box").slideUp(1000);
						// $("#box").slideDown(1000);
						// $("#box").fadeOut(1000);
							$("#box").fadeIn(2000);
			});


		});
	</script>
	<style type="text/css">
		#box{
			height: 400px;
			width: 400px;
			background-color: #ABCDEF;
			display: none;
	</style>
</head>
<body>
	<button>ok</button>
	<br>
	<br>
<br>
	<div id="box"></div>

</body>
</html>