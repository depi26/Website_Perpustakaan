<?php
	if($_SESSION['sesi'] = NULL){
	echo '<script>window.location="login.php"</script>';	
	}
?>
<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Halaman Utama</title>
		<link rel="stylesheet" href="Style_dashboard.css">
	</head>
	<body>
		<div class="header" >
			<table>
				<tr>
				<td><img src="library.png" alt="picture"></td>
				<td><h1>PERPUSTAKAAN UMUM</h1><br>
				<h2>Jl. Srijaya Negara Bukit Besar, Palembang Tlp : 62711 353414</h2></td>
				</tr>
			</table>
		</div>
	<div class="navbar">
		<ul>
		<li>Hai Syafa Dwi Devita</li>
		</ul>
	</div>

	<div class="sidebar">
	<div class="side">
		<ul>
			<li><h2>Data Master</h2></li>
			<li><a href="anggota.php" class="page"> Data Anggota</a></li>
			<li><a href="buku.php" class="page"> Data Buku</a></li>
			<li><h2>Data Transaksi</h2></li>
			<li><a href="transaksi.php" class="page"> Transaksi Peminjaman</a></li>
			<li><a href=".php" class="page"> Transaksi Pengembalian</a></li>
			<li><h2>Laporan Transaksi</h2></li>
			<li><a href="login.php" class="page">  Log Out</a></li>
		</ul>
	</div>

	<div class="side2">
		<h1>SELAMAT DATANG DI SISTEM INFORMASI PERPUSTAKAAN</h1><br>
		<h2>"MEMBACA ADALAH JENDELA DUNIA"</h2>
		<br>
			<ul>
				<h3>KELOMPOK 5 KELAS 3CD</h3>
				<h4>Syafa Dwi Devita</h4>
				<h4>Pudja Dwi Cahyani</h4>
				<h4>Daffa Khairulah</h4>
			</ul>	
		</br>	

	</div>
</div>

</body>

</html>	
