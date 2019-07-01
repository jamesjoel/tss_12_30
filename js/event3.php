<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function change1()
		{
			document.getElementById("txt1").style.backgroundColor="green";
		}
		function change2()
		{
			document.getElementById("txt2").style.backgroundColor="green";
		}
	</script>
</head>
<body>
<input type="text" id="txt1" onblur="change1()" />
<br />
<br />
<br />
<input type="text" id="txt2" onblur="change2()" />

</body>
</html>