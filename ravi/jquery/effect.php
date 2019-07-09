<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.js"></script>
	<script>
		$(document).ready(function(){
			$("button").click(function(){
				// $("#box").hide();
				// $("#box").show();
				// $("#box").slideUp(2000);
				// $("#box").slideDown(2000);
				// $("#box").fadeOut(2000);
				$("#box").fadeIn(2000);
			});
		});


	</script>
	<style type="text/css">
		#box{
			height: 300px;
			width: 300px;
			background-color: #58ABCD;
			display: none;
		}
	</style>
</head>
<body>
<button>OK</button>
<div id="box"></div>
</body>
</html>