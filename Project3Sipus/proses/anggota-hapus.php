<?php
include '../koneksi.php';

$id_anggota = $_GET['id'];
$q_tampil_anggota = mysqli_query($db, "SELECT * FROM tbanggota WHERE idanggota = '$id_anggota'");
$r_tampil_anggota = mysqli_fetch_array($q_tampil_anggota);

// Hapus file foto jika ada
if (! empty($r_tampil_anggota['foto']) && ($r_tampil_anggota['foto']) != '-') {
    $file = "../images/".$r_tampil_anggota['foto'];
    if (file_exists($file)) unlink($file);
}

// Hapus data anggota dari database
mysqli_query($db, "DELETE FROM tbanggota WHERE idanggota = '$id_anggota'");
header("location:../index.php?p=anggota");

?>