<?php 
if (isset($_POST['daftar'])) {
		$nik=$_POST['nik'];
		$nama=$_POST['nama'];
		$text=$nik . "," . $nama . "\n";
		$fp=fopen('config.txt','a');

		if (fwrite($fp, $text)) {
			echo'<script>alert("Anda Berhasil Mendaftar");</script>';
		}
}
		else if (isset($_POST['masuk']))
{
	$data=file_get_contents("config.txt");
	$contents=explode("\n", $data);

	foreach ($contents as $values) {
		$login=explode(",", $values);
		$nik=$login[0];
		$nama=$login[1];

		if($nik==$_POST['nik']&& $nama == $_POST['nama']){
			session_start();
			$_SESSION['username']= $nama;
			header('location:halamanutama.php');

		}
		else{
			echo '<script>alert("NIK atau Nama Anda Salah!");</script>';
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	<div class="pembungkus">
		<div class="text">
			<p class="t1"> LOGIN APLIKASI PEDULI DIRI </p>
			<P class="t2">silahkan isi NIK dan Nama Lengkap</P>
		</div>
	<form action="" method="POST">
		<div class="txt_field">
			<input type="text" required name="nik">
			<span></span>
			<label>NIK</label>
		</div>
		<div class="txt_field">
			<input type="text" required name="Nama Lengkap">
			<span></span>
			<label>Nama Lengkap</label>
		</div>
		<div class="bawah">
			<input type="submit" value="Saya Pengguna Baru" name="daftar">
			<input type="submit" value="Masuk" name="masuk">
		</div>
	</form>
	</div>
</body>
</html>