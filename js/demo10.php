<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function demo()
		{
			var str="";
			for(var i=1; i<=6; i++)
			{
				var a = Math.random();
				var b = a*15;
				var c = Math.floor(b);	
				switch(c){
					case 10 : str+="A";
							break;
					case 11 : str+="B";
							break;
					case 12 : str+="C";
							break;
					case 13 : str+="D";
							break;
					case 14 : str+="E";
							break;
					case 15 : str+="F";
							break;
					default : str+=c;

				}
			
			}
			document.getElementById("body").style.backgroundColor="#"+str;
			setTimeout("demo()", 500);
			
			

		}
	</script>
</head>
<body id="body">
<button onclick="demo()">OK</button>


</body>
</html>