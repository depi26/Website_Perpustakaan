<?php
include'koneksi.php';
$idtransaksi=$_POST['idtransaksi'];
$idanggota=$_POST['idanggota'];
$nama=$_POST['nama'];
$idbuku=$_POST['idbuku'];
$judulbuku=$_POST['judulbuku'];
$tanggalpeminjam=date("Y-m-d", strtotime($_POST['tanggalpeminjam']));

    $sql =
    "INSERT INTO tbtransaksi VALUE('$idtransaksi','$idanggota','$nama','$idbuku','$judulbuku','$tanggalpeminjaman')";
    $query = mysqli_query($db, $sql);

    header("location:transaksi.php");

?>