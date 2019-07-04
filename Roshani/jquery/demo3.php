<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript"src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("a").click(function(){
				var a = $('h1').html();
				alert(a);
				$('h1').html("How are u?");
			});
			$("button").click(function(){
				var b = $("input").val();
				alert(b);
				$("input").val("Roshani patidar");
			})






		});
	</script>
</head>
<body>
	<a href="#">click</a>
	<h1>HEllO ROSHANI</h1>
	<button>click</button>
	<input type="text" >

</body>
</html>