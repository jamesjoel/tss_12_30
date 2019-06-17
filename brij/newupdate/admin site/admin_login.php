<?php
include("admin_db.php");

?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin Penal</title>
	<link rel="stylesheet" type="text/css" href="css/instastyle.css">
</head>
<body>
	<div id="box">	<div id="box1"> 
		<form action="admin_auth.php" method="post">
	<table border="0" width="300" align="center" cellspacing="0" cellpadding="10">
		<center><h1 id="first">Admin Panel</h1></center>
		<tr class="a">
			<td></td>
			<td><input class="size" type="text" name="username" placeholder="    phone no,username. or mail"></td>
		</tr>
		<tr class="a">
			<td></td>
			<td><input class="size" type="passward" name="password" placeholder="    passward"></td>
		</tr>
		<tr class="a">
			<td></td>
			<td><input id="big1" type="checkbox" name="chechbox">&nbsp;&nbsp;save login info</td>
		</tr>
		<tr class="a">
			<td></td>
			<td><input id="big2" type="submit" value="Log in"></td>
		</tr>
	</table>
    </form>
	<hr />
	<a href="#" id="color"><center >login with facebook</center></a>
	<br/>
	<center>forgot passward?</center>
</div>
<div id="box2" class="text-danger"><?php
                 if (isset($_SESSION['msg'])) 
                 {
                 	echo$_SESSION['msg'];
                 	unset($_SESSION['msg']);
                 }
               ?>
	
</div>
<center>Get the app.</center>
<div id="box3"> <div id="box4">
</div>
</div>
</div> 
<div id="box5"></div>
<h/>
<p id="option">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ABOUT US &nbsp;&nbsp;&nbsp; SUPPORT  &nbsp;&nbsp;&nbsp; PRESS &nbsp;&nbsp;&nbsp; API   &nbsp;&nbsp;&nbsp;JOBS &nbsp;&nbsp;&nbsp;  TERMS&nbsp;&nbsp;&nbsp;DIRECTORY  &nbsp;&nbsp;&nbsp; PROFILES &nbsp;&nbsp;&nbsp;  HASHTAGS &nbsp;&nbsp;&nbsp;LANGUAGE</p>

</body>
</html>