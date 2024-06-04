<?php
// koneksi database
require 'koneksi.php';
// menangkap data id yang di kirim dari url
$kode = $_GET['kode'];

$result=mysqli_query($db,"SELECT * FROM buku WHERE kode=" . $kode);
$r_tampil_buku=mysqli_fetch_array($result);

// menghapus data dari database
$query="DELETE FROM buku WHERE kode='$kode'";
$result=mysqli_query($db,$query);
// cek apakah data berhasil dihapus atau tidak
if(mysqli_affected_rows($db) > 0) {
	echo "<script language='javascript'>
	alert ('Data Buku Berhasil Dihapus');
	document.location='buku.php';
	</script>";
}
else
{
	echo "<script language='javascript'>
	alert ('Data Buku Gagal Dihapus');
	</script>";
	echo mysqli_error($db);
}
?>