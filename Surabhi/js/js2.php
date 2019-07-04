<!DOCTYPE html>
<html>
<head>
	<title>Day2</title>
<script type="text/javascript">
	var a=1;
	function demo()
	{
		alert("Welcome    "+ a);
a++;
	}
function demo1()
	{
		var x=document.getElementById("name").value;
		alert("Welcome    "+ x);
	}
function demo2()
{
	var m=document.getElementById("name1").value;
	document.getElementById("name2").value=m;
	document.getElementById("name3").innerHTML=m;

}
</script>
</head>
<body>
	<input type="text" id="name" />
	
	<button onclick="demo1()">Click here for name</button>
	<br>
	<button onclick="demo()">Click Here</button>
	<br>
	<br>
	name1<input type="text" id="name1"><br>
	name2<input type="text" id="name2">
	<h1 id="name3"></h1>
	<button onclick="demo2()">Click Here for chane name</button>

</body>
</html>