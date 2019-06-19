<?php
 // print_r($_FILES);

$name = $_FILES['img']['name'];
$tmp_name = $_FILES['img']['tmp_name'];

move_uploaded_file($_FILES['img']['tmp_name'], "photos/".$_FILES['img']['name']);

?>
