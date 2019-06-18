 <?php
 // print_r($_POST);

$con = mysqli_connect("localhost", "root", "password", "user");
// mysqli_connect("hostname", "username", "password", "dbname")

$a = $_POST['full-name'];
$b = $_POST['mobile'];
$c = $_POST['email'];
$d = $_POST['password'];
$d = sha1($d);




 echo $query = "INSERT INTO tableuser (full_name,mobile_no , email , password) VALUES ('$a', '$b', '$c', '$d')";

mysqli_query($con, $query);
 header("location:index.php");
?>

