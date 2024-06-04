    <?php
    require 'koneksi.php';
    $result = mysqli_query($db, "SELECT * FROM  buku");
    ?>
<html>
<head>
    <title>Halaman Buku</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="label-page"><h3>Tampil Data Buku</h3></div> 
    <br><p id="tombol-tambah-container"><a href="input-buku.php" class="tombol">Tambah Buku</a> 
    <a href="dashboard.php" class="tombol">Kembali</a></br>
        <FORM METHOD="get">
                <div align="right"><input type="text" name="pencarian">
                <input type="submit" name="cari" value="search" class="cari">
        </FORM>
        <br>
        <br>
        <table id="tabel-tampil">
            <tr>
                <th id="label-tampil-no">No</th>
                    <th>Kode</th>
                    <th>Judul Buku</th>
                    <th>Nama Pengarang</th>
                    <th>Penerbit</th>
                    <th>Kota Terbit</th>
                    <th>Tahun Terbit</th>
                    <th>Kategori</th>
                    <th>Keterangan</th>
                    <th id="label-opsi"> Opsi</th>
                </tr>

        <?php
        if(isset($_GET['cari'])) {
        $cari = $_GET['pencarian'];
        $result = mysqli_query($db, "SELECT * FROM buku WHERE
        kode LIKE '%$cari%' OR
        pengarang LIKE '%$cari%' OR
        penerbit LIKE '%$cari%' OR
        kota LIKE '%$cari%' OR
        tahun LIKE '%$cari%' OR
        kategori LIKE '%$cari%' OR
        keterangan LIKE '%$cari%' ");
        }
        $i=1;
        while ($row = mysqli_fetch_assoc($result)) :
        ?>  
        <tr>
            <td><?php echo $i++ ; ?></td>
            <td><?php echo $row["kode"]?></td>
            <td><?php echo $row["judul"]?></td>
            <td><?php echo $row["pengarang"]?></td>
            <td><?php echo $row["penerbit"]?></td>
            <td><?php echo $row["kota"]?></td>
            <td><?php echo $row["tahun"]?></td>
            <td><?php echo $row["kategori"]?></td>
            <td><?php echo $row["keterangan"]?></td>
            <td>
            <div class="tombol-opsi-container">
                <a href="buku-edit.php?kode=<?php echo $row["kode"];?> "class="tombol" >Edit</button></a>
            </div>
            <div class="tombol-opsi-container">
                <a href="buku-hapus.php?kode=<?php echo $row["kode"];?> " onclick="return confirm('Yakin ingin menghapus data ini?')"class="tombol">Hapus</button></a>
            </div>
            </td>
        </tr>
        <?php
        endwhile
        ?>
    </table>
</body>
</html>