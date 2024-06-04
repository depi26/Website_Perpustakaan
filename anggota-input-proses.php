<?php
include'koneksi.php';
$id_anggota=$_POST['id_anggota'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];
$status="Tidak Meminjam";

if(isset($_POST['simpan'])){
	extract($_POST);
	$nama_file = $_FILES['foto']['name'];

	if(!empty($nama_file)){

		$ekstensi_diperbolehkan	= array('png','jpg','jpeg');
		$foto = $_FILES['foto']['name'];
		$x = explode('.', $foto);
		$ekstensi = strtolower(end($x));
		$file_tmp = $_FILES['foto']['tmp_name'];

		if (!empty($foto)){
			if (in_array($ekstensi, $ekstensi_diperbolehkan) === true){

                //Mengupload foto
				move_uploaded_file($file_tmp, 'images/'.$foto);
			}
		}
	}
	else
		$foto="-";

	$sql =
	"INSERT INTO tbanggota VALUE('$id_anggota','$nama','$jenis_kelamin','$alamat','$status','$foto')";
	$query = mysqli_query($db, $sql);

	header("location:anggota.php");
}
?>