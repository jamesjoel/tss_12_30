<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.js"></script>
	<script>
		$(document).ready(function(){
			$("#btn1").click(function(){
				
				var a = $("h1").html();
				alert(a);
				$("h1").html("The Stepping Stone");

			});
			
			$("#btn2").click(function(){
				var a = $("input").val();
				alert(a);
				$("input").val("hello");
			});
		});


	</script>
</head>
<body>
<button id="btn1">OK</button>
<h1>hello world</h1>
<button id="btn2">Click</button>
<input type="text" />
</body>
</html>