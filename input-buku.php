<title>Input Halaman Buku</title>
<div id="label-page"><h3>Input Data Buku</h3></div>
<div id="content">
	<form action="input-buku-proses.php" method="post" enctype="multipart/form-data">
	<link rel="stylesheet" href="style.css">

		<table id="tabel-input">
			<tr>
				<td class="label-formulir">Kode Buku</td>
				<td class="isian-formulir"><input type="text" name="kode" class="isian-formulir isian-formulir-border"></td>
			</tr>
			<tr>
				<td class="label-formulir">Judul Buku</td>
				<td class="isian-formulir"><input type="text" name="judul" class="isian-formulir isian-formulir-border"></td>
			</tr>
			<tr>
				<td class="label-formulir">Pengarang</td>
				<td class="isian-formulir"><input type="text" name="pengarang" class="isian-formulir isian-formulir-border"></td>
			</tr>
			<tr>
				<td class="label-formulir">Penerbit</td>
				<td class="isian-formulir"><input type="text" name="penerbit" class="isian-formulir isian-formulir-border"></td>
			</tr>
			<tr>
				<td class="label-formulir">Kota</td>
				<td class="isian-formulir"><input type="text" name="kota" class="isian-formulir isian-formulir-border"></td>
			</tr>
			<tr>
				<td class="label-formulir">Tahun</td>
				<td class="isian-formulir"><input type="text" name="tahun" class="isian-formulir isian-formulir-border"></td>
			</tr>
			<tr>
				<td class="label-formulir">Kategori</td>
				<td class="isian-formulir"><input type="text" name="kategori" class="isian-formulir isian-formulir-border"></td>
			</tr>
			<tr>
				<td class="label-formulir">Keterangan</td>
				<td class="isian-formulir"><input type="text" name="keterangan" class="isian-formulir isian-formulir-border"></td>
			</tr>
			<tr>
				<td class="label-formulir"></td>
				<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" class="tombol"></td>
			</tr>
		</table>
	</form>
</div>