<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript"src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			
			$('button').mouseover(function(){
					$("p").slideDown(1000);
			});
			$('button').mouseout(function(){
					$("p").slideUp(1000);
			});



		});
	</script>
	<style type="text/css">
	
		p{
			height: 300px;
			width: 300px;
			background-color: #CCC;
			margin: 0;
			padding: 10px;
			font-size: 18px;
			text-align: justify;
		    box-shadow: 10px 10px 10px 10px;
			display: none;
		}
	</style>
</head>
<body>
	<button>ok</button>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>


</body>
</html>