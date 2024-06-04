<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="../Style3.css" >
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Data Anggota Perpustakaan</title>
</head>
<body>

	
<h2  class="h2">Edit Data Anggota Perpustakaan</h2>
<button class="button2"  href="tampil.php">Kembali</a><br>
<form action="proses_edit.php" method="post">
<?php
require '../Koneksi.php';
$idanggota=$_GET['idanggota'];
$data = mysqli_query($kon,"select * from tbanggota where idanggota ='$idanggota'");
while($d = mysqli_fetch_assoc($data)){
?>

<div class="container">
<table id="body" >
</tr>
<tr>
<td><label for="idanggota"> ID Anggota </label></td>
<td>
<input type="text" name="idanggota" id="idanggota" value="<?php echo $d["idanggota"]; ?>" readonly>
</td>
</tr>
<tr>
<td><label for="nama"> Nama </label></td>
<td>
<input type="text" name="nama" id="nama" value="<?php echo $d["nama"]; ?>" required>
</td>
</tr>
<tr>
<td ><label for="jk"> Jenis Kelamin </label></td>
<td>
<input type="text" name="jk" id="jk" value="<?php echo $d["jk"]; ?>"
required>
</td>
</tr>
<tr> 
<td class="id">Alamat</td>  
<td class="id">
<textarea rows="2" cols="40" name="alamat" class="isian-formulir isian-formulir-border"></textarea></td> 
</tr>
<tr>
<td><label for="foto"> Foto </label></td>
<td><img  src="../images/<?php echo $d['foto']?>" width="70"></td><br>
<td><input type="file" name="foto" id="foto" value="<?php  echo $d['foto']; ?>">
</td>
</tr>
<tr>
<td></td>
<td class="button" ><button class="button"  type="submit" name="submit">Edit Data </button>

</td>
</tr>
</table>
</form>
<?php  
}
?>
</body>
</html>