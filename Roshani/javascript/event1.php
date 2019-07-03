<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#box{
			height: 200px;
			width: 200px;
			background: #BA0000;
			border-radius: 200px
		}
		#txt{
			text-align:center;
			padding-top: 80px;
		}

	</style>
	<script type="text/javascript">
		function demo()
		{
			var y ="";
		for(var i=1; i<=6;i++)
		{
			var a = Math.random();
			var b = a*15;
			var c = Math.floor(b);
			switch(c){
				case 10: y+="A";
				break;
				case 11: y+="B";
				break;
				case 12: y+="C";
				break;
				case 13: y+="D";
				break;
				case 14: y+="E";
				break;
				case 15: y+="F";
				default: y+=c;

			}
			

		}
			// alert(y);

			document.getElementById('txt').style.color ='#'+y;
			setTimeout("demo()",1000);
		}
	</script>
</head>
<body>
	<div id="box">
		<h2 id="txt" onmouseover="demo()">Hello! World</h2>
	</div>

</body>
</html>