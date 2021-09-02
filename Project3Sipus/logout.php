<?php

session_start();
unset($_SESSION['id_admin']);
unset($_SESSION['sesi']);
session_destroy();

header("location: login.php");

?>