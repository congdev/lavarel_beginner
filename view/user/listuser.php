<table align="center" border="1">
	<tr>
		<td colspan="5">
			<span>Danh sach thanh vien</span>
			<a href="#">Them moi thanh vien</a> 
		</td>
	</tr>
	<tr>
		<td>Ten tai khoan</td>
		<td>Mat khau</td>
		<td>Cap</td>
		<td>Sua</td>
		<td>Xoa</td>
	</tr>
	<?php 
		foreach ($result as $user) {
			echo '<tr>';
			echo	'<td>'.$user['user_name'].'</td>';
			echo	'<td>'.$user['user_pass'].'</td>';
			echo	'<td>'.$user['user_level'].'</td>';
			echo	'<td><a href="#">Edit</a></td>';
			echo	'<td><a href="#">Delete</a></td>';
			echo '</tr>';
		}
	?>
</table>