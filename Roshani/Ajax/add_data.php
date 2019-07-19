<?php
$con = mysqli_connect('localhost','root','','project1');
// echo "yes";
// die;
$x = $_POST['st_name'];
$y = $_POST['st_age'];


// echo $query = "INSERT INTO student (student_name , age)VALUES('$a','$b')";
// die;
// mysqli_query($con , $query);
 mysqli_query($con, "INSERT INTO student (student_name, age) VALUES ('$x', '$y')");


?>