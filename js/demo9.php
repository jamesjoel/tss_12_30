<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		var w = 100;
		var h = 100;
		var x="";
		
		function start()
		{
			w++;
			h++;
			document.getElementById("box").style.width=w+"px";
			document.getElementById("box").style.height=h+"px";
			x=setTimeout("start()", 10);

		}
		function pause()
		{
			clearTimeout(x);
		}
		function reset()
		{
			w=100;
			h=100;
			document.getElementById("box").style.width="100px";
			document.getElementById("box").style.height="100px";
		}



	</script>
	<style type="text/css">
		#box{
			height: 100px;
			width: 100px;
			background-color: #245781;
		}
	</style>
</head>
<body>
<button onclick="start()">Start</button>
<button onclick="pause()">Pause</button>
<button onclick="reset()">Reset</button>
<div id="box"></div>
</body>
</html>