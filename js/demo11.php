<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function demo()
		{
			var a = document.createElement("h1");
			var body = document.getElementById("main");


			a.innerHTML="hello";
			body.appendChild(a);
		}
	</script>
</head>
<body id="main">
<button onclick="demo()">OK</button>
</body>
</html>