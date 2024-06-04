<?php
//koneksi database
include 'koneksi.php';
if(isset($_POST["simpan"])) {
	$id_anggota = htmlspecialchars($_POST["id_anggota"]);
	$nama = htmlspecialchars($_POST["nama"]);
	$jenis_kelamin = htmlspecialchars($_POST["jenis_kelamin"]);
	$alamat = htmlspecialchars($_POST["alamat"]);

	if( $_FILES['foto']['name'] == ''){
		//mengubah data dari database
		$query="UPDATE tbanggota SET idanggota='$id_anggota', nama='$nama', jeniskelamin='$jenis_kelamin', alamat='$alamat' WHERE idanggota='$id_anggota'";
	} else{
		$ekstensi_diperbolehkan	= array('png','jpg');
		$foto = $_FILES['foto']['name'];
		$x = explode('.', $foto);
		$ekstensi = strtolower(end($x));
		$file_tmp = $_FILES['foto']['tmp_name'];

		if (in_array($ekstensi, $ekstensi_diperbolehkan) === true){

			$q_tampil_anggota=mysqli_query($db,"SELECT * FROM tbanggota WHERE idanggota=" . $id_anggota);
			$r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota);

			unlink('images/' . $r_tampil_anggota['foto']);

                //Mengupload img
			move_uploaded_file($file_tmp, 'images/'.$foto);
		}

		//mengubah data dari database
		$query="UPDATE tbanggota SET idanggota='$id_anggota', nama='$nama', jeniskelamin='$jenis_kelamin', alamat='$alamat', foto='$foto' WHERE idanggota='$id_anggota'";
	}

	$q_tampil_anggota=mysqli_query($db, $query);
//cek apakah data berhasil diubah atau tidak
	if($q_tampil_anggota) {
		echo "<script language='javascript'>
		alert ('Data Anggota Perpustakaan Berhasil Diedit');
		document.location='anggota.php';
		</script>";
	}
	else 
	{
		echo "<script language='javascript'>
		alert ('Data Anggota Gagal Diedit');
		</script>";
		echo mysqli_error($db);
	} 
}
?>