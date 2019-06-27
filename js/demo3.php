<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script>
		
	function demo()
	{
		// console.log(document);
		var a = document.getElementById("first_number").value;
		var b = document.getElementById("second_number").value;

		var x = parseInt(a);
		var y = parseInt(b);

		var c = x+y;
		alert("Your Ans is "+c);
	}



	</script>
</head>
<body>
First Number<input type="text" id="first_number" />
<Br />
<Br />
Second Number<input type="text" id="second_number" />
<Br />
<Br />
<button onclick="demo()">OK</button>
</body>
</html>