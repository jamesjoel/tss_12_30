<?php
include("header.php");
?>
<div id="contant">
		<div id="inside_contant" class="wrapper">
			<form action="save.php" method="post">
				<table border="4" align="center" bgcolor="yellow" cellpadding="20">
					<tr>
						<td align="center" colspan="2" >Registration</td>
					</tr>
					<tr>
						<td>
							Name<td>
								<input type="text" name="full_name">
								
							</td>
						</td>
					</tr>
					<tr>
						<td>
							username<td>
								<input type="text" name="username">
							</td>
						</td>
					</tr>
					<tr>
						<td>
							Password<td>
								<input type="password" name="password">
							</td>
						</td>
					</tr>
					<tr>
						<td>
							contact<td>
								<input type="text" name="contact">
							</td>
						</td>
					</tr>
					<tr>
						<td>
							gender<td>
								<input type="radio" name="gender"value="male">male<input type="radio" name="gender"  value="female">female
							</td>
						</td>
					</tr>
					
					<tr>
						<td>
						city<td>
							<select name="city">
						<option>select city</option>
						<option>indore</option>
						<option>pune</option>
						<option>delhi</option>
						<option>kota</option>

							</select>
						</td>
						</td>
					</tr>
					<tr>
						<td>
							address<td>
								<textarea name="address"></textarea>
							</td>
						</td>
					</tr>
					<tr>
						<td align="center" colspan="2">
							<input type="submit" name="submit" value="Login">
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>
	<?php
include("footer.php");
?>