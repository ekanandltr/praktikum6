<?php
	$nama = $_POST['nama'];
	$npm = $_POST['npm'];
	$jeniskelamin = $_POST['jeniskelamin'];
	$instansi = $_POST['instansi'];
	$prodi = $_POST['prodi'];
	
		echo "<b>Biodata Anda</b><br><br>";
		echo "Nama	:$nama <br>";
		echo "NPM :$npm <br>";
		echo "Jenis Kelamin :$jeniskelamin <br>";
		echo "Instansi :$instansi <br>";
		echo "Program Studi :$prodi <br>";
?>