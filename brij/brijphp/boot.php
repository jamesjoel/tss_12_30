<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
<?php
// echo "<table class='table table-dark'>";
// echo "<tr><th>S.No.</td></tr>";
// $a="s.no";
// $b="name";
// $c="city";
// $d="1";
// $e="brij";
// $f="indore";
// echo "<table class='table table-dark table-bordered table-hover'>
//       <tr>
//        <td>".$a."</td>
//        <td>".$b."</td>
//       <td>".$c."</td>

//       </tr>
//       <tr><td>".$d."</td>
//       <td>".$e."</td>
//        <td>".$f."</td>
//       </tr>
//       </table>" ;      
// $name = array( "s"=>1 ,'first' =>"rohit" ,"city"=>"indore" );
// $menu = array('no' =>"s no." ,"name"=>"name","place"=>$name );
//        $date = array( 
//             "mohammad" => array (
//                "physics" => 35,
//                "maths" => 30,	
//                "chemistry" => 39
//             ),
            
//             "qadir" => array (
//                "physics" => 30,
//                "maths" => 32,
//                "chemistry" => 29
//             ),
            
//             "zara" => array (
//                "physics" => 31,
//                "maths" => 22,
//                "chemistry" => 39
//             )
//          );
// $data = array(
// 	'menu' =>array (
// 		"s"=>"s.no",
// 		"id"=>"name",
//          "place"=>"city"
//      ),
            
//             "qadir" => array (
//                "physics" => 30,
//                "maths" => 32,
//                "chemistry" => 29
//             ),
            
//             "zara" => array (
//                "physics" => 31,
//                "maths" => 22,
//                "chemistry" => 39
//             )
//          );

$date=array("menu"=>array("s"=>"s.no","id"=>"name","place"=>"city"),"table"=>array("number"=>1,"name"=>"brij","city"=>"indore"),"table1"=>array("number1"=>2,"name1"=>krishna,"city1"=>"indore"));

echo "<table class='table table-dark table-hover'>
       <tr>
         <td>".$date[menu][s]."</td>
         <td>".$date[menu][id]."</td>
         <td>".$date[menu][place]."</td>
       </tr>
       <tr>
         <td>".$date[table][number]."</td>
          <td>".$date[table][name]."</td>
          <td>".$date[table][city]."</td>
       </tr>
       <tr>
          <td>".$date[table1][number1]."</td>
          <td>".$date[table1][name1]."</td>
          <td>".$date[table1][city1]."</td>
       </tr>
     </table>"
?>
</body>
</html>