<?php
// koneksi database
require 'koneksi.php';
// menangkap data id yang di kirim dari url
$id_transaksi = $_GET['idtransaksi'];

$result=mysqli_query($db,"SELECT * FROM tbtransaksi WHERE idtransaksi=" . $id_transaksi);
$r_tampil_transaksi=mysqli_fetch_array($result);

// menghapus data dari database
$query="DELETE FROM tbtransaksi WHERE idtransaksi='$id_transaksi'";
$result=mysqli_query($db,$query);
// cek apakah data berhasil dihapus atau tidak
if(mysqli_affected_rows($db) > 0) {
	echo "<script language='javascript'>
	alert ('Data Peminjam Berhasil Dihapus');
	document.location='transaksi.php';
	</script>";
}
else
{
	echo "<script language='javascript'>
	alert ('Data Peminjam Gagal Dihapus');
	</script>";
	echo mysqli_error($db);
}
?>