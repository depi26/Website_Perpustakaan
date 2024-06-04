<?php
	include "koneksi.php";
	$idtransaksi=$_GET['idtransaksi'];
	$q_tampil_transaksi=mysqli_query($db,"SELECT * FROM tbtransaksi WHERE idtransaksi='$idtransaksi'");
	$r_tampil_transaksi=mysqli_fetch_array($q_tampil_transaksi);
?>

<title>Halaman Cetak Nota</title>
<link rel="stylesheet" href="style.css">
<div id="label-page"><h3>Nota Buku</h3></div>
<div id="content">
	<table id="tabel-input">
		<tr>
			<td class="label-formulir">ID Transaksi</td>
			<td class="isian-formulir"><?php echo $r_tampil_transaksi['idtransaksi']; ?></td>
		</tr>
		<tr>
			<td class="label-formulir">ID Anggota</td>
			<td class="isian-formulir"><?php echo $r_tampil_transaksi['idanggota']; ?></td>
		</tr>
		<tr>
			<td class="label-formulir">Nama</td>
			<td class="isian-formulir"><?php echo $r_tampil_transaksi['nama']; ?></td>
		</tr>
		<tr>
			<td class="label-formulir">ID Buku</td>
			<td class="isian-formulir"><?php echo $r_tampil_transaksi['idbuku']; ?></td>
		</tr>
		<tr>
			<td class="label-formulir">Judul Buku</td>
			<td class="isian-formulir"><?php echo $r_tampil_transaksi['judulbuku']; ?></td>
		</tr>
		<tr>
			<td class="label-formulir">Tanggal Peminjaman</td>
			<td class="isian-formulir"><?php echo $r_tampil_transaksi['tanggalpeminjaman']; ?></td>
		</tr>
	</table>
</div>
<script>
	window.print();
</script>