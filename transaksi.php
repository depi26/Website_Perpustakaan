<title>Halaman Transaksi Peminjam</title>
<div id="label-page"><h3>Transaksi Peminjaman</h3></div> 
<div id="content">

    <link rel="stylesheet" href="style.css">
    <p id="tombol-tambah-container"><a href="transaksi-input.php" class="tombol">Transaksi Baru</a> 
        <a href="index.php" class="tombol">Kembali</a>
        <FORM CLASS="form-inline" METHOD="POST">
            <div align="right"><form method=post><input type="text" name="pencarian"> 
                <input type="submit" name="Search" value="Search" class="tombol"></form>
            </FORM> 
        </p>
        <table id="tabel-tampil">
            <tr>
                <th id="label-tampil-no">No</td>
                    <th>ID Transaksi</th>
                    <th>ID Anggota</th>
                    <th>Nama</th>
                    <th>ID Buku</th>
                    <th>Judul Buku</th>
                    <th>Tanggal Peminjaman</th>
                    <th id="label-opsi"> Opsi</th>
                </tr>



                <?php
                include'koneksi.php';
                $batas = 5;
                extract ($_GET);
                 if (empty ($hal)) {
                    $posisi = 0;
                    $hal = 1;
                    $nomor = 1;
                }
                else {
                    $posisi = ($hal = 1) * $batas;
                    $nomor = $posisi+1;
                }
                if ($_SERVER ['REQUEST_METHOD'] =="POST"){ 
                    $pencarian = (mysqli_real_escape_string($db, $_POST['pencarian']));
                    if ($pencarian != " "){
                        $sql = ("SELECT * FROM tbtransaksi WHERE nama LIKE '%$pencarian%'
                            OR idtransaksi LIKE '%$pencarian%'
                            OR idanggota LIKE '%$pencarian%'
                            OR nama LIKE '%$pencarian%'
                            OR idbuku LIKE '%$pencarian%'
                            OR judulbuku LIKE '%$pencarian%'
                            OR tanggalpeminjaman LIKE '%$pencarian%'");

                        $query = $sql;
                        $queryJml = $sql;

                    }
                    else {
                        $query = ("SELECT * FROM tbtransaksi LIMIT $posisi, $batas"); 
                        $queryJml = ("SELECT * FROM tbtransaksi");
                        $no = $posisi * 1;
                    }}
                    else {
                        $query = ("SELECT * FROM tbtransaksi LIMIT $posisi, $batas"); 
                        $queryJml = ("SELECT * FROM tbtransaksi");
                        $no = $posisi * 1;
                    }

//$sql="SELECT * FROM tbtransaksi ORDER BY idtransaksi DESC"; 
                    $q_tampil_transaksi = mysqli_query($db, $query);
                    if (mysqli_num_rows ($q_tampil_transaksi)>0)
                    {
                        while ($r_tampil_transaksi=mysqli_fetch_array ($q_tampil_transaksi)){ 
                            if (empty ($r_tampil_transaksi) or ($r_tampil_transaksi))
                            ?>
                            <tr>
                                <td><?php echo $nomor; ?></td>
                                <td><?php echo $r_tampil_transaksi["idtransaksi"]?></td>
                                <td><?php echo $r_tampil_transaksi["idanggota"]?></td>
                                <td><?php echo $r_tampil_transaksi["nama"]?></td>
                                <td><?php echo $r_tampil_transaksi["idbuku"]?></td>
                                <td><?php echo $r_tampil_transaksi["judulbuku"]?></td>
                                <td><?php echo $r_tampil_transaksi["tanggalpeminjaman"]?></td>
                                <td>
                                    <div class="tombol-opsi-container">
                                        <a target="_blank" href="cetak-nota.php?idtransaksi=<?php echo $r_tampil_transaksi ['idtransaksi']; ?>" class="tombol">Cetak Nota</a>
                                    </div>
                                    <div class="tombol-opsi-container">
                                        <a href="transaksi-edit.php?p=transaksi-edit&idtransaksi=<?php echo $r_tampil_transaksi ['idtransaksi']; ?>" class="tombol">Edit</a>
                                    </div>
                                    <div class="tombol-opsi-container">
                                        <a href="transaksi-hapus.php?idtransaksi=<?php echo $r_tampil_transaksi ['idtransaksi']; ?>" 
                                            onclick= "return_confirmation ('Apakah anda Yakin akan Menghapus Data Ini?')" class="tombol">Hapus</a></div>
                                        </td>
                                    </tr>
                                    <?php $nomor++; }
                                }
                                else {
                                    echo "<tr><td colspan=6>Data Tidak Ditemukan</td></tr>";
                                }?>
                            </table>
                            <?php
                            if (isset ($_POST['pencarian'])) {
                                if ($_POST['pencarian'] !=''){
                                    echo "<div style=\"float:left;\">"; 
                                    $jml = mysqli_num_rows (mysqli_query ($db, $queryJml)); 
                                    echo "Data Hasil Pencarian: <b>$jml</b>";
                                    echo "</div>";
                                }
                            }
                            else { ?>
                                <div style="float: left;">
                                    <?php
                                    $jml = mysqli_num_rows (mysqli_query($db, $queryJml)); 
                                    echo "Jumlah Data : <b>$jml</b>";
                                    ?>
                                </div>
                                <div class="pagination">
                                    <?php
                                    $jml_hal = ceil($jml/$batas);
                                    for ($i=1; $i<=$jml_hal; $i++){
                                        if ($i != $hal) {
                                            echo "<a href=\"?p=transaksi&hal=$i\">$i</a>";
                                        }
                                        else {
                                            echo "<a class=\"active\">$i</a>";
                                        }
                                    }
                                    ?>
                                </div>
                                <?php
                            }
                            ?>
                        </div>