<!DOCTYPE html>
<html>
<head>
	<title>design</title>
	<script type="text/javascript">

		function style1()
		{
		var x = document.getElementById("back1").value;
		var y = document.getElementById("colour").value;
		var z = document.getElementById("tsize").value;
		var w = document.getElementById("bor").value;
		var w1 = document.getElementById("radi").value;
		var p = document.getElementById("padd").value;
		var b = document.getElementById("borsty").value;
		var a = document.getElementById("alig").value;
/*var px="px";
var x1=p+px;
console.log(x1);*/

		document.getElementById("surabhi").style.backgroundColor=x;
		document.getElementById("surabhi").style.color=y;
		document.getElementById("surabhi").style.fontSize=z+"px";
		document.getElementById("surabhi").style.padding=p+"px";
		document.getElementById("surabhi").style.textAlign=a;

		document.getElementById("tab").style.padding=p+"px";
		document.getElementById("tab").style.CellBorder=w+"px";
		document.getElementById("tab").style.borderColor=x;
		document.getElementById("tab").style.borderWidth=w+"px";
		document.getElementById("tab").style.borderStyle=b;
		document.getElementById("tab").style.borderRadius=w1+"px";

		document.getElementById("borr").style.border=w+"px";
		document.getElementById("borr").style.padding=p+"px";
		document.getElementById("borr").style.borderRadius=w1+"px";
		document.getElementById("borr").style.borderColor=x;
		document.getElementById("borr").style.borderStyle=b;

	}


	</script>
</head>
<body>
	<table id="tab">
		<tr>
			<th>	Background </th>
			<td>	<input type="text" id="back1">			</td>
		</tr>
		<tr>
			<th>	Colour </th>
			<td>	<input type="text" id="colour">			</td>
		</tr>
		<tr>
			<th>	Font-Size </th>
			<td>	<input type="text" id="tsize">			</td>
		</tr>
		<tr>
			<th>	Border </th>
			<td>	<input type="text" id="bor">			</td>
		</tr>
		<tr>
			<th>	Radius </th>
			<td>	<input type="text" id="radi">			</td>
		</tr>
		<tr>
			<th>	Padding </th>
			<td>	<input type="text" id="padd">			</td>
		</tr>
		<tr>
			<th>	Border Style (dotted,solid) </th>
			<td>	<input type="text" id="borsty">			</td>
		</tr>
		<tr>
			<th>	Border Style (center,left,right) </th>
			<td>	<input type="text" id="alig">			</td>
		</tr>
		<tr>
			<th colspan="2">
			<button onclick="style1()">Apply</button>
			 </th>
		</tr>
	</table>

<div id="borr">


<p id="surabhi">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
</div>

</body>
</html>