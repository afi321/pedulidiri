<?php 
include "header.php";

session_start();
$user=$_SESSION['username'];
$datauser="catatan/$user.txt";

// function FunctionName($value='urutkan')
// {
// 	if ($_POST["urutkan"]=='tanggal') {
// 		$query="select* from tanggal order by tanggal";
// 	}elseif ($_POST["urutkan"]== 'waktu') {
// 		$query="select* from waktu order by waktu";
// 	}elseif ($_POST["urutkan"]=='lokasi') {
// 		$query="select* from lokasi order by lokasi";
// 	}else{
// 		$query="select* from suhu order by suhu";
// 	}return query($query);
// }

if (!file_exists($datauser)) {
	die('<center>Kamu Belum Mempunyai Catatan</center>');
}else{
	$file=fopen($datauser,"r");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="F7E2E2">
	<table border="1" align="center" width="50%">
		<td>
			<a>Urutkan Berdasarkan</a>
			<select name="urutkan" id="">
				<option value="tanggal">Tanggal</option>
				<option value="waktu">Waktu</option>
				<option value="lokasi">Lokasi</option>
				<option value="suhu">Suhu</option>
			</select>
			<input type="submit" value="Urutkan">
		</td>
	</table>
	<br>
	<table border="1" align="center"  width="50%" height="40%">
		<td>
			<table align="center" border="1" width="90%" bgcolor="F4BBBB">
				<tr>
					<th>Tanggal</th>
					<th>Waktu</th>
					<th>Lokasi Yang Dikunjungi</th>
					<th>Suhu Tubuh</th>
				</tr>

				<?php 
				while (($row = fgets($file))!=false)
				{
					$col=explode(",", $row);
					foreach ($col as $data)
						echo "<td>" . trim($data) . "</td>";
				}

				 ?>
			</table>
			<script src="main.js"></script>
		</td>
	</table>
</body>
</html>