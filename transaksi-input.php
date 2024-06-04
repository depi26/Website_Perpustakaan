<div id="label-page"><h3>Input Transaksi Peminjaman</h3></div>
<div id="content">
	<form action="transaksi-input-proses.php" method="post" enctype="multipart/form-data">
	<link rel="stylesheet" href="style.css">

		<table id="tabel-input">
			<tr>
				<td class="label-formulir">ID Transaksi</td>
				<td class="isian-formulir"><input type="text" name="idtransaksi" class="isian-formulir isian-formulir-border"></td>
			</tr>
			<tr>
			<tr>
				<td class="label-formulir">ID Anggota</td>
				<td class="isian-formulir"><input type="text" name="idanggota" class="isian-formulir isian-formulir-border"></td>
			</tr>
			<tr>
				<td class="label-formulir">Nama</td>
				<td class="isian-formulir"><input type="text" name="nama" class="isian-formulir isian-formulir-border"></td>
			</tr>
			<tr>
				<td class="label-formulir">ID Buku</td>
				<td class="isian-formulir">
				<textarea rows="2" cols="40" name="idbuku" class="isian-formulir isian-formulir-border"></textarea></td>
			</tr>
			<tr>
				<td class="label-formulir">Judul Buku</td>
				<td class="isian-formulir">
				<textarea rows="2" cols="40" name="judulbuku" class="isian-formulir isian-formulir-border"></textarea></td>
			</tr>
			<tr>
				<td class="label-formulir">Tanggal Peminjaman</td>
				<td class="isian-formulir"><input type="date" name="tanggalpeminjaman" class="isian-formulir isian-formulir-border"></td>
			</tr>
			<tr>
				<td class="label-formulir"></td>
				<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" class="tombol"></td>
			</tr>
		</table>
	</form>
</div>