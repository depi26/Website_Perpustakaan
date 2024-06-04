<?php
include "koneksi.php";
	$r_tampil_buku=$_GET['kode'];
	$result=mysqli_query($db,"SELECT * FROM buku WHERE kode='$r_tampil_buku'");
	$r_tampil_buku=mysqli_fetch_array($result);
?>

<title>Halaman Edit Data Buku</title>
<div id="label-page"><h3>Edit Data Buku</h3></div>
<div id="content">
<link rel="stylesheet" href="style.css">
	 <form action="buku-edit-proses.php" method="post" enctype="multipart/form-data">
	 	<tr>
	 		<td class="label-formmulir">Kode Buku :</td>
	 		<td class="isian-formulir"><input type="text" name="kode" value="<?php echo $r_tampil_buku['kode']; ?>" readonly="readonly" class="isian-formulir isian-formulor-border warna-formulir-disabled"></td>
	 	</tr>
	 	<tr>
	 		<td class="label-formulir">Judul Buku :</td>
	 		<td class="isian-formulir"><input type="text" name="judul" value="<?php echo $r_tampil_buku['judul']; ?>" class="isian-formulir isian-formulor-border"></td>
	 	</tr>
		 <tr>
	 		<td class="label-formulir">Nama Pengarang :</td>
	 		<td class="isian-formulir"><input type="text" name="pengarang" value="<?php echo $r_tampil_buku['pengarang']; ?>" class="isian-formulir isian-formulor-border"></td>
	 	</tr>
		 <tr>
	 		<td class="label-formulir">Penerbit :</td>
	 		<td class="isian-formulir"><input type="text" name="penerbit" value="<?php echo $r_tampil_buku['penerbit']; ?>" class="isian-formulir isian-formulor-border"></td>
	 	</tr>
		 <tr>
	 		<td class="label-formulir">Kota Terbit :</td>
	 		<td class="isian-formulir"><input type="text" name="kota" value="<?php echo $r_tampil_buku['kota']; ?>" class="isian-formulir isian-formulor-border"></td>
	 	</tr>
		 <tr>
	 		<td class="label-formulir">Tahun Terbit :</td>
	 		<td class="isian-formulir"><input type="text" name="tahun" value="<?php echo $r_tampil_buku['tahun']; ?>" class="isian-formulir isian-formulor-border"></td>
	 	</tr>
		 <tr>
	 		<td class="label-formulir">Kategori :</td>
	 		<td class="isian-formulir"><input type="text" name="kategori" value="<?php echo $r_tampil_buku['kategori']; ?>" class="isian-formulir isian-formulor-border"></td>
	 	</tr>
	 	<tr>
	 		<td class="label-formulir">Keterangan :</td>
	 		<td class="isian-formulir"><textarea rows="2" cols="40" name="keterangan" class="isian-formulir isian-formulor-border"><?php echo $r_tampil_buku['keterangan']; ?></textarea>
			</td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" id="tombol-simpan"></td>
		</tr>
	</table>
	</form>
</div>