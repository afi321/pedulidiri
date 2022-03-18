<?php 
session_start();
include "header.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body bgcolor="F7E2E2">
	<table
	 border="2" 
	 height="50%" 
	 width="50%" 
	 align="center"
	 >

		<td>Selamat Datang <?php echo $_SESSION['username'] ?> Di Aplikasi Peduli Diri</td>
	</table>
			<table width="25%" align="right"><tr><td></td></tr></table>
	<table align="right" border="1" >
		<tr >
			<td ><a href="isidata.php">isi catatan perjalanan</a></td>
		</tr>
	</table>


</body>
</html>