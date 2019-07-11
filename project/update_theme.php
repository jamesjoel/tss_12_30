<?php
include('db.php');
$a = $_POST['theme'];
$que = "UPDATE user SET theme = '$a' WHERE id = ".$_SESSION['id'];
mysqli_query($con, $que);
?>