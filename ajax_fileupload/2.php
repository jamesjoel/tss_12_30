<?php
move_uploaded_file($_FILES['myfile']['tmp_name'], "up/".$_FILES['myfile']['name']);
echo "up/".$_FILES['myfile']['name'];
?>