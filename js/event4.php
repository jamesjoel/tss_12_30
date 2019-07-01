<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function show()
		{
			var a = document.getElementById("txt").value;
			var n = a.length;
			document.getElementById("msg").innerHTML=n;
		}
	</script>
</head>
<body>
<textarea cols="30" rows="5" onkeyup="show()" id="txt"></textarea>
<p>Charactor : <span id="msg">0</span> </p>
</body>
</html>