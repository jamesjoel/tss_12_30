<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script>
		function demo()
		{
			var a = document.getElementById("back_color").value;
			document.getElementById("msg").style.backgroundColor=a;

			var b = document.getElementById("color").value;
			document.getElementById("msg").style.color=b;

			var c = document.getElementById("size").value;
			document.getElementById("msg").style.fontSize=c;

			var d = document.getElementById("border").value;
			document.getElementById("msg").style.border=d;

		}
		
	</script>
</head>
<body>
BG Color <input type="text" id="back_color"/>
<br/>
<br/>
Color <input type="text" id="color"/>
<br/>
<br/>
size <input type="text" id="size"/>
<br/>
<br/>
border <input type="text" id="border"/>
<br/>
<br/>
<button onclick="demo()">click</button>
<p id="msg">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</body>
</html>