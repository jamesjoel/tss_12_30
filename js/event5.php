<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#box{
			height: 100px;
			width: 100px;
			background-color: #BA0000;
			border-radius: 100px;
		}
	</style>
<script type="text/javascript">
	function show()
	{
		var a = Math.random();
		var b = a*600;
		var c = Math.floor(b);

		var x = Math.random();
		var y = a*800;
		var z = Math.floor(y);

		
		document.getElementById("box").style.marginLeft=z+"px";
		document.getElementById("box").style.marginTop=c+"px";
	}
</script>
</head>
<body>
<div id="box" onmouseover="show()"></div>
</body>
</html>