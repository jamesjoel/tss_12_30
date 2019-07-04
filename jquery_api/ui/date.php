<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="jquery-ui.css">
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="jquery-ui.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			$( "#datepicker" ).datepicker({
				"dateFormat" : "dd - M, yy",
				"showAnim" : "slide",
				"changeMonth" : "true",
				"changeYear" : "true"
			});
		});
	</script>

</head>
<body>
DOB<input type="text" id="datepicker" />
</body>
</html>