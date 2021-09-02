<?php 
include'../koneksi.php';
$id_anggota = $_POST['id_anggota'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];
$status="tidak meminjam";

if(isset($_POST['simpan'])){
    extract($_POST);
    $nama_file = $_FILES['foto']['name'];
    if(!empty($nama_file)){
    
        $lokasi_file = $_FILES['foto']['tmp_name'];
        $tipe_file = pathinfo($nama_file, PATHINFO_EXTENSION);
        $file_foto = $id_anggota.".".$tipe_file;
        $folder = "../images/$file_foto";
        move_uploaded_file($lokasi_file,"$folder");
    }
    else
        $file_foto="-";
    }
    $sql = 
    "INSERT INTO tbanggota VALUES('$id_anggota','$nama','$jenis_kelamin','$alamat','$status','$file_foto')";
    $query = mysqli_query($db, $sql);

    header("location:../index.php?p=anggota");
}
?>