<?php
$server = "10.0.0.206";
$user = "farisikhhaq";
$password = "Fari5261200@";
$nama_database = "dbpus";
$db = mysqli_connect($server, $user, $password, $nama_database);
if(!$db) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
?>

<//?php
mysql_connect("localhost","root",“1234")or die(mysql_error());
mysql_select_db("dbpus")or die(mysql_error());
?>