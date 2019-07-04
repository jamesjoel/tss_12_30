<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("a").click(function(){
				$("#box").animate({ "margin-left":"400","height":"200","width":"200"},1000);
				$("#box").animate({ "margin-top":"400"},1000);
				$("#box").animate({ "margin-left":"0px"},1000);
				$("#box").animate({ "margin-top":"0px","height":"100","width":"100"},1000);
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
	<a href="#">click</a>
	<div id="box"></div>

</body>
</html>