<?php
$con = mysqli_connect("localhost", "admin", "admin", "tss_12_30");

$a = $_POST['st_name'];
$b = $_POST['st_age'];



mysqli_query($con, "INSERT INTO student (name, age) VALUES ('$a', '$b')");
?>