<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script>
		
	function demo()
	{
		var a = document.getElementById("first_name").value;
		document.getElementById("msg").innerHTML=a;
	}



	</script>
</head>
<body>
First Name<input type="text" id="first_name" />
<Br />
<Br />
<h1 id="msg"></h1>
<Br />
<Br />
<button onclick="demo()">OK</button>
</body>
</html>