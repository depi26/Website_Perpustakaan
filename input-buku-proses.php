<?php
include'koneksi.php';
$kode=$_POST['kode'];
$judul=$_POST['judul'];
$pengarang=$_POST['pengarang'];
$penerbit=$_POST['penerbit'];
$kota=$_POST["kota"];
$tahun=$_POST["tahun"];
$kategori=$_POST["kategori"];
$keterangan=$_POST["keterangan"];

	$sql =
	"INSERT INTO buku VALUE('$kode','$judul','$pengarang','$penerbit','$kota','$tahun','$kategori','$keterangan')";
	$query = mysqli_query($db, $sql);

	header("location:buku.php");
?>