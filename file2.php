<center>
<?php
if (empty($_POST['nama'])) {
	header("Location:file3.php");
}else {
	if (empty($_POST['email'])) {
	header("Location:file3.php");
}else {
	echo "<br><br><br><b>SELAMAT DATANG</b><br><br><br>".$_POST['nama']."<br>";
	echo "Your Email : ".$_POST['email']."<br><br><br>";
}}
?>
<?php
	date_default_timezone_set('Asia/Jakarta');
	$date=new DateTime('now');
	echo $date->format('D, d-m-Y & H:i:s');
?>
<center>