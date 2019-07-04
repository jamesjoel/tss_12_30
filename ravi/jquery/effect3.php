<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.js"></script>
	<script>
		$(document).ready(function(){
			$("button").click(function(){
				$("#box").css({ 
						"background-color" : "red", 
						"height": "400" 
					});
			});
		});


	</script>
	<style type="text/css">
		#box{
			height: 300px;
			width: 300px;
			background-color: #58AB00;
			
		}
	</style>
</head>
<body>
<button>OK</button>
<div id="box"></div>
</body>
</html>