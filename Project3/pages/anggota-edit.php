<?php 

    $id_anggota=$_GET['id'];
	$q_tampil_anggota=mysql_query("SELECT * FROM tbanggota WHERE idanggota='$id_anggota'");
	$r_tampil_anggota=mysql_fetch_array($q_tampil_anggota);
?>
<div id="label-page"><h3>Edit Data Anggota</h3></div>
<div id="content">
	<form action="proses/anggota-edit-proses.php" method="post" enctype="multipart/form-data">
	<table id="tabel-input">
        <tr>
            <td class="label-formulir">Foto</td>
            <td class="isian-formulir">
                <img src="images/<?php $foto; ?>" width=70px height=75px>
                <input type="file" name="foto" class="isian-formulir isian-formulir-border">
                <input type="hidden" name='foto_awal' value="<?php echo $r_tampil_anggota['foto']; ?>">
            </td>
        </tr>
        <tr>
            <td class="label-formulir">ID Anggota</td>
            <td class="isian-formulir"><input type="text" name="id_anggota" value="<?php echo $r_tampil_anggota['id_anggota']; ?>" readonly="readonly" 
            class="isian-formulir isian-formulir-border warna-formulir-disabled"></td>
        </tr>
        <tr>
            <td class="label-formulir">Nama</td>
            <td class="isian-formulir"><input type="text" name="nama" value="<?php echo $r_tampil_anggota['nama']; ?>" 
            class="isian-formulir isian-formulir-border"></td>
        </tr>
        <tr>
            <td class="label-formulir">Jenis Kelamin</td>

            <?php 
            if($r_tampil_anggota['jeniskelamin'] == "Pria")
            {
                echo="
                <tr>
                <td class='isian-formulir'><input type='radio' name='jenis_kelamin' value='Pria' checked><label>Pria
                </label>
                </td>
                </tr>
                <tr>
                <td class='label-formulir'>Jenis Kelamin</td>
                <td class='isian-formulir'><input type='radio' name='jenis_kelamin' value='Wanita'></td>
                 </tr>
                ";
            }
            elseif($r_tampil_anggota['jenis_kelamin']== "Wanita"){
                echo="
                <tr>
                <td class='isian-formulir'><input type='radio' name='jenis_kelamin' value='Pria' checked><label>Pria
                </label>
                </td>
                </tr>
                <tr>
                <td class='label-formulir'>Jenis Kelamin</td>
                <td class='isian-formulir'><input type='radio' name='jenis_kelamin' value='Wanita'></td>
                 </tr>
                ";
            }
            ?>
            <input type="text" name="jenis_kelamin" value="<?php echo $r_tampil_anggota['jenis_kelamin']; ?>" 
            class="isian-formulir isian-formulir-border"></td>
            </tr>
            <tr>
                <td class="label-formulir">Alamat</td>
                <td class="isian-formulir">
                    <textarea name="alamat" cols="40" rows="2" class="isian-formulir isian-formulir-border"><?php echo $r_tampil_anggota['alamat']; ?></textarea>
                </td>
            </tr>
            <tr>
                <td class="label-formulir"></td>
                <td class="isian-formulir"><input type="submit" name="simpan" id="tombol-simpan"></td>
            </tr>
	</table>
	</form>
</div>
?>