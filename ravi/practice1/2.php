<?php
/*print_r($_FILES);
*/

$name = $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];

move_uploaded_file($_FILES['image']['tmp_name'],"photos/".$_FILES['image']['name']);
?>