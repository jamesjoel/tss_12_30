<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.js"></script>
	<script>
		$(document).ready(function(){
			$("button").click(function(){
				$("#box").animate({ "margin-left": "400px", "height":"200px", "width":"200px" }, 1000);
				$("#box").animate({ "margin-top": "400px" }, 1000);
				$("#box").animate({ "margin-left": "0px" }, 1000);
				$("#box").animate({ "margin-top": "0px", "height":"100px", "width":"100px" }, 1000);
			});
		});


	</script>
	<style type="text/css">
		#box{
			height: 100px;
			width: 100px;
			background-color: #58AB00;
			
		}
	</style>
</head>
<body>
<button>OK</button>
<div id="box"></div>
</body>
</html>