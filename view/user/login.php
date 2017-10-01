
	<form method="post" action="index.php?controller=user&action=login">
		<table align="center" border="1">
			<tr>
				<td align="center" colspan="2"> 
					<?php 
						if (isset($err)) {
							echo $err;
						}
						else {
							echo "Dang nhap he thong";
						}
					?>	

				</td>
			</tr>
			<tr>
				<td> User name </td>
				<td> <input type="text" name="user" required></td>
			</tr>
			<tr>
				<td> Password </td>
				<td> <input type="password" name="pass" required></td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="submit" value="login">
				</td>
				<td>
					<input type="reset" value="clear">
				</td>
			</tr>
		</table>
	</form>