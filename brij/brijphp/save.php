<?php
// print_r($_FILES);
$name = $_FILES['file_name']['name'];
$tmp_name = $_FILES['image']['tmp_name'];
move_uploaded_file($_FILES['file_name']['tmp_name'], "photos/".$_FILES['file_name']['name']);
?>