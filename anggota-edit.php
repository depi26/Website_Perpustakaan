<?php
include "koneksi.php";
	$r_tampil_anggota=$_GET['idanggota'];
	$q_tampil_anggota=mysqli_query($db,"SELECT * FROM tbanggota WHERE idanggota='$r_tampil_anggota'");
	$r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota);
	if(empty($r_tampil_anggota['foto'])or($r_tampil_anggota['foto']=='_'))
				$foto = "human.jpg";
			else
				$foto = $r_tampil_anggota['foto'];
?>

<title>Halaman Edit Anggota</title>
<div id="label-page"><h3>Edit Data Anggota</h3></div>
<div id="content">
<link rel="stylesheet" href="style.css">
	 <form action="anggota-edit-proses.php" method="post" enctype="multipart/form-data">
	 	<tr>
	 		<td class="label-formulir">FOTO</td>
	 		<td class="isian-formulir">
	 		<img src="images/<?php echo $foto; ?>" widht=70px height=75px>
	 		<input type="file" name="foto" class="isian-formulir isian-formulir-border">
	 		<input type="hidden" name="foto_awal" value="<?php echo $r_tampil_anggota['foto']; ?>">
	 		</td>
	 	</tr>
	 	<tr>
	 		<td class="label-formmulir">ID Anggota</td>
	 		<td class="isian-formulir"><input type="text" name="id_anggota" value="<?php echo $r_tampil_anggota['idanggota']; ?>" readonly="readonly" class="isian-formulir isian-formulor-border warna-formulir-disabled"></td>
	 	</tr>
	 	<tr>
	 		<td class="label-formulir">Nama</td>
	 		<td class="isian-formulir"><input type="text" name="nama" value="<?php echo $r_tampil_anggota['nama']; ?>" class="isian-formulir isian-formulor-border"></td>
	 	</tr>
	 	<tr>
	 		<td class="label-formulir">Jenis Kelamim</td>
	 		<?php
	 		if($r_tampil_anggota['jeniskelamin']=="Pria")
	 		{
	 			echo "<td class='isian-formulir'><input type='radio' name='jenis_kelamin' value='Pria' checked>Pria</label></td>
	 			</tr>
	 	<tr>
	 		<td class='label-formulir'></td>
	 		<td class='isian-formulir'><input type='radio' name='jenis_kelamin' value='Wanita'>Wanita</td>";
	 		}
	 		elseif($r_tampil_anggota['jeniskelamin']=="Wanita")
	 		{
	 			echo "<td class='isian-formulir'><input type='radio' name='jenis_kelamin' value='Pria' checked>Pria</label></td>
	 			</tr>
	 	<tr>
	 		<td class='label-formulir'></td>
	 		<td class='isian-formulir'><input type='radio' name='jenis_kelamin' value='Wanita' checked>Wanita</td>";		
	 		}
	 		?>
	 		<input type="text" name="jenis_kelamin" value="<?php echo $r_tampil_anggota['jeniskelamin']; ?>"
	 		class="isian-formulir isian-formulor-border"></td>
	 	</tr>
	 	<tr>
	 		<td class="label-formulir">Alamat</td>
	 		<td class="isian-formulir">
<textarea rows="2" cols="40" name="alamat" class="isian-formulir isian-formulor-border"><?php echo $r_tampil_anggota['alamat']; ?></textarea>
			</td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" id="tombol-simpan"></td>
		</tr>
	</table>
	</form>
</div>