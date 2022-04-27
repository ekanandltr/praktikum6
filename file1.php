<!DOCTYPE html>
<html>
<head>
	<title> Form Login </title>
</head>
<body><center>
	<h2> Form Login </h2></center>
	<form method="POST" action="file2.php">
	<table width="400" align="center" cellpadding="2" cellspacing="2">
		<tr>
			<td width="130">Nama</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td width="130">Email</td>
			<td><input type="text" name="email"></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="submit" name="btnLogin" value="Login">
				<input type="reset" name="reset" value="Reset">
			</td>
		</tr>
	</table>
</body>
</html>