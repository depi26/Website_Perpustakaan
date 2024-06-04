<?php
//koneksi database
include 'koneksi.php';
if(isset($_POST["simpan"])) {
	$kode = htmlspecialchars($_POST["kode"]);
	$judul = htmlspecialchars($_POST["judul"]);
	$pengarang = htmlspecialchars($_POST["pengarang"]);
	$penerbit = htmlspecialchars($_POST["penerbit"]);
	$kota = htmlspecialchars($_POST["kota"]);
	$tahun = htmlspecialchars($_POST["tahun"]);
	$kategori = htmlspecialchars($_POST["kategori"]);
	$keterangan = htmlspecialchars($_POST["keterangan"]);

		if (in_array($ekstensi, $ekstensi_diperbolehkan) === true){

			$result=mysqli_query($db,"SELECT * FROM buku WHERE kode=" . $kode);
			$r_tampil_buku=mysqli_fetch_array($result);
		}

		//mengubah data dari database
		$query="UPDATE buku SET kode='$kode', judul='$judul', pengarang='$pengarang', penerbit='$penerbit', kota='$kota', tahun='$tahun', kategori='$kategori', keterangan='$keterangan' WHERE kode='$kode'";
	}

	$result=mysqli_query($db, $query);
//cek apakah data berhasil diubah atau tidak
	if($result) {
		echo "<script language='javascript'>
		alert ('Data Buku Berhasil Diedit');
		document.location='buku.php';
		</script>";
	}
	else 
	{
		echo "<script language='javascript'>
		alert ('Data Buku Gagal Diedit');
		</script>";
		echo mysqli_error($db);
	} 
?>