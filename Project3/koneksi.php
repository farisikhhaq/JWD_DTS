<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "dbpus";

$db = mysqli_connect($server, $user, $password, $database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>

<//?php
mysql_connect("localhost","root",“1234")or die(mysql_error());
mysql_select_db("dbpus")or die(mysql_error());
?>
