<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#box{
			height: 100px;
			width: 100px;
		}
		
	</style>
	<script type="text/javascript">
		function demo()
		{
			
		var y =""
		for(i=1; i<=6;i++)
		{
			var a = Math.random()
			var b = a*15;
			var c = Math.floor(b);
			switch(c){
				case 10: y+="A";
				break;
				case 11: y+="B";
				break
				case 12: y+="C";
				break
				case 13: y+="D";
				break
				case 14: y+="E";
				break
				case 15: y+="F";
				default: y+=c;

			}

		}
		document.getElementById('box').style.backgroundColor="#"+y;
		setTimeout("demo()",100)
		}
		
	</script>
</head>
<body>
	<div id="box"></div>

<button  onclick ="demo()">ok</button>
</body>
</html>