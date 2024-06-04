<?php
include'../koneksi.php';
$idtransaksi=$_POST['idtransaksi']
$idanggota=$_POST['idanggota'];
$kode=$_POST['kode'];
$judul=$_POST['judul'];
$peminjam=$_POST['peminjam'];
$tanggal=date("Y-m-d", strtotime($_POST['tanggal']));
$batas=date("Y-m-d", strtotime($_POST['batas']));

	$sql ="update pinjam set idanggota='$idanggota',kode='$kode', judul='$judul',peminjam='$peminjam',tanggal='$tanggal', batas='$batas' where kode=$kode";
	$query = mysqli_query($kon, $sql);

	header("location:tampil-pinjam.php");
?>