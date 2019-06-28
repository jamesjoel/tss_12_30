<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function demo()
		{
			document.getElementById("img").setAttribute("src", "2.jpeg");
			// removeAttribute("src")
		}
	</script>
</head>
<body>
<button onclick="demo()">OK</button>
<br />
<img src="1.jpg" height="200" id="img" width="200" />
</body>
</html>