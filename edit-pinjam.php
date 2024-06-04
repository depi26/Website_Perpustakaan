<html>
<head>
     <title>Form Edit Peminjaman</title>
     <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <div class="konten">
        <div class="kepala">
         <div class="lock"></div>
             <h2 class="judul">Data Pengembalian Buku</h2>
         </div>
        <div class="artikel">
        <form class="horizontal" action="proses_kembali.php" method="post" enctype="multipart/form-data">
            <?php
                require '../Koneksi.php';
                $kode=$_GET['kode'];
                $data = mysqli_query($kon,"select * from pinjam where kode ='$kode'");
                while($d = mysqli_fetch_assoc($data)){
            ?>
            <fieldset><legend>Data Admin</legend>
                <div class="grup">
                <label for="kode">ID Anggota</label>
                <input type="text" name="idanggota" value="<?php echo $d["idanggota"]; ?>" readonly>
                </div>
                <div class="grup">
                <label for="kode">Kode Buku</label>
                <input type="text" name="kode" value="<?php echo $d["kode"]; ?>" readonly >
                </div>
            </fieldset>
            <fieldset><legend>Data Peminjaman</legend>
            <div class="grup">
                <label for="judul">Judul Buku</label>
                <input type="text" name="judul" value="<?php echo $d["judul"]; ?>" readonly><br>
            </div>
            <div class="grup">
                <label for="peminjam">Nama Peminjam</label>
                <input type="text" name="peminjam" value="<?php echo $d["peminjam"]; ?>" readonly><br>
            </div>
            <div class="grup">
                <label for="tanggal">Tanggal Dipinjam</label>
                <input type="date" name="tanggal" value="<?php echo $d["tanggal"]; ?>" readonly><br>
            </div>
            <div class="grup">
                <label for="batas">Tanggal Batas Peminjam</label>
                <input type="date" name="batas" value="<?php echo $d["batas"]; ?>" readonly><br>
            </div>
            <div class="grup">
                <label for="kembali">Tanggal Kembali Peminjam</label>
                <input type="date" name="kembali" value="<?php echo $d["kembali"]; ?>"><br>
            </div>
            <div class="grup">
                <label for="denda">Total Denda</label>
                <input type="text" name="denda" value="<?php echo $d["denda"]; ?>"><br>
            </div>
            <div class="grup-offset">
                 <button type="submit" name="simpan" value="simpan">Submit</button>
                 <button type="reset" value="Reset">Reset</button>
                 <button><a style="text-decoration:none" href="tampil-kembali.php">Kembali</a></button>
            </div>
            </fieldset>
            <div class="footer">
            </div>
        </form>
        <?php  
        }
        ?>
        </div>
     </div>
</body>
</html>