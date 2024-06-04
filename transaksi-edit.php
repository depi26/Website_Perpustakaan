<?php
include "koneksi.php";
	$r_tampil_transaksi=$_GET['idtransaksi'];
	$result=mysqli_query($db,"SELECT * FROM tbtransaksi WHERE idtransaksi='$r_tampil_transaksi'");
	$r_tampil_transaksi=mysqli_fetch_array($result);
?>

<title>Halaman Edit Data Peminjam</title>
<div id="label-page"><h3>Edit Data Peminjam</h3></div>
<div id="content">
<link rel="stylesheet" href="style.css">
	 <form action="transaksi-edit-proses.php" method="post" enctype="multipart/form-data">
	 	<tr>
	 		<td class="label-formmulir">ID Transaksi :</td>
	 		<td class="isian-formulir"><input type="text" name="idtransaksi" value="<?php echo $r_tampil_transaksi['idtransaksi']; ?>" readonly="readonly" class="isian-formulir isian-formulor-border warna-formulir-disabled"></td>
	 	</tr>
	 	<tr>
	 		<td class="label-formulir">ID Anggota :</td>
	 		<td class="isian-formulir"><input type="text" name="idanggota" value="<?php echo $r_tampil_transaksi['idanggota']; ?>" class="isian-formulir isian-formulor-border"></td>
	 	</tr>
		 <tr>
	 		<td class="label-formulir">Nama :</td>
	 		<td class="isian-formulir"><input type="text" name="nama" value="<?php echo $r_tampil_transaksi['nama']; ?>" class="isian-formulir isian-formulor-border"></td>
	 	</tr>
		 <tr>
	 		<td class="label-formulir">ID Buku :</td>
	 		<td class="isian-formulir"><input type="text" name="idbuku" value="<?php echo $r_tampil_transaksi['idbuku']; ?>" class="isian-formulir isian-formulor-border"></td>
	 	</tr>
		 <tr>
	 		<td class="label-formulir">Judul Buku :</td>
	 		<td class="isian-formulir"><input type="text" name="judulbuku" value="<?php echo $r_tampil_transaksi['judulbuku']; ?>" class="isian-formulir isian-formulor-border"></td>
	 	</tr>
		 <tr>
	 		<td class="label-formulir">Tanggal Peminjam :</td>
	 		<td class="isian-formulir"><input type="date" name="tanggalpeminjaman" value="<?php echo $r_tampil_transaksi['tanggalpeminjaman']; ?>" class="isian-formulir isian-formulor-border"></td>
	 	</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" id="tombol-simpan"></td>
		</tr>
	</table>
	</form>
</div>