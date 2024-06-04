<title>Halaman Anggota</title>
<div id="label-page"><h3>Tampil Data Anggota</h3></div> 
<div id="content">
    <link rel="stylesheet" href="style.css">
    <p id="tombol-tambah-container"><a href="anggota-input.php" class="tombol">Tambah Anggota</a>
        <a target="_blank" href="cetak.php"><img src="printer.png" height="50px" width="50px"></a> 
        <FORM CLASS="form-inline" METHOD="POST">
            <div align="right"><form method=post><input type="text" name="pencarian"> 
                <input type="submit" name="search" value="search" class="tomboi"></form>
                <a href="dashboard.php" class="tombol">Kembali</a>  
            </FORM> 
        </p>
        <table id="tabel-tampil">
            <tr>
                <th id="label-tampil-no">No</th>
                    <th>ID Anggota</th>
                    <th>Nama</th>
                    <th>Foto</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat </th>
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
                        $sql = ("SELECT * FROM tbanggota WHERE nama LIKE '%$pencarian%'
                            OR idanggota LIKE '%$pencarian%'
                            OR jeniskelamin LIKE '%$pencarian%'
                            OR alamat LIKE '%$pencarian%'");

                        $query = $sql;
                        $queryJml = $sql;

                    }
                    else {
                        $query = ("SELECT * FROM tbanggota LIMIT $posisi, $batas"); 
                        $queryJml = ("SELECT * FROM tbanggota");
                        $no = $posisi * 1;
                    }}
                    else {
                        $query = ("SELECT * FROM tbanggota LIMIT $posisi, $batas"); 
                        $queryJml = ("SELECT * FROM tbanggota");
                        $no = $posisi * 1;
                    }

//$sql="SELECT * FROM tbanggota ORDER BY idanggota DESC"; 
                    $q_tampil_anggota = mysqli_query($db, $query);
                    if (mysqli_num_rows ($q_tampil_anggota)>0)
                    {
                        while ($r_tampil_anggota=mysqli_fetch_array ($q_tampil_anggota)){ 
                            if (empty ($r_tampil_anggota ['foto']) or ($r_tampil_anggota[ 'foto']=='-'))
                                $foto = "human.jpg";
                            else
                                $foto = $r_tampil_anggota ['foto'];
                            ?>
                            <tr>
                                <td><?php echo $nomor; ?></td>
                                <td><?php echo $r_tampil_anggota ['idanggota']; ?></td> 
                                <td><?php echo $r_tampil_anggota ['nama']; ?></td>
                                <td><img src="images/<?php echo $foto; ?>" width=70px height=70px></td>
                                <td><?php echo $r_tampil_anggota ['jeniskelamin']; ?></td> 
                                <td><?php echo $r_tampil_anggota ['alamat']; ?></td>
                                <td>
                                    <div class="tombol-opsi-container">
                                        <a target="_blank" href="cetak_kartu.php?idanggota=<?php echo $r_tampil_anggota ['idanggota']; ?>" class="tombol">Cetak Kartu</a>
                                    </div>
                                    <div class="tombol-opsi-container">
                                        <a href="anggota-edit.php?p=anggota-edit&idanggota=<?php echo $r_tampil_anggota ['idanggota']; ?>" class="tombol">Edit</a>
                                    </div>
                                    <div class="tombol-opsi-container">
                                        <a href="anggota-hapus.php?idanggota=<?php echo $r_tampil_anggota ['idanggota']; ?>" 
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
                                            echo "<a href=\"?p=anggota&hal=$i\">$i</a>";
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