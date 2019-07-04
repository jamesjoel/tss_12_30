<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function demo()
		{
			setTimeout("demo2()", 2000);
		}
		function demo2()
		{
			alert("sdfgsdfgsdgsd");
			setTimeout("demo2()", 1000);
		}
	</script>
</head>
<body>
<button onclick="demo()">OK</button>
</body>
</html>