<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script>
		
	function demo()
	{
		var a = document.getElementById("color").value;
		document.getElementById("msg").style.backgroundColor=a;
		
		
	}



	</script>
</head>
<body>
	Color  <input type="text" id="color" />
<button onclick="demo()">OK</button>
<p id="msg">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</body>
</html>