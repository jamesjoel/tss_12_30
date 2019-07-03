<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function show()
		{
			document.getElementById("myform").submit();
		}
		
	</script>
</head>
<body>
	<form action="day1.php" method="post" id="myform">
		<input type="text"/>
		<input type="text"/>
		<input type="text"/>
		<input type="text"/>
		<a href="#"onclick="show()">submit</a>
	</form>

</body>
</html>