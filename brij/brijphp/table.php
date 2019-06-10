<!DOCTYPE html>
<html>
<head>
	<title>table</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
  <table class='table table-dark'>
<?php
$data=array("name"=>"rohit","age"=>25 ,"city"=>"indore");
$data1=array("name"=>"krishna","age"=>26,"city"=>"bhopal");
$data2=array("name"=>"brij","age"=>21,"city"=>"sagar");
$all=array($data,$data1,$data2);

  foreach($all[0] as $x=>$y)
{
    if($x=="name")
    {
 
            echo "<tr>";
            echo "<td>".$x."</td>";
          
    }
    if($x=="age")
    {
       echo "<td>".$x."</td>";
      
    }
    if($x=="city")
    {
       echo "<td>".$x."</td>";
       echo "</tr>";
    }
     
 }
     foreach($all[0] as $x=>$y)
 {
    if($y==$all[0]["name"])
    {
 
            echo "<tr>";
            echo "<td>".$y."</td>";
          
    }
    if($y==$all[0]["age"])
    {
       echo "<td>".$y."</td>";
  
    }
    if($y==$all[0]["city"])
    {
       echo "<td>".$y."</td>";
       echo "</tr>";
    }
     
}


     foreach($all[1] as $x=>$y)
 {
    if($y==$all[1]["name"])
    {
 
            echo "<tr>";
            echo "<td>".$y."</td>";
          
    }
    if($y==$all[1]["age"])
    {
       echo "<td>".$y."</td>";
  
    }
    if($y==$all[1]["city"])
    {
       echo "<td>".$y."</td>";
       echo "</tr>";
    }
     
}


 foreach($all[2] as $x=>$y)
 {
    if($y==$all[2]["name"])
    {
 
            echo "<tr>";
            echo "<td>".$y."</td>";
          
    }
    if($y==$all[2]["age"])
    {
       echo "<td>".$y."</td>";

    }
    if($y==$all[2]["city"])
    {
       echo "<td>".$y."</td>";
       echo "</tr>";
    }
     
}


?>
 </table>
</body>
</html>