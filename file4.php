<!DOCTYPE html>
<html>
<head>
	<title> Biodata Sederhana </title>
</head>
<body>
	<form method="POST" action="file5.php">
		<table align="center" border="1" cellpadding="0" cellspacing="0">
			<tr align="center"><td><h2> <b> Masukkan Biodata Anda </b></h2></td></tr>
			<tr>
				<td>
					<table width="450" border="0" cellpadding="0" cellspacing="10" align="center">
						<tr>
							<td>Nama</td>
							<td> : </td>
							<td><input type="text" name="nama" size="40" /></td>
						</tr>
						<tr>
							<td>NPM</td>
							<td> : </td>
							<td><input type="text" name="npm" size="40" /></td>
						</tr>
						<tr>
							<td>Jenis Kelamin</td>
							<td> : </td>
							<td>
								<input type="radio" name="jeniskelamin" value="Laki-laki"><label for="laki">Laki-Laki</label>
								<input type="radio" name="jeniskelamin" value="Perempuan"><label for="perempuan">Perempuan</label>
							</td>
						</tr>
						<tr>
							<td>Instansi</td>
							<td> : </td>
							<td><input type="text" name="instansi" size="40" /></td>
						</tr>
						<tr>
							<td>Program Studi</td>
							<td> : </td>
							<td><input type="text" name="prodi" size="40" /></td>
						</tr>
						<tr>
							<td colspan="4" align="center"><input type="submit" name="btnSimpan" value="Simpan"></td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>