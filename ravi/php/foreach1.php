<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php

$data1=array("name"=>"rohit", "age"=>25);



foreach ($data1 as $a=>$x) {

	echo "
  <table border=2 cellspacing=0, cellpadding=10, text=align=center;>
  <tr>
  <td>".$a."</td>
   <td>".$x."</td>
  </tr>

	 
</table>  

	";
    
	
}



	?>

</body>
</html>