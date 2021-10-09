<?php
    // Variabel
    $host = 'localhost';
    $uname = 'root';
    $pw = '';
    $db = 'psbonline';

    // Koneksi database
    $koneksi = mysqli_connect($host, $uname, $pw, $db);

    if (mysqli_error($koneksi)) {
        die('Error connecting to database! Error: ' . mysqli_error($koneksi));
    }
?>