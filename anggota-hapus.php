<?php
// koneksi database
require 'koneksi.php';
// menangkap data id yang di kirim dari url
$id_anggota = $_GET['idanggota'];

$q_tampil_anggota=mysqli_query($db,"SELECT * FROM tbanggota WHERE idanggota=" . $id_anggota);
$r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota);

unlink('images/' . $r_tampil_anggota['foto']);

// menghapus data dari database
$query="DELETE FROM tbanggota WHERE idanggota='$id_anggota'";
$q_tampil_anggota=mysqli_query($db,$query);
// cek apakah data berhasil dihapus atau tidak
if(mysqli_affected_rows($db) > 0) {
	echo "<script language='javascript'>
	alert ('Data mahasiswa berhasil dihapus');
	document.location='anggota.php';
	</script>";
}
else
{
	echo "<script language='javascript'>
	alert ('Data mahasiswa gagal dihapus');
	</script>";
	echo mysqli_error($db);
}
?>