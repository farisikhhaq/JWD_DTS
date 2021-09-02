<div id="label-page"><h3>Input Data Anggota</h3></div>
<div id="content">
    <form action="proses/anggota-input-proses.php" method="posts" enctype="multipart/form-data">
    <table id="tabel-input">
        <tr>
            <td class="label-formulir">FOTO</td>
            <td class="isian-formulir"><input type="file" name="foto" class="isian-formulir isian-formulir-border"></td>
        </tr>
        <tr>
            <td class="label-formulir">ID Anggota</td>
            <td class="isian-formulir"><input type="file" name="id_anggota" class="isian-formulir isian-formulir-border"></td>
        </tr>
        <tr>
            <td class="label-formulir">Nama</td>
            <td class="isian-formulir"><input type="file" name="nama" class="isian-formulir isian-formulir-border"></td>
        </tr>
        <tr>
            <td class="label-formulir">Jenis Kelamin</td>
            <td class="isian-formulir"><input type="file" name="jenis_kelamin" value="Pria"></td>
        </tr>
        <tr>
            <td class="label-formulir">Jenis Kelamin</td>
            <td class="isian-formulir"><input type="radio" name="jenis_kelamin" value="Wanita"></td>
        </tr>
        <tr>
            <td class="label-formulir">Alamat</td>
            <td class="isian-formulir"><textarea class="isian-formulir isian-formulir-border" cols="40" rows="2"></textarea></td>
        </tr>
        <tr>
            <td class="label-formulir"></td>
            <td class="isian-formulir"><input type="submit" name="simpan" value="simpan" class="tombol"></td>
        </tr>
    </table>
    </form>
</div>