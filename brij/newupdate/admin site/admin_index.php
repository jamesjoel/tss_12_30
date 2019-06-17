
 <?php
include("adminheader.php");
include("admin_db.php");

if (!  isset($_SESSION['is_user_logged']))
{
echo "yas";
	header("location:admin_login.php");
}
?>
