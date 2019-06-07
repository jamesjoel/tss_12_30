<?php
$data=array("name"=>"rohit","age"=>25 ,"city"=>"indore");
$data1=array("name"=>"krishna","age"=>26,"city"=>"bhopal");
$data2=array("name"=>"brij","age"=>21,"city"=>"sagar");
$all=array($data,$data1,$data2);


?>

<!DOCTYPE html>
<html>
<head>
	<title>table</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
<table class="table table-dark">
	
<?php
  
foreach($all as $x)

{
echo "<tr>";
         foreach($x as $k=>$t)
         {
         	echo "<td>".$k."</td>";
         	echo "<td>".$t."</td>";
         }



      "</tr>";


}	

?>

</table>




</body>
</html>
