<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript"src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("button").click(function(){
				$("#box").css({
					"background-color" : "red", 
						"height": "400",
						"width" :"400",
						"box-shadow" : "10px 10px 10px #000"
			});



			});

		});
	</script>
</head>
<body>
	<button>click</button>
	<div id="box"></div>

</body>
</html>