<?php
include("config.php");
include("header.php");
?>
	
	<div id="contant">
		<div id="inside_contant" class="wrapper">
			<form action="auth.php" method="post">
		<table align="center" border="5" cellpadding="20px" bgcolor=" yellow">
			<tr>
				<td align="center">
					LOGIN
				</td>
			</tr>
			<tr>
				<td>
					Username:<input type="text" name="username">
				</td>
			</tr>
			<tr>
				<td>
					Password:<input type="password" name="pass">
				</td>
			</tr>
			<tr>
				<td align="center">
					<input type="submit" name="submit" value="Login">
				</td>
			</tr>
			<b>
               <?php
               if(isset ($_SESSION['msg']))
               {
                  echo $_SESSION['msg'];
                  unset ($_SESSION['msg']);
               }
               ?>
            </b>
		</table>
	</form>
		</div>
	</div>
	
<?php
include("footer.php");
?>
