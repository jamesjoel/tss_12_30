<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script>
		
	function demo1()
	{
		// console.log(document);
		var a = document.getElementById("first_number").value;
		var b = document.getElementById("second_number").value;

		var x = parseInt(a);
		var y = parseInt(b);

		var c = x+y;
			alert("Your Ans is "+c);

	}
	function demo2()
	{
		// console.log(document);
		var a = document.getElementById("first_number").value;
		var b = document.getElementById("second_number").value;
		var c = a-b;
			alert("Your Ans is "+c);

	}function demo3()
	{
		// console.log(document);
		var a = document.getElementById("first_number").value;
		var b = document.getElementById("second_number").value;
		var c = a*b;
			alert("Your Ans is "+c);

	}function demo4()
	{
		// console.log(document);
		var a = document.getElementById("first_number").value;
		var b = document.getElementById("second_number").value;
		var c = a/	b;
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
<button onclick="demo1()">+</button>
<button onclick="demo2()">-</button>
<button onclick="demo3()">*</button>
<button onclick="demo4()">/</button>


</body>
</html>
</html>