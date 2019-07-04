<!DOCTYPE html>
<html>
<head>
	<title>calculator</title>
	<script type="text/javascript">
		var a=parseInt(document.getElementById("add").value);
		var a1=parseInt(document.getElementById("sub").value);
	/*	document.getElementById("res").value=0;*/

			/*if(document.getElementById("add1"))
			{
				document.getElementById("res").value=a+a1;
			}
			else if(document.getElementById("add2"))
			{
				document.getElementById("res").value=a-a1;

			}
	*/
			function summ()
			{
				var x=a+a1;
				console.log(x);
				document.getElementById("res").value=x;

			}
		
	</script>
</head>
<body>
	<input type="text" id="res" disabled="disabled"><br>
	value1<input type="text" id="add"><br>
	value2<input type="text" id="sub"><br>
	
	<button onclick="summ()">+</button>
	<button onclick="cal()" id="add2">-</button>
	<button onclick="cal()" id="add3">X</button>
	<button onclick="cal()" id="add4">/</button>
	<button onclick="cal()" id="add5">%</button>
	<button onclick="cal()" id="add6">per</button>

</body>
</html>