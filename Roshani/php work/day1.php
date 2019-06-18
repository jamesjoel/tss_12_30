<?php
$data= array("first"=>array("name"=>"Roshani","age"=>26),
"second"=>array("name"=>"dhyey","age"=>20),
"third"=>array("name"=>"surabhi","age"=>27));
print_r($data);
$a="S.no";$b="Name";$c="Age";
echo "<table border='2'align='center'width='400'cellspacing='0'celspadding='0'height='400'>";
echo "<tr align='center'><td>".$a."</td><td>".$b."</td><td>".$c."</td></tr>";
echo "<tr align='center'><td>1</td><td>".$data['first']['name']."</td><td>".$data['first']['age']."</td></tr>";
echo "<tr align='center'><td>2</td><td>".$data['second']['name']."</td><td>".$data['second']['age']."</td></tr>";
echo "<tr align='center'><td>3</td><td>".$data['third']['name']."</td><td>".$data['third']['age']."</td></tr>";
?>
